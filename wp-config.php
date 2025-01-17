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
define( 'DB_NAME', 'publi_3' );

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
define( 'AUTH_KEY',         '9JKz1>K/;wpU+uee]/~Spn|!@$R6W6LE6!C,{T/FkXJC)Oc#RM1-vmp?TZ=j5eY1' );
define( 'SECURE_AUTH_KEY',  'qrT9P?ea~4}$xM),`Z1ePY:|-@~)QxDALBSw=}Dbb->KU3vJ<aXmtz%Z@3Cp}%8#' );
define( 'LOGGED_IN_KEY',    'dFgH^@<*!}Er`=Khtl&I51sBgp4*kNP3-j),HGuA@%Bzl3hbRF9*(7)6{[ENzN[a' );
define( 'NONCE_KEY',        'R>b81^EF)tR&dJ&?Hl,=0Nz]=+hi~d3 Kp^rpbclQqh!n2K-3Sfm#[uo.P=UZV&S' );
define( 'AUTH_SALT',        'V(OD$c2S~zQiHY/c:$KdL(Y;~pe]W~kG&~@rl1Z]ny!hJAS/%E@2?97{-RdUwe{k' );
define( 'SECURE_AUTH_SALT', '8Z2DVHj1 xNu9#iOxj{f@-Pnl>J`9:l%=*1@IeVcV-@=uBHCJ (P|xd.} A/hV)<' );
define( 'LOGGED_IN_SALT',   '}Fhx>?$=XdEbQ*9IeROV1@q6>ts&xf7W|fR!}V]t${l*VGWx(5IyzK=.mjZQ^AA/' );
define( 'NONCE_SALT',       'gdM+lk%E)@q63 l#<|BD_g.U$<fT|<<&{aBK&Bb3*i3sHM,yp_hJ~/+gMg3D0<&b' );

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
