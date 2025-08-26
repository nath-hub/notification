// resources/lang/en/emails.php
<?php

return [
    'welcome' => [
        'subject' => 'Welcome to our platform!',
        'greeting' => 'Hello :name,',
        'intro' => 'We are excited to have you on board.',
        'instructions' => 'To get started, here are a few steps:',
        'step1' => 'Complete your profile',
        'step2' => 'Explore our features',
        'step3' => 'Contact us if you have any questions',
        'closing' => 'Thank you for joining us!',
        'signature' => 'Best regards, The Team',
        'footer' => 'This email was sent automatically, please do not reply.'
    ],

    'verification' => [
        'subject' => 'Verify Your Email Address',
        'greeting' => 'Hello :name,',
        'message' => 'Use the following code to verify your email address:',
        'code' => ':code',
        'expiration' => 'This code will expire in 30 minutes.',
        'warning' => 'If you did not request this verification, please ignore this email.',
        'footer' => 'This email was sent automatically, please do not reply to it.'
    ],


    'password_reset' => [
        'subject' => 'Password Reset - Security Code',
        'greeting' => 'Hello :name,',
        'message' => 'You have requested a password reset. Use the verification code below to complete the process.',
        'your_code' => 'Your Verification Code',
        'code_validity' => 'This code is valid for 30 minutes',
        'security_warning' => 'Important Security Notice',
        'warning' => 'Never share this code with anyone. Our team will never ask you for your verification code.',
        'instructions' => 'To reset your password:',
        'step1' => 'Copy the verification code above',
        'step2' => 'Go to the password reset page',
        'step3' => 'Enter the code and your new password',
        'reset_button' => 'Reset my password',
        'expiration' => '⏰ This code will expire in 30 minutes for security reasons.',
        'alternative' => 'If you prefer to use a direct link, click on the button above.',
        'support_text' => 'If you encounter any problems or did not request this reset, please contact our technical support immediately.',
        'footer' => 'Account security - © ' . date('Y') . ' ' . config('app.name') . '. All rights reserved.',
        'automated_message' => 'This email was sent automatically, please do not reply to it.'
    ],

    'password_reset_success' => [
        'subject' => 'Password Successfully Changed',
        'greeting' => 'Hello :name,',
        'message' => 'Your password was successfully changed on :date at :time.',
        'security_message' => 'If you did not make this change, please contact our support immediately.',
        'footer' => 'Account Protection'
    ],

    'success' => [
        'subject' => '✅ Payment of :amount :currency Confirmed',
        'greeting' => 'Hello :name,',
        'message' => 'Your payment of :amount :currency has been successfully processed.',
        'details' => 'Transaction Details:',
        'transaction_id' => 'Transaction ID',
        'amount' => 'Amount',
        'date' => 'Date',
        'method' => 'Payment Method',
        'thank_you' => 'Thank you for your business.',
        'footer' => 'This email confirms your transaction.'
    ],

    'failed' => [
        'subject' => '❌ Payment of :amount :currency Failed',
        'greeting' => 'Hello :name,',
        'message' => 'Your attempt to pay :amount :currency has failed.',
        'reason' => 'Reason',
        'solution' => 'Please try again or use a different payment method.',
        'contact' => 'If the problem persists, please contact our support.',
        'footer' => 'Payment Service'
    ],

    'refund' => [
        'subject' => '🔄 Refund of :amount :currency Processed',
        'greeting' => 'Hello :name,',
        'message' => 'A refund of :amount :currency has been issued to your account.',
        'details' => 'Refund Details:',
        'transaction_id' => 'Original Transaction ID',
        'refund_id' => 'Refund ID',
        'amount' => 'Refunded Amount',
        'date' => 'Date of Refund',
        'reason' => 'Reason for Refund',
        'original_amount' => 'Original Amount',
        'processing_info' => 'Processing Information',
        'processing_time' => 'Processing may take 5 to 10 business days depending on your financial institution.',
        'expected_date' => 'Expected Date of Receipt',
        'contact' => 'For any questions regarding this refund, please contact our customer support.',
        'footer' => 'Processing may take a few days depending on your bank.'
    ],

    'pending' => [
        'subject' => '⏳ Payment of :amount :currency Pending',
        'greeting' => 'Hello :name,',
        'message' => 'Your payment of :amount :currency is currently being processed.',
        'details' => 'Transaction Details:',
        'transaction_id' => 'Transaction ID',
        'amount' => 'Amount',
        'date' => 'Date',
        'method' => 'Payment Method',
        'estimated_time' => 'Estimated Processing Time',
        'next_steps' => 'Next Steps',
        'instructions' => 'Your transaction is being validated:',
        'step1' => 'Do not submit the payment again',
        'step2' => 'Monitor your email for the final confirmation',
        'step3' => 'Contact us if the status remains unchanged after 48h',
        'contact' => 'For any questions, our support team is at your disposal.',
        'footer' => 'Thank you for your patience.'
    ],

    'receipt' => [
        'subject' => '🧾 Transaction Receipt #:id',
        'greeting' => 'Hello :name,',
        'message' => 'Here is the receipt for your transaction of :amount :currency.',
        'details' => 'Transaction Details:',
        'transaction_id' => 'Transaction ID',
        'amount' => 'Amount',
        'date' => 'Date and time',
        'method' => 'Payment Method',
        'status' => 'Status',
        'merchant' => 'Merchant',
        'description' => 'Description',
        'billing_info' => 'Billing Information',
        'customer_name' => 'Customer Name',
        'customer_email' => 'Customer Email',
        'billing_address' => 'Billing Address',
        'thank_you' => 'Thank you for your purchase!',
        'footer' => 'Keep this receipt for your records. This document serves as proof of transaction.'
    ]
];