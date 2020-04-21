<tr>
    <td>{{ __('Person Type') }}</td>
    <td>{{ __(ucfirst($customer->person_type))  }}</td>
</tr>

<tr>
    <td>
        @if($customer->person_type === 'person')
            {{ __('Document Person') }}
        @else
            {{ __('Document Company') }}
        @endif
    </td>
    <td>{{ $customer->document }}</td>
</tr>

@if($customer->company_name)
<tr>
    <td>{{ __('Company Name') }}</td>
    <td>{{ $customer->company_name }}</td>
</tr>
@endif

@if($customer->fantasy_name)
<tr>
    <td>{{ __('Fantasy Name') }}</td>
    <td>{{ $customer->fantasy_name }}</td>
</tr>
@endif

@if($customer->state_register)
    <tr>
        <td>{{ __('State Register') }}</td>
        <td>{{ $customer->state_register }}</td>
    </tr>
@endif

@if($customer->general_register)
    <tr>
        <td>{{ __('General Register') }}</td>
        <td>{{ $customer->general_register }}</td>
    </tr>
@endif



