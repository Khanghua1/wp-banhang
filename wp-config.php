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
define( 'DB_NAME', 'banhang3' );

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
define( 'AUTH_KEY',         ',,K43!Q-wy6y{w1Wym`,`L&UE#T4[Pv;AFDC`(yL<F.3oE2)c#|ui@eEN`.PJ*yb' );
define( 'SECURE_AUTH_KEY',  'NJuK`>sV@fe2Iz.=u{>1caF(.BMeN,4_ >CDO/@6 ll Tio4RVI?IZDkY1M+%Upk' );
define( 'LOGGED_IN_KEY',    ')-){!~xw* f>G#TB3}g/e6~;~BcG#su*?I(@)G#v<[Tp~aYSIU B0iae:CV9=tbO' );
define( 'NONCE_KEY',        'aimgM}~88r*#_L$+)e8pk59v5w*D6}#}do#gY _E@gPdU7jx3*Sh/=0gi>peb.Og' );
define( 'AUTH_SALT',        'H<wZ($:wDRrUs:q4@~/J&Kmlt*T6ZZSI,8,AM+War1<GZi=vc%tGc-czXm_h2$0i' );
define( 'SECURE_AUTH_SALT', 'Q)!Ap3G]nyX9c{BEFXy/@<0*WeERR.2q~#5QW{9e,Nnt#.pn1)vMEXJlZ1Sl7Tut' );
define( 'LOGGED_IN_SALT',   '_A[-Zyejj0X#q@;{z,^nlwke8Y3w[m`Pts%H4o-c{?PH*o7jeo`pRtYl0@Ru_-q0' );
define( 'NONCE_SALT',       '&L6A+P{qEF5SC&qh+T%f`-TT/vyh<l +9^*saVJe{45l=7|*c37K<d8ph}_CEdM3' );

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
