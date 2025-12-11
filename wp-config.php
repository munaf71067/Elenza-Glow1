<?php
/**
 * Heroku WordPress Configuration
 * Database: Kitefin / JawsDB MySQL
 */

// ===================================================
// 1. SSL/HTTPS FIX (Ye Login Loop Khatam Karega)
// ===================================================
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

// ===================================================
// 2. DATABASE SETTINGS (Aapki di gayi details)
// ===================================================
define('DB_NAME',     'r9opuec5mwvbaiqa');
define('DB_USER',     'a50og6twpd9xu98x');
define('DB_PASSWORD', 'cgespck8u3jabqg4');
define('DB_HOST',     'g3v9lgqa8h5nq05o.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
define('DB_CHARSET',  'utf8');
define('DB_COLLATE',  '');

// ===================================================
// 3. SECURITY KEYS (Login Cookies ke liye zaroori)
// ===================================================
// Aap chahein to inhein baad mein badal saktay hain, par abhi ye chal jayengi.
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');



// ===================================================
// 4. STANDARD SETTINGS
// ===================================================
$table_prefix  = 'wp_';

define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');