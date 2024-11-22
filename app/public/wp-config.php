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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '`(z`xKG4y5Mg[/_vmYK0xSgtwbh3az[.9Wg#Ki-YwP {[RQPZ$[0^JM D%EmhugE' );
define( 'SECURE_AUTH_KEY',   'CoD,mu9=^d:kE4&%Eg]/#n&$*$Y82G.`U*i>!*.)T/F[(v;]^d3f_GhG]~g)Xq`g' );
define( 'LOGGED_IN_KEY',     'Tav{Dku?^v(#/Hw!^Xe]D2A>]W?`Q+,S+P6fZe_(6.$6Ksc6J6! Gr~?@6sJY~gS' );
define( 'NONCE_KEY',         '5<RD)12[#.{t/w!)uxAh!4f 4S-oj7a/7I7zb/}jPd1tY2+IT/n/479Q]MD#gu]I' );
define( 'AUTH_SALT',         '~.<q;#MpqsE42>6p(|CfJ`0D%$Mksr6=fgS?{L>!nu[PjA{!=ddpiv][C`2!gylH' );
define( 'SECURE_AUTH_SALT',  'VFGw.2tc9myPlRS.mdB%V$fd$Fkk c8e.Ol9qO^U]CTlaq|k`fa/F|scmjXtb53t' );
define( 'LOGGED_IN_SALT',    'XqcM*~{Uy&4nTvtns^R?D0FzgIUsAsYqm7+EwwbR>fEcqQ=)]0XPegxuUjZWX!oS' );
define( 'NONCE_SALT',        '4[L2DHG<zc>w3c~`j`#Q5b,UY:S4ns<xT6#.Sn-wos48@6&aK)*tPr@F<-BmtoLY' );
define( 'WP_CACHE_KEY_SALT', '1_pzuInRqTJ^^o+Tk*OtJtYBcEET:zc&xAETKMC]#CypnlL<u`9_CiaJpD5mafTv' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
