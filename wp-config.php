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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ips' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '7u8i9o0p' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD','direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mP7rl~v<gc76L<Ig a Bkq>X6I}b*q<<Gkm9L,Jho[=0)N;|2WH&Rg=3OdDK-bV4' );
define( 'SECURE_AUTH_KEY',  'p$fXJ^6X^+?ZS,UF3ZED/EyuX4/|a k^v9%L5wQ[gdl,Ty%i&zpr.YaS7-EW=m{F' );
define( 'LOGGED_IN_KEY',    'k`iZAMh+ZA6uKiqA+fC<mLd^fc~f~GEK0b&fR mi<W#rmC7moW{E,F<Zj,x}()_c' );
define( 'NONCE_KEY',        'ioz}b/v;jz22/~<29d>gUy2 l?Ui_xDO0sQ*oXfI5yuK@Hjb5cKnZ3f@WbVCM4K?' );
define( 'AUTH_SALT',        'xOA7&Lxt$3E>,by6?v^wZi2dx%x~RC>zbT7%R2Xfal^tB5oV{+3KF3!b^kNx?}97' );
define( 'SECURE_AUTH_SALT', 'syIY]DGKA-tcf(IQCD4/dC?D|MY$PE17[)VhTprd?E}xEERj#_>OCooCuYiy8?L)' );
define( 'LOGGED_IN_SALT',   'N~5?@H;D# Ul|.jfiL2C,<TBjXN%qHu*McUY16MVnzyI]>cONRUIp<I&U~YX>dKv' );
define( 'NONCE_SALT',       's!1Obfe?8|S=;JNq.6b&WWXMIAdxPYfJ@GmJMn_3UrF[g3ShP_J8G2p^:ErAlRa(' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
