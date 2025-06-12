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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'l-okU=-^E(*KsvF>YBE8h9JPzrY=->:P/ee=It(oBb/0G3Q$s&5NK*psg|v@PI&/' );
define( 'SECURE_AUTH_KEY',  '#Wqh4xf(x}Vz%;sc[G=nJMFE#h+ooS-$;t!3|@VmooQ!1a49kXI>W*_QZ36Q{.T/' );
define( 'LOGGED_IN_KEY',    'r=8 a42B|fIMy/DC_:>XZo{W>95?w_vl)Shw&p:B%$3fM0,e92jE.W~be?cJMY.D' );
define( 'NONCE_KEY',        'a?izrO`nr*_&/}$6.{p&@<dto_!~&nlVKE]/`^M4DJ:4~ V2P{ _`*Nsx%QhmK$P' );
define( 'AUTH_SALT',        '[8g<d;XhhnH`NIcC=]7PI.}r`Jcx!dFL1b%*sgZ}TGt,l7rmw~u^SUZQ,#CluMxC' );
define( 'SECURE_AUTH_SALT', '$shOJ9<Lr[*dL.2m^hy]nN~tjV*Vv%=}x=Go4@VB6{_/$<a|GezqcW)r/ CAj xD' );
define( 'LOGGED_IN_SALT',   'LW2;)1C<UqTC61I%P`L*nB?R8nw5gvVhFVJWP<eU$#=[+mk%EW]!gt}mrUx*/%Rl' );
define( 'NONCE_SALT',       '-$#KtxfAB#D/~<DhMmgS*.z#<0=wHRa2+Z|,N$|)i`kJ6m>Gx_/gFZ59;$,K%]+o' );

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
