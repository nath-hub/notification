{{-- resources/views/emails/payments/fr/pending.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ trans('payments.pending.subject', ['amount' => $transaction['amount'], 'currency' => $transaction['currency']]) }}</title>
</head>
<body>
    <h2>{{ trans('payments.pending.greeting', ['name' => $user['name']]) }}</h2>
    
    <p>{{ trans('payments.pending.message', ['amount' => $transaction['amount'], 'currency' => $transaction['currency']]) }}</p>
    
    <h3>{{ trans('payments.pending.details') }}</h3>
    <p><strong>{{ trans('payments.pending.transaction_id') }}:</strong> {{ $transaction['id'] }}</p>
    <p><strong>{{ trans('payments.pending.amount') }}:</strong> {{ $transaction['amount'] }} {{ $transaction['currency'] }}</p>
    <p><strong>{{ trans('payments.pending.date') }}:</strong> {{ $transaction['date'] }}</p>
    <p><strong>{{ trans('payments.pending.method') }}:</strong> {{ $transaction['payment_method'] }}</p>
    <p><strong>{{ trans('payments.pending.estimated_time') }}:</strong> {{ $transaction['estimated_time'] ?? '24-48 heures' }}</p>
    
    <h3>{{ trans('payments.pending.next_steps') }}</h3>
    <p>{{ trans('payments.pending.instructions') }}</p>
    <ul>
        <li>{{ trans('payments.pending.step1') }}</li>
        <li>{{ trans('payments.pending.step2') }}</li>
        <li>{{ trans('payments.pending.step3') }}</li>
    </ul>
    
    <p>{{ trans('payments.pending.contact') }}</p>
    
    <hr>
    <p><small>{{ trans('payments.pending.footer') }}</small></p>
</body>
</html>