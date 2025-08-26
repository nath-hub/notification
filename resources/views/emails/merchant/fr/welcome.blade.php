{{-- resources/views/emails/merchant/welcome.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ trans('merchant.welcome.subject', ['name' => $merchant['business_name']]) }}</title>
</head>
<body>
    <h2>{{ trans('merchant.welcome.greeting', ['name' => $merchant['contact_name']]) }}</h2>
    
    <p>{{ trans('merchant.welcome.message', ['business' => $merchant['business_name']]) }}</p>
    
    <h3>{{ trans('merchant.welcome.next_steps') }}</h3>
    <ol>
        <li>{{ trans('merchant.welcome.step1') }}</li>
        <li>{{ trans('merchant.welcome.step2') }}</li>
        <li>{{ trans('merchant.welcome.step3') }}</li>
        <li>{{ trans('merchant.welcome.step4') }}</li>
    </ol>
    
    <h3>{{ trans('merchant.welcome.account_info') }}</h3>
    <p><strong>{{ trans('merchant.welcome.business_name') }}:</strong> {{ $merchant['business_name'] }}</p>
    <p><strong>{{ trans('merchant.welcome.contact_email') }}:</strong> {{ $merchant['contact_email'] }}</p>
    <p><strong>{{ trans('merchant.welcome.merchant_id') }}:</strong> {{ $merchant['id'] }}</p>
    
    <p>{{ trans('merchant.welcome.support_contact') }}</p>
    
    <hr>
    <p><small>{{ trans('merchant.welcome.footer') }}</small></p>
</body>
</html>