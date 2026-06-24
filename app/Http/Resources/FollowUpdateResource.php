<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FollowUpdateResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'message' => 'Follow updated successfully',
            'data' => [
                'follower_id' => $this->follower_id,
                'following_id' => $this->following_id
            ]
        ];
    }
}
