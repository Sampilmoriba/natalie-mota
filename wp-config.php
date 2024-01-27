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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'motaphoto' );

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
define( 'AUTH_KEY',         ']rTdK#*Rm=$k[$1u:jEBR!i/)^aR$k.k;vx&]m*j@sXO9gszUtoWic2W<,6UFw6U' );
define( 'SECURE_AUTH_KEY',  '78rWZqw!}=qSt;bJ!p_?vX<>7y_[1b]$n(8RzFbxw_KQY/Qd)s{I(JW!OiaD(</7' );
define( 'LOGGED_IN_KEY',    '}kbD0[ZSH%sOjgy0=&nw7i-o^nK+D&@MInZ:sc`Y~)tt)H +]2H^8QcV^Q|lru[Q' );
define( 'NONCE_KEY',        'cLWP-QF%$I_X-Z,*rx>/gxO (Veb.~$PSMQfL$C^6sQl]Y^Lm]2?Iw:~Y8=,r60~' );
define( 'AUTH_SALT',        'sB]3YE!(nGp`cHICWUEwbk2QESM(~[Nz5KaH.%Y/a^`*h_km=61%+x)!o/E&wqp~' );
define( 'SECURE_AUTH_SALT', 'gMqp+eDK3nizR]1( d3[T/3CH*rj=>04!Du];}i|x ?N/j({/wVJ:L4j1$+4eELI' );
define( 'LOGGED_IN_SALT',   'Jfreka#35z{L,+GBo^y4 !-`rRT@`{H~#/t>dfZ9LDv*;8|*n0(6i$dAY-ckw__V' );
define( 'NONCE_SALT',       '>gs?y?8Hv]>q^kAHQNIhy[F!LHP7QL-b:QEL$;D#;kYb@B!XxROb:^ZWxi<#(f%C' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
