{{-- resources/views/emails/fr/password_reset.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ trans('emails.password_reset.subject') }}</title>
</head>
<body>
    <h2>{{ trans('emails.password_reset.greeting', ['name' => $user->name]) }}</h2>
    
    <p>{{ trans('emails.password_reset.message') }}</p>
    
    <div style="background: #f8f9fa; padding: 20px; text-align: center; margin: 20px 0; border: 2px dashed #dee2e6;">
        <h3 style="margin: 0; color: #495057;">{{ trans('emails.password_reset.your_code') }}</h3>
        <div style="font-size: 28px; font-weight: bold; color: #007bff; letter-spacing: 5px; margin: 15px 0;">
            {{ $code }}
        </div>
        <small style="color: #6c757d;">{{ trans('emails.password_reset.code_validity') }}</small>
    </div>

    <p><strong>{{ trans('emails.password_reset.instructions') }}</strong></p>
    <ol style="padding-left: 20px; color: #495057;">
        <li>{{ trans('emails.password_reset.step1') }}</li>
        <li>{{ trans('emails.password_reset.step2') }}</li>
        <li>{{ trans('emails.password_reset.step3') }}</li>
    </ol>

    <div style="text-align: center; margin: 20px 0;">
        <a href="{{ url('/password/reset') }}" 
           style="display: inline-block; background-color: #28a745; color: #fff; padding: 12px 20px; text-decoration: none; font-weight: bold; border-radius: 4px;">
            {{ trans('emails.password_reset.reset_button') }}
        </a>
    </div>
    
    <p><strong>{{ trans('emails.password_reset.expiration') }}</strong></p>
    
    <div style="background: #f8f9fa; border: 1px solid #dee2e6; color: #495057; padding: 12px; border-radius: 4px;">
        <strong>⚠️ {{ trans('emails.password_reset.security_warning') }}</strong>
        <p style="margin: 8px 0 0 0;">{{ trans('emails.password_reset.warning') }}</p>
    </div>
    
    <p>{{ trans('emails.password_reset.alternative') }}</p>
    
    <p>{{ trans('emails.password_reset.support_text') }}</p>
    
    <hr>
    <p><small>{{ trans('emails.password_reset.footer') }}</small></p>
    <p><small>{{ trans('emails.password_reset.automated_message') }}</small></p>
</body>
</html>
