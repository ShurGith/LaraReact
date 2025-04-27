<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CategoryBlog;
use App\Models\Tagblog;

class TagblogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tagblog::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'ico_active' => fake()->boolean(),
            'image' => fake()->word(),
            'icon' => fake()->word(),
            'color' => fake()->word(),
            'bg_color' => fake()->word(),
            'category_blog_id' => CategoryBlog::factory(),
        ];
    }
}
