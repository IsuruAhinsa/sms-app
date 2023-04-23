<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'guardian' => ['required', 'string'],
            'first_name' => ['required', 'string'],
            'middle_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'image' => ['required'],
            'birthday' => ['required'],
            'address' => ['required', 'string'],
            'city' => ['required', 'string'],
            'district' => ['required', 'string'],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'guardian' => 'Parent',
        ];
    }
}
