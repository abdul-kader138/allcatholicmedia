<?php

namespace App\Http\Resources\Api;

use App\Support\Api\Media;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LiveStreamResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'embed_url' => $this->embed_url,
            'source_name' => $this->source_name,
            'location' => $this->location,
            'thumbnail' => Media::url($this->thumbnail),
            'scheduled_at' => $this->scheduled_at?->toIso8601String(),
            'is_live' => (bool) $this->is_live,
            'updated_at' => $this->updated_at?->toIso8601String(),
        ];
    }
}
