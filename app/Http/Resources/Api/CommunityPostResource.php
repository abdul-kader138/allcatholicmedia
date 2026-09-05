<?php

namespace App\Http\Resources\Api;

use App\Support\Api\Media;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommunityPostResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $viewer = $request->user();

        return [
            'id' => $this->id,
            'type' => $this->type,
            'content' => $this->content,
            'media_url' => Media::url($this->media_url),
            'link' => $this->link_url ? [
                'url' => $this->link_url,
                'title' => $this->link_title,
                'image' => Media::url($this->link_image),
            ] : null,
            'likes_count' => (int) $this->likes_count,
            'comments_count' => (int) $this->comments_count,
            'liked_by_me' => $viewer ? $this->isLikedBy($viewer) : false,
            'author' => $this->whenLoaded('member', fn () => (new PublicMemberResource($this->member))->resolve($request)),
            'created_at' => $this->created_at?->toIso8601String(),
        ];
    }
}
