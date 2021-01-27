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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'egija' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[T;lQ.B_z>D/T)!6JfE1`6)V}n?;&N3~g/%tE64r.@_*IvH-Kc {gpHCh1F:]/Z}' );
define( 'SECURE_AUTH_KEY',  '7,6a+1ppo:=h!?T6V5DfEzOw)[7%;=UGHb%_e%&n#so&Jf bth(PU~QECFp+?/s[' );
define( 'LOGGED_IN_KEY',    '#e]w]uHW O,[|A=CB}.a8Wp]bTr4Cu}}v~woYi0~1Oz^%`;<?Cm8j;pi@#_cw4U ' );
define( 'NONCE_KEY',        '%VO*OQ=2-6SdC)33xVSKJ8P)>%JK5<3hshXm^Wkqx[o_eAempqAHG:k)arX?-w&N' );
define( 'AUTH_SALT',        's9r*)9Xl)04^LnoK}~BtUvX9tqsqDz~.wAScd<*m&U5q8lS%}-6C o[uiR4T#N6x' );
define( 'SECURE_AUTH_SALT', 'x@4%]/`e)OC]{|`]2q/1S)bb?!Is>nodBFYIh?iqh?jsG{pEue;!2oU8LZl$Evjd' );
define( 'LOGGED_IN_SALT',   '|:xQ[h{xeYU_)[_tecz~- [i? bX&uP@@IKZD=LbAKm-n$E63;k?%)oZe3h.`DSi' );
define( 'NONCE_SALT',       'B?%<qf<t}8J+lKHnOH3xBSA@u2XikRV~<n6QQP2xNB<Ho3it_Oggk/<M(tE+O-ou' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
