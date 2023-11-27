<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'email' =>  'required|email',
            'password' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'This email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.exists' => 'The email is not registered. Please sign up.',
            'password.required' => 'This password field is required.',
            'password.min' => 'The password must be at least 9 characters.',
        ];
    }
}
