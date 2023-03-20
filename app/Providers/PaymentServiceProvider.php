<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\PaymentGateway\Payment;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('payment', function () {
            return new Payment();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
