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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'upa&h]B$TrrF0oP^LO;P^pxg8;tjqgd4lkl|e:3S/*:=!f0wW?#yC:D},$v7XjyA' );
define( 'SECURE_AUTH_KEY',  '/_#-~6k~uA-Uv2*.m3Rx]!?5e$m< }S5R1J9WM=n,fzgd)vNPAPqGy+0KBi %$KW' );
define( 'LOGGED_IN_KEY',    'wz7oOXFRHK1Y^VzRV&$kq<>|5rBp90(k/;JM#v|}I3<^_vFvX:WdArO6[6Kn&Y(T' );
define( 'NONCE_KEY',        'f6,QmAEFBTS2x7k ,Cn.}WRcT`WDf??NH~xl5`&8U+xeUVwf}=9)]ZZ7z1>]S{5T' );
define( 'AUTH_SALT',        '^wVO >p#n*v,L=>!LfDY>#<+X?{L#4d$|TFs,Q5@0Ed(QvGpA&.~{:|,0GXhzi$b' );
define( 'SECURE_AUTH_SALT', 'JedVYVL(=7Com<&4QPW^2lYO|89taI;Y!>QT4IHd*Cfdy,GCkQXEI-9FBeDNg,g0' );
define( 'LOGGED_IN_SALT',   'i9e]WD~(|OJ<nCUXW^k7E-Ew^4~xqLq/r2|W,&KfU~:0TW-B19mrp5gPS8TnlDqV' );
define( 'NONCE_SALT',       '09Bm `|G.=Z,P{SQ{J3AY^mryUgy<r*C@Nbdanx|q<cW>-[GNa(]}m60/jLi-5 j' );

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
