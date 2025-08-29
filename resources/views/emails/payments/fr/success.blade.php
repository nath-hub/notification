<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ trans('payments.success.subject', ['amount' => $transaction['amount'], 'currency' => $transaction['currency']]) }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #6B2C39; /* Bordeaux */
            color: white;
            padding: 25px;
            text-align: center;
        }
        .content {
            padding: 25px;
        }
        .footer {
            background-color: #f5f5f5;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }
        h2 {
            color: #6B2C39; /* Bordeaux */
            margin-top: 0;
        }
        h3 {
            color: #2E8B57; /* Vert */
            border-bottom: 2px solid #2E8B57;
            padding-bottom: 8px;
        }
        .transaction-details {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 6px;
            border-left: 4px solid #2E8B57; /* Vert */
        }
        .thank-you {
            background-color: #F0FFF0; /* Vert très clair */
            padding: 15px;
            border-radius: 6px;
            text-align: center;
            margin: 20px 0;
            border: 1px solid #2E8B57; /* Vert */
        }
        .divider {
            height: 1px;
            background-color: #ddd;
            margin: 25px 0;
        }
        .highlight {
            color: #2E8B57; /* Vert */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Confirmation de Paiement</h1>
        </div>

        <div class="content">
            <h2>{{ trans('payments.success.greeting', ['name' => $user['name']]) }}</h2>

            <p>{{ trans('payments.success.message', ['amount' => $transaction['amount'], 'currency' => $transaction['currency']]) }}</p>

            <h3>{{ trans('payments.success.details') }}</h3>

            <div class="transaction-details">
                <p><strong>{{ trans('payments.success.transaction_id') }}:</strong> {{ $transaction['id'] }}</p>
                <p><strong>{{ trans('payments.success.amount') }}:</strong> <span class="highlight">{{ $transaction['amount'] }} {{ $transaction['currency'] }}</span></p>
                <p><strong>{{ trans('payments.success.date') }}:</strong> {{ $transaction['date'] }}</p>
                <p><strong>{{ trans('payments.success.method') }}:</strong> {{ $transaction['payment_method'] }}</p>
            </div>

            <div class="thank-you">
                <p>{{ trans('payments.success.thank_you') }}</p>
            </div>
        </div>

        <div class="footer">
            <p><small>{{ trans('payments.success.footer') }}</small></p>
        </div>
    </div>
</body>
</html>
