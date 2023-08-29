<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KangarooResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'           => $this->id,
            'name'         => $this->name,
            'nickname'     => $this->nickname ?? '-',
            'weight'       => $this->weight,
            'height'       => $this->height,
            'gender'       => $this->gender === 'M' ? 'Male' : 'Female',
            'color'        => $this->color ?? '-',
            'friendliness' => $this->getFriendliness(),
            'birthday'     => $this->birthday
        ];
    }

    private function getFriendliness() {
        if ($this->friendliness === 'I') {
            return "Independent";
        }
        if ($this->friendliness === 'F') {
            return "Friendly";
        }
        return "-";
    }
}
