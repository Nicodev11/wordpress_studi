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
define( 'DB_NAME', 'wordpress_STUDI' );

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
define( 'AUTH_KEY',         '$HERRV%k^sg{lDD>,^tQt@Rd{.;]tK[{)boGhEUE+=#dgSKRCeX& HrMR={0sV[L' );
define( 'SECURE_AUTH_KEY',  '|N>.2+XLR6Anw5Fh71S$uOssGq!Zlnio_KGx76n|6fu*i17jyaqCnl:_NxkG?JWl' );
define( 'LOGGED_IN_KEY',    'CP-jQ~mgP:e>k7vM!(ld@G6EhuaFCckQjO:yW971tr=*D`B0}qF%wh8{GGJ]{;4Z' );
define( 'NONCE_KEY',        'n%t!{gp4v4[C+MJ4pQH-Yk/6kHFAt@0l8;VrwFal@B[667 0dXQBTB2w_ic,mddB' );
define( 'AUTH_SALT',        'KNr5/T}$=L~>`>~=~ENM#/%Q*>Z=4XFB~|%=Fl4X>;)dehLF^|,VQCndybww}Fl~' );
define( 'SECURE_AUTH_SALT', '6iVWjZl4+GGQe4M`#3UG3,i1(,k(7z~:uJ&WMm!DC>H071I0EWb[^[0kc}7Amf:E' );
define( 'LOGGED_IN_SALT',   'IZ#7MZ{g/KfpY2<g G]L)lGdi1BBdP@TR}35j{NPfW]xj&([t6@&oo)uZL+`kHei' );
define( 'NONCE_SALT',       '65>jc]T{pt-gWW1yHi0jI|/B]qDQ(JIj7RPCS1 2R(-cP;l$J<<Fb/2E(5>da_ZE' );

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
