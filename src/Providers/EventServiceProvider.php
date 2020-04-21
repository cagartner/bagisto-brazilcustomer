<?php

namespace Cagartner\BrazilCustomer\Providers;

use Cagartner\BrazilCustomer\Listeners\CustomerAddCustomAttributesListener;
use Cagartner\BrazilCustomer\Listeners\VerifyUserDataListener;
use Cagartner\BrazilCustomer\Listeners\VerifyUserDataListenerCheckout;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

/**
 * Class EventServiceProvider
 * @package Cagartner\BrazilCustomer\Providers
 */
class EventServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Shop
        Event::listen('bagisto.shop.customers.signup_form_controls.before', function($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('brcustomer::signup.person-type');
        });

        Event::listen('bagisto.shop.customers.account.profile.edit_form_controls.before', function($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('brcustomer::profile.person-type');
        });

        Event::listen('bagisto.shop.customers.account.profile.view.table.before', function($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('brcustomer::profile.index');
        });

        // Admin
        Event::listen('bagisto.admin.customers.create.before', function($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('brcustomer::signup.person-type');
        });

        Event::listen('bagisto.admin.customer.edit.form.before', function($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('brcustomer::profile.person-type');
        });


        // Update user info with news attributes
        Event::listen('customer.registration.after', CustomerAddCustomAttributesListener::class);
        Event::listen('customer.update.after', CustomerAddCustomAttributesListener::class);

        // Verify if the client have the new inputs informed
        Event::listen('customer.after.login', VerifyUserDataListener::class);
        Event::listen('checkout.load.index', VerifyUserDataListenerCheckout::class);
    }
}
