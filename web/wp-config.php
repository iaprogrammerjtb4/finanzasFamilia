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
define( 'DB_NAME', 'finanzasfamilawp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'erMx$wQoep6#t3A`RT3^3,upV{wQWJxdy$Ow]w&N(1gv+aiOrI*Wby{t]qXm`qZx' );
define( 'SECURE_AUTH_KEY',  '<wMB0^2rLZx)O1B,&>HK,~X+iQP7yX39_w)JsJ?VCEjY$>L+#C/9t<0g,k37BX94' );
define( 'LOGGED_IN_KEY',    'm3+i#4<XjQ[_i67O}^BPvqI$3hyzVNQmcB456mZvE,+9{UJ|Sn+1YE:c_j<:it [' );
define( 'NONCE_KEY',        'H!fA?10Jc6QzXoea!5Vl<,SeNuF-bt:V3eWk%y2;nlFhZ@f+Vuy<~<xeqB-R6w-W' );
define( 'AUTH_SALT',        '4AcILIkcB*!Y!4rJX{^^h*EU^uXoWqZ#f>a=`DYhSeu~<J7Oj]#]r`itaVYLh!o:' );
define( 'SECURE_AUTH_SALT', 'ez)[#[C2pd{]FmK n0`48[.nxB^V?![wzhP`_6Lu|n14Dk+@(B9N<BQh0@i?_|!i' );
define( 'LOGGED_IN_SALT',   '!L<K*7HpF>GG#UjaeM?G6}(oLU8brEm+ fw<&#O>n{Gp/fR81TK}dN8|53gR)H.7' );
define( 'NONCE_SALT',       'oBwh hCXCZHt!p[oVdv<qouAPj]qdFca:2XVP-*wh^CgE<KWW^K.5}AGj+B6+RN-' );

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
