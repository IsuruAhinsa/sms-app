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
            'first_name' =>['required'],
            'middle_name' =>['required'],
            'last_name' =>['required'],
            'contact_person' =>['required'],
            'image' =>['required'],
            'dob' =>['required'],
            'age' =>['required'],
            'address_one' =>['required'],
            'city' =>['required'],
            'district' =>['required'],
        ];
    }
}
