<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ForumReplyResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'content' => $this->content,
            'topic_id' => $this->topic_id,
            'author' => $this->whenLoaded('member', fn () => (new PublicMemberResource($this->member))->resolve($request)),
            'created_at' => $this->created_at?->toIso8601String(),
        ];
    }
}
