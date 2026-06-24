<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'content' => 'string|min:1',
            'user_id' => 'exists:users,id',
            'recipe_id' => 'exists:recipes,id',
        ];
    }
}
