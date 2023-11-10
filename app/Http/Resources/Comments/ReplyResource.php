<?php

namespace App\Http\Resources\Comments;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReplyResource extends JsonResource
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
            'comment_id' => $this->comment_id,
            'user_id' => $this->user_id,
            'user_name' => $this->user_name,
            'to_user_id' => $this->to_user_id,
            'to_user_name' => $this->to_user_name,
            'time_create' => $this->created_at->diffForHumans(),
            'time_update' => $this->updated_at->diffForHumans(),
        ];
    }
}
