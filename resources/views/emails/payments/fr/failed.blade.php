{{-- resources/views/emails/payments/fr/failed.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ trans('payments.failed.subject', ['amount' => $transaction['amount'], 'currency' => $transaction['currency']]) }}</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">
    <table align="center" width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
        <tr>
            <td style="background-color: #800020; color: #ffffff; text-align: center; padding: 20px;">
                <h2 style="margin: 0;">{{ trans('payments.failed.greeting', ['name' => $user['name']]) }}</h2>
            </td>
        </tr>
        <tr>
            <td style="padding: 20px; color: #333333;">
                <p style="font-size: 16px; line-height: 1.6;">
                    {{ trans('payments.failed.message', ['amount' => $transaction['amount'], 'currency' => $transaction['currency']]) }}
                </p>

                <p style="font-size: 15px; line-height: 1.6; color: #800020;">
                    <strong>{{ trans('payments.failed.reason') }}:</strong> {{ $transaction['failure_reason'] }}
                </p>

                <p style="font-size: 15px; line-height: 1.6; color: #2e7d32;">
                    {{ trans('payments.failed.solution') }}
                </p>

                <p style="font-size: 14px; line-height: 1.6;">
                    {{ trans('payments.failed.contact') }}
                </p>
            </td>
        </tr>
        <tr>
            <td style="background-color: #2e7d32; color: #ffffff; text-align: center; padding: 15px;">
                <p style="margin: 0; font-size: 12px;">{{ trans('payments.failed.footer') }}</p>
            </td>
        </tr>
    </table>
</body>
</html>
