<?php

namespace App\Http\Resources\Api;

use App\Support\Api\Media;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PageResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->name,
            'slug' => $this->slugable?->key,
            'description' => $this->description,
            'content' => $this->content,
            'image' => Media::url($this->image),
            'updated_at' => $this->updated_at?->toIso8601String(),
        ];
    }
}
