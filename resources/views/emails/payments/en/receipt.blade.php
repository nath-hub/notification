{{-- resources/views/emails/payments/en/receipt.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ trans('payments.receipt.subject', ['id' => $transaction['id']]) }}</title>
</head>
<body>
    <h2>{{ trans('payments.receipt.greeting', ['name' => $user['name']]) }}</h2>
    
    <p>{{ trans('payments.receipt.message', ['amount' => $transaction['amount'], 'currency' => $transaction['currency']]) }}</p>
    
    <h3>{{ trans('payments.receipt.details') }}</h3>
    <p><strong>{{ trans('payments.receipt.transaction_id') }}:</strong> {{ $transaction['id'] }}</p>
    <p><strong>{{ trans('payments.receipt.amount') }}:</strong> {{ $transaction['amount'] }} {{ $transaction['currency'] }}</p>
    <p><strong>{{ trans('payments.receipt.date') }}:</strong> {{ $transaction['date'] }}</p>
    <p><strong>{{ trans('payments.receipt.method') }}:</strong> {{ $transaction['payment_method'] }}</p>
    <p><strong>{{ trans('payments.receipt.status') }}:</strong> {{ $transaction['status'] ?? 'Complété' }}</p>
    <p><strong>{{ trans('payments.receipt.merchant') }}:</strong> {{ $transaction['merchant'] ?? config('app.name') }}</p>
    
    @if(!empty($transaction['description']))
    <p><strong>{{ trans('payments.receipt.description') }}:</strong> {{ $transaction['description'] }}</p>
    @endif
    
    <h3>{{ trans('payments.receipt.billing_info') }}</h3>
    <p><strong>{{ trans('payments.receipt.customer_name') }}:</strong> {{ $user['name'] }}</p>
    <p><strong>{{ trans('payments.receipt.customer_email') }}:</strong> {{ $user['email'] }}</p>
    
    @if(!empty($transaction['billing_address']))
    <p><strong>{{ trans('payments.receipt.billing_address') }}:</strong> {{ $transaction['billing_address'] }}</p>
    @endif
    
    <p>{{ trans('payments.receipt.thank_you') }}</p>
    
    <hr>
    <p><small>{{ trans('payments.receipt.footer') }}</small></p>
</body>
</html>