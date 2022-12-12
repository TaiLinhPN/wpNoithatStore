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
define( 'DB_NAME', 'noithat' );

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
define( 'AUTH_KEY',         '@E!uP6%lP;2i~C4Nq0GO@/Qr$h~_L}+LWv:;b_rxwnJ%%`(d+-1]+O`GULwaZ/4I' );
define( 'SECURE_AUTH_KEY',  'IMqk!TiuNB=,`ZdiTaA@5Q1Q9VP]]sS7Hi6Xg?4k[n&I8>!o}K*h6N.bM0Vu,jas' );
define( 'LOGGED_IN_KEY',    'y jI$70%;^gl@?)>Oxjk7-c!n.# Bu9K#MR4ltiqxkmI#y,IMM7;F3#_ 6IvSy;7' );
define( 'NONCE_KEY',        'rBdEx)gxM[%u%f_ely9!~L_gOE{t@S)2`50hN1zBrJ~ImojFtYP6O)#e*IL(/_u#' );
define( 'AUTH_SALT',        '^5!wTJJ)gm[6iJH[@;J17Py7=*z(*DJ<mLq_W1v/orT5eyRVLDsf`3keS6o(V26k' );
define( 'SECURE_AUTH_SALT', 't{9YHuAfs/?H{/bLMG#W=Hs1oG%ofN+!nB+cW!M>U/^(uf]/IlJ0XqWXLv%KyG!X' );
define( 'LOGGED_IN_SALT',   'j]*E4tQu!y96}A#Cf5(~DK7(vL~Pt2m~NcN|q2dn-=X~y<QjDSalC-yzpa1jq0hk' );
define( 'NONCE_SALT',       'P1dk;wu)PXE3$Gf>us!w``lXu`Nww7$E,^3Tl_,+Va xzWP;4&h1eR+rsGgD*ZrI' );

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
