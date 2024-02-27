<?php

namespace App\Http\Requests\Admin\Slider;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UpdateSliderRequest extends FormRequest
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
            'title' => 'required',
            'sub_title' => 'required',
            // 'image' => 'required',
        ];
    }

    public function updateSlider() : array
    {
        return [
            'slug' => Str::slug($this->title),
            'title' => $this->title,
            'sub_title' => $this->sub_title,
            // 'image' => $this->image,
        ];
    }
}
