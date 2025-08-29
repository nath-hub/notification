{{-- resources/views/emails/payments/fr/receipt.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>{{ trans('payments.receipt.subject', ['id' => $transaction['id']]) }}</title>
    <style>
        body { font-family: Arial, sans-serif; color: #333; }
        h2 { color: #2c3e50; }
        h3 { margin-top: 20px; color: #34495e; }
        p { margin: 5px 0; }
        strong { color: #000; }
        .footer { margin-top: 30px; font-size: 12px; color: #777; }
    </style>
</head>
<body>
    {{-- Salutation --}}
    <h2>{{ trans('payments.receipt.greeting', ['name' => $user['name']]) }}</h2>

    {{-- Message principal --}}
    <p>{{ trans('payments.receipt.message', ['amount' => $transaction['amount'], 'currency' => $transaction['currency']]) }}</p>

    {{-- Détails de la transaction --}}
    <h3>{{ trans('payments.receipt.details') }}</h3>
    <p><strong>{{ trans('payments.receipt.transaction_id') }}:</strong> {{ $transaction['id'] }}</p>
    <p><strong>{{ trans('payments.receipt.amount') }}:</strong> {{ $transaction['amount'] }} {{ $transaction['currency'] }}</p>
    <p><strong>{{ trans('payments.receipt.date') }}:</strong> {{ $transaction['date'] }}</p>
    <p><strong>{{ trans('payments.receipt.method') }}:</strong> {{ $transaction['payment_method'] }}</p>
    <p><strong>{{ trans('payments.receipt.status') }}:</strong> {{ $transaction['status'] ?? trans('payments.receipt.completed') }}</p>
    <p><strong>{{ trans('payments.receipt.merchant') }}:</strong> {{ $transaction['merchant'] ?? config('app.name') }}</p>

    {{-- Description optionnelle --}}
    @if(!empty($transaction['description']))
        <p><strong>{{ trans('payments.receipt.description') }}:</strong> {{ $transaction['description'] }}</p>
    @endif

    {{-- Informations de facturation --}}
    <h3>{{ trans('payments.receipt.billing_info') }}</h3>
    <p><strong>{{ trans('payments.receipt.customer_name') }}:</strong> {{ $user['name'] }}</p>
    <p><strong>{{ trans('payments.receipt.customer_email') }}:</strong> {{ $user['email'] }}</p>

    @if(!empty($transaction['billing_address']))
        <p><strong>{{ trans('payments.receipt.billing_address') }}:</strong> {{ $transaction['billing_address'] }}</p>
    @endif

    {{-- Remerciements --}}
    <p>{{ trans('payments.receipt.thank_you') }}</p>

    {{-- Pied de page --}}
    <hr>
    <p class="footer"><small>{{ trans('payments.receipt.footer') }}</small></p>
</body>
</html>
