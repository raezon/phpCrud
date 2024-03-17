<?php
// Function to load environment variables from .env file
function loadEnv()
{
    $envFile = __DIR__ . '/../.env';
    if (file_exists($envFile)) {
        $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (strpos($line, '=') !== false) {
                list($key, $value) = explode('=', $line, 2);
                $_ENV[$key] = $value;
                putenv("$key=$value");
            }
        }
    }
}

// Load environment variables
loadEnv();

// Database Params
define('DB_HOST', $_ENV['DB_HOST'] ?? 'localhost');
define('DB_USER', $_ENV['DB_USER'] ?? 'root');
define('DB_PASS', $_ENV['DB_PASS'] ?? '');
define('DB_NAME', $_ENV['DB_NAME'] ?? 'articles');
define('DB_CHARSET', $_ENV['DB_CHARSET'] ?? 'utf8');

// Other constants remain unchanged
define('APP_ROOT', dirname(__DIR__));
define('URL_ROOT', 'http://192.168.1.87/php-mvc');
define('SITE_NAME', 'MVC/PHP');
define('APP_VERSION', '1.0.1');
define('APP_DATE', 'AUG 02, 2018');
define('APP_DATE_TIME_FORMAT', 'd/m/Y H:i:s');
