<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AnnouncementResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->name,
            'content' => $this->content,
            'dismissible' => (bool) $this->dismissible,
            'action' => $this->has_action ? [
                'label' => $this->action_label,
                'url' => $this->action_url,
                'open_new_tab' => (bool) $this->action_open_new_tab,
            ] : null,
            'start_date' => $this->start_date?->toIso8601String(),
            'end_date' => $this->end_date?->toIso8601String(),
            'updated_at' => $this->updated_at?->toIso8601String(),
        ];
    }
}
