<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'ten'=>'bail|required|max:255|unique:san_pham,ten',
            'anh'=>'bail|required|file|mimes:jpg,png,webp,jpeg',
            'tl' => 'required|exists:the_loai,id',

            'th' => 'required|exists:thuong_hieu,id',

            'mo_ta'=>'bail|required'
        ];
    }
}
