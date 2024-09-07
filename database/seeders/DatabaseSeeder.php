<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        php artisan db:seed 该命令只调用当前run方法 并不会执行所有seeder
//        使用 call 方法来执行其他的seeder
        $this->call([
            AdministratorSeeder::class,
            ArticleSeeder::class,
        ]);
    }
}
