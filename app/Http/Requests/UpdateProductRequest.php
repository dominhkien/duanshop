<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
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
            'ten' => [
                'bail',
                'required',
                'max:255','regex:/^[a-zA-Z0-9]+$/',
                Rule::unique('san_pham', 'ten')->ignore($this->route('product')),
            ],
            'anh' => 'nullable|file|mimes:jpg,png,webp,jpeg',
            'tl' => 'required|exists:the_loai,id',
            'th' => 'required|exists:thuong_hieu,id',
            'mo_ta' => 'bail|required|regex:/^[a-zA-Z0-9]+$/',
        ];
    }
}
