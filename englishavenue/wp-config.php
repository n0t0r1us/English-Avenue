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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'englishavenue' );

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
define( 'AUTH_KEY',         ')z|PL ^`Ng~F(~>)h/C?A/aD^%2+_-0[e1n%8jX`bdB= v=>Nzr~zk2y+FPm,hmB' );
define( 'SECURE_AUTH_KEY',  '(A]ZvQ7$Cm&7>dh_[B$ZB@(d5xonHcAxVEL7=|)@$->}cX:=I> RD4oQT{9:GZ0m' );
define( 'LOGGED_IN_KEY',    '57?=UG<Fo{V0a}EEYB/$(kg!nsQ]e0?}e,hP$Kyk,VMOHiU7;&ph{ie#E`P9j({>' );
define( 'NONCE_KEY',        '!iDKsN]f[yV>R-UbMA#i.15Bs^Ee9a+/d8mVT~jRS{@nsO(&=(ZxZ.bH_}Ppa[T9' );
define( 'AUTH_SALT',        'A^1A$_-GMh,MJA1A_=P%zskUSMQXR]h9W5VC9:$A{KOz+8hCvmGP$q=R @mjwB`b' );
define( 'SECURE_AUTH_SALT', 'vj3*Wo[0GET-4DEN+KZl3XZdg%vF0wy;]!uB5jWvx]-F:#+ib fIxmmqM(Y0LsR0' );
define( 'LOGGED_IN_SALT',   '6,J}`[?d1T`1NI8za2tW)P5BssUJA(3O8yIW!vqJJWT4jNsmHwPb&/(0=SC^]1pD' );
define( 'NONCE_SALT',       'vk7#e1_:.X;E~Uny6.h~r;c}wHGAX)Ee^#dRs|>Bx;.ZG-)]ZwIWNwBpv/sXdk;2' );

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
