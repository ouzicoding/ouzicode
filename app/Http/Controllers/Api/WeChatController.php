<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeChatController extends Controller
{
    /**
     * 企业微信机器人Webhook地址
     * @var string
     */
    protected string $webhookUrl;

    public function __construct()
    {
        $this->webhookUrl = env('WECHAT_BOOT_WEBHOOKURL');
    }


    /**
     * 发送文本消息
     * @param string $content 消息内容
     * @param array|null $mentionedList 需要@的成员列表
     * @param array|null $mentionedMobileList 需要@的成员手机号列表
     * @return Response
     */
    public function sendText(string $content): Response
    {
        return $this->sendRequest([
            'msgtype' => 'text',
            'text' => [
                'content' => $content,
            ]
        ]);
    }

    /**
     * 发送Markdown消息
     * @param string $content Markdown格式内容
     * @return Response
     */
    public function sendMarkdown(string $content): Response
    {
        return $this->sendRequest([
            'msgtype' => 'markdown',
            'markdown' => ['content' => $content]
        ]);
    }

    protected function sendRequest(array $data): Response
    {
        return Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->timeout(10) // 设置10秒超时
        ->retry(3, 100) // 失败重试3次，间隔100毫秒
        ->post($this->webhookUrl, $data);
    }

    /**
     * 测试发送消息
     * @param Request $request
     * @return Response
     */
    public function send(Request $request): Response
    {
        $content = $request->post('content');
        return $this->sendText($content);
    }

}
