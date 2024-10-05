<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
/**
 * 迁移 不能指定文件 只执行未运行的迁移文件
 * 所以每次修改要重新建立文件
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('标题');
            $table->string('cover')->comment('封面图');
            $table->unsignedInteger('category_id')->comment('分类ID');
            $table->string('browse')->comment('浏览量');
            $table->unsignedTinyInteger('status')->comment('状态:1未发布2已发布3已下架');
            $table->softDeletes();
            $table->unsignedInteger('administrator_id')->comment('管理员ID');
            $table->string('keywords')->comment('关键词');
            $table->string('description')->comment('描述');
            $table->mediumText('markdown')->comment('文章内容markdown');
            $table->mediumText('html')->comment('文章内容html');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
