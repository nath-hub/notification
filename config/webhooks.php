<?php

return [
    'default_secret' => env('WEBHOOK_DEFAULT_SECRET', 'your-default-secret'),
    'secrets' => [
        'user.created' => env('WEBHOOK_USER_CREATED_SECRET'),
        'user.updated' => env('WEBHOOK_USER_UPDATED_SECRET'),
        'order.completed' => env('WEBHOOK_ORDER_COMPLETED_SECRET'),
        'payment.received' => env('WEBHOOK_PAYMENT_RECEIVED_SECRET'),
    ],
    'allowed_ips' => [
        // Ajoutez les IPs autorisées ici si nécessaire
        // '192.168.1.1',
        // '10.0.0.1',
    ],
    'max_payload_size' => 1024 * 1024, // 1MB
    'timeout' => 30, // secondes
];