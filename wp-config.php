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
define( 'DB_NAME', 'programmer' );

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
define( 'AUTH_KEY',         'B`@ua4WUFUEfn`Hg>o{3{8co@u(E]&CBe.?1f#zs$FBc+QlVvZGfntqG|ihGX=ad' );
define( 'SECURE_AUTH_KEY',  '%Z?1>Ml$8sb}GL/utd1t3NOc]lW3aWXYS[WeAITd&S5P|,R;<pX.8QmT=:RU-W;1' );
define( 'LOGGED_IN_KEY',    ';-*#_/%L]i|.$0&yxi_h&.}fEJZ~[Eu5%^}sU5t{q>n-JITt{W-GuM?<QwHos 9H' );
define( 'NONCE_KEY',        'c_/J^~Z #yJ&Kw2?9yXt^nkKE,.n9H$2zuE&<v{$wL]msL;iaoXL:R`5qqIqBku#' );
define( 'AUTH_SALT',        '~vt<3C*tskkNE-]tr@eJdCQt!Yi(*2=K0^D,68CvqJ}fiiQs7#eH+4tV(KB:]A,s' );
define( 'SECURE_AUTH_SALT', 'e[kcAa*DhjZ^8ry@scRq?4Oz18=B fWjwb<pQE/tuE|L+5z,p$JeSX{Y8@iIBFBX' );
define( 'LOGGED_IN_SALT',   'QerW3<2G[~{9XAU?~AkG%^g[E%hQePapuo:Sn?UY)Z~fK`W=ZR!?LFX%yo<y_P2?' );
define( 'NONCE_SALT',       '5d_O~=`SReeOKJmqE=L`~VM[Ed *q*@4anV?SY|9^THN9#>tYx^}_0BPvU_Nq3Ex' );

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
