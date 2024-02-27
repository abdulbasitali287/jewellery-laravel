<?php

namespace App\Http\Requests\Admin\ImageProduct;

use Illuminate\Foundation\Http\FormRequest;

class CreateImageProductRequest extends FormRequest
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
            'product' => 'required',
            'image' => 'required'
        ];
    }

    public function sanitize_image_product(){
        if ($this->hasFile('image')) {
            $img = $this->file('image');
            $name = $img->getClientOriginalName();
            $filename = 'assets/admin/uploads/image_product/' . $name;
        }
        return [
            'product_id' => $this->product,
            'image' => $filename,
        ];
    }
}
