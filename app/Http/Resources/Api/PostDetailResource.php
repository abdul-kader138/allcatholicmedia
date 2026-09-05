<?php

namespace App\Http\Resources\Api;

use App\Support\Api\Media;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostDetailResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->name,
            'slug' => $this->slugable?->key,
            'description' => $this->description,
            'content' => $this->content,
            'image' => Media::url($this->image, 'medium'),
            'image_full' => Media::url($this->image),
            'url' => $this->url,
            'views' => (int) ($this->views ?? 0),
            'published_at' => $this->created_at?->toIso8601String(),
            'updated_at' => $this->updated_at?->toIso8601String(),
            'categories' => $this->whenLoaded(
                'categories',
                fn () => CategoryResource::collection($this->categories)->resolve($request)
            ),
            'tags' => $this->whenLoaded(
                'tags',
                fn () => $this->tags->map(fn ($tag) => ['id' => $tag->id, 'name' => $tag->name])->values()->all()
            ),
        ];
    }
}
