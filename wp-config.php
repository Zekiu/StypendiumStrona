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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '448qwErtY697' );

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
define( 'AUTH_KEY',         ']6`eY%Q{n[-iOluwf%{T4-1x,*7k _tP8Ui(W&T$Y<`+}C`%b`,64KU#+*PNG0Ul' );
define( 'SECURE_AUTH_KEY',  '=5$6*I>36rmuQi<`~Vz.X K_Uia:]tC=r;*7H#u2ZZa^2^3uJPT8ba|#Lb^Ez4._' );
define( 'LOGGED_IN_KEY',    '@Wk#VHO)5(%dcE*14/{D tF,W+l^t 2*%?YKcYC(ifXw[fCb}F~k[7<%njxIeyR>' );
define( 'NONCE_KEY',        'dD}<Ztn~a*HuyPp`WiA)$2_[e:^RunKv_y^bd+~e2>+(^S6x+X*EG[:u`lTK_4JK' );
define( 'AUTH_SALT',        '&+?X}` :bUez4FC?zNa|fBN*WKkX9M/bx^wvAzFk8ti7L4&B/f0iNSd7F?=b-cX7' );
define( 'SECURE_AUTH_SALT', '0X%ud=>!Wu0<4mJBq`o6=,Pinl(EX0( -If1-`5@fL?F-_h+!nJP<VytgW<0ZV}J' );
define( 'LOGGED_IN_SALT',   'm^k!>VMqZh;r)k[g!62U6muMA<UeS^R<+GT;%%(J8z~eJw!p,/c`~nKI13F$hK^~' );
define( 'NONCE_SALT',       'A:|J1W4ba3#C!Dd]+;-Nw(]b[sbG`l:~_aMT5OxP%1s` +(0a(_Q@%nW/9b5E:LH' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
