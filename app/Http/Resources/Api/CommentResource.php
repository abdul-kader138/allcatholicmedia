<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'author_name' => $this->name,
            'author_avatar' => $this->avatar_url ?: null,
            'is_member' => $this->author_type !== null,
            'content' => $this->content,
            'reply_to' => $this->reply_to,
            'created_at' => $this->created_at?->toIso8601String(),
            'replies' => $this->whenLoaded(
                'replies',
                fn () => CommentResource::collection($this->replies)->resolve($request)
            ),
        ];
    }
}
