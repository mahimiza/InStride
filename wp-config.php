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
define( 'DB_NAME', 'instride' );

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
define( 'AUTH_KEY',         '0JVh1yEEvE}.&+Dwas?3U;~#Re}D^p(Z!ePn|&)]>>f Y77;R<pXiAApZ1-~Pkuz' );
define( 'SECURE_AUTH_KEY',  'nfHfs#/)?1GN&kbwCJIz`J}]m-J^`AQWvTAdjp?GaEZ8`A.[B.;@2WLIw_9Map&a' );
define( 'LOGGED_IN_KEY',    '.qe<}2yh*ZopTrSDFCc_jRCOj4~{&wX?7esKT=ner_]*9PB #`1mFON|t|k(n R9' );
define( 'NONCE_KEY',        '6kJFxGWaM/xWz2otM!$S+=8C*k3ly`LMT9Qw2s3|P#d(k.?_GzDR=|wr{/47LN)b' );
define( 'AUTH_SALT',        'Nb9RE;~Ac1Zj[Db59P_/c!EUn]cPe/[<4#:gt73!YDR;j<dH8J8yda:}0Q heVs+' );
define( 'SECURE_AUTH_SALT', 'Hs&-]$NIyWop0VM*{KYKZQjA9RuRg?!jo::m~#`4D~CJ:dr7+4`D@o=rIEfHel5I' );
define( 'LOGGED_IN_SALT',   'i4z{!2w*AI^D)_EWQyT;;Rk;&zv;DuW1eOxA+G{>zv{+;NPBO&{u>+[j/rq<UM*_' );
define( 'NONCE_SALT',       'cW5Ew]C~}g [3Zq=GPhz%&cPq][,ah 9MrA;fT9Ku9Q)]QP3dLOy^Th*%AEoS0+[' );

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
