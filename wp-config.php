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
define( 'DB_NAME', 'globalshop_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'phpaizazmyadmin' );

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
define( 'AUTH_KEY',         '6_rOz>R0@McZV.`{<?2,?Uk+}FY:nMg>W9Y}PzwzMEpKdtbT3W]U!TK{_uQ0@*@e' );
define( 'SECURE_AUTH_KEY',  '%(}_%XhH<zr#rSQ4~j(0I%fTGh^%(7@0e0aa,MW4J0o!4,pfJ6s3XCShqXAdhgen' );
define( 'LOGGED_IN_KEY',    'ef:meOr67ixHW>.{zRrqTPS//=wT=eKO37j-pAu`|yf?J_&+r]@2/S?>a{p^q#Wj' );
define( 'NONCE_KEY',        '>oPaR#*YlGEk3O+(<!P`f#_ha`lRGHUB-(*JW6nG|6@gKk6s+R~;Klnsz97P!,t!' );
define( 'AUTH_SALT',        '-K&F:[&da)zlrX(Yry%c;C?3}:exoC2dtB}M(rL<X/d~q5;9.DS 1Zy:t,@`@p71' );
define( 'SECURE_AUTH_SALT', '&$ >b)Ot_9[WG<E+g|%Xp6+kS?}u)mX[=?Ttil{%H?UF<6xNA#hHb @}G;,H=)*M' );
define( 'LOGGED_IN_SALT',   '`$c S:|$4Ls,wUf6R{i=1~n`oiBLmNTbKasUV.4d+56n}z1DN8o{d%R?0[LZQ%4D' );
define( 'NONCE_SALT',       'QBD:92Y_vl}b-3)-K?;D<MR3<)~Rt4XW,wz7_F1cLY>&lF(%%YG`x5QO4,?[lBc`' );

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
