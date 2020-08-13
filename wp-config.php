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
define( 'DB_NAME', 'copywriting-and-translation_db' );

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
define( 'AUTH_KEY',         '{}.1EC3emud,+8(rr bP2?5~#@Bfgm=Jk(NM9e)MXmk|%=z_w]aKn=Al>mi4.mbv' );
define( 'SECURE_AUTH_KEY',  'e!M>nD1kaPoX<{E%i[VslZ4m=VX[yAu`6Y[Ybhd~)8!#?].}9<@-*:H/_HpBTc~r' );
define( 'LOGGED_IN_KEY',    '1ON6,JV0=Q3^fqwB!Fd1nd^=@ kUC`x;b8Qv2~|[y`D_(VE(!tr,>k]<eog@OeU}' );
define( 'NONCE_KEY',        '#V5P8v#|S0*ej:*Ee]G`;(8cYmvH3b0pgGu&~Q7UK)YTno.`J4L/*~ v]2?Bnc| ' );
define( 'AUTH_SALT',        'BLVs;D`yqQ@vQ$g/4vu3pY@ykN2kkuQ#k0nRPED>VoJF^MkS9sb`;1^[xI(dA(^x' );
define( 'SECURE_AUTH_SALT', 'r%H{{XO0R~pFUP>)?0})!@yrTC4)W/Ku cD}P:j>6Mf~;+,ZV3;?FXStKvSzjyak' );
define( 'LOGGED_IN_SALT',   'h?%7{!,j<79*uEX*Ab0&]{CDB9FTgTS/_eD}CoX$gSr`a,wZJ_Tf&Ymm^<*mvs}`' );
define( 'NONCE_SALT',       'd]Oxs{BWaV{5%FSH/@5.)w-nut=j*#YowdzY,EN]-^Mhfqql@x +v0xJRNnz3KRo' );

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
