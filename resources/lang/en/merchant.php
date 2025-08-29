<?php

return [

    'welcome' => [
        'subject' => 'Welcome to :name - Your merchant account has been created',
        'greeting' => 'Hello :contact_name,',
        'message' => 'Congratulations! Your merchant account ":business" has been successfully created on our payment platform.',
        'next_steps' => 'Next steps to activate your account:',
        'step1' => 'Complete your merchant profile',
        'step2' => 'Submit your KYC/AML documents',
        'step3' => 'Configure your notification webhooks',
        'step4' => 'Integrate our API into your system',
        'account_info' => 'Your account information',
        'business_name' => 'Business Name',
        'contact_email' => 'Contact Email',
        'merchant_id' => 'Merchant ID',
        'support_contact' => 'Our support team is available to assist you with your integration.',
        'footer' => 'Welcome to our merchant network!'
    ],
    'configuration' => [
        'subject' => 'Your Webhook Configuration',
        'greeting' => 'Hello :name,',
        'message' => 'This email confirms that your webhook configuration has been successfully updated. You will now receive notifications for the events you have specified.',
        'details' => 'Configuration details:',
        'webhook_url' => 'Webhook URL',
        'secret_key' => 'Secret Key',
        'events' => 'Configured Events',
        'status' => 'Status',
        'configured_at' => 'Configured on',
        'security_notes' => 'Important security notes',
        'security_warning' => 'Your secret key is an essential security element. Never share it and keep it in a safe place.',
        'security_tip1' => 'Always verify the request signature to validate its source.',
        'security_tip2' => 'Use the HTTPS protocol to secure data transmission.',
        'security_tip3' => 'Do not store the secret key in client-side code.',
        'testing' => 'Test your configuration',
        'test_instructions' => 'To test your endpoint, you can simulate an event from your merchant dashboard. This will allow you to validate your integration and ensure you are receiving the data correctly.',
        'support_contact' => 'If you have any questions or need help, do not hesitate to contact our support team.',
        'footer' => 'This is a service email. Please do not reply to it.'
    ],

    'kyc_approved' => [
        'subject' => 'Your KYC verification status: Approved',
        'message' => 'Congratulations! Your KYC verification request has been successfully approved. Your account is now fully activated and you can access all the features of our platform.',
        'next_steps' => 'You\'re ready to get started!',
    ],

    'kyc_rejected' => [
        'subject' => 'Your KYC verification status: Rejected',
        'message' => 'We have reviewed the documents you submitted for your account verification. Unfortunately, your request has been rejected.',
        'reason' => 'Reason for rejection',
        'default_reason' => 'The submitted documents do not meet our verification criteria.',
        'instructions' => 'Please resubmit your documents by following the instructions in our verification guide. If you believe this is an error, do not hesitate to contact our support team for assistance.',
    ],

    'kyc_validation' => [
        'greeting' => 'Hello :name,',
        'status_approved' => 'Approved',
        'status_rejected' => 'Rejected',
        'details' => 'Application details',
        'business_name' => 'Business Name',
        'reference_id' => 'Reference Number',
        'status_date' => 'Status date',
        'contact' => 'If you have any questions, do not hesitate to contact us.',
        'footer' => 'This is an automated email. Please do not reply to it.',
    ],
];
