<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>{{ trans('merchant.welcome.subject', ['name' => $nom_entreprise]) }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 20px;
            background-color: #f4f7fa;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: linear-gradient(135deg, #3cb371 0%, #2e8b57 100%);
            color: white;
            padding: 20px 10px;
            text-align: center;
        }
        .header h1 {
            margin: 7px 0 0;
            font-size: 26px;
            font-weight: bold;
        }
        .welcome-icon {
            font-size: 56px;
        }
        .content {
            padding: 30px;
        }
        h2 {
            color: #2E8B57;
            font-size: 22px;
            margin-top: 0;
        }
        h3 {
            color: #6B2C39;
            font-size: 18px;
            margin-top: 25px;
            margin-bottom: 15px;
            border-bottom: 2px solid #6B2C39;
            padding-bottom: 8px;
        }
        .next-steps, .account-info {
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .next-steps {
            background-color: #f0fff4;
            border-left: 5px solid #2E8B57;
        }
        .account-info {
            background-color: #fff5f6;
            border-left: 5px solid #6B2C39;
        }
        ol {
            padding-left: 25px;
            margin: 0;
        }
        li {
            margin-bottom: 10px;
        }
        li::marker {
            color: #2E8B57;
            font-weight: bold;
        }
        .highlight {
            color: #2E8B57;
            font-weight: bold;
        }
        .bordeaux {
            color: #6B2C39;
            font-weight: bold;
        }
        .support-section {
            background-color: #eef6ff;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            margin: 30px 0;
            border: 1px dashed #4A90E2;
        }
        .cta-button {
            display: inline-block;
            background-color: #2E8B57;
            color: white;
            padding: 14px 28px;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
            margin-top: 15px;
            transition: all 0.3s ease;
        }
        .cta-button:hover {
            background-color: #24704a;
        }
        .footer {
            background-color: #f5f5f5;
            padding: 20px;
            text-align: center;
            font-size: 13px;
            color: #666;
            border-top: 1px solid #eaeaea;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>{{ trans('merchant.welcome.subject', ['name' => $nom_entreprise]) }}</h1>
        </div>

        <!-- Content -->
        <div class="content">
            <h2>{{ trans('merchant.welcome.greeting', ['name' => $contact_name]) }}</h2>
            <p>{{ trans('merchant.welcome.message', ['business' => $nom_entreprise]) }}</p>

            <h3>{{ trans('merchant.welcome.next_steps') }}</h3>
            <div class="next-steps">
                <ol>
                    <li><strong>{{ trans('merchant.welcome.step1') }}</strong></li>
                    <li><strong>{{ trans('merchant.welcome.step2') }}</strong></li>
                    <li><strong>{{ trans('merchant.welcome.step3') }}</strong></li>
                    <li><strong>{{ trans('merchant.welcome.step4') }}</strong></li>
                </ol>
            </div>

            <h3>{{ trans('merchant.welcome.account_info') }}</h3>
            <div class="account-info">
                <p><strong>{{ trans('merchant.welcome.business_name') }}:</strong> <span class="bordeaux">{{ $nom_entreprise }}</span></p>
                <p><strong>{{ trans('merchant.welcome.contact_email') }}:</strong> {{ $contact_email }}</p>
                {{-- <p><strong>{{ trans('merchant.welcome.merchant_id') }}:</strong> {{ $merchant['id'] }}</p> --}}
            </div>

            <div class="support-section">
                <p>{{ trans('merchant.welcome.support_contact') }}</p>
                <a href="mailto:notification@elyft.tech" class="cta-button">📩 Contactez notre support</a>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p><small>{{ trans('merchant.welcome.footer') }}</small></p>
        </div>
    </div>
</body>
</html>
