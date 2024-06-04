<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demosite_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '6*<{8:a;PcCq3KP`wON4(d7JOlS%SQecv#e6VzC/:j 2+nj6/boQx~2U|SJxq)mv' );
define( 'SECURE_AUTH_KEY',  '^]?.)?$y(.x5XX}s7oUPBnZc]~b<9ZPf~,{x|1W0StqvR:c]!R`#jdo*I6-RBd,!' );
define( 'LOGGED_IN_KEY',    'A8DEHCyr9dLZs0=l39Y0?5SZ%a,`9B+9PCnfxruq&l!}1EN<x!B4r<Z}9$YTdTBB' );
define( 'NONCE_KEY',        '1E7uTX -l?PR {M~!tQF=CTTc<!wEK7R-CbRfLE&FxSfo7e4]XwVyON$Nm$H:1FO' );
define( 'AUTH_SALT',        '0W]t{Nb2(6_Zv5W1m^cxtcch?3;2Ei{+V?FJ_K*yl7Kz{|F=_RCzM/SL)]vl;hC;' );
define( 'SECURE_AUTH_SALT', '9 5*!Qs>r$ K`W!RTy^&?eLvQ)^t:EAR`_;Uu~aXS#0mr%EZOhZ*e;1aBPs])NKG' );
define( 'LOGGED_IN_SALT',   '?:6852`u8Je~:+y]O@S[K4t(oF&U1iX(77!s38I XyWeqFa(P[SWDCCvw7u<4?(&' );
define( 'NONCE_SALT',       '5#wXAI<<7hT-V:,h$|z]{MYf1t2FTFL]$w6ki|~/J-?N?`pI`TQU:q?xB91gkr@&' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
