<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAccountRequest extends FormRequest
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
            'name' => 'bail|required|max:255',
            'address' => 'bail|required|string|max:255',
            'old_password' => 'nullable|required_with:new_password|string',
            'new_password' => 'nullable|min:8|confirmed',
            'new_password_confirmation' => 'nullable|required_with:new_password|same:new_password',
            'image' => 'nullable|file|mimes:jpg,png,webp,jpeg', 
        ];
    }
}
