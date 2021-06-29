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
define( 'DB_NAME', 'eco' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'youssef' );

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
define( 'AUTH_KEY',         'Av`(aX%XnjLS_nJs6cMeB0[=H[@&XYx}.z~kqbYZ<7;s,(S)vl}0dz_`hgh!k768' );
define( 'SECURE_AUTH_KEY',  ',yJm>KTYT`AE.Yj U*]O%R/eiy9xkhVU+?Iev<eTjS7ox6>KD2U27=7vv>xzL}fm' );
define( 'LOGGED_IN_KEY',    'LZ/=)u1Rh1/H]aqrib+5qW5?s=_+/i~{`*28:?~HmZ%G`-LlVychS$DopV8yh%>3' );
define( 'NONCE_KEY',        'vmR~./XD!6EZ2U|JPxBmW&mO<n63e|Pjh2K?)xm^uX=~AEC`iHE{WfNT9I8B$h`p' );
define( 'AUTH_SALT',        'lO]ti3Z56W5qC;(U%0>NqCBex6Q396mcCo#57sVoU$J4[27 (@v.Jd#B|W<GJsMl' );
define( 'SECURE_AUTH_SALT', 'tBWp;&L2=Ru)@`Ix~3~(XH+;.fS{dLBBq g)E`[e0)~H`(4,TVWG6ri^x1A? > Y' );
define( 'LOGGED_IN_SALT',   '*_ft=;L,6g*}W_YV$W#y9gWWinJBMO`$jnMtKMzw 1=|CMHmsf0f@(OCZBoN-tjc' );
define( 'NONCE_SALT',       'ZaV02{X/R_;DAQK<Jk=@l c}.)V}n1KBHWXRZy7?q!vr%>m%(IwhhPJF=^@_=r)6' );

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
