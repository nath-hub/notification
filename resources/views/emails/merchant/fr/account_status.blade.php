<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $accountStatus === 'approved' ? trans('merchant.account_approved.subject') : trans('merchant.account_rejected.subject') }}</title>
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
        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: bold;
            margin-left: 10px;
        }
        .approved {
            background-color: #2E8B57; /* Vert */
            color: white;
        }
        .rejected {
            background-color: #B22222;
            color: white;
        }
        .account-info {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 6px;
            border-left: 4px solid #2E8B57; /* Vert */
        }
        .features-list {
            background-color: #F0FFF0; /* Vert très clair */
            padding: 15px 15px 15px 35px;
            border-radius: 6px;
            border: 1px solid #2E8B57; /* Vert */
        }
        .rejection-notice {
            background-color: #FFF0F0;
            padding: 15px;
            border-radius: 6px;
            border-left: 4px solid #B22222;
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
        ul {
            padding-left: 20px;
        }
        li {
            margin-bottom: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>{{ $accountStatus === 'approved' ? trans('merchant.account_approved.subject') : trans('merchant.account_rejected.subject') }}</h1>
        </div>

        <div class="content">
            <h2>{{ trans('merchant.account_status.greeting', ['name' => $merchant['contact_name']]) }}</h2>

            @if($accountStatus === 'approved')
                <p>{{ trans('merchant.account_approved.message', ['business' => $merchant['business_name']]) }}</p>
                <p>{{ trans('merchant.account_approved.activation_details') }}</p>

                <h3>{{ trans('merchant.account_approved.features') }}</h3>
                <div class="features-list">
                    <ul>
                        <li>{{ trans('merchant.account_approved.feature1') }}</li>
                        <li>{{ trans('merchant.account_approved.feature2') }}</li>
                        <li>{{ trans('merchant.account_approved.feature3') }}</li>
                        <li>{{ trans('merchant.account_approved.feature4') }}</li>
                    </ul>
                </div>
            @else
                <div class="rejection-notice">
                    <p>{{ trans('merchant.account_rejected.message') }}</p>
                    <p><strong>{{ trans('merchant.account_rejected.reason') }}:</strong> {{ $merchant['rejection_reason'] ?? trans('merchant.account_rejected.default_reason') }}</p>
                    <p>{{ trans('merchant.account_rejected.appeal_process') }}</p>
                </div>
            @endif

            <h3>{{ trans('merchant.account_status.account_info') }}</h3>
            <div class="account-info">
                <p><strong>{{ trans('merchant.account_status.merchant_id') }}:</strong> {{ $merchant['id'] }}</p>
                <p><strong>{{ trans('merchant.account_status.business_name') }}:</strong> {{ $merchant['business_name'] }}</p>
                <p><strong>{{ trans('merchant.account_status.status') }}:</strong>
                    @if($accountStatus === 'approved')
                        <span class="status-badge approved">{{ trans('merchant.account_status.approved') }}</span>
                    @else
                        <span class="status-badge rejected">{{ trans('merchant.account_status.rejected') }}</span>
                    @endif
                </p>
            </div>

            <p>{{ trans('merchant.account_status.contact') }}</p>
        </div>

        <div class="footer">
            <p><small>{{ trans('merchant.account_status.footer') }}</small></p>
        </div>
    </div>
</body>
</html>
