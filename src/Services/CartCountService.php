<?php

namespace Elisad5791\Cartcount\Services;

class CartCountService
{
    public function getCount(): int
    {
        $cart = session()->get('cart', []);
        $count = count($cart);
        return $count;
    }
}