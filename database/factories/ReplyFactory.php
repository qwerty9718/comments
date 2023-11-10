<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reply>
 */
class ReplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::find(rand(1,10));
//        $comment = Comment::find(rand(16,30));
        $comment = Comment::find(28);
        return [
            'title' => 'This comment from '. $user['name'],
            'body' => fake()->sentence(8),
            'comment_id' => $comment['id'],
            'user_id' => $user['id'],
            'user_name' => $user['name']
        ];
    }
}
