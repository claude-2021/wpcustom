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
define( 'DB_NAME', 'wp6' );

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
define( 'AUTH_KEY',         '~4M)zUdv{6:$b>&?#>}s&|U{aUh$)kDil,a&23_6:qe>_AE0>G,qyFF]>o~+eu.Y' );
define( 'SECURE_AUTH_KEY',  '-& =7{e:%5_eW$@bLXN9zQpPX!>p%5&IGWNyuUZ86XaP&:%Rle>3R7;afY<e$vBS' );
define( 'LOGGED_IN_KEY',    'O}-! }D%U]wf&i o@BTuGP?Uc_m(n.^X(LIhhm?hO9iCqaUMV-pRmf(nRa 6Y!rc' );
define( 'NONCE_KEY',        '5*6??h%=l0%hL0pTk=4T>O0{j2I^i&U54yM Lx,qb&ceKc4?^|@0x!#9e4Er{pc;' );
define( 'AUTH_SALT',        'wg_|gQp+*yc0kt6lap04;EOe/f9E<]H||;Jy`NX|ldQ!J?Y%Fq_27E~_ihzwu43M' );
define( 'SECURE_AUTH_SALT', 'j:I^p- X?ci%r?wUyC9PJW]4[9E73{TGw=I)7zL|_+>!d~Ig9DQz6ywc)dHy<VA=' );
define( 'LOGGED_IN_SALT',   '@[|l}Sc~-L+=6Ds{WG&)u5[g!aDT=CWi$O~Y9RQa+kRYk%+@ABU nw>?f1EFT;)O' );
define( 'NONCE_SALT',       'f4&:@~c|lX fmU338aj%g?5qyr7 4>GT/l~(4OT<(n8_X#76()jo$7:)7 :[cQUV' );

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
