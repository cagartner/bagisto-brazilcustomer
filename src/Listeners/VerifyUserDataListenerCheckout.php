<?php

namespace Cagartner\BrazilCustomer\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Webkul\Customer\Repositories\CustomerRepository;

class VerifyUserDataListenerCheckout
{
    protected $customer;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(CustomerRepository $customer)
    {
        $this->customer = $customer;
    }

    public function handle()
    {
        $customer = auth()->guard('customer')->user();

        if ($customer == null || !$customer->person_type || !$customer->document) {
            Session()->flash('error', trans('You registration need to be completed, please update you register before buy.'));
            return redirect()->route('customer.profile.edit');
        }
    }
}
