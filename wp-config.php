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
define( 'DB_NAME', 'demo-website' );

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
define( 'AUTH_KEY',         'tK!BQL6N$}9yg_+_Ja57(hNu6<xFrWRW0=kN(XQV$Cu*Lu_FL8<u?cSt+,kxd:h0' );
define( 'SECURE_AUTH_KEY',  '-2n_Yp}~gWE_Z>A,_*/-c?qCKRyO)9+VL<U`nd[!B1U?hOGD8lWJ,iF-gX`$o=6r' );
define( 'LOGGED_IN_KEY',    'y}%=Ro<TuINKP)aa-J5d7~IJvU??9bB_p<U_!aK7&h**GwJ$F|zPMizQ.Z%hqEse' );
define( 'NONCE_KEY',        'byWbV<i#^2IX;sA/li4zfX^u== o|EU.E= 8nTbY}mYx?wW{z8uikj{8(mC)e3=Y' );
define( 'AUTH_SALT',        'r7*s.J8b?9Q{x1{%d4T~(Flfu145k=P}%WclUuIW:%SlVaj!l_j.@/{ !!_0u)0i' );
define( 'SECURE_AUTH_SALT', 'vu2s&R96@7BM]?Bn#BclKn!pUidP9gIT;4d4T-6L?_z2IzhsMNB.gA^7</eR(#w@' );
define( 'LOGGED_IN_SALT',   'c7J81?Q%|/Y`>Zb%|(HX~4n=L5xIq?s#no&%oh?~^yenX5E64#lNa.kvg|~sfoiq' );
define( 'NONCE_SALT',       'fKb[/6)dGK%.n*c_+)vfyd!pN6vCn8-xw7X2F}seQHvQBLC2E_).l]aH;IY5Oz~q' );

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
