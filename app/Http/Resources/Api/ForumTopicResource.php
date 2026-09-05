<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ForumTopicResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'excerpt' => \Illuminate\Support\Str::limit(strip_tags((string) $this->content), 160),
            'views' => (int) $this->views,
            'replies_count' => (int) $this->replies_count,
            'is_pinned' => (bool) $this->is_pinned,
            'is_locked' => (bool) $this->is_locked,
            'category_id' => $this->category_id,
            'last_reply_at' => $this->last_reply_at?->toIso8601String(),
            'author' => $this->whenLoaded('member', fn () => (new PublicMemberResource($this->member))->resolve($request)),
            'created_at' => $this->created_at?->toIso8601String(),
        ];
    }
}
