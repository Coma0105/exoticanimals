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
define( 'DB_NAME', 'devspark' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
	define('AUTH_KEY',         'ZIDaJZ7ilGCc,mKXC>>7N?Dd?tO3{W&|5bu{_l+!:xpcv3%W]>tY-dq:_eaAn=iC');
	define('SECURE_AUTH_KEY',  '.4Oy?ik;?RNHjeBJQ^.3hq]h2#3)|pGws.Cq5ON>6{DbG|jDeL-_%;l|&t1/pcSx');
	define('LOGGED_IN_KEY',    'b.G~SO=(0LNu~qYI08+z4)4P+$)vGAf5-fzjHK`T^^,j3I4`u!!P0lVRNQT%2*uk');
	define('NONCE_KEY',        'c.@WKP!|(8_JH:%5m$Y`qfv&q[SU-q-5s{wZ?3nTH3n9Phk|Y+1H`I{D:x0|LiXB');
	define('AUTH_SALT',        '[Z!i,,H6`E2h`xxr*;$x$UioP!|WZ!*aLI_h8FDSuEwS}3#?#,@w!R=1g2*)r#Y&');
	define('SECURE_AUTH_SALT', 'ITWQ@|ED;7|0cu<KDe%Nc]6ZfW>Ki7zlzpfaANt8)cSUYpz3;t[_ ;N2#)<GknEr');
	define('LOGGED_IN_SALT',   'B9kCJM-guY:,57z>[/M*rdBZGWa`3aG++Q+|x(5,)<LB {/6ZRd4t+SloQL)O42-');
	define('NONCE_SALT',       '5/eZFJz8X<hX ?@Tv^<Il@Pg.w a1BB -DO]9Z,eC0V*4`P(knA4 hP-0$TuL-%`');

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
