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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '3rdAssignment' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '#q~v}J5J U(_[u~EFd?8/WU]@V52}xF7DGge%7*,zTCdz7Ysyt.L7F<AX(& RqP[' );
define( 'SECURE_AUTH_KEY',  '!YT,4,<(eFs37<@C+s&PlHch`!jJl/(q/Zk#0rNCq:`74IA(?~6_J*,US*HnKyU^' );
define( 'LOGGED_IN_KEY',    '90qu-fcQtqT89%A:xr?M$eXorH~+*Lt[sk*DhDWtiUd&ER}PT(+ZMP!lpfJ*W!|)' );
define( 'NONCE_KEY',        '{-|mkW5gt|rHSE&p%8gV/W->^V$@i>2sf<$?3i5StnKrZ2NC$t8y4OSp$m[]$gM ' );
define( 'AUTH_SALT',        'R*SY!*Mw0voA bB#]l9r)`RSBU@mcN-s.*~(3sGR7GaRj,X7W8PJu.jDA3+!4fH2' );
define( 'SECURE_AUTH_SALT', '~!C!8-+~mE1n$cP~o&VXct;Sf;(.@8X9EiS{Y=KAQC3}Z/Nx3Waj8es9UUug{Y(1' );
define( 'LOGGED_IN_SALT',   'PcJ9blzK0&W9##Sc|K4!@+/E_*v77[vs1ex%fjg8lG[TSdtynpGBE]]ehR&P.cYE' );
define( 'NONCE_SALT',       'l3uK>>H,<$u.$;SBM=hSguT!bE={,ms*!HYA#kt`tg?!<U{3VL21juvo(G[[Hm*3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
