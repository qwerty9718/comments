<?php

namespace App\Http\Resources\Comments;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'topic_id' => $this->topic_id,
            'user_id' => $this->user_id,
            'time_create' => $this->created_at->diffForHumans(),
            'time_update' => $this->updated_at->diffForHumans(),
            'replies_count' => $this->replies()->count()
        ];
    }
}
