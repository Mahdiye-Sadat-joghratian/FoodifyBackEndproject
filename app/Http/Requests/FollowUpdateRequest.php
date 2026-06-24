<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FollowUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'follower_id' => 'required|exists:users,id',
            'following_id' => 'required|exists:users,id'
        ];
    }
}
