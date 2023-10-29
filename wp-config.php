<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

if (strstr($_SERVER['SERVER_NAME'], 'localhost')) {

    define('DB_NAME', 'local');

    /** Database username */
    define('DB_USER', 'root');

    /** Database password */
    define('DB_PASSWORD', 'root');

    /** Database hostname */
    define('DB_HOST', 'localhost');
} else {
    define('DB_NAME', 'u528206822_recipe');

    /** Database username */
    define('DB_USER', 'u528206822_inonab');

    /** Database password */
    define('DB_PASSWORD', 'INONab@053508384');

    /** Database hostname */
    define('DB_HOST', 'localhost');
}


/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if (!defined('WP_DEBUG')) {
    define('WP_DEBUG', false);
}


define('AUTH_KEY',         'WnblqKEl17pmJXvkN+LfBvWPB78CJZZJ4dk/OZC61VXjjnRi6TPekCWeG5te77JWXAtvA7zDsLdiqrVUeGNwHA==');
define('SECURE_AUTH_KEY',  'g3e4b/0bUTM9HcZgyitd+gFEWXwpJ/XDIyFwaUN9uPTdZ/z/1p9/3kvXo8eOsslTMV5iAJPRMRMrcLBiyRaN/g==');
define('LOGGED_IN_KEY',    'F07tqBkDFLauVyZrmry1jQlRgEtQsKGhwWF67E9Gj8VDlqNgzMRgxKWH0envlU73uE0yxIriwQbxZxRqvj8TCA==');
define('NONCE_KEY',        'WoyN2E6NTHkMSk5dQImzqY6uHQ9f2B00B3xori7P3is+J7e9CAmC4X6pt3iqGAgyt3KqH0dfWeroEPqDUIon8Q==');
define('AUTH_SALT',        'Y7pbt01CSAnx3jCZtCADtxgoFODERZTma6yUjoRein9DYQcuUFAtzsX+8+Z8Muq+tiTiRKFs28B1YBzjnAx54w==');
define('SECURE_AUTH_SALT', 'SWV7ON8CQOtPv23yCRjxKtUy/qIuaZ1zswd7NRTApAYSMSOuWez/EACHPpuGBcFa53LkPCwZD7bA21I46DVtqQ==');
define('LOGGED_IN_SALT',   'Z9A0qmOhXeGZtJPG4ni5Ks4ll9NkPQLvPZAcNjUJpLPMuDUCujoxtLCTkz5sI5YHNOGXX1dWEBKshFqj/bPYOA==');
define('NONCE_SALT',       'QuABV/IA3XiqQIc0mudUejb6F94YWizI3hKIf5DEv4IJQRNngihxRheE1dpQPh+6KVm1HrW3DEMN0OByoxA4NQ==');
define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
