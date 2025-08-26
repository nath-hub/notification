{{-- resources/views/emails/payments/fr/refund.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ trans('payments.refund.subject', ['amount' => $transaction['amount'], 'currency' => $transaction['currency']]) }}</title>
</head>
<body>
    <h2>{{ trans('payments.refund.greeting', ['name' => $user['name']]) }}</h2>
    
    <p>{{ trans('payments.refund.message', ['amount' => $transaction['amount'], 'currency' => $transaction['currency']]) }}</p>
    
    <h3>{{ trans('payments.refund.details') }}</h3>
    <p><strong>{{ trans('payments.refund.transaction_id') }}:</strong> {{ $transaction['original_transaction_id'] ?? $transaction['id'] }}</p>
    <p><strong>{{ trans('payments.refund.refund_id') }}:</strong> {{ $transaction['refund_id'] ?? $transaction['id'] }}</p>
    <p><strong>{{ trans('payments.refund.amount') }}:</strong> {{ $transaction['amount'] }} {{ $transaction['currency'] }}</p>
    <p><strong>{{ trans('payments.refund.date') }}:</strong> {{ $transaction['date'] }}</p>
    
    @if(!empty($transaction['reason']))
    <p><strong>{{ trans('payments.refund.reason') }}:</strong> {{ $transaction['reason'] }}</p>
    @endif
    
    @if(!empty($transaction['original_amount']))
    <p><strong>{{ trans('payments.refund.original_amount') }}:</strong> {{ $transaction['original_amount'] }} {{ $transaction['currency'] }}</p>
    @endif
    
    <h3>{{ trans('payments.refund.processing_info') }}</h3>
    <p>{{ trans('payments.refund.processing_time') }}</p>
    <p><strong>{{ trans('payments.refund.expected_date') }}:</strong> {{ $transaction['expected_date'] ?? now()->addDays(5)->format('d/m/Y') }}</p>
    
    <p>{{ trans('payments.refund.contact') }}</p>
    
    <hr>
    <p><small>{{ trans('payments.refund.footer') }}</small></p>
</body>
</html>