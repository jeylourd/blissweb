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
define( 'DB_NAME', 'blissweb' );

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
define( 'AUTH_KEY',         'DWJ!-Y9)xtk86Ri?_1!vn:4h(JU_a0/:k:fHyoDZI9:r!h}^U;kr&h%M:o.7lNK0' );
define( 'SECURE_AUTH_KEY',  '@6;:stUPV?7Iv)!.s@P[li?Se90lMi:]M{C=[d5WJlw30gipsYk=_!^]A[zB9!:P' );
define( 'LOGGED_IN_KEY',    '3?iM& -TKs[$HVl68F5gwlFxW_bkAqh57s#g,<;::=Eu{+lPuP/%tguGy:(a8jo0' );
define( 'NONCE_KEY',        '}2>??L%/cs9llo6#>v puE}RYH&8$9}y@[cwDfZl>Lg@JXTYEpm.,8Iw`qA|;Fvf' );
define( 'AUTH_SALT',        '.VJ 1 V=uOneI6d,ow%G[R30c|dp,G3#1tS,~p[i:Pc5ST2HPu702(>~Wt]jy$@-' );
define( 'SECURE_AUTH_SALT', 'aqF@|Y=>#%W);j^vKhO2z i!Aq.jj_:zK~@2mR#mpKTT^c1B}SmtP7i{Mgi/QfuR' );
define( 'LOGGED_IN_SALT',   'dc!39Nyh45$NX*CdrwQ;0qM5Hn8*0{lBlnp05tK1T}+8_@uOONU!TbSJQ8&}6Be)' );
define( 'NONCE_SALT',       '~{0LGP_]J<@$+64i6ySK=3sQDRKnP^ETMY-H*j&TKTyfTyh.ZZ$jpt~!}`Hw{{ep' );

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
