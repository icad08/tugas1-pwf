<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; 
    }

    public function rules(): array
    {
        return [
            'name' => 'sometimes|required|string|max:255',
            'quantity' => 'sometimes|required|integer',
            'price' => 'sometimes|required|numeric',
            'user_id' => 'sometimes|required|exists:users,id',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama produk tidak boleh dikosongkan.',
            'quantity.required' => 'Jumlah produk tidak boleh dikosongkan.',
            'quantity.integer' => 'Jumlah produk harus berupa angka bulat.',
            'price.required' => 'Harga produk tidak boleh dikosongkan.',
            'price.numeric' => 'Harga produk harus berupa angka yang valid.',
        ];
    }
}