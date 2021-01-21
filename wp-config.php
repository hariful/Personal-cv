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
define( 'DB_NAME', 'cv' );

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
define( 'AUTH_KEY',         ']5HPLa9@-.`@;HlVJbmY%hCD,2)#r[& ,}Wq5klIgt-%{G9aEMnGb Z9<BJ`*Ap{' );
define( 'SECURE_AUTH_KEY',  '8m`gX$bNyn8%5[{A:<c635h*]Xu|J5IFXE}*3ws.@JG,`k;{~^9#PbGJ:zb,T*@8' );
define( 'LOGGED_IN_KEY',    '>Qx1`mcK 8>y^>h5RxSJI<b?<[l+}$a8l,L!jbxZ_}8XT *|fCd.D9;nfwT%4<&=' );
define( 'NONCE_KEY',        'mFiP80<qjK@9bt(`b9y7gK3=n+V?-d+qy)dvAa9X7`ob.I%c}R_x<?n=qr95?_PO' );
define( 'AUTH_SALT',        'so0x]o 977F +(?[<<Ma-7tuC>+ ]o[+A88].QE|^3ct,J5e7pp=z@a!4EJvFZBl' );
define( 'SECURE_AUTH_SALT', 'iL1/}sSA^POa$#-7v74EF|zh*Hj1vUi^M_YGr6qmPkWCGbR~.|~mBKm&tZZei;o}' );
define( 'LOGGED_IN_SALT',   '/GnaOAxO1sXb#ergbgd1gH$JuwWblkcd:BVGlmCykwbu%ABP`N`([0]GL`#Vp$^f' );
define( 'NONCE_SALT',       'WokHGP>R7cB]M)+rDj4M@z$jWmRIZteu=R$*XdD>G0;~Z4{fJp}W,4IBiK#T`JW5' );

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
