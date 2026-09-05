<?php

namespace App\Http\Resources\Api;

use App\Support\Api\Media;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PodcastShowResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'thumbnail' => Media::url($this->thumbnail),
            'banner' => Media::url($this->banner),
            'description' => $this->description,
            'category' => $this->category,
            'episodes_count' => $this->when($this->episodes_count !== null, (int) $this->episodes_count),
            'updated_at' => $this->updated_at?->toIso8601String(),
        ];
    }
}
