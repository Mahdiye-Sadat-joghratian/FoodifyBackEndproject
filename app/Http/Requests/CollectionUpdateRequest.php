<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CollectionUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'string|min:1|max:255',
            'description' => 'nullable|string',
            'cover_image' => 'nullable|string',
            'user_id' => 'exists:users,id',

        ];
    }
}
