<?php

namespace App\Http\Requests\Admin\Pages;

use Illuminate\Foundation\Http\FormRequest;

class CreatePageRequest extends FormRequest
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
            'options.*' => 'required',
            'key.*' => 'required',
            'value.*' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'options.*.required' => 'options field is required...!',
            'key.*.required' => 'key field is required...!',
            'value.*.required' => 'value field is required...!',
        ];
    }

    public function sanitizePages(): array
    {
        $pages = [];
        foreach ($this->options as $key => $value) {
            array_push($pages, [
                'options' => $this->options[$key],
                'key' => $this->key[$key],
                'value' => $this->value[$key]
            ]);
        }
        return $pages;
    }
}
