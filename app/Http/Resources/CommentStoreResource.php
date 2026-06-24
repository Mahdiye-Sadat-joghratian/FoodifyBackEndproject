<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentStoreResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'content' => $this->content,
            'user_id' => $this->user_id,
            'recipe_id' => $this->recipe_id
        ];
    }
}
