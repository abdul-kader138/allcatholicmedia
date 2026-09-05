<?php

namespace App\Http\Resources\Api;

use App\Support\Api\Media;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VideoResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'youtube_video_id' => $this->youtube_video_id,
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'thumbnail' => Media::url($this->thumbnail),
            'video_url' => $this->video_url,
            'embed_url' => $this->embed_url,
            'duration' => $this->duration,
            'view_count' => $this->view_count,
            'is_live' => (bool) $this->is_live,
            'published_at' => $this->published_at?->toIso8601String(),
            'updated_at' => $this->updated_at?->toIso8601String(),
        ];
    }
}
