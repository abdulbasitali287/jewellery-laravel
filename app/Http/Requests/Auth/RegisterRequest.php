<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use PhpParser\ErrorHandler\ThrowingTest;

class RegisterRequest extends FormRequest
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
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed'
        ];
    }

    function sanitized() : array {
        return [
            'name' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ];
    }

    // public function sanitizedAuth() : array {
    //     return [
    //         'email' => $this->email,
    //         'password' => Hash::make($this->password),
    //     ];
    // }
}
