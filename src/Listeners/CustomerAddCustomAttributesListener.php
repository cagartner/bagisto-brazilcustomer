<?php

namespace Cagartner\BrazilCustomer\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;

class CustomerAddCustomAttributesListener
{
    protected $request;

    /**
     * Create the event listener.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(\Webkul\Customer\Models\Customer $customer)
    {
        $save = false;
        if ($this->request->has('person_type')) {
            $customer->person_type = $this->request->get('person_type');
            $save = true;
        }

        if ($this->request->has('document')) {
            $document = \Cagartner\BrazilCustomer\Helper\Helper::cleanDocumentString($this->request->get('document'));
            $customer->document = $document;
            $save = true;
        }

        if ($this->request->has('state_register')) {
            $customer->state_register = $this->request->get('state_register');
            $save = true;
        }

        if ($this->request->has('company_name')) {
            $customer->company_name = $this->request->get('company_name');
            $save = true;
        }

        if ($this->request->has('fantasy_name')) {
            $customer->fantasy_name = $this->request->get('fantasy_name');
            $save = true;
        }

        if ($this->request->has('general_register')) {
            $customer->general_register = $this->request->get('general_register');
            $save = true;
        }

        if ($save) {
            $customer->save();
        }
    }
}
