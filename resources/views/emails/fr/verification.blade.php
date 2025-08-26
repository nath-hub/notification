{{-- resources/views/emails/fr/verification.blade.php --}}


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ trans('emails.verification.subject') }}</title>
</head>

<body style="margin:0; padding:0; font-family: Arial, sans-serif; background-color:#f9fafb;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f9fafb; padding:40px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0"
                    style="background:#ffffff; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.08); overflow:hidden;">

                    <!-- Header -->
                    <tr>
                        <td align="center" style="background:linear-gradient(135deg, #4CAF50, #2E7D32); padding:30px;">
                            <h1 style="color:#ffffff; font-size:26px; margin:0;">
                                {{ trans('emails.verification.subject') }}
                            </h1>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:30px; color:#333333; font-size:16px; line-height:1.6;">
                            <h2 style="margin-top:0; color:#4CAF50;">
                                {{ trans('emails.verification.greeting', ['name' => $user->name]) }}
                            </h2>

                            <p style="margin:15px 0;">
                                {{ trans('emails.verification.message') }}
                            </p>

                            <!-- Code box -->
                            <div
                                style="background:#d2f7cd; border-radius:8px; padding:15px; text-align:center; margin:20px 0;">
                                <h1
                                    style="color:#2E7D32; font-size:36px; font-weight:bold; letter-spacing:6px; margin:0;">
                                    {{ trans('emails.verification.code', ['code' => $code]) }}
                                </h1>
                            </div>

                            <p><strong>{{ trans('emails.password_reset.instructions') }}</strong></p>
                            <ol style="padding-left: 20px; color: #666;">
                                <li>{{ trans('emails.password_reset.step1') }}</li>
                                <li>{{ trans('emails.password_reset.step2') }}</li>
                                <li>{{ trans('emails.password_reset.step3') }}</li>
                            </ol>

                            <p style="margin:15px 0; font-weight:bold; color:#444;">
                                {{ trans('emails.verification.expiration') }}
                            </p>

                            <p style="margin:15px 0; color:#666;">
                                {{ trans('emails.verification.warning') }}
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background:#f9fafb; padding:20px; text-align:center; font-size:12px; color:#999;">
                            <p style="margin:0;">
                                {{ trans('emails.verification.footer') }}
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
