{{-- resources/views/emails/fr/account_verified_success.blade.php --}}

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>{{ trans('emails.account_verified.subject') }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            max-width: 650px;
            margin: 30px auto;
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }
        .header {
            text-align: center;
            border-bottom: 3px solid #28a745;
            padding-bottom: 15px;
            margin-bottom: 25px;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            color: #28a745;
        }
        .success-icon {
            font-size: 48px;
            text-align: center;
            margin: 15px 0;
        }
        h2 {
            text-align: center;
            color: #28a745;
            margin-bottom: 25px;
        }
        .welcome-box {
            background-color: #e9f7ef;
            padding: 20px;
            border-radius: 10px;
            border-left: 6px solid #28a745;
            margin-bottom: 25px;
        }
        .info-card {
            background-color: #f1f3f5;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 25px;
        }
        .info-card h4 {
            margin-top: 0;
            color: #495057;
        }
        .info-item {
            display: flex;
            justify-content: space-between;
            padding: 6px 0;
            border-bottom: 1px solid #dee2e6;
            font-size: 15px;
        }
        .next-steps {
            background-color: #fff8e1;
            padding: 20px;
            border-radius: 10px;
            border-left: 6px solid #28a745;
            margin-bottom: 25px;
        }
        .cta-button {
            display: block;
            text-align: center;
            background-color: #28a745;
            color: #fff !important;
            padding: 14px 20px;
            border-radius: 8px;
            font-weight: bold;
            font-size: 16px;
            text-decoration: none;
            margin: 25px 0;
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
        }
        .cta-button:hover {
            background-color: #218838;
        }
        .security-note {
            background-color: #fefefe;
            border: 1px solid #e2e3e5;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 25px;
            font-size: 14px;
            line-height: 1.5;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 13px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>{{ config('app.name', 'Laravel') }}</h1>
            <p style="margin: 10px 0 0 0; opacity: 0.85;">Votre plateforme de confiance</p>
        </div>

        <div class="success-icon">🎉</div>

        <h2>{{ trans('emails.account_verified.subject') }}</h2>

        <div class="welcome-box">
            <h3 style="margin: 0; color:#28a745;">
                {{ trans('emails.account_verified.congratulations', ['name' => $user->name]) }}
            </h3>
            <p style="margin: 10px 0 0 0; font-size: 16px;">
                {{ trans('emails.account_verified.welcome_message') }}
            </p>
        </div>

        <div class="info-card">
            <h4>📋 Détails de la vérification</h4>
            <div class="info-item">
                <span>✅ Statut du compte:</span>
                <span style="color: #28a745; font-weight: bold;">Vérifié avec succès</span>
            </div>
            <div class="info-item">
                <span>📅 Date de vérification:</span>
                <span>{{ $verificationDate }}</span>
            </div>
            <div class="info-item">
                <span>⏰ Heure de vérification:</span>
                <span>{{ $verificationTime }}</span>
            </div>
            <div class="info-item">
                <span>📧 Email vérifié:</span>
                <span>{{ $user->email }}</span>
            </div>
        </div>

        <div class="next-steps">
            <h4>🚀 Prochaines étapes</h4>
            <p>{{ trans('emails.account_verified.next_steps') }}</p>
            <ul style="margin: 10px 0; padding-left: 20px;">
                <li>{{ trans('emails.account_verified.step1') }}</li>
                <li>{{ trans('emails.account_verified.step2') }}</li>
                <li>{{ trans('emails.account_verified.step3') }}</li>
                <li>{{ trans('emails.account_verified.step4') }}</li>
            </ul>
        </div>

        <a href="{{ config('app.frontend_url') }}/dashboard" class="cta-button">
            {{ trans('emails.account_verified.cta_button') }}
        </a>

        <div class="security-note">
            <strong>🔒 {{ trans('emails.account_verified.security_title') }}</strong>
            <p>{{ trans('emails.account_verified.security_message') }}</p>
        </div>

        <p style="text-align: center; color: #666; font-style: italic;">
            {{ trans('emails.account_verified.thank_you') }}
        </p>
    </div>

    <div class="footer">
        <p><small>{{ trans('emails.account_verified.footer', ['year' => date('Y')]) }}</small></p>
        <p><small>{{ trans('emails.automated_message') }}</small></p>
    </div>
</body>
</html>
