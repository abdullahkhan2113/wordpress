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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'J3rQrK|&@=3H-tK#~^)!?TsyIi9o17&Ec(3%(DT;-tC}2e>Hy{56k+:b`hN.H/WG' );
define( 'SECURE_AUTH_KEY',  'hS:;)q&#AQ$935|E?o0!9&<y]h.?Vy-)U8gC51b$^M6&RV},$c.Z_!jiA:@aJk2X' );
define( 'LOGGED_IN_KEY',    'h.dpXk8p?~ji`5=^n%)Ws%Ta5IZV{XJ|ot|z+qI[pnVx3;|+dSQDQ=<W+MTcY]YM' );
define( 'NONCE_KEY',        'AzFdyz2>1g*li>dh;@X3aHc`^eCPmz|Jz;]U6]6QWYMtNmST:muUN.Fc/M-]OAWt' );
define( 'AUTH_SALT',        '8]f(` T=!|de:-_Df*t+A,A +AqX>~7_9M)DE{PN$7P:L9AgYn[S&YqBDt{ <t@+' );
define( 'SECURE_AUTH_SALT', '8%kG YD;81g;6aLp%8?DkW>q~jI^q/>yQww9?%*4ZG6DR?cvjx3q<U*A6DGOnkEd' );
define( 'LOGGED_IN_SALT',   'H5bM6dYQ[56k$X).E1PW]y!YI2jSc,%g;wYvQoQTHw0/hcp.,bV1)P,=ow&xv(XP' );
define( 'NONCE_SALT',       'SK$^}zhC ZRPRW>>V7<cOUL|c4y+.d  A%.8&wEA(w4-FO{Bkm8 D,Bc#Kxw[O2u' );

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
