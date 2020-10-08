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
define( 'DB_NAME', 'drewlondon' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'test123' );

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
define( 'AUTH_KEY',         '49p,chQ>^543pg@u@<b}Qzy[#uQ}hdWCFHL`@8I-8T_VECvn%4K90}D[4GiB]B84' );
define( 'SECURE_AUTH_KEY',  'AUOah$iD-Dg68&KAp]5#&H*Xoy<wS>!V}A4>r)w/m{@hy*aw[0 I?V9!vFFruL1R' );
define( 'LOGGED_IN_KEY',    'j[80FC>-/2x H~8^gcs@LaiBoaBemSu43EkCDl_r4<l-;#fj}sCw3vE46AjOg!tJ' );
define( 'NONCE_KEY',        ';tC9vLC~Q%ReJs=j>qSxSmCjr|?TNobU:E9M32^ESgXf=x$F6rp_@/uz^M9b8ek{' );
define( 'AUTH_SALT',        'LI+G?<C9WlJfh$`H3iOYoe;i,&[H-3`iD_tav`=}o%wt~?rbT>e?iKFx-#zVb<<k' );
define( 'SECURE_AUTH_SALT', 'sg*0s7CF|=.;>iCP,-T>I#F`;H|!|z_&hR,)SGdbj^TKz:`DJrJYD,ck--PQC%x_' );
define( 'LOGGED_IN_SALT',   'PQo:O2O/)([.JoWF<1hAlc#z69AMrJc=G]s>cSY`z)D|V5Z~7r|^[@+QLk)`9Gsl' );
define( 'NONCE_SALT',       '=*r$OZptf-xs}_e*QP2J`q8aQbL0[4#=hL9d9K-q1=`tvy;_YS5)]^X,37=QaIEL' );

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
