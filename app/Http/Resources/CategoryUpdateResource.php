<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryUpdateResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'message' => 'Category updated successfully',
            'data' => [
                'id' => $this->id,
                'name' => $this->name,
                'slug' => $this->slug,
                'image_url' => $this->image_url,
                'description' => $this->description,
                'parent_id' => $this->parent_id
            ]
        ];
    }
}
