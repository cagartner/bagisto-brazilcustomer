<?php

namespace Cagartner\BrazilCustomer\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class BrazilCustomerServiceProvider
 * @package Cagartner\BrazilCustomer\Providers
 */
class BrazilCustomerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/system.php', 'core'
        );

        $this->app->register(EventServiceProvider::class);

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'brcustomer');

        $this->loadJSONTranslationsFrom(__DIR__ . '/../Resources/lang');

        $this->loadMigrationsFrom(__DIR__ .'/../Database/Migrations');
    }
}
