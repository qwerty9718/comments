<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::find(rand(1,10));
        return [
            'title' => $user['name'],
            'body' => fake()->sentence(8),
            'topic_id' => rand(1,4),
            'user_id' => $user['id']
        ];
    }
}
