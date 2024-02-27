<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'category_id' => 'sometimes|required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'sometimes|required'
        ];
    }

    function sanitized() : array {


        return [
            'category_id' => $this->category_id ,
            'name' => $this->name,
            'description' => $this->description ,
            // 'image' => $filename ? $filename: '',
        ];
    }
}
