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
define( 'DB_NAME', 'backbeach' );

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
define( 'AUTH_KEY',         '+$?~6aSdRzkS4tm(&*Q5:gvWwhw+N<M!>cLrx$]{G;AZvZo67x]#9Q+lMv!YPUg9' );
define( 'SECURE_AUTH_KEY',  '1*X/*$(B?mK]Rmw?<abj!DGX_c%$.Nzc]Im&)W@Iafc4Z9)QTn=h8$L#Vk~6|(us' );
define( 'LOGGED_IN_KEY',    'fv65k!g1l[R53ZOSXtBf&qzVw,Fw)2Zo}!B`4c3lH5Y7e*8;V_Wqml>xONTo_uBd' );
define( 'NONCE_KEY',        'JWTQmfqs4-B6wJHL^x]A<sWtIHV}+Y$bCa[6=GSwE^;C/_q9`Tn,j~[w0VK #5hJ' );
define( 'AUTH_SALT',        'XiAUhiSA+6}P. &%O45}b@^6=$3eeJiB:.vIk -?fR{*.PSZUCRFU@Ljo83SQH@<' );
define( 'SECURE_AUTH_SALT', '.M2Z%Gub_BBeQ.@BK3DYu~J6sW_3#2t;NX4h4JGP2Ww {gZW<qD/zOQX9kT;b@X6' );
define( 'LOGGED_IN_SALT',   '4 oNa(mZ7B!ZQ9~Go6e=O?rQA3*?CR|/}*y=Z@C^sS+pD_%pk0p8akY0{ 4{&0;w' );
define( 'NONCE_SALT',       'q3A NvSf~e8Lo hHj||9u*O.4D0X}G>r8 tO3lfMjTEy|@dxMUUXQ|=z,miE&dNL' );

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
