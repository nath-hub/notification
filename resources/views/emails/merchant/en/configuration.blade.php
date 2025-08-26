{{-- resources/views/emails/webhook/configuration.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ trans('webhook.configuration.subject') }}</title>
</head>
<body>
    <h2>{{ trans('webhook.configuration.greeting', ['name' => $merchant['contact_name']]) }}</h2>
    
    <p>{{ trans('webhook.configuration.message') }}</p>
    
    <h3>{{ trans('webhook.configuration.details') }}</h3>
    <p><strong>{{ trans('webhook.configuration.webhook_url') }}:</strong> {{ $webhookData['url'] }}</p>
    <p><strong>{{ trans('webhook.configuration.secret_key') }}:</strong> {{ $webhookData['secret'] }}</p>
    <p><strong>{{ trans('webhook.configuration.events') }}:</strong> {{ implode(', ', $webhookData['events']) }}</p>
    <p><strong>{{ trans('webhook.configuration.status') }}:</strong> {{ $webhookData['status'] }}</p>
    <p><strong>{{ trans('webhook.configuration.configured_at') }}:</strong> {{ $webhookData['configured_at'] }}</p>
    
    <h3>{{ trans('webhook.configuration.security_notes') }}</h3>
    <p>{{ trans('webhook.configuration.security_warning') }}</p>
    <ul>
        <li>{{ trans('webhook.configuration.security_tip1') }}</li>
        <li>{{ trans('webhook.configuration.security_tip2') }}</li>
        <li>{{ trans('webhook.configuration.security_tip3') }}</li>
    </ul>
    
    <h3>{{ trans('webhook.configuration.testing') }}</h3>
    <p>{{ trans('webhook.configuration.test_instructions') }}</p>
    
    <p>{{ trans('webhook.configuration.support_contact') }}</p>
    
    <hr>
    <p><small>{{ trans('webhook.configuration.footer') }}</small></p>
</body>
</html>