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
define('DB_NAME', 'wptest1');

/** MySQL database username */
define('DB_USER', 'wptest');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'wG h=7R&`w~@/R4fgZWJe2mLih.IzV2PB]HLZr?c};DA1YcU/5lVG9J~1Nhxn@8^');
define('SECURE_AUTH_KEY',  'Ntd2[kR_MFCT_-7lyJWM0oF?`8mF#:s D$.vy!G45i(k/dAv*EpihC[=jq`1$1TX');
define('LOGGED_IN_KEY',    '+:9k{U8PkhrVuqwcxXQvh,{0OS2>aX/E;d@s?veR+-cqo+7POE_O%nE@Z){$8bfk');
define('NONCE_KEY',        '6Ls1w/;;!+KozkF/b;oGW^IKn>ZP&6x!Wek5R_AZW%+5AzagS.<=t5jgj-oFvA/x');
define('AUTH_SALT',        ')Oi O0q%x2;Yxi+sokE*CR/%+{^vsVp0stdU7aWm&/cpS2O7WFz2WMe[;Yr~{30F');
define('SECURE_AUTH_SALT', '522#}}?>[J.{epT!X+OY?ZMQlH0nLm^B9iBaMEutv!RuT*n`;;3#THH:qx@*_L$H');
define('LOGGED_IN_SALT',   'xM)R_xU$[64&}F<!$V&6#P4W9SB{kyBI&dYk/4hoOO`7;jH+yV}uj7t5tFX@~zXe');
define('NONCE_SALT',       '-tfv:74Dv+S`kA?,[aK<h_?}jDiz 9&^9BZj3OVttXel&BBc/v_B::MS7w~WN)d ');

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
