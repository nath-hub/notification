{{-- resources/views/emails/payments/en/failed.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ trans('payments.failed.subject', ['amount' => $transaction['amount'], 'currency' => $transaction['currency']]) }}</title>
</head>
<body>
    <h2>{{ trans('payments.failed.greeting', ['name' => $user['name']]) }}</h2>
    
    <p>{{ trans('payments.failed.message', ['amount' => $transaction['amount'], 'currency' => $transaction['currency']]) }}</p>
    
    <p><strong>{{ trans('payments.failed.reason') }}:</strong> {{ $transaction['failure_reason'] }}</p>
    
    <p>{{ trans('payments.failed.solution') }}</p>
    
    <p>{{ trans('payments.failed.contact') }}</p>
    
    <hr>
    <p><small>{{ trans('payments.failed.footer') }}</small></p>
</body>
</html>