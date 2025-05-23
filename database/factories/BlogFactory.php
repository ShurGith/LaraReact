<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\Categoryblog;
use App\Models\User;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'slug' => fake()->slug(),
            'content' => fake()->paragraphs(3, true),
            'images' => fake()->text(),
            'active' => fake()->boolean(),
            'date_published' => fake()->dateTime(),
            'user_id' => User::factory(),
            'categoryblog_id' => Categoryblog::factory(),
        ];
    }
}
