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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop' );

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
define( 'AUTH_KEY',         'dc#?#GrHQwZbm9[T7851Uvt[y1RHLnAHX--}I~iICqN z0{.8g~_Ko-9-dTF-I)C' );
define( 'SECURE_AUTH_KEY',  'JZfc7Uqs2*pQRA&Z}[gpS*K+?Z{C!B!=sR5H*{x]-q0::A*Kr]h-:oAO$~? FK5S' );
define( 'LOGGED_IN_KEY',    'L+D-HT01B4GU~zjk#-QTQM$>w-@:E)#-g ]@ npK-!~+R ,urDoLsR3/<7Sq qY|' );
define( 'NONCE_KEY',        'UQToOi2vJ]N<;%>Z/0dn&T0G3@4/fC]|nKQ+)DHN_vQc^#u^nM9U!tW&T2@?Oo&6' );
define( 'AUTH_SALT',        '~ >=tv;+a`?}<o5/>/vju,$Y46$?9]^(B|lwJ9&HY^4~w(Tl1BlB?44g?pjib~le' );
define( 'SECURE_AUTH_SALT', 'Q+abaI)B[Xxp?zU&NMdt~SPQm`fmXiu)$`mtZ  xg]+WdzeA:D,S>{UG235hLwmp' );
define( 'LOGGED_IN_SALT',   '&u9} k~_u.Z(I7@(dD~|1!&fNlS^DwOMjmlAJ@pEmED6vE[C<AZO%&{95I[vpf>w' );
define( 'NONCE_SALT',       'e989,y0l7vc?xd:}X+4-hd8KiAn~1g7P#6#K!Jl0e90~$2JkZ0] fy){.Z%+<qJN' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
