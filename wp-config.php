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
define( 'DB_NAME', 'fulllife_db' );

/** MySQL database username */
define( 'DB_USER', 'fulllife_db' );

/** MySQL database password */
define( 'DB_PASSWORD', 'YxOVQ8bx' );
//define( 'DB_HOST', '45.117.168.156' );
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
define( 'AUTH_KEY',         'uS2FB&%=2*u@5}=}2u>EtJ[G$t6XBoNiL 6_332OnFB7lEBG*igjkjtP!E]/oIJ^' );
define( 'SECURE_AUTH_KEY',  '({{RD+<IJ{[$*enIT/w|TfTnlC[)<DvS2r0aOxG0e)@a7;>Wmscv$]/Bn|I[[ X0' );
define( 'LOGGED_IN_KEY',    '7k`(Ms<qqTnpW` $!p=bz+6hXC~ 53]y,j{eLp7DeTS]pkBV@QeT/fdo~b]iA^|[' );
define( 'NONCE_KEY',        'k4:C>O@cSZ;G`(vg|f[t:RKi5kYKrdK)+%:DsM}?hUHPBkUhak~.duo!9[S/bbKt' );
define( 'AUTH_SALT',        'C5u8WPUM;!=(E._vq{2gUOLX2z%R<a7eyaI].vMmY1GMZi@48b#T (s<b:$_7=~e' );
define( 'SECURE_AUTH_SALT', 'tXOB{TBMZ]%[<p#~F8K?U`pU[UXQc$>vmDVupE*zFOKkYb$09R_,0hoz@xGpB2dV' );
define( 'LOGGED_IN_SALT',   '.3zCWjN_k]YC3zgqXZ|b:]fmbRgP01@cjVdg{o^`0#Zau(oF^^hrq)e[+bOVHA&p' );
define( 'NONCE_SALT',       '] pTwo3F<1E%6@R p*rAU/i&]kv=?^d$Wd|9s%,qRZ&1-MI?,SY_VZx/_#hbohIz' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fl_';

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
