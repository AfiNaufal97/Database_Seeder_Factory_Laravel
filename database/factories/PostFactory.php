<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3, 5)),
            'slug'  => $this->faker->userName(),
            'excerpt'=> $this->faker->sentence(mt_rand(10, 20)),
            'body' => $this->faker->paragraph(3),
            'category_id'=> mt_rand(1, 2),
            'user_id' => mt_rand(1, 3)
        ];
    }
}
