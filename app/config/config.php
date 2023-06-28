<?php
$protocol = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://';
$domain = $_SERVER['HTTP_HOST'];
$baseURL = $protocol . $domain . '/php-oop-login-system';

return [
    'base_url' => $baseURL
];
