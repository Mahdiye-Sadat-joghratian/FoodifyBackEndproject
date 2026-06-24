<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RecipeStoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'message' => 'دستور پخت با موفقیت ایجاد شد',
            'data' => [
                'name' => $this->name,
                'image_url' => $this->image_url,
                'serving' => $this->serving,
                'difficulty' => $this->difficulty,
                'dish_type' => $this->dish_type
            ]
        ];
    }
}
