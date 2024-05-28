<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;

class UserRegister extends FormRequest
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
    public function rules() : array
    {
        return [
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users,email',
            'phone'     => 'required|string|unique:users,phone',
            'password'  => 'required|min:6|confirmed'
        ];
    }

    /**
     * Set custom validation messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'      => 'Please enter a your name.',
            'email.required'     => 'Please enter a your email.',
            'phone.required'     => 'Please enter a your contact phone number.',
            'password.required'  => 'Please enter password (min:8charcters).'
        ];
    }
}
