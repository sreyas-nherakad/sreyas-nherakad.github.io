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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'volume' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '<G-^[0uJd.1-gFOS<+V;MVy. +TDsW+rgy(G*H|7}Kz_D|[%^S}pMc}(RY1w5$#Y' );
define( 'SECURE_AUTH_KEY',  'i0t2))[DxMUj]4NgWWo!k.3u~_W<eYu8~H;):;Ujtsru=q=#Q<h5(mv}U<_5<e9E' );
define( 'LOGGED_IN_KEY',    '42xGM{=HQTCoJwaI+[EI!,T:*3}TG!2vMcR3! O]B)!-EPcN1@Ar+01P LugWJzt' );
define( 'NONCE_KEY',        'wPN}JX;yKp@>o:bzL;FEM/TD[5-0:>|2@&1W_#Ma#:hu}d5c%+=]4q(M0!6-hQ{.' );
define( 'AUTH_SALT',        'grZ><>/7:e0f_y+}MC`6fN$cWui0+yWEjh#+ni(HKG|V^S:i>H!yKdlH^z8R!#D<' );
define( 'SECURE_AUTH_SALT', 'MX%wMlq,wD/uD#s?>MM+Hd4gctamL6)ub&qsWVRutH06gCHRl,>m g T-*}Owz{M' );
define( 'LOGGED_IN_SALT',   'mfsk+}1Z*,0~x(Pxpw~#Z6i~{jQTeY^8JvvWre,L-a^3tof-iRr`r)_dK!j6h&AK' );
define( 'NONCE_SALT',       'ddEeJ,.*pBe$dzcy|;*-Cl|%!vDj2jG]`(hm7gBG`RKL|>E=Y32iX=W~L*`=fC[z' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
