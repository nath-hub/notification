{{-- resources/views/emails/merchant/account_status.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $accountStatus === 'approved' ? trans('merchant.account_approved.subject') : trans('merchant.account_rejected.subject') }}</title>
</head>
<body>
    <h2>{{ trans('merchant.account_status.greeting', ['name' => $merchant['contact_name']]) }}</h2>
    
    @if($accountStatus === 'approved')
        <p>{{ trans('merchant.account_approved.message', ['business' => $merchant['business_name']]) }}</p>
        <p>{{ trans('merchant.account_approved.activation_details') }}</p>
        
        <h3>{{ trans('merchant.account_approved.features') }}</h3>
        <ul>
            <li>{{ trans('merchant.account_approved.feature1') }}</li>
            <li>{{ trans('merchant.account_approved.feature2') }}</li>
            <li>{{ trans('merchant.account_approved.feature3') }}</li>
            <li>{{ trans('merchant.account_approved.feature4') }}</li>
        </ul>
    @else
        <p>{{ trans('merchant.account_rejected.message') }}</p>
        <p><strong>{{ trans('merchant.account_rejected.reason') }}:</strong> {{ $merchant['rejection_reason'] ?? trans('merchant.account_rejected.default_reason') }}</p>
        <p>{{ trans('merchant.account_rejected.appeal_process') }}</p>
    @endif
    
    <h3>{{ trans('merchant.account_status.account_info') }}</h3>
    <p><strong>{{ trans('merchant.account_status.merchant_id') }}:</strong> {{ $merchant['id'] }}</p>
    <p><strong>{{ trans('merchant.account_status.business_name') }}:</strong> {{ $merchant['business_name'] }}</p>
    <p><strong>{{ trans('merchant.account_status.status') }}:</strong> {{ $accountStatus === 'approved' ? trans('merchant.account_status.approved') : trans('merchant.account_status.rejected') }}</p>
    
    <p>{{ trans('merchant.account_status.contact') }}</p>
    
    <hr>
    <p><small>{{ trans('merchant.account_status.footer') }}</small></p>
</body>
</html>