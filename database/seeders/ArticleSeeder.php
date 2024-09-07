<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        生成seeder命令  php artisan make:seeder ArticleSeeder
        // php artisan db:seed 并不会执行所有seeder 只会执行DatabaseSeeder
        // 填充指定文件 php artisan db:seed --class=ArticleSeeder
        Article::factory(10)->create();

    }
}
