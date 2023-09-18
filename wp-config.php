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
define( 'DB_NAME', 'wbs' );

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
define( 'AUTH_KEY',         '/wPP)jKhXl7&Qg|<]@{*VQ}DbT|D-WX:[n(5jVk5NnR@?%!<jP=Vb4,@>nnlmI2t' );
define( 'SECURE_AUTH_KEY',  '@PokH24|l{?N[Tnd)<R#4S HYr1(k [epuZ)?u#7Vo^}]a|O1m5R@pFR*)VA[kH<' );
define( 'LOGGED_IN_KEY',    'NC:H3+@YWuUmT/Qj8a+t=U=2Agl-w6E,o)aw^Tw.[%wo8=Ymr*<>U!#55aP;a,hD' );
define( 'NONCE_KEY',        'Zkzqn|EtRNto}/ME;[#LC5@gq`_EDie<4@+^ved601XVa:Z1j54,#6-Xaa*2^gTi' );
define( 'AUTH_SALT',        '&BRaRDP]pG7{f9:M^@g-0N8!xpvC~3d/{aYLaM_1x,lw7pbAqHreUa~t-RG1Tu4 ' );
define( 'SECURE_AUTH_SALT', 'znF^AUr=SIJ6GQbrGPRI3rTxHSHRa8nR_)()mRR##&&72N3M$VK:!k42X~D3/dBy' );
define( 'LOGGED_IN_SALT',   ';M1Vs1diFwJIP6eDDj-ris2a,*z7+7y25n(iBB|}KJW,w)i(x{D7gaC@sYyBe[eu' );
define( 'NONCE_SALT',       'ER}*_jS&Xy(eRn) xvYz2TJ` Z`6;2XgN0F[l*^GI].(wLy&VWI+[oOE,A,q}>r-' );

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
