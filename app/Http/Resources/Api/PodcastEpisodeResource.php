<?php

namespace App\Http\Resources\Api;

use App\Support\Api\Media;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PodcastEpisodeResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'thumbnail' => Media::url($this->thumbnail),
            'audio_url' => $this->audio_url,
            'embed_url' => $this->embed_url,
            'duration' => $this->duration,
            'episode_number' => $this->episode_number,
            'is_featured' => (bool) $this->is_featured,
            'published_at' => $this->published_at?->toIso8601String(),
            'updated_at' => $this->updated_at?->toIso8601String(),
        ];
    }
}
