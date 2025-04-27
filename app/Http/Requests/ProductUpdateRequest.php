<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'slug' => ['required', 'string', 'unique:products,slug'],
            'images' => ['nullable', 'json'],
            'features' => ['nullable', 'string'],
            'price' => ['nullable', 'numeric', 'between:-999999.99,999999.99'],
            'active' => ['required'],
            'oferta' => ['required'],
            'descuento' => ['nullable', 'integer'],
            'units' => ['nullable', 'integer'],
            'stars' => ['nullable', 'integer'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
        ];
    }
}
