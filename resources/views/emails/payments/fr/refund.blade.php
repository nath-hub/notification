{{-- resources/views/emails/payments/fr/refund.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>{{ trans('payments.refund.subject', ['amount' => $transaction['amount'], 'currency' => $transaction['currency']]) }}</title>
</head>
<body style="margin:0; padding:0; font-family: Arial, Helvetica, sans-serif; background-color:#f7f7f7; color:#333;">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f7f7f7; padding:20px;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" border="0" style="background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 4px 10px rgba(0,0,0,0.1);">

                    <!-- Header -->
                    <tr>
                        <td align="center" style="background: #2ecc71; padding:20px;">
                            <h1 style="margin:0; font-size:22px; color:#fff;">
                                {{ trans('payments.refund.subject', ['amount' => $transaction['amount'], 'currency' => $transaction['currency']]) }}
                            </h1>
                        </td>
                    </tr>

                    <!-- Greeting -->
                    <tr>
                        <td style="padding:20px; font-size:16px; line-height:1.6; color:#444;">
                            <h2 style="margin:0; color:#2c3e50;">
                                {{ trans('payments.refund.greeting', ['name' => $user['name']]) }}
                            </h2>
                            <p>{{ trans('payments.refund.message', ['amount' => $transaction['amount'], 'currency' => $transaction['currency']]) }}</p>
                        </td>
                    </tr>

                    <!-- Details -->
                    <tr>
                        <td style="padding:20px; background:#f9f9f9; border-top:1px solid #eee; border-bottom:1px solid #eee;">
                            <h3 style="margin:0 0 10px; color:#27ae60;">{{ trans('payments.refund.details') }}</h3>
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
                        </td>
                    </tr>

                    <!-- Processing Info -->
                    <tr>
                        <td style="padding:20px; font-size:15px; line-height:1.6; color:#444;">
                            <h3 style="margin:0 0 10px; color:#27ae60;">{{ trans('payments.refund.processing_info') }}</h3>
                            <p>{{ trans('payments.refund.processing_time') }}</p>
                            <p><strong>{{ trans('payments.refund.expected_date') }}:</strong> {{ $transaction['expected_date'] ?? now()->addDays(5)->format('d/m/Y') }}</p>
                            <p>{{ trans('payments.refund.contact') }}</p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="padding:15px; background:#2ecc71; color:#fff; font-size:13px; border-radius:0 0 10px 10px;">
                            <p style="margin:0;">{{ trans('payments.refund.footer') }}</p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
