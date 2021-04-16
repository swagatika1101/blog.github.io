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
define( 'DB_NAME', 'blogging' );

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
define( 'AUTH_KEY',         'tffgba<sU,udGCPWD2}`d| DA#NV$R9,Fqk%76:h|zL!n~]V8s^S@ /8*$u*6#xH' );
define( 'SECURE_AUTH_KEY',  '$L$CJrg,E`#&(:}t1DOM%-8| ~,!JqlhE/D.?m{;wRqU%xyeI2dL_m0Rtnb<8G@n' );
define( 'LOGGED_IN_KEY',    '[vmm6G[VGWYs.5@-.mfnkX)hP%eSxbAF0q;UMej?aZX8!Jnb_slj>xNH+w.mmf#[' );
define( 'NONCE_KEY',        'bJj.o+(koJ$M*d2T H8r=hxRbA[C6PW|=;r>V&wg!Pco:@}%f+GG4y|K .t.l5P3' );
define( 'AUTH_SALT',        '93oq2-j7_k}dj#K0Csq.sXIF7K-.hv#<.pxrLRib1bb[Pt|~ze>i~]EHy&t /CT3' );
define( 'SECURE_AUTH_SALT', ',Ezn~iJmW6BFxj4qnV1G4Kb^^;jbR!M{MlX-bZ;Wu*,RqF{]=hRy9UWwYW}Qc$2I' );
define( 'LOGGED_IN_SALT',   '[}MAw0l)(M[Zk(s5taw>)!tgI%nFB7O4]Gj`bz(34v6X,N_J$tCWnrQAUWf8Yh9_' );
define( 'NONCE_SALT',       '!&m9vz:Ge/_hghk~C=nMy`?:M2qETZ$:+cuIj7~w!@@jb*2ZS!1R2]%HEuA[5(Ys' );

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
