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
define( 'DB_NAME', 'raps_wordpress' );

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
define( 'AUTH_KEY',         'Tz]A0,1]1=@EG+`swCvNo9^M_c,f+tx=og:Aaj($$[8wItwy<K$$)aKrtln7l8#}' );
define( 'SECURE_AUTH_KEY',  'j%EH/z-dm0_X#IHzNXw(I|~NWGe_}4AAhw}2UxP2<zE$g~LGrRu__Y~yld5{E/C=' );
define( 'LOGGED_IN_KEY',    'p}MP1d.|IGcrvBnLi~OVjq ^x3VS;NDQE/)6V$`@5:0rr{2=| L_7!X(6cFJ8W2U' );
define( 'NONCE_KEY',        'F:x@Z[#$! DFMiI=2o*vh0kTODuCC(CFsY79}%(tp`?&m(#F{o8 PWE.P4ua7ciL' );
define( 'AUTH_SALT',        'nu<|eU T8UUt&WmgDVI^s-L2jEidJG$If9X%b:v^7Nt *9.h|-Yc9WMQPB7?S;tZ' );
define( 'SECURE_AUTH_SALT', '`DNao,yE^n60::Kx@/BGux)6*iV B~J4fivE&$4Dj:QIWy@wL?`+i!b<hw!Lxedn' );
define( 'LOGGED_IN_SALT',   'L 06CbpE7PV APn@8)O&@Fp6?&I] <?@GEo{KDF<qP9sXQXNsfZhORJvg@VzRIf<' );
define( 'NONCE_SALT',       'J`n:xr@g%f#tT1;xGV_69Q@^kMm+r;W<k/hLNfmJ/_:VJRUm3_TD4lLc8k#d+W f' );

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
