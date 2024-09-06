<?php

namespace Database\Seeders;

use App\Models\Administrator;
use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        php artisan db:seed 并不会执行所有seeder 只会执行DatabaseSeeder
//        填充指定文件 php artisan db:seed --class=AdministratorSeeder
        Administrator::factory(2)->create();
    }
}
