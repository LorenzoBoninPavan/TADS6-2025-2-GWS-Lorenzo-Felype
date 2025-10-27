<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_bd' );

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
define( 'AUTH_KEY',         '+MGQ1].8,5|T%AlJV}CD}@8g2`YUw_&]pGM_|_tIR2r,/m12^r--6|h{EEW[n8-]' );
define( 'SECURE_AUTH_KEY',  'fsn92PU16<NvZjN+yWK|TfP1`i7|pHnqTA=iQ}!QHWBI#K/{DAJ{e,lyc>$47t:_' );
define( 'LOGGED_IN_KEY',    '8WT*hAvR->le4PIfe%^WX<f:f[?OOYYj*Fv)UPM|l2k7ZaL8yWlt>YS$OK+av.ca' );
define( 'NONCE_KEY',        'qB62eEIO@Fnf>ACoTq^65QD;1F;>eI{5GpW7 L2|@D|zx5yYN=hb3A1f9yVN[sQ@' );
define( 'AUTH_SALT',        'JaP?]-1z}.1!un0Dmu)S1r2Q,;>Ul4Uj5L$y;47M7Cs*iOOz;R=*x^,:^5#U=fx:' );
define( 'SECURE_AUTH_SALT', 'U{[:dum,jN0%A1Pdnu8l#NNG00P|.!V 6/P86H/aSqHHs~<?G2=r%o{^Il_#@d6s' );
define( 'LOGGED_IN_SALT',   '=vO+ar*Dw[)z7^Uj<6O:3qgn6YHI4kH-2!)lq*$:Z2& PtEI1J};Uv+=sFa:k)G@' );
define( 'NONCE_SALT',       'Y;}cv&!QcyF@mC_]/<%q*,r5WrPqaezF) 7`/x {|,rfGMTEtIoK<O&6/+}IIw_F' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
