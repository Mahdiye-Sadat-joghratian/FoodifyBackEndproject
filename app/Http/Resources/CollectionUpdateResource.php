<?php
namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CollectionUpdateResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'message' => 'Collection updated successfully',
            'data' => [
                'id' => $this->id,
                'name' => $this->name,
                'description' => $this->description,
                'cover_image' => $this->cover_image,

            ]
        ];
    }
}
