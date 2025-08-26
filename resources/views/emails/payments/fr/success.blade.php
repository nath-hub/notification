{{-- resources/views/emails/payments/fr/success.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ trans('payments.success.subject', ['amount' => $transaction['amount'], 'currency' => $transaction['currency']]) }}</title>
</head>
<body>
    <h2>{{ trans('payments.success.greeting', ['name' => $user['name']]) }}</h2>
    
    <p>{{ trans('payments.success.message', ['amount' => $transaction['amount'], 'currency' => $transaction['currency']]) }}</p>
    
    <h3>{{ trans('payments.success.details') }}</h3>
    <p><strong>{{ trans('payments.success.transaction_id') }}:</strong> {{ $transaction['id'] }}</p>
    <p><strong>{{ trans('payments.success.amount') }}:</strong> {{ $transaction['amount'] }} {{ $transaction['currency'] }}</p>
    <p><strong>{{ trans('payments.success.date') }}:</strong> {{ $transaction['date'] }}</p>
    <p><strong>{{ trans('payments.success.method') }}:</strong> {{ $transaction['payment_method'] }}</p>
    
    <p>{{ trans('payments.success.thank_you') }}</p>
    
    <hr>
    <p><small>{{ trans('payments.success.footer') }}</small></p>
</body>
</html>