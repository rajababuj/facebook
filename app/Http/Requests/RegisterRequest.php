<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:9',
            'profiletype' => 'required|in:Public,Private',

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'This name field is required.',
            'email.required' => 'This email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'A user with this email address already exists.',
            'password.required' => 'This password field is required.',
            'password.min' => 'The password must be at least 9 characters.',
            'account.required' => 'This account field is required.',


        ];
    }
}
