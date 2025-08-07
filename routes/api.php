<?php

use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\IndexController;
use App\Http\Controllers\Api\WeChatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| 被 App\Providers\RouteServiceProvider 加载
| api中间件  api前缀
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/',[IndexController::class,'index']);
Route::get('/article',[ArticleController::class,'index']);
Route::get('/article/{id}',[ArticleController::class,'detail']);
Route::post('/send-wechat',[WeChatController::class,'send']);
