<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
                'name' => 'required|regex:/^[A-Za-z\s]+$/|max:255',
                'description' => 'required|max:500',
            ];
        }

    public function messages()
    {
        return[
            'name.required' => 'Tên không được trống!',
            'name.regex' => 'Tên chỉ chứa chữ cái!',
            'name.max' => 'Tên không được quá 255 kí tự!',
            'description.required' => 'Mô tả không được trống!',
            'description.max' => 'Mô tả không được quá 500 kí tự!',
        ];
    }
}
