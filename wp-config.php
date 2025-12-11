<?php
/** Heroku Config with SSL Fix */

// 1. SSL FIX (Ye aapka design theek karega)
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

// 2. Database Settings (Heroku se automatic uthayega)
$db = parse_url(getenv('DATABASE_URL'));

define('DB_NAME', trim($db['path'], '/'));
define('DB_USER', $db['user']);
define('DB_PASSWORD', $db['pass']);
define('DB_HOST', $db['host']);
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// 3. Security Keys (Filhal dummy hain, chal jayengi)
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

$table_prefix  = 'wp_';
define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');