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
define( 'DB_NAME', 'dummy_wordpress' );

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
define( 'AUTH_KEY',         'JrToa~3/<l};}^fi7yVB![Gx9jz9#(pM4t4$%GEZ8wTz4f#3p}Xa~&]fn{Pj9I@v' );
define( 'SECURE_AUTH_KEY',  '%?.s53|PtMIvTR6qnav Y4WJ5a,PtJ^jhUigxhrjk7gRVKy-gy#6nr]QY9^,d/),' );
define( 'LOGGED_IN_KEY',    '/*mb>s+Y_&8cb_~xeJMEoLxK(ScZ/lf}0cdj$2R=P Wy/pd#V)(c%P>|!JL(Pk)M' );
define( 'NONCE_KEY',        'oGo{wY1tpJZI9FaE>E.xL4ylw],~:U:3Nfbc*TwU^VP_pcvH}iAe~G!rXM~y62hX' );
define( 'AUTH_SALT',        'eL H_KJ}%~H%B].{o]<`$MinjAliqcpG>&:ua0WE*KXPze.~Ad5de?b+l&<zv%k ' );
define( 'SECURE_AUTH_SALT', '({J%/P:W?S852_fUp:|R9x{Ue>)~P)r~1[ztr{.!fOYSmQ+_ujv~yX.vhH5# &0Y' );
define( 'LOGGED_IN_SALT',   '(:ieM,*nBc8|cx28*uFB/^~V[PdEEam(7rf16QU_Gje7JA5&l;}B7^eISN)1|_we' );
define( 'NONCE_SALT',       'Svypywa+6#A%*nMD lnZ3Qf{:4,]_Fh%;KM]AS]$}{FB~M)4)7K5(V79x)Fz010R' );

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
