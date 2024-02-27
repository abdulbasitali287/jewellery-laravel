<?php

namespace App\Http\Requests\Admin\Permission;

use Illuminate\Foundation\Http\FormRequest;

class CreatePermissionRequest extends FormRequest
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
            'name' => 'required'
        ];
    }

    public function sanitizedPermission() : array {
        // $permissionArray = [];
        // foreach (request()->name as $name) {
        //     $permissionArray[] = ['name' => $name];
        // }
        // return $permissionArray;
        return [
            'name' => $this->name
        ];
    }
}
