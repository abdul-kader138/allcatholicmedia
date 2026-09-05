<?php

namespace App\Http\Resources\Api;

use App\Support\Api\Media;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChannelResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'thumbnail' => Media::url($this->thumbnail),
            'banner' => Media::url($this->banner),
            'description' => $this->description,
            'videos_count' => $this->when($this->videos_count !== null, (int) $this->videos_count),
            'updated_at' => $this->updated_at?->toIso8601String(),
            'latest_video' => $this->whenLoaded(
                'latestVideo',
                fn () => $this->latestVideo
                    ? (new VideoResource($this->latestVideo))->resolve($request)
                    : null
            ),
        ];
    }
}
