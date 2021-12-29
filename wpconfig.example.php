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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'lyN@ 2U]=ngeNNUOFvp}6 d/h8b):lI5@w@pfK+2T d1}w774(bdZBO6?yadA:iA' );
define( 'SECURE_AUTH_KEY',  '8a85|mwMqLWj!Cs!7%lY&xX[:QY5opij`yL94wEx9wg|MILfF>D*Rw$=ys}SA9*j' );
define( 'LOGGED_IN_KEY',    'Y_YiLN>41$nBa!%Djc;Gh:7d{uK;Cprk}9}%O{pfT]u][NvE-eeb<ud|/)mZ{C_R' );
define( 'NONCE_KEY',        '}Fj)N7ljjXXWik{?N{L-^%RiqG(L(12c~8F3A]VF>M5;C|-)W9Eq?{) dZ#F!@a/' );
define( 'AUTH_SALT',        'Su.5S`i(=|$T.=>9shM>Mp }z+#*3RJp)/JOSpk[=Ixc0>u1GVK2e&kx?&103c/2' );
define( 'SECURE_AUTH_SALT', 'DMBb7=TxY//V;AIM/91r9k(S3rL?> .I[%4C,*t8~#a|1&vluONynvHi$g}3z2yX' );
define( 'LOGGED_IN_SALT',   '_)ncN;RIY3;+E[z061Cq6 0Uhn&&~v#K2$6uILr|Yx(yF,AY4H%y0^cY){G{b$bZ' );
define( 'NONCE_SALT',       'HHzG|)2lGa^}z26-/oHu^<q<EZ[.nTazO~gFH3pRC0Q,R^t[W]axlJ#sYXCBu`x<' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
