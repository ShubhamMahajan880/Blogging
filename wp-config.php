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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'f{n$h!M!qj< ]qzqxDjI:UhWR%x_S9R}SD;=_eWK^,Uu9RoyCEmq!&H/Iqx3KoBT' );
define( 'SECURE_AUTH_KEY',  'r3Na1X`%4f_o<b+YA6Ys3r--`3]Zr(iF4BK::qIzvg`orW?D1/)qgzPsBHD.?Re_' );
define( 'LOGGED_IN_KEY',    '^t;GhcX.Q`,8/ kbcRoe.**Un`cm02$=MuD62JNn1yJEF..QgNcg*HqSc_,=Gm;V' );
define( 'NONCE_KEY',        'bDAAWI,uvJdc!&7*6,cHoEXF+amq,^[7d8|u!VSD1g/-oY]#%:(BJ>UNx7gGN$`4' );
define( 'AUTH_SALT',        '|tl?x:vIZD(A&RvM|=81!K<xF>OQ<V.ewp!(i_:R5-OnJ.f/msqB[6_qYH_5-ffh' );
define( 'SECURE_AUTH_SALT', 'y]@[hlkMlf`b&:S3@~h SH^m0`t|,Bakte$66gZJW(uy0$UQ#Q2-UwB%M1Rm(J<B' );
define( 'LOGGED_IN_SALT',   'dQT-E<gY_cC.)ZU(FB!`!zi)AW|ont5~9t0>J[P&Aeyjb;xR9$t?H)87[`jhm0#H' );
define( 'NONCE_SALT',       '-0-NfrLk$Cu:?O]>&vP?|6_XR$z=PInFVsP YF/2#/We]t*8Wr%fmOmu#ct4q<v2' );

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
