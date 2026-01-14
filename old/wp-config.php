<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ihl1600606283922');

/** MySQL database username */
define('DB_USER', 'ihl1600606283922');

/** MySQL database password */
define('DB_PASSWORD', 't4F#oATu8NNn');

/** MySQL hostname */
define('DB_HOST', 'ihl1600606283922.db.11861457.hostedresource.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'x7gxm$LhFUBq*XPP0@f%');
define('SECURE_AUTH_KEY',  '_+*2@$OCz9tMdkEImfd4');
define('LOGGED_IN_KEY',    'yVmhVAk0*@aFVQ7yccHw');
define('NONCE_KEY',        'f9Zwt@8Ok6vXOaB5SQmv');
define('AUTH_SALT',        'LOIJ-!#Fb6v6PY!n)%#&');
define('SECURE_AUTH_SALT', 'qLT_Bt#Kd2TE&aYIHfyF');
define('LOGGED_IN_SALT',   '=KBcSm8#pa9_Zt4+*U8J');
define('NONCE_SALT',       '-jp t#cD0kUTAr*U G8b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
