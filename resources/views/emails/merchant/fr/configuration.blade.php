<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ trans('webhook.configuration.subject') }}</title>
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
            background-color: #2E8B57; /* Vert principal */
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
            color: #2E8B57; /* Vert principal */
            margin-top: 0;
        }
        h3 {
            color: #6B2C39; /* Bordeaux pour les sous-titres */
            border-bottom: 2px solid #6B2C39;
            padding-bottom: 8px;
        }
        .webhook-details {
            background-color: #F8FFF8; /* Vert très clair */
            padding: 15px;
            border-radius: 6px;
            border-left: 4px solid #2E8B57; /* Vert principal */
        }
        .security-notes {
            background-color: #FFF8F8; /* Bordeaux très clair */
            padding: 15px;
            border-radius: 6px;
            border-left: 4px solid #6B2C39; /* Bordeaux */
        }
        .testing-section {
            background-color: #F8F8FF;
            padding: 15px;
            border-radius: 6px;
            border-left: 4px solid #4A6FDC;
        }
        .divider {
            height: 1px;
            background-color: #ddd;
            margin: 25px 0;
        }
        .highlight {
            color: #2E8B57; /* Vert principal */
            font-weight: bold;
        }
        .bordeaux {
            color: #6B2C39; /* Bordeaux */
            font-weight: bold;
        }
        ul {
            padding-left: 20px;
        }
        li {
            margin-bottom: 8px;
        }
        .secret-key {
            font-family: monospace;
            background-color: #f5f5f5;
            padding: 5px 10px;
            border-radius: 4px;
            border: 1px dashed #ccc;
            word-break: break-all;
        }
        .status-active {
            color: #2E8B57;
            font-weight: bold;
        }
        .status-inactive {
            color: #B22222;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>{{ trans('merchant.configuration.subject') }}</h1>
        </div>

        <div class="content">
            <h2>{{ trans('merchant.configuration.greeting', ['name' => $merchant['contact_name']]) }}</h2>

            <p>{{ trans('merchant.configuration.message') }}</p>

            <h3>{{ trans('merchant.configuration.details') }}</h3>
            <div class="webhook-details">
                <p><strong>{{ trans('merchant.configuration.webhook_url') }}:</strong><br>
                <span class="bordeaux">{{ $webhookData['url'] }}</span></p>

                <p><strong>{{ trans('merchant.configuration.secret_key') }}:</strong><br>
                <span class="secret-key">{{ $webhookData['secret'] }}</span></p>

                <p><strong>{{ trans('merchant.configuration.events') }}:</strong><br>
                {{ implode(', ', $webhookData['events']) }}</p>

                <p><strong>{{ trans('merchant.configuration.status') }}:</strong>
                @if($webhookData['status'] === 'active')
                    <span class="status-active">{{ $webhookData['status'] }}</span>
                @else
                    <span class="status-inactive">{{ $webhookData['status'] }}</span>
                @endif
                </p>

                <p><strong>{{ trans('merchant.configuration.configured_at') }}:</strong> {{ $webhookData['configured_at'] }}</p>
            </div>

            <h3>{{ trans('merchant.configuration.security_notes') }}</h3>
            <div class="security-notes">
                <p>{{ trans('merchant.configuration.security_warning') }}</p>
                <ul>
                    <li>{{ trans('merchant.configuration.security_tip1') }}</li>
                    <li>{{ trans('merchant.configuration.security_tip2') }}</li>
                    <li>{{ trans('merchant.configuration.security_tip3') }}</li>
                </ul>
            </div>

            <h3>{{ trans('merchant.configuration.testing') }}</h3>
            <div class="testing-section">
                <p>{{ trans('merchant.configuration.test_instructions') }}</p>
            </div>

            <p>{{ trans('merchant.configuration.support_contact') }}</p>
        </div>

        <div class="footer">
            <p><small>{{ trans('merchant.configuration.footer') }}</small></p>
        </div>
    </div>
</body>
</html>
