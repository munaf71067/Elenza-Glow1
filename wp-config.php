<?php
/** Heroku Config with SSL Fix */

// 1. SSL FIX (Ye aapka design theek karega)
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

?>