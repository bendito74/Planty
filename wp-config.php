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
define( 'AUTH_KEY',          'qf@>$Vi1[,(~_u`@ZW_sP6)s{Rni,4NBq5mzcEFcci=f@pu|hWR`*.PAg%X+T0US' );
define( 'SECURE_AUTH_KEY',   '^YxFcsyuSJ1lHU:~PG<JL[!cCK!aSaDS#->aD7n>)|AcNse?e_0LGc:gy[JNILiV' );
define( 'LOGGED_IN_KEY',     '5j(oqxuzyb/@J]hL2oCin}@Bx5u 8nkfKCtr^im8V2d5eb B3Fz6|OO|1V&7XEIG' );
define( 'NONCE_KEY',         'jG2>T/p^^m/cwGT.?V+L=T-c|^5+ my]/;$fnO:I]o)T<w!B3k9?e<PH5EeqrJB4' );
define( 'AUTH_SALT',         '<Iu.~fe6JMLx6!I?qX5xD6`f<o%O2CYk4aN:Y|p?`4.xg~/chC{//BQbg%_YS~Ho' );
define( 'SECURE_AUTH_SALT',  '8}xn4S5K@Tu%!/u@M(`^bR*U5Y(-2 jQq*VW4H2d^.=[K^E6TG&lG_G0s}uoH%ce' );
define( 'LOGGED_IN_SALT',    'gjAaU.SS.Rn|@/%!kjAOV#d]{!hZUmcIm&yd{U|4(}`olj^.q|Kg;?c/>d9+I-p9' );
define( 'NONCE_SALT',        '5aIeII#fU4bR1!=B)VwAD+=aud![+u:x6KSvLH;jldOqnS0Q/5^Ca,3LNZD_SUg7' );
define( 'WP_CACHE_KEY_SALT', '{uXl@asfr(}7z({~!Wek5y< /s8zlakQIyD^l,S5`XOn9.|,fU.{es<>MAFj$yWZ' );


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
