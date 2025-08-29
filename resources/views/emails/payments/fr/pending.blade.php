{{-- resources/views/emails/payments/fr/pending.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ trans('payments.pending.subject', ['amount' => $transaction['amount'], 'currency' => $transaction['currency']]) }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f6f9f6;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            background: #fff;
            border: 1px solid #e0e0e0;
            border-top: 5px solid #2e7d32; /* Vert foncé */
            border-radius: 8px;
            max-width: 600px;
            margin: auto;
            padding: 20px;
        }
        h2 {
            color: #2e7d32;
        }
        h3 {
            color: #7b1e1e; /* Bordeaux */
            margin-top: 20px;
        }
        p {
            line-height: 1.6;
        }
        ul {
            margin-top: 10px;
        }
        li {
            margin-bottom: 8px;
        }
        .highlight {
            color: #2e7d32;
            font-weight: bold;
        }
        .footer {
            font-size: 12px;
            color: #777;
            border-top: 1px solid #ddd;
            margin-top: 20px;
            padding-top: 10px;
            text-align: center;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: #2e7d32;
            color: white !important;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
        }
        .btn:hover {
            background: #1b5e20;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>{{ trans('payments.pending.greeting', ['name' => $user['name']]) }}</h2>

        <p>{{ trans('payments.pending.message', ['amount' => $transaction['amount'], 'currency' => $transaction['currency']]) }}</p>

        <h3>{{ trans('payments.pending.details') }}</h3>
        <p><span class="highlight">{{ trans('payments.pending.transaction_id') }}:</span> {{ $transaction['id'] }}</p>
        <p><span class="highlight">{{ trans('payments.pending.amount') }}:</span> {{ $transaction['amount'] }} {{ $transaction['currency'] }}</p>
        <p><span class="highlight">{{ trans('payments.pending.date') }}:</span> {{ $transaction['date'] }}</p>
        <p><span class="highlight">{{ trans('payments.pending.method') }}:</span> {{ $transaction['payment_method'] }}</p>
        <p><span class="highlight">{{ trans('payments.pending.estimated_time') }}:</span> {{ $transaction['estimated_time'] ?? '1-5 minutes' }}</p>

        <h3>{{ trans('payments.pending.next_steps') }}</h3>
        <p>{{ trans('payments.pending.instructions') }}</p>
        <ul>
            <li>{{ trans('payments.pending.step1') }}</li>
            <li>{{ trans('payments.pending.step2') }}</li>
            <li>{{ trans('payments.pending.step3') }}</li>
        </ul>

        <p>{{ trans('payments.pending.contact') }}</p>

        <a href="{{ config('app.url') }}/support" class="btn">
            {{ trans('payments.pending.contact_button', [], 'fr') ?? 'Contacter le support' }}
        </a>

        <div class="footer">
            <p>{{ trans('payments.pending.footer') }}</p>
        </div>
    </div>
</body>
</html>
