<?php

namespace App\Http\Requests\Admin\HotelBathrooms;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHotelBathroomsRequest extends FormRequest
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
            'bathroom_type' => 'required'
        ];
    }

    public function sanitizeUpdateHotelBathroom() : array {

        return [
            'bathroom_type' => $this->bathroom_type
        ];
    }
}
