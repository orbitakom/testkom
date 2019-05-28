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
define('DB_NAME', 'bit1');

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
define('AUTH_KEY',         '[$x}-H;iimwS/<6uN8<*i*TCC,Lp7}*GOo2G]ROue|WaI&Aj?PBS.WAV/S5v}(`I');
define('SECURE_AUTH_KEY',  '[,`o1z/*6`:QfXQasd=zD0z8y?Yco}>(%!d}=KlAPueZ0U2uQM3U3GWl^|-gdVHD');
define('LOGGED_IN_KEY',    '&5v6^iz58vXu*_;:aE,DGdR=){ixz7c}nkdnYP4$m/9.$x3WD/v 8A88l8[2:jN<');
define('NONCE_KEY',        'wm|JWHM!]%5B[PSXUKMP(~C&5X#Unq%)WIK`D=8raW]O(/?7NI|!F<){Bf-w5?en');
define('AUTH_SALT',        '&V2r4x(HY9 (un+(#$ Fw~0MThK,-,xz($*R6cWL<C=o*d+AV)u`!7-aS={/yn*,');
define('SECURE_AUTH_SALT', 'aNbj5wjxfl8sls#u6WNv,cGPL5N&57)n6!+Sd!%`,x$|XWE%`AsX%TeIE5BZsnPg');
define('LOGGED_IN_SALT',   '1EIssYTUeUwsX 8I4[:10EFuV)azqA0[_$/h/2z2smucP6t>NNPaSerQL+Sv+>r_');
define('NONCE_SALT',       '%BlV.%Uma(q6?DEQM}rq/78B3v[3tu8km6K?DaNI,QNXK/:ma+e<y[/Wmrcn) GH');

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
