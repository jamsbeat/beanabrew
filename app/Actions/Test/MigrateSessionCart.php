<?php

namespace App\Actions\Test;

use App\Models\Cart;

class MigrateSessionCart
{

    public function migrate(Cart $sessionCart, Cart $userCart): void
    {
        \Log::info('Migrating session cart', ['session_cart' => $sessionCart, 'user_cart' => $userCart]);
        $sessionCart->items->each(fn($item) => (new AddProductVariantToCart())->add(
            variantId: $item->product_variant_id,
            quantity: $item->quantity,
            cart: $userCart
        ));

        $sessionCart->items()->delete();
        $sessionCart->delete();
        \Log::info('Migration completed', ['user_cart' => $userCart]);

    }
}
