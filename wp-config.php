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
define( 'DB_NAME', 'craft_wp' );

/** Database username */
define( 'DB_USER', 'craft_wp' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '4 &D}Cq-j8_T=CW4r<H5dOUQj~J}ZAxo+gK$c/nwjW>Md5u{sTxqt5I-@KhB%ahm' );
define( 'SECURE_AUTH_KEY',  '}Lt5EA=c//~Xf0Lq[4~`vBz^afmOILICf0Su4HiI-k)5wM)$Ax v|/+Xl3mOh9$c' );
define( 'LOGGED_IN_KEY',    'x{N0Y^Vxu|w_+q7GR|eX<KT&h7[TV2jag4N(F&uv5l9~1,_+8pw$&hGdC5h-HSSY' );
define( 'NONCE_KEY',        '<#2Y|fHRmRsmu`)q7|=|K,8v$mD!{MCq:#l-.rQSGsWJ`%#uQEk}$ssewFJ5@|U}' );
define( 'AUTH_SALT',        '#DtZ1&|Y~nCZZqHU1sS,/4BFb+aUe$N=WV hSBk(MxR*Ni^DyuCM}|n%CJ?F]3P-' );
define( 'SECURE_AUTH_SALT', 'pTz.%m8{p?W_!-py ^*T:/!i! 4i11Uz2+kVOL LpAw.sYYD(0~Dda`<EbZEH<wO' );
define( 'LOGGED_IN_SALT',   '$W/%W0g+x_us#z]/@P(}Y+m|}hLG,lO/1FGGYwyxpx2yFdW%UcogRwfeA 5D(b$p' );
define( 'NONCE_SALT',       'oi.;Q](<x!t9fE8Wmv;r(mVhC|ylM#LR*cFCL#kw!2%_2n4~hqz-u&(,/;vC[uQ?' );

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
