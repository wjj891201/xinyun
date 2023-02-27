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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xinyun' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'V{Ucm~w<7*]gMLcq@n}[b!|{+@?S![c.,,@UiZhi)^(Bp28/.SO<v6l-N?|,&bKt' );
define( 'SECURE_AUTH_KEY',  '(Ai&Ts7c7Nipk|8m#f34qm`1$DjgIYp21A@48zWd.x;2*zqTszwKWVw?yXg~*(BM' );
define( 'LOGGED_IN_KEY',    'vWedNHKY:)ne:S9sCz)v)l/g96# #b/l}^kd=25MzTK>o@#9[HCX`m8! E(<OmB&' );
define( 'NONCE_KEY',        'KPBKzV3^?.vb{z~<r2%Q=dF9ImX/Bk%Zup5$D?KuE{,5P~eUbQ]w :=8VA2BfBQ|' );
define( 'AUTH_SALT',        '6jr6&fJk7OU:x} der4Z2ys+AT~8ZtMq[)An)!XIP:1J0^>X M)B&_r!@d6DZlk ' );
define( 'SECURE_AUTH_SALT', 'C@>[;`B<K7pLWs:@G.;4X$&HG18m}fHLa!JAoYrvPEL$e2?M@0)%B$TgG/uO~E]N' );
define( 'LOGGED_IN_SALT',   'SBLk<0yubESU#CMe^AGF~]SFgSO1!~1 I#ZJ{W}w8sgcg:j}=8=XH78M58Ca`Q0:' );
define( 'NONCE_SALT',       'xb:=]N+N+WgK%KrVszpv%n8Aflu[ b1uZvox7G t#h/va&q@E,HIN|dDrUrZ,mXP' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
