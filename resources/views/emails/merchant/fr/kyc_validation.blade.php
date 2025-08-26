{{-- resources/views/emails/merchant/kyc_validation.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $kycStatus === 'approved' ? trans('merchant.kyc_approved.subject') : trans('merchant.kyc_rejected.subject') }}</title>
</head>
<body>
    <h2>{{ trans('merchant.kyc_validation.greeting', ['name' => $merchant['contact_name']]) }}</h2>
    
    @if($kycStatus === 'approved')
        <p>{{ trans('merchant.kyc_approved.message') }}</p>
        <p>{{ trans('merchant.kyc_approved.next_steps') }}</p>
    @else
        <p>{{ trans('merchant.kyc_rejected.message') }}</p>
        <p><strong>{{ trans('merchant.kyc_rejected.reason') }}:</strong> {{ $merchant['rejection_reason'] ?? trans('merchant.kyc_rejected.default_reason') }}</p>
        <p>{{ trans('merchant.kyc_rejected.instructions') }}</p>
    @endif
    
    <h3>{{ trans('merchant.kyc_validation.details') }}</h3>
    <p><strong>{{ trans('merchant.kyc_validation.business_name') }}:</strong> {{ $merchant['business_name'] }}</p>
    <p><strong>{{ trans('merchant.kyc_validation.reference_id') }}:</strong> {{ $merchant['kyc_reference'] }}</p>
    <p><strong>{{ trans('merchant.kyc_validation.status_date') }}:</strong> {{ now()->format('d/m/Y H:i') }}</p>
    
    <p>{{ trans('merchant.kyc_validation.contact') }}</p>
    
    <hr>
    <p><small>{{ trans('merchant.kyc_validation.footer') }}</small></p>
</body>
</html>