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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'u.7NzKvI`2Gi*m,371?@rl*1 gPE~/Si~lv,|~k<73v)1c2^cl9!-s_&ZZr,q m?' );
define( 'SECURE_AUTH_KEY',   '5>]K^l/r_p:,}Unc1t81ut>g!0(3j)>+2<3,vg#~:8],TF_uaYIp4s293s1|7f0j' );
define( 'LOGGED_IN_KEY',     'c)mhG,FqL@u5/,RIhAaqW2bk0(o`_u3:z3y_0B*1)If51%$_$E;t>lC14?Sl2k>*' );
define( 'NONCE_KEY',         'lp??8_mPp:~xVjH11~BP?<BwOtgIs>/l[LL+InS85IKBk:&<qbCYN2&CCAHb)HNL' );
define( 'AUTH_SALT',         'DjM_(AZ5.KOua[1 ]=Hh{vJ8sf{c!TE9IILV_aCjuc~?JEtR-#SoDf+VUyV)-bNX' );
define( 'SECURE_AUTH_SALT',  '#X~.wd1IeQbbcADKC)b I7soMA`Y4^FY.pzmU=mAw|XEhb7-w}7*Zw/up4}BABUX' );
define( 'LOGGED_IN_SALT',    'X(v~`/m].bd6X6v$z%Ch4PR1dSu!s=kF,){(t~T0]O=~Q8l^!z{2m;7O)?m508a#' );
define( 'NONCE_SALT',        'ge0$ZC>W.[%(YBt5Un$)u3,|d:Dr1F~BLx;uwi@XRHC{7R?OUL+d@-8Dv$G-4A)T' );
define( 'WP_CACHE_KEY_SALT', 'TmI&hz@OkOIIeeXoZ:C(GrE!GPIB;X9SHFT.l:N/eVhXFw$]s^qu$7{ae0Us=8Uf' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
