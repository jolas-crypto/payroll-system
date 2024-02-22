<?php

namespace App\Http\Resources\Premium;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SSSPremiumResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'year' => $this->year,
            'salary_from' => $this->salary_from,
            'salary_to' => $this->salary_to,
        ];
    }
}
