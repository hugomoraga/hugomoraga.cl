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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hugomoraga' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'a3121521' );

/** Database hostname */
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
define( 'AUTH_KEY',         '/c`tYAJ:~Ld:G(d[13kY)x`5U_YKE K+rYd-}?B]I(F_#  PVK^e[cK5{i[=wlk{' );
define( 'SECURE_AUTH_KEY',  '}kr oS:( 1?u/.B@v&%s;.hrHy/ih;c 6x}#Z9h0r+84=|1h|ZLtc]P{z@A83*/7' );
define( 'LOGGED_IN_KEY',    'VifNs?<cHM~`&&w@kGl^.Oo6XTGkQU78J3Cxpbe]4r8-8[nQQta;tlNDwa_z>gq<' );
define( 'NONCE_KEY',        '|VJ-^|ZRT%J:|Xe^I(W3aso*]l}<;60<;+Rk9h;iB;SK!HCSxqMYNE:A(@zWVsI=' );
define( 'AUTH_SALT',        '#WysDK.A~{{/G^s;oG)kv0=TSqK%?/eNF0S7pwpRX6T17oU/M(w23&lTXtg!j=b[' );
define( 'SECURE_AUTH_SALT', 'tKM>McWH9;7XLPaUdxUR$[W> C7Q2yBVPbCs[tO68yIz 8&+W7E A?#VDJhVB+Rl' );
define( 'LOGGED_IN_SALT',   '>sn]SO7J*<.V _w?HB3&^5]z<e)0420 #3VSPkS=y@>7M,*?Uk/Dy6j<+Jl]o22,' );
define( 'NONCE_SALT',       '-O)9Q`#dR[;=w!H8&AxQfx@6{Vu]iX_~~ayALVF_IpCMKsXu/d{@ai>==x{ll##M' );

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
