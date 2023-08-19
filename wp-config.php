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
define( 'DB_NAME', 'vnzla' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',          '`UqarD7Q0,(?%|!C)?n!@-s-N7`X+@nS-kI_O#oG(H8/{VV*/1rVSsu{GMJn%r[b' );
define( 'SECURE_AUTH_KEY',   'H1%u=j9S8c0~bL/BPie~O2CO{~pm>YD|~T-C!MfC L)PF5m(,hFM*6pK; &]~_r>' );
define( 'LOGGED_IN_KEY',     '$M?1 M^XQ!$W.LrgdJrA^pT,NR@$~FY)5*>9}Ja;u,_=.g>^`R2qS]AS@O+0tE6:' );
define( 'NONCE_KEY',         'l:Y<B]kJBNKdVUC[fXtWs,D$z@P1^WV|`.qy;ka*}rkjEQrr#Zt[F1](LXitgC8M' );
define( 'AUTH_SALT',         'Fc:,js;sB3a9u4`wn4{)CT=bEUg}L}?,q_bgdc~1a)0@3L8$q}%?(gjr4=?A]W51' );
define( 'SECURE_AUTH_SALT',  'Jwf&$)qjq7)q6?P,AKGHFWCkAC8u8 ,3(RWncH7?is!:?hn~+b&_X8/;djKe+X}A' );
define( 'LOGGED_IN_SALT',    'dy,0!0bAON d[XeX5HH37,R&FC!U^Pw&G|zFYwhD7z_T@F(QJ=|9*pAka]Q:; wY' );
define( 'NONCE_SALT',        'P*W?:m2HPm4?M_:g~<7Wd]*xm?^]To-O9GSBf/a.y+mgV1|,M7+S6T+rL{8s>yZn' );
define( 'WP_CACHE_KEY_SALT', 'dGfeOK$)O:Vj60+YxS}#PF@88)|sShbO#^tL,XkxvvC)C!;Xon&>bP{$msL}r!zc' );


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
