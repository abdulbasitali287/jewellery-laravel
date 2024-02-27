<?php

namespace App\Http\Requests\Admin\Attribute;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UpdateAttributeRequest extends FormRequest
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
            'variant_name.*' => 'required',
            // 'variant_name.*' => 'array'
        ];
    }

    public function attributeSanitized(): array
    {
        return  [
            'slug' => Str::slug($this->attribute_name),
            'name' => $this->attribute_name,
        ];
    }

    public function variantSanitized() : array
    {
        // dd(request()->all());
        $result = []; // Initialize an empty array to store the slug and name pairs

        foreach ($this->variant_name as $var) {
            $result[] = [
                'slug' => Str::slug($var),
                'name' => $var,
            ];
        }
        return $result;
    }
}
