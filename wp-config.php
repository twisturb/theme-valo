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
define( 'DB_NAME', 'valothemedb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '}5~nO8b>feNJS6ABb-K&Tkzw2qI6^v8]<}}}{;3DH@&r[05cD=793Q,9B-(zv%<j' );
define( 'SECURE_AUTH_KEY',  'FocSRRQx4/Iclvx|FO{s|GhT5{Q]>Wf.MBiHAb#SJU|hmGVddS6@Z=:~(q ?!NU@' );
define( 'LOGGED_IN_KEY',    'X)]vl4 -?`N!oD`sY}8b~,Hbrc W{DM|b|oNY0k>aQ&c0)j(J-5r-kx~o;iI%(Sw' );
define( 'NONCE_KEY',        '@T,!=Q|(~{bPC}pw|o<D5/VBqNz=pz7W|<7M;#JR)18g%bHc~H5D&2O__@$WyhXt' );
define( 'AUTH_SALT',        'zv9[#]^)J02Aal#]%/wiC(0Mx]S[+z.4kN]cxXuBH5vvYJN[+Jf,i;29@e$~6ug0' );
define( 'SECURE_AUTH_SALT', 'C!j^3@pse32!Zciik@e^&A~~R.:,T@n%Gg#]JIOL/Ary;GK#`kGYe]WP.)V?`_30' );
define( 'LOGGED_IN_SALT',   'L88>~/iIEg tY K)?>?pb3ZiFomG}lCHU!z3fI}X;l]RwFs[dV8#yGo.ft!;T)S:' );
define( 'NONCE_SALT',       'mmZjQ3-B&).eu;UC&H>!62Su,9cemG=+JjV!S_;{.|}9)oR^2810H`^jcCi7m5qi' );

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
