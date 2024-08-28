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
define( 'DB_NAME', 'mandolin' );

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
define( 'AUTH_KEY',         '[aL3h|J}^j*:SP*#YfH{SFv_Mrgh*I[ m]u$o|s>6g[B-GgXZ?#ujY!5kd^UavA6' );
define( 'SECURE_AUTH_KEY',  '(5|YL_YYx;YNfLMNd,mOJw]0&_08&N`a&&P4BB*2xJSY^{26m!^d?-h:Lh:TKq:6' );
define( 'LOGGED_IN_KEY',    'wR~`3j%jUa7+]rr1+yYC_nA0W-E5(hPb0I^Fe[-M/5D t8!kb^ZPwpj)ga{e ]X2' );
define( 'NONCE_KEY',        '0@&m)NZemVj~Br5+uso_@pvq1y-O8swjBn7]dEeYR7sc/O02e#+6C_vg*]L]((^S' );
define( 'AUTH_SALT',        '**)vsXG-9QDqp[dZ)v_?AT, j=c2WAQ^<.]L8KN):.=AQ8erX&a^%`)MDs?=Xneb' );
define( 'SECURE_AUTH_SALT', ')$8UIL/>A]( eA)7tW,x+1jb0:2+*0f%o;x{d1mobp6j<mL`gfR_/_3j!Y GR<7a' );
define( 'LOGGED_IN_SALT',   's=YlAB`$A6%RxPWIY+n+|<ci8 QGqwA-<5R.L@r#ODri<eUhpLh1XY!nY;0T7dAW' );
define( 'NONCE_SALT',       '`DH[GZ=:;McWMPk:{kN>rc>~[Jjc9Y.Fnvg~Yr]x%pPJIpucd.>4$HFH :*ze@LJ' );

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
