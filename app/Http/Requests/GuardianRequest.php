<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardianRequest extends FormRequest
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
            'contact_person' => ['required'],
            'name' =>['required', 'string'],
            'email' =>['required','email', 'unique:guardians,email'],
            'phone' =>['required', 'string', 'unique:guardians,phone','regex:/^[0-9]{10}/'],
            'nic' =>['required', 'unique:guardians,nic', 'string','regex:/([0-9]{9}[x|X|v|V]|[0-9]{12})/'],
            'address' =>['required'],
        ];
    }
}
