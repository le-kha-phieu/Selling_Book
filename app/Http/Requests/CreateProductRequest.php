<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:'.config('length.min_name_book').'|max:'.config('length.max_string'),
            'author' => 'required|max:'.config('length.max_string'),
            'publisher' => 'required|max:'.config('length.max_string'),
            'publishing_year' => 'required|max:'.config('length.max_year'),
            'image_product' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'price' => 'required'
        ];
    }
}
