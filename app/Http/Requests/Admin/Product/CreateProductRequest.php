<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class CreateProductRequest extends FormRequest
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
            'description' => 'required',
            'price' => 'required',
            'image' => 'required', // image product
            'attribute.*' => 'required',
            'category' => 'required',
            'variant_name.*' => 'required',
            // product variants
            'addon_price.*' => 'required',
            'quantity.*' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'variant_name.*.required' => 'variant name field is required.',
            'attribute.*.required' => 'attribute name field is required.',
            'addon_price.*' => 'addon price field is required.',
            'quantity.*' => 'quantity field is required.',
        ];
    }


    public function sanitize_attribute()
    {
        $attributes = [];
        foreach ($this->attribute as $att) {
            $attributes[] =[
                'attribute_id' => $att
            ];
        }
        return $attributes;
    }

    public function sanitize_product(): array
    {
        return  [
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'slug' => Str::slug($this->name)
        ];
    }

    public function sanitize_image_product(): array
    {
        if ($this->hasFile('image')) {
            $img = $this->file('image');
            $name = $img->getClientOriginalName();
            $filename = "assets/admin/uploads/image_product/" . $name;
        }
        return [
            'image' => $filename
        ];
    }

    // public function sanitize_variant() : array
    // {
    //     $result = [];
    //     foreach ($this->variant_name as $variant) {
    //         $result[] = [
    //             'variant_id' => $variant
    //         ];
    //     }
    //     return $result;
    // }

    public function sanitize_category()
    {
        return [
            'category_id' => $this->category,
        ];
    }

    public function sanitizeProductVariants()
    {
        $variants = [];
        foreach ($this->variant_name as $key => $var) {
            $variants[] = [
                'variant_id' => $var,
                'addon_price' => $this->addon_price[$key],
                'quantity' => $this->quantity[$key]
            ];
        }
        return $variants;
    }
}
