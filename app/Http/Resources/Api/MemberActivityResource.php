<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MemberActivityResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->getKey(),
            'action' => $this->action,
            'description' => method_exists($this->resource, 'getDescription') ? $this->getDescription() : $this->action,
            'ip_address' => $this->ip_address,
            'reference_url' => $this->reference_url,
            'reference_name' => $this->reference_name,
            'created_at' => $this->created_at?->toIso8601String(),
        ];
    }
}
