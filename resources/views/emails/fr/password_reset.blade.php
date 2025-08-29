{{-- resources/views/emails/fr/password_reset.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ trans('emails.password_reset.subject') }}</title>
</head>
<body style="margin:0; padding:0; font-family: Arial, sans-serif; background-color:#f4f6f9; color:#333;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f6f9; padding:30px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color:#fff; border-radius:8px; overflow:hidden; box-shadow:0 4px 8px rgba(0,0,0,0.05);">

                    <!-- Header -->
                    <tr>
                        <td style="background-color:#28a745; padding:20px; text-align:center; color:#fff;">
                            <h1 style="margin:0; font-size:22px;">{{ trans('emails.password_reset.subject') }}</h1>
                        </td>
                    </tr>

                    <!-- Greeting -->
                    <tr>
                        <td style="padding:25px;">
                            <h2 style="margin:0 0 15px 0; font-size:20px; color:#333;">
                                {{ trans('emails.password_reset.greeting', ['name' => $user->name]) }}
                            </h2>
                            <p style="margin:0 0 15px 0; font-size:15px; line-height:1.6;">
                                {{ trans('emails.password_reset.message') }}
                            </p>
                        </td>
                    </tr>

                    <!-- Code Section -->
                    <tr>
                        <td style="padding:0 25px 25px 25px;">
                            <div style="background:#91f3a8; border:2px dashed #dee2e6; padding:10px; text-align:center; border-radius:6px;">

                                <div style="font-size:30px; font-weight:bold; color:#000000; letter-spacing:6px; margin:7px 0;">
                                    {{ $code }}
                                </div>
                                <small style="color:#4e545a;">{{ trans('emails.password_reset.code_validity') }}</small>
                            </div>
                        </td>
                    </tr>

                    <!-- Instructions -->
                    <tr>
                        <td style="padding:0 25px 25px 25px;">
                            <p style="font-weight:bold; margin-bottom:10px;">{{ trans('emails.password_reset.instructions') }}</p>
                            <ol style="padding-left:20px; margin:0; color:#28a745; line-height:1.6;">
                                <li>{{ trans('emails.password_reset.step1') }}</li>
                                <li>{{ trans('emails.password_reset.step2') }}</li>
                                <li>{{ trans('emails.password_reset.step3') }}</li>
                            </ol>
                        </td>
                    </tr>

                    <!-- Expiration & Security -->
                    <tr>
                        <td style="padding:0 25px 25px 25px;">
                            <div style="background:#fff3cd; border:1px solid #ffeeba; color:#856404; padding:12px; border-radius:6px;">
                                ⚠️ <strong>{{ trans('emails.password_reset.security_warning') }}</strong>
                                <p style="margin:8px 0 0 0; font-size:14px;">{{ trans('emails.password_reset.warning') }}</p>
                            </div>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding:0 25px 25px 25px; font-size:13px; color:#6c757d; text-align:center; line-height:1.5;">
                            <p>{{ trans('emails.password_reset.support_text') }}</p>
                            <hr style="border:none; border-top:1px solid #dee2e6; margin:20px 0;">
                            <p><small>{{ trans('emails.password_reset.footer') }}</small></p>
                            <p><small>{{ trans('emails.password_reset.automated_message') }}</small></p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
