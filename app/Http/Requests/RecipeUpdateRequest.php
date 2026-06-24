<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipeUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'string|min:3|max:200',
            'image_url' => 'nullable|string|max:255',
            'serving' => 'string',
            'cook_time_hour' => 'string',
            'cook_time_minute' => 'string',
            'difficulty' => 'in:آسان,متوسط,سخت',
            'dish_type' => 'string',
            'dietary_targets' => 'nullable|string',
            'hashtags' => 'nullable|string',
            'introduction' => 'string|min:10',
            'ingredients' => 'string|min:10',
            'steps' => 'string|min:10',

        ];
    }
}
