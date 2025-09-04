<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ $kycStatus === 'approved' ? trans('merchant.kyc_approved.subject') : trans('merchant.kyc_rejected.subject') }}</title>
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
            background-color: #2E8B57;
            /* Vert principal */
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
            color: #2E8B57;
            /* Vert principal */
            margin-top: 0;
        }

        h3 {
            color: #6B2C39;
            /* Bordeaux pour les sous-titres */
            border-bottom: 2px solid #6B2C39;
            padding-bottom: 8px;
        }

        .status-badge {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: bold;
            margin: 10px 0;
            text-transform: uppercase;
            font-size: 16px;
        }

        .approved {
            background-color: #2E8B57;
            /* Vert */
            color: white;
        }

        .rejected {
            background-color: #B22222;
            color: white;
        }

        .kyc-details {
            background-color: #F8FFF8;
            /* Vert très clair */
            padding: 15px;
            border-radius: 6px;
            border-left: 4px solid #2E8B57;
            /* Vert principal */
        }

        .approval-message {
            background-color: #F0FFF0;
            /* Vert clair */
            padding: 15px;
            border-radius: 6px;
            border: 1px solid #2E8B57;
        }

        .rejection-message {
            background-color: #FFF0F0;
            /* Rouge clair */
            padding: 15px;
            border-radius: 6px;
            border: 1px solid #B22222;
        }

        .divider {
            height: 1px;
            background-color: #ddd;
            margin: 25px 0;
        }

        .highlight {
            color: #2E8B57;
            /* Vert principal */
            font-weight: bold;
        }

        .bordeaux {
            color: #6B2C39;
            /* Bordeaux */
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
             
            <h1>{{ $status === 'approuve' ? trans('merchant.kyc_approved.subject') : trans('merchant.kyc_rejected.subject') }}</h1>
        </div>
 
        <div class="content">
            <h2>{{ trans('merchant.kyc_validation.greeting',  ['name' => $contact_name]) }}</h2>

            @if($status === 'approuve')
            <div class="status-badge approved">{{ trans('merchant.kyc_validation.status_approved') }}</div>
            <div class="approval-message">
                <p>{{ trans('merchant.kyc_approved.message') }}</p>
                <p>{{ trans('merchant.kyc_approved.next_steps') }}</p>
            </div>
            @else
            <div class="status-badge rejected">{{ trans('merchant.kyc_validation.status_rejected') }}</div>
            <div class="rejection-message">
                <p>{{ trans('merchant.kyc_rejected.message') }}</p>
                <p><strong>{{ trans('merchant.kyc_rejected.reason') }}:</strong> {{ $motif_statut ?? trans('merchant.kyc_rejected.default_reason') }}</p>
                <p>{{ trans('merchant.kyc_rejected.instructions') }}</p>
            </div>
            @endif

            <h3>{{ trans('merchant.kyc_validation.details') }}</h3>
            <div class="kyc-details">
                <p><strong>{{ trans('merchant.kyc_validation.business_name') }}:</strong> <span class="bordeaux">{{ $business_name }}</span></p> 
                <p><strong>{{ trans('merchant.kyc_validation.status_date') }}:</strong> {{ now()->format('d/m/Y H:i') }}</p>
            </div>

            <p>{{ trans('merchant.kyc_validation.contact') }}</p>
        </div>

        <div class="footer">
            <p><small>{{ trans('merchant.kyc_validation.footer') }}</small></p>
        </div>
    </div>
</body>

</html>