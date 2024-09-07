<?php

namespace Database\Factories;

use App\Models\Administrator;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
//        php artisan make:factory ArticleFactory
        return [
            'title' => fake()->title(),
            'cover' => fake()->imageUrl(100,100),
            'category_id' => fake()->numberBetween(1,10),
            'browse' => fake()->numberBetween(100,10000),
            'status' => fake()->numberBetween(1,3),
            'administrator_id' => Administrator::factory(),
            'keywords' => fake()->words(3,true),
            'description' => fake()->text(),
            'markdown' => fake()->paragraph(),
            'html' => fake()->randomHtml(),
        ];
    }
}
