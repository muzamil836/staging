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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

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
define( 'AUTH_KEY',         '!(*%C+Oj4Z*=,rd[iH!>| Pu {[P %}YKbQzT`7yjq#?s.R:|-->!J&s(Q0[vK`h'););
define( 'SECURE_AUTH_KEY', 'jBUZ-63`}+sF%A);+uB=}3sUO?0Xv[$MsbKSB|9-Tys_Lz_`#$^qI;R)IU;wG#7b');
define( 'LOGGED_IN_KEY',   'Nb0)hi[u%xI}8)^v7}LufR!R`X&*~t<03eTpX@C-&-W`x1:,GLcrpqA%@aB*7(8`');
define( 'NONCE_KEY',        ':&?17cs7k~H?[V$Li|~$Sj+MC6FyGtz#]:|akdQoq|XhIvk]Y_WRBR3&nx!/S2Fk');
define( 'AUTH_SALT',        'E;[yX07:-dJqNb6P9Oh*s%FSwyNbfYE/83|$J<{9TuBtgU4L+;!/OwaDalS<,-0W');
define( 'SECURE_AUTH_SALT', '6R{JM7[aZ,!nbK:oJa&Y{xMn+}( KRODLa_<<looAf5aumVr UxURSM~5/NZQ<nA');
define( 'LOGGED_IN_SALT',   'x;P_H.<6EW+1k[WLHZu*j~n6%>N78ZQbNO~jd*-#X2V&N-t<_esE&|4VnVtXRJ9!');
define( 'NONCE_SALT',      '=GLkeIP+gh5{QBvo#X.Xb$$+F5c<+(RJ>8(q}wzVjZ9T@)4No|Q0?.>-6.&$EmDw');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mysecureprefix-';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
