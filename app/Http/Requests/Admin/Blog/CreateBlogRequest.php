<?php

namespace App\Http\Requests\Admin\Blog;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class CreateBlogRequest extends FormRequest
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
            'image' => 'sometimes|required'
        ];
    }

    public function sanitizeBlog() : array {

        if ($this->hasFile('image')) {
            $img = $this->file('image');
            $name = $img->getClientOriginalName();
            $filename = 'assets/admin/uploads/blogs/' . $name;
        }
        return [
            'slug' => Str::slug($this->name),
            'name' => $this->name,
            'description' => $this->description,
            'short_description' => $this->createShortDescription($this->description),
            'image' => $filename
        ];
    }

    private function createShortDescription($description, $maxLength = 10, $indicator = '...') {
        if (strlen($description) > $maxLength) {
            $shortDescription = substr($description, 0, $maxLength) . $indicator;
            return $shortDescription;
        } else {
            return $description;
        }
    }
}
