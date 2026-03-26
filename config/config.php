<?php

// Global configuration for the application

return [
    'db' => [
        'driver' => 'pdo_mysql',
        'host' => 'localhost',
        'database' => 'clinic_db',
        'username' => 'root',
        'password' => '',
    ],
    'app' => [
        'name' => 'Clinica CMS',
        'version' => '1.0.0',
    ],
    'mail' => [
        'smtp_host' => 'smtp.example.com',
        'smtp_port' => 587,
        'username' => 'user@example.com',
        'password' => 'secret',
    ],
];