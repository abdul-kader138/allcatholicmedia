<?php

namespace App\Http\Resources\Api;

use App\Support\Api\Media;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommunityGroupResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $viewer = $request->user();

        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'cover_image' => Media::url($this->cover_image, 'medium'),
            'privacy' => $this->privacy,
            'members_count' => (int) $this->members_count,
            'is_member' => $viewer ? $this->isMember($viewer) : false,
            'created_at' => $this->created_at?->toIso8601String(),
        ];
    }
}
