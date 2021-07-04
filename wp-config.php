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
define( 'DB_NAME', 'askcanberra' );

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
define( 'AUTH_KEY',         ':F[CyMNqd)3D#FsDdYs(<,?M}de7LL7o{[v on?TxTe5x[x%(-E%0g{b`jHM[~b!' );
define( 'SECURE_AUTH_KEY',  '<I0(^-,J[uC,nXm Co{B~GC|9nD/y&v&,]y(u@3e?4;zsC`GuWE}O1+vT)@DlVBx' );
define( 'LOGGED_IN_KEY',    'f]u5V=H+v6>U|tBI{WHc_^GwZn#h5EApHcHWcz[L*SUc_xUKvGxn5Wi>Ze<5F)=;' );
define( 'NONCE_KEY',        'WvY!,kEho=z+n+ tZq?jOeF$#SRPNX]R$*Y9N*^>*+EE.n4&nDMmRo_Txzzt?, ~' );
define( 'AUTH_SALT',        'L@-w`Q]1(;@A28U:Z?tgY^GJ3ZJSD1|`x54)O0?Hb[&-h49+e8bzjkOqZ)z5Z}YN' );
define( 'SECURE_AUTH_SALT', 'J6nZ0p=Y.PLijP)K16W!;{B5Y#[SM`hL^:v,J)3_2< DW8N=hE?6M8N3-kfq O,!' );
define( 'LOGGED_IN_SALT',   '7_;-ed1qUgtF*$+EMD2}iWN/&`7fk0M5+KrcejjQ$k,I5m#&e&=k/<<P${Vvb!N(' );
define( 'NONCE_SALT',       '%sB(0H{)3E@XB+BtP=c<xO%^%#6$.]xJL-jj{oW6y.1ta]y 37BF]MF?cr Y/%U0' );

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
