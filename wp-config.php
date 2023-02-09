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
define( 'DB_NAME', 'galo' );

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
define( 'AUTH_KEY',         'LAc!a5]t=Hlg4`c`H.RZu|<1tj se<M3BncP~U=8^.+DK1@Do5]v|0Rc~stWpgCM' );
define( 'SECURE_AUTH_KEY',  '+WHOHRgx/ed=o)NZSI-2f&{iH|i!I ]nMJFSd-}0/V@!~=UmdUraP]HksNAdF7(#' );
define( 'LOGGED_IN_KEY',    '4v@7_6hZnqqe-;0D4S>Semk]7PrKFc8*>fG@_R))V#F([p/E$jdl[SS6GH&=#J7B' );
define( 'NONCE_KEY',        'K9cC|B>Q[&31ib`i:hSA0 lg^Sty)M]_OT5vZw82<3TNqlQ)o+jlFuv:*L,OK<@$' );
define( 'AUTH_SALT',        'bv,J;R$hn(le0wA4)MGCZo0K&Y_^BV6s{+@T{YM&|B|MVIrLcL~NS!^2pa4H7)D4' );
define( 'SECURE_AUTH_SALT', '7B>N9u,,t<[A8400o<cvjn=*uteQ(MYd&BC&fff:x7xb12W6el#E,,KDm`F m8ts' );
define( 'LOGGED_IN_SALT',   '!+=]djXZ_{2-UvuIx5vvf?ss`$lD|$s`i&,RH1HTnD7<07y lYT2ze;3CE.0v8K9' );
define( 'NONCE_SALT',       'hmgdYbV2{3-rX=~Zp8j!GRhb)fsc4uaG0z,1+vz#X=0(h0!H/J@/}q+g1dROL}$s' );

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
