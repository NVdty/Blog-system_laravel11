<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
   
    public function definition(): array
    {
        return [
          'title' => fake()->sentence(),
          'author_id' => User::factory(),
          'category_id' => Category::factory(),
          'slug' => Str::slug(fake()->sentence()),
          'body' => fake()-> text()
        ];
    }
}
