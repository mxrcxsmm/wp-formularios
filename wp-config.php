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
define( 'DB_NAME', 'wordpress_formularios' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Nb;7iqj?JCmHWn| 4=+)X]ZVNQ;.U?d^4~k}S,j$fEXo^Q&zR}~U>tq^&q<Zh>&A' );
define( 'SECURE_AUTH_KEY',  'uqGu]{lWMc{f_OTytV4wR@>.b8lr=vm826?#F ~c>~997kLyzpk,@hmLEIQ5Fu%A' );
define( 'LOGGED_IN_KEY',    'szqX mb!yR-/,%8R9&&BG%_l.e|uhe<u3_oYBEOKZ3|RVsDDG2^t{9:Te!?b;SR9' );
define( 'NONCE_KEY',        '8A<p~d$ 4-sFY=^q7b<IR.d^NiV5o!Q 1gO,#UxpOm{xlL</bUSE(.7#jkhd9JFR' );
define( 'AUTH_SALT',        'mXvu-xCv+]eH:0vjNy8Yi-,dh,=<ygFiHe5s>)XWQ6z_rZ(J2a+]7*<yB}X$,M)E' );
define( 'SECURE_AUTH_SALT', '&c[ z<-5-`yEErao*T4$6BvAt8)~>/OS!T_MzYQ2V6D.6=]jJQ:)=$<w_V-hj3n+' );
define( 'LOGGED_IN_SALT',   'wb%$xDAdQ*as?5e~vBXN$#v!Tk.9^+WJ2QZ3{NN>REjqAq`G Y~?z.@m7*;]9M4k' );
define( 'NONCE_SALT',       'F=Ctz^E^1J/mM,t/$cqJ6XYyB*D>0Tv#u DdwE4Pg$:~rN?$ua;~i6vNuzVB0)R/' );

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
