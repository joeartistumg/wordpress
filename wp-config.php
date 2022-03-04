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
define( 'DB_NAME', 'blckdmnd_joeartist' );

/** Database username */
define( 'DB_USER', 'blckdmnd_user' );

/** Database password */
define( 'DB_PASSWORD', 'JoeArtist!' );

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
define( 'AUTH_KEY',         'Dw~(79PBpTwm<q1O.bR&BGf+l@315V3k,bj&&($7)rdIf3j~MCn}yVD<pl> f;A?' );
define( 'SECURE_AUTH_KEY',  'yoqOzEUGH,tG31 7jp1{!V#E4,Z-5k*wN)Ez?WqLwoy8@=he)6t%nT>ol]urAxkP' );
define( 'LOGGED_IN_KEY',    '2aI`pR^d742]X`9kfIm)R.bd]rbRffz Xeb^SGvwQI_6N_QYQ<pW`P:an^w8IM*j' );
define( 'NONCE_KEY',        ';clh>8GX_*gV`,vjP(*|AtQ3up aSh<f;;GqE=8y^LsxO.ZjCYJTDu`.O^7FEo1V' );
define( 'AUTH_SALT',        'cTCa_y6X4_>a9b-(oz@N3<L2Qb[Bt,NK+H17]toqqN}m8!(Cq4G<c!E/.i|mk`FD' );
define( 'SECURE_AUTH_SALT', 'an&_WI%nZT=z{?j+&%xNM<H`q!<l^DKypF0g3wuN.jwUkQut&O<_.0P7MO~ZC8@C' );
define( 'LOGGED_IN_SALT',   'p(-J1NLc__<,%u/6=^;S* eky^j!uy3[o-}Iio93SeqH#3p,-MgUrMv/].[#!&bO' );
define( 'NONCE_SALT',       'RjFr/.*X@}hlQ:t7oPKAc,%(/q$+)yCbh&z!4%@C_p/-rL1*mW,i#HqWeQuk,.S`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpjoeartist_';

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
