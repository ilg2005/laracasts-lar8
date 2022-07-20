<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'slug' => $this->faker->slug(3),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'excerpt' => $this->faker->sentence(10),
            'body' => $this->faker->paragraphs(),
            'published_at' => $this->faker->dateTime
        ];
    }
}
