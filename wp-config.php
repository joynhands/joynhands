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
define( 'DB_NAME', 'joynhands_db' );

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
define( 'AUTH_KEY',         '@>LL])/I.GQ).),IiPY:Q0v^mNIpTm xRPC!8%6jpP2Z5,I?l^U^]*fd kyXcL@n' );
define( 'SECURE_AUTH_KEY',  'hlnq0vqa<P+j]V^mDtmDD&UUD`<k-|Y%M{)g#rt.P r#Qj1GY9VR!(P$hSCidOHu' );
define( 'LOGGED_IN_KEY',    '[Vd9G63M8$lE?o#ezt)wA}O%H%pMVm/Pf#SA0IJ94e]~t3`tCg,)eb2Fj28&*r_}' );
define( 'NONCE_KEY',        ',0LV,Gf}G Y?vk%pY8a46KlU0XOGe|i|GZ:P,6j6[NI$bPLw{aBk_e*KS(f^RAkn' );
define( 'AUTH_SALT',        '@Yz_; <]|/./[Iu=m}&*!DyIIV`IBqPpU6ncnCRxN`4r+*=k&l0:Ki|JS9bM}_:`' );
define( 'SECURE_AUTH_SALT', '>EP&g C +;H_1UXw(VeD?!a$]Qmb0^<l/3{A_(,<v]6&LdeeMLg,;AiLY~)q1}%X' );
define( 'LOGGED_IN_SALT',   '=24TDv!8~-VRnziGjmO@WK+d8b470),x<K@P=-,EnDKY9XaMV~Za)S:]d}2p?Bu_' );
define( 'NONCE_SALT',       '|:6V<{+bw@._Kft@{t&M>#C=s _O63!zc5qZ87FjEs|lMz,`6{aH?<NlKF2=cZqx' );

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
