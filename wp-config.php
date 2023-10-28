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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'googlespam2' );

/** Database username */
define( 'DB_USER', 'thedhafi' );

/** Database password */
define( 'DB_PASSWORD', '#Perfekjo123' );

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
define( 'AUTH_KEY',         '& (@+U`Kl$!A57@:`TFxw]2zZ4wJzLE  Izisw ZvG*b`nT[FwaCxN3s$n,)~(Cr' );
define( 'SECURE_AUTH_KEY',  'UJ0-FYkR`[[C7o[fEnH ~Z_}F6Dkedk:5 i$+vu +0lFyaKc]YIN;YOiQi3wJ0%(' );
define( 'LOGGED_IN_KEY',    'RRMK>~h4C2fxCsL@wyk<#udLs]xHxX@4Qb4JKGNfgGb.yiUiKyGPyak:SC_N[ke|' );
define( 'NONCE_KEY',        '|N!X 4>aBTR7J|nU7D.uXHY5;}/YRW=T7?.@GMqTeqv&F|?ipMP*R:&<Hc||#yQl' );
define( 'AUTH_SALT',        'OI+aknB+!h+i&p wmaQ#&fFAr,c/G*xHR[|gt81Tb|d~lP*TGKjP{qA9o+&ianjw' );
define( 'SECURE_AUTH_SALT', '?6,S%2Lr9J!a:Skxr^?1E15Ky8i;l<NSHR1 oe~R6mq$o>vgnm<R`FA=sZcokQi#' );
define( 'LOGGED_IN_SALT',   'u AckGWq{kvsuLYUR<~0}Y}O/P{*-qO6TwbiQ1ydl%0Mh^&dizq8,aup.l~q*Fvw' );
define( 'NONCE_SALT',       'LrNjddT2CP@obbtBlHM Sc{,Mw;^=Dg4cl-kO5:qXbeM:Tv:A04bMp7x9CWVsoX_' );

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
