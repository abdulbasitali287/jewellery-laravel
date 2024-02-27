<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class UpdateProfileRequest extends FormRequest
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
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'confirmed'
        ];
    }

    public function updateProfile() : array{
        if ($this->hasFile('image')) {
            $img = $this->file('image');
            $name = $img->getClientOriginalName();
            $filename = '/assets/user/uploads/' . $name;
            return [
                'name' => $this->name,
                'last_name' => $this->last_name,
                'email' => $this->email,
                'image' => $filename,
                'old_password' => $this->old_password,
                'password' => empty($this->password) ? auth()->user()->password : $this->password,
            ];
        }else {
            return [
                'name' => $this->name,
                'last_name' => $this->last_name,
                'email' => $this->email,
                'old_password' => $this->old_password,
                'password' => empty($this->password) ? auth()->user()->password : $this->password,
            ];
        }
    }
}
