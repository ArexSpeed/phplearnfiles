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
define( 'DB_NAME', 'wpwoo' );

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
define( 'AUTH_KEY',         'LVi<xu.#k|nxF%8i/YCiSC@v#:`2*XJ26!v$<7y3Eo7t;7D;;jTF/S@8)t}ZFtB1' );
define( 'SECURE_AUTH_KEY',  'fZCg[1*6n?2sys46j<tusI]4!>V/(d5{EeS$nAyW~[i$M%@){ISLDq1C~4S.DJ5x' );
define( 'LOGGED_IN_KEY',    '%.gD_14`sC9b,u(@s<=}Pa*I%+_RN2W5h60~2N,OS!vSHQ.yUey@FvCOf.;V.6Jp' );
define( 'NONCE_KEY',        'MUbnaZ85b~mluuHkc;mMy@fXTV(<B/vq~#,`+V,kt~QAG3!$:;!R.en^-t)Vv@,z' );
define( 'AUTH_SALT',        'ascmeEVG63P~:b(kWd}4D^<MoImlV@QXwhnsLz{_#@8nzNn*yR&LeY!Kucc&Cr_]' );
define( 'SECURE_AUTH_SALT', '|n|tQ~(:1vspA*Obo6f3:q)j*otB HGPcMh$.rw=Lm#~v+%>^I3nvH4a>c=<Orsd' );
define( 'LOGGED_IN_SALT',   'ZJ8;.cvZQ}bx~x0$36ZZ_NAn0,la.%[|^J]]3bPzN&p*z#!Btxyp?J}C;;Z_CVfp' );
define( 'NONCE_SALT',       '|!OBnJ9?l[>qSS({e,Ot31iD1S*:M(Z&IijPt|o`6Fr>aU=1fLU^0|Q1D lTz|?D' );

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
