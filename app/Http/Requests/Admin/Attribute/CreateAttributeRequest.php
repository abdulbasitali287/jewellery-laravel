<?php

namespace App\Http\Requests\Admin\Attribute;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class CreateAttributeRequest extends FormRequest
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
            'attribute_name' => 'required',
            // 'variant_name' => 'required',
            // 'variant_name.*' => 'array'
        ];
    }

    public function attributeSanitized() : array {
        // dd(request()->all());
        return  [
            'name' => $this->attribute_name,
            'slug' => Str::slug($this->attribute_name)
        ];
    }

    public function variantSanitized() : array {
        return  [
            'name' => $this->variant_name,
            'slug' => Str::slug($this->variant_name)
        ];
    }
}
