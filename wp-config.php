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
define( 'DB_NAME', 'selftaught-wp' );

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
define( 'AUTH_KEY',         'V_aw$5g/--7w(kThSGy,ehElGM}nGdbv9NIvy9v!VEz> Or(*q=^PCZ7naMHoy%K' );
define( 'SECURE_AUTH_KEY',  'GIu/V/X]))U<z-t w6gjhf_d*_cB-p&}|@Nms+8hYu86az4HpM;2;=WC7$3Dsqw9' );
define( 'LOGGED_IN_KEY',    '24[G{$W0 UP@#4EoX~+N6k%V<[.cm8=/&FRe/Z CzBk?1d<C%=eb,8tuOjhNPbBu' );
define( 'NONCE_KEY',        '^XSTJ8}1wGxx-voI+>WQRt!:i,4tn paU394x8wEumh1Ku$TL`DwKbRL79kLwB?S' );
define( 'AUTH_SALT',        'NEUbn!7Ol[V3xksmfx>C>*tdauMhu#VO5:RWnH1RN1s>iT&mpI(Y+@)MK;gIZIVU' );
define( 'SECURE_AUTH_SALT', 'J)doOF*ZFF@@t`)j,-JEOaB(=VH.=D_;tN3!p+IO?Y![2Bj[2s9AHPM,Xf2@#)|Y' );
define( 'LOGGED_IN_SALT',   'B7Yhf[Y3j>iAu>Re0&2J?C7{G^2{YRHh^x )Nj,C?!@q4HW0&C9E-gHCmWs%cw<h' );
define( 'NONCE_SALT',       'O~)[=a-pK4xU=O%_%x4Qg{N@r]G[x15T8nu$}g-S3,qvtnpN+p2OFj&L+r)9&Mp1' );

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
