<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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

        ];
    }

    // public function messages()
    // {
    //     return [
    //         'name.required' => 'Name is required',
    //         'name.min' => 'Name must be at least 3 characters',
    //         'name.max' => 'Name must be at most 255 characters',
    //         'email.required' => 'Email is required',
    //         'email.unique' => 'Email already exists',
    //         'password.required' => 'Password is required',
    //         'password_confirm.same' => 'PasswordConfirm is failed',
    //     ];
    // }
}
