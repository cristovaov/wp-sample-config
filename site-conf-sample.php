<?php
$address = isset($_SERVER['SERVER_NAME'])? $_SERVER['SERVER_NAME']: '';

// Debug options
// define('WP_DEBUG', true);

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '../core/');

// MySQL settings
$table_prefix  = 'wp_';

define('DB_NAME', 'wp_dummy');
define('DB_USER', 'wp');
define('DB_PASSWORD', 'wp');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

// WP and Home url's
define( 'WP_SITEURL', 'http://' . $address . '/core' );
define( 'WP_HOME', 'http://' . $address );

// Content directory
// define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/content' );
// define( 'WP_CONTENT_URL', 'http://' . $address . '/content' );

// Define WP Multisite
// define( 'WP_ALLOW_MULTISITE', true );
// define('MULTISITE', true);
// define('SUBDOMAIN_INSTALL', true);
// define('DOMAIN_CURRENT_SITE', '');
// define('PATH_CURRENT_SITE', '/');
// define('SITE_ID_CURRENT_SITE', 1);
// define('BLOG_ID_CURRENT_SITE', 1);
