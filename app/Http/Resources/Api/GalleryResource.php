<?php

namespace App\Http\Resources\Api;

use App\Support\Api\Media;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GalleryResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        // `images` is set by the controller from the polymorphic GalleryMeta row.
        $images = collect($this->images ?? [])
            ->map(fn ($img) => [
                'image' => Media::url(is_array($img) ? ($img['img'] ?? $img['image'] ?? null) : $img),
                'thumb' => Media::url(is_array($img) ? ($img['img'] ?? $img['image'] ?? null) : $img, 'thumb'),
                'description' => is_array($img) ? ($img['description'] ?? null) : null,
            ])
            ->filter(fn ($i) => $i['image'])
            ->values()
            ->all();

        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slugable?->key,
            'description' => $this->description,
            'cover' => Media::url($this->image, 'medium'),
            'is_featured' => (bool) $this->is_featured,
            'images_count' => count($images),
            'images' => $this->when(isset($this->images), $images),
            'updated_at' => $this->updated_at?->toIso8601String(),
        ];
    }
}
