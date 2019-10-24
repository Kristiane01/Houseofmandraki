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
define( 'DB_NAME', 'i6168366_wp1' );

/** MySQL database username */
define( 'DB_USER', 'i6168366_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'K.SdRzbVJjtxOhx6hD172' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'kuz3bN3oQm8fyIXUycuN1IBbSPgKUiEJkTr0oswaefgL96I663RtX9xpYLBeUgWQ');
define('SECURE_AUTH_KEY',  '67Ov0Lb5zZpVZaOOnSEjWf78TUbYnBs3kJ7ZVfYn0GbXMiibx8XWPN5GSZcBP3Fn');
define('LOGGED_IN_KEY',    'PJ6hKrL55nVxj9e0xCQJUSgtHKGT6XsOynpNaZVgMwRmRO57kff1kJLsk0SaxjLw');
define('NONCE_KEY',        'Iv4wLzfDeSsfymzX9XwzzOe34dCTTyqZIoYxRK0iHj79YwE2NXwTiOEkQX7cku5Y');
define('AUTH_SALT',        'llot0Iz4iZw03n3ViCIuea3f0pRsynkLsFWWUI7ezDGr98RUIxBPLzdS9aklVgIy');
define('SECURE_AUTH_SALT', 'BuMxpCr36QKL6YDpEPEk0MG2PNrHAxSJF2EIE9qH2himG6iHKcH91XaWVhtcXGQr');
define('LOGGED_IN_SALT',   'vkzbh0ypnMjMuMdu4QF6aMdVch16SN4ENvK0x6dTvjQTEOZaSQ6arNy6Grg75fVM');
define('NONCE_SALT',       '9GdRqpIhrx87bNbxXd0wQWM3vufHpea9ZevWVo8mki0Vabs52KByV9axRV4wjuA4');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
