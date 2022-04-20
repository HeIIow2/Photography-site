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
define( 'DB_USER', 'Hellow2' );

/** Database password */
define( 'DB_PASSWORD', 'EW408391' );

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
define( 'AUTH_KEY',         'A#kfTXk<;ue T_9%Cd[1!rk=1I6:]lc5+?W!S0V.9kRSNm3.%;sRhgbADYQOX?G`' );
define( 'SECURE_AUTH_KEY',  ':J?4NIVdR^l#N*F|35Nkla?9?g0UB+TIB:W$CA|(kxwquM<__cnnI?]]]$smnMR0' );
define( 'LOGGED_IN_KEY',    'pR][s]!?$XI4a(;z!L!@$12QA|D1#e/b[t]^L=k;0/X V ZPiQ7HT[_AHUa[EgY`' );
define( 'NONCE_KEY',        'ye ]X>li-vr~N-*;<D8P_jc*`xEp{ZJL<uR@kCuD/_?0!Cvp06g|Fs7:0-Uv{/VJ' );
define( 'AUTH_SALT',        '>E-Jm]+)9{g[I5MX$8l)JqV=<i&8_j#h8DK7eCAuOm*yST,T{jC?(7t12o[W.h0.' );
define( 'SECURE_AUTH_SALT', ';#S5|X9Gu)(0O**M0/5HwLZ8/)8?=Q)V+L8BEC~{Ai  vTI^eQ^cM0ZUk!$>DvcG' );
define( 'LOGGED_IN_SALT',   '1]#}rGA9|6gOG]2^@r>F}rPWx;:=jivK#>tfK7/rc4dC4&Ix+La)>[:RG;zx`DzV' );
define( 'NONCE_SALT',       '7XNq#^.<8tkfIc.CB5b3J,_Tv/ZJ^JB,.A}yzBO8;6U&l-[&8w:Tj=q y-ao/lK]' );

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
