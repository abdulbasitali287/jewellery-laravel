<?php

namespace App\Http\Requests\User;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class CreateCheckoutRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'street_address' => 'required',
            'town_or_city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'phone' => 'required',
            'email_address' => 'required',
        ];
    }

    public function sanitizeCheckout(): array
    {
        $total = \Cart::session(auth()->id())->getTotal();
        return [
            'slug' => Str::slug($this->first_name . "-" . $this->last_name),
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'company_name' => $this->company_name,
            'street_address' => $this->street_address,
            'city' => $this->town_or_city,
            'state' => $this->state,
            'zip_code' => $this->zip_code,
            'email' => $this->email_address,
            'description' => $this->description,
            'phone' => $this->phone,
            'amount_total' => $total,
            'user_id' => auth()->id()
        ];
    }

    public function sanitizeOrderProduct()
    {
        $product = [];
        $cartItems = \Cart::session(auth()->id())->getContent();

        // dd($cartItems);
        foreach ($cartItems as $item) {
            $product[] = [
                // 'name' => $item['name'], // modified
                'product_id' => $item['id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ];
        }
        return $product;
    }
}
