<?php
/**
 * The base configuration for WordPress
 * @link https://codex.wordpress.org/Editing_wp-config.php
 * @package WordPress
 */

// *** Load custom definitions w/ fallback to default settings *** //
if ( file_exists( dirname( __FILE__ ).'/../site-conf.php' ) ){
  include( dirname( __FILE__ ).'/../site-conf.php' );
} else { 
  
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
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
