{{-- resources/views/emails/fr/password_reset_success.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ trans('emails.password_reset_success.subject') }}</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 20px;">

    <div style="max-width: 600px; margin: auto; background: #ffffff; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); padding: 25px;">

        <h2 style="color: #28a745; margin-bottom: 10px;">
            {{ trans('emails.password_reset_success.greeting', ['name' => $user->name]) }}
        </h2>

        <p style="color: #333333; font-size: 15px;">
            {{ trans('emails.password_reset_success.message', ['date' => $date, 'time' => $time]) }}
        </p>

        <div style="background: #e8f5e9; border: 1px solid #c3e6cb; color: #155724; padding: 15px; border-radius: 5px; margin: 20px 0;">
            ✅ <strong>{{ trans('emails.password_reset_success.subject') }}</strong>
        </div>

        <div style="background: #fff3cd; border: 1px solid #ffeeba; color: #856404; padding: 15px; border-radius: 5px; margin: 20px 0;">
            ⚠️ <strong>{{ trans('emails.password_reset_success.security_message') }}</strong>
        </div>

        <hr style="border: none; border-top: 1px solid #dee2e6; margin: 30px 0;">

        <p style="font-size: 13px; color: #6c757d; margin-bottom: 5px;">
            {{ trans('emails.password_reset_success.footer') }} - © {{ date('Y') }} {{ config('app.name') }}.
        </p>

        <p style="font-size: 12px; color: #adb5bd;">
            {{ trans('emails.password_reset.automated_message') }}
        </p>
    </div>

</body>
</html>
