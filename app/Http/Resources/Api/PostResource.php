<?php

namespace App\Http\Resources\Api;

use App\Support\Api\Media;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->name,
            'slug' => $this->slugable?->key,
            'description' => $this->description,
            'image' => Media::url($this->image, 'medium'),
            'url' => $this->url,
            'published_at' => $this->created_at?->toIso8601String(),
            'updated_at' => $this->updated_at?->toIso8601String(),
            'categories' => $this->whenLoaded(
                'categories',
                fn () => CategoryResource::collection($this->categories)->resolve($request)
            ),
        ];
    }
}
