<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Tag;

class TagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tag::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'slug' => fake()->slug(),
            'bgcolor' => fake()->text(),
            'color' => fake()->word(),
            'image' => fake()->text(),
            'icon' => fake()->text(),
            'icon_active' => fake()->boolean(),
            'category_id' => Category::factory(),
        ];
    }
}
