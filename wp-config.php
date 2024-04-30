<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u826729284_echie' );

/** Database username */
define( 'DB_USER', 'u826729284_pEguU' );

/** Database password */
define( 'DB_PASSWORD', 'YoJBoAn0Kb' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'nAbn`)nRPA59J15.5p2&jI)JwFd8l:#m{liwvwNd(ZxBlR7cxtNj0g1]ZuO5ITyz' );
define( 'SECURE_AUTH_KEY',   'HJn$#`MBw4.avnFpXe>W7A/F Kl=+/KyTEmO?cKtRT_Isl1R<4A?zy6rt?3Nt8@Z' );
define( 'LOGGED_IN_KEY',     'b&BGAtJ-$h5||j3A[8|:w.]l.#R_nh-:#P%4u*o~]j4tCXMkftP6o.gRZ~v6O.dN' );
define( 'NONCE_KEY',         'pT9q6|0I>(8331y9Lz^WE44W@FEs<&z*UI(iu/ple @sy@TQq+XGcF(6rG!jjv)*' );
define( 'AUTH_SALT',         'VgI%*V95hFAl$X))Q5gx O5VbXxzY*XLH98_jNgDh5qRPMraJA`Bv_u4!LRAF;k/' );
define( 'SECURE_AUTH_SALT',  '81]S~HNmycEjUd!2Han@<}IhC!pt>a72wZ(`}8oT (1|4==x`e5av1 D+VE{8zqq' );
define( 'LOGGED_IN_SALT',    'Y nM^|RH&%h4ZNzSc=dIS$|a(D&>Bkv`UL^Y8?<35Fl&.76qpv3V1:6~__p>CS#u' );
define( 'NONCE_SALT',        '+_@>5 y3zLr&Ik_:Oxf-8WFk2b}8vc-E@Zgg]<<tDf/)xA?JT{`8ay%=2$@W)=JT' );
define( 'WP_CACHE_KEY_SALT', 't30bli}$4d::A~-w0OOj)zKAA@j2MiY$ #b^~+y+oX%cwn)1[Q.2):FI=$6y+{c5' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
