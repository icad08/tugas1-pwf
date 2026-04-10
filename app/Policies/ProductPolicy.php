<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;

class ProductPolicy
{
    // Logic untuk Edit: User ID yang login harus sama dengan User ID di produk
    public function update(User $user, Product $product): bool
    {
        return $user->id === $product->user_id;
    }

    // Logic untuk Hapus: Boleh hapus kalau dia yang bikin, ATAU kalau dia admin
    public function delete(User $user, Product $product): bool
    {
        return $user->id === $product->user_id || $user->role === 'admin';
    }
}