<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'name'=>'required|string|max:255',
            'price'=>'required|numeric|min:1000',
            'description'=>'required|string|max:1000',
            'img_url'=>'nullable|image|mimes:webp|max:2048',
        ];
    }
}
