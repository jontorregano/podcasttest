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
define('AUTH_KEY',         ';okjOs8=kl@TVjP,;otmc05:)]@b;7qZ_OGoq,{LpA|oTie~:j=mkf=VrKqjfJ-*');
define('SECURE_AUTH_KEY',  'f)=^7;c;k7}{Nwv64Io37t_dm4PUSdhZ=jn?U4KCu2oe4y)_xvqg!vNY}Yeuska2');
define('LOGGED_IN_KEY',    ']Z{;RiEykrloFL7s=9we_pXt&?d3Jg^^Q_ %=f#A d74VjsSe@=3NYJO~3YXOnVL');
define('NONCE_KEY',        'P_]S>Pc9haR@A>hqKd-JV9[%_*1e ]%(BV(x9sL.$1)auf}l(U>/43?B+)FZ(u!e');
define('AUTH_SALT',        'cZYvu3wOi9>C<ncKT?0D%Gp3M$UTEWO/*uz =yS({S8v<Wmbx:E4*?g=*l4s [Nq');
define('SECURE_AUTH_SALT', 'w&jvjV?3+jUcRR{FCOD6EV.3zgD/%V9s#Q|^`.4MPv}[trL,WBy _0E.!b2c4 c=');
define('LOGGED_IN_SALT',   '}l(SbiB`Nivl{4>PZ duv1p`qG/e)@;ItXX1,L,AHg?ou&n^k|-EZOk( (fC}0Vl');
define('NONCE_SALT',       'e=j}7V/$#sTwj2?cPl$^U)~j$30:H<Hv/ibYMrVWH$-X$BWS}i@R9UM~%,E+5ZbS');

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
