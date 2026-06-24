<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipeStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:200',
            'image_url' => 'nullable|string|max:255',
            'serving' => 'required|string',
            'cook_time_hour' => 'required|string',
            'cook_time_minute' => 'required|string',
            'difficulty' => 'required|in:آسان,متوسط,سخت',
            'dish_type' => 'required|string',
            'dietary_targets' => 'nullable|string',
            'hashtags' => 'nullable|string',
            'introduction' => 'required|string|min:10',
            'ingredients' => 'required|string|min:10',
            'steps' => 'required|string|min:10',
        ];
    }
}
