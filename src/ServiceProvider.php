<?php

namespace Elisad5791\Cartcount;

use Elisad5791\Cartcount\Services\CartCountService;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->app->singleton('cart-count-service', function () {
            return new CartCountService();
        });
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'cartcount');

        $this->publishes(
            [__DIR__ . '/../views' => resource_path('views/vendor/cartcount')], 
            'cartcount-views'
        );
    }
}