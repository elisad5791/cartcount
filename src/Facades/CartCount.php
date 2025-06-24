<?php

namespace Elisad5791\Cartcount\Facades;

use Illuminate\Support\Facades\Facade;

class CartCount extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cart-count-service';
    }
}