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
define('DB_NAME', 'LTHK-db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '`okMg1B/Nms2-48`KSdr>WQ`gG ?:X4VR66xG{H2dL}T-g.qY:~-AximjE>*}U<-');
define('SECURE_AUTH_KEY',  '*pWGd%%MbgXNgQ/kDgp:+2_utU6(MP>+~4)Vd4S IF=pnNw|aZU `N_h^6y_g^K{');
define('LOGGED_IN_KEY',    '#,N.2I,S]2L8v_!k,[a$lOnjQxyLfDqWV4Vp-9-6kiL>n`#pFJz2H%f6F8mj45~a');
define('NONCE_KEY',        'N-B_(>X%ErblSj|9g}zr1?PZf-Nq}wP.`Vt-ji`$q7i=:}bk.K}jYSs_@9Y&aG4s');
define('AUTH_SALT',        'uoLm]l#mS!?-IRPl:Vm2UJ}b8B9>;+$<+[Q}g0%}gO)G1%<sK}xQ9W|4$IE$Asyw');
define('SECURE_AUTH_SALT', '0*.F75ECns&NN elVt-nmVDy_uuPxrmQnPs}8ELD4`e@7ko?C^1wW ~E4g5.:s*B');
define('LOGGED_IN_SALT',   's!kZfpLOsVA^XJSg2w@SQITJ.OsOE>&}H0U7Gcjwq^gRd&^*<e151jX{EJLT3poa');
define('NONCE_SALT',       'KWx@GX#08okCM<tP#i38Mr}h:AqZ`E{s[N|7-TS|+v4K2]SckN&K|b4:Hp0QSTLw');

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
