<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'image' => 'required',
        ];
    }

    function sanitized() : array {
        if ($this->hasFile('image')) {
            $img = $this->file('image');
            $name = $img->getClientOriginalName();
            $filename = 'assets/admin/uploads/' . $name;
            // $img->move('assets/admin/uploads/', $filename);
        }
        return [
            'category_id' => $this->category_id ,
            'name' => $this->name ,
            'description' => $this->description,
            'image' => $filename ,
        ];
    }
}
