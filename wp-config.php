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
define( 'DB_NAME', 'wp-one' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '35703436mikemathu' );

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
define( 'AUTH_KEY',         '&!IR6$-uO:#Yu`<g/0^9,m|tjgfgSq)d8^KW;r^c&{l9%th`ZzQB#8]V;f(Wi7S0' );
define( 'SECURE_AUTH_KEY',  '=Dkn0%!.~+q3G|]-gb9I*}.-DJk:G~6/F+CC~b:/}smhlC<[y`(z6W>-Tj`3(kr(' );
define( 'LOGGED_IN_KEY',    'mVg&hkf;utf6@O_OVdXZZUhe&_w8],h3]}[QlWsY5)Xw%_s}l5XmD4j8NvnMoKmA' );
define( 'NONCE_KEY',        'PWygZ8hc-cQa8&qK*D-z/R:_#F|g(-yBuFc;+Rl4*X=s/;if`8r8@YAt{Z*:j <l' );
define( 'AUTH_SALT',        'ub5vC`SE}0o.Sm7;pz,Uj!x_L^ohEFr1IKlfDPnH9&6eHbNwt0|/{Pz<y_c7#i-I' );
define( 'SECURE_AUTH_SALT', '+|9fvxV%eqePiVe/3WFCq/RVv5j/%n&|3cq %Dv8]`3E`ADJOVCu#>Tv5q-I-&.^' );
define( 'LOGGED_IN_SALT',   ' $fyJW#?PW$ $$I)@[a11-?0h+hh31|+A$B9 ^[*~Zay@RUvWpa0Y+GH{n}Z`eD;' );
define( 'NONCE_SALT',       'h[ku5X?|Lg|^/LoPm=MJmlm6zJ7h;0oF95sKiM[C~KEX~h.SY9km[F`Sze#b#|]G' );

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
