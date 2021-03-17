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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Nn6aJI9rbnnXaVRvYxYnNRoDrebYk7IC7KRsLm27Lsl6w1W2Tlgy/j/wmUi+kjFUizyTK2ogY6P9XXBgWy6IOg==');
define('SECURE_AUTH_KEY',  'JOdmCCBgrtm5h6nvPX6NMbEHXno2ujn2HJdtSy5Kx0fXUQUsV/mLT0bqJ+eWCRxBOc5NCqF0oHFaqX6X/lM+WQ==');
define('LOGGED_IN_KEY',    'D3IwHhVs7V+YBWskyWou4cuCcBWtQyXg/hcV5wu5X7YWLjwhuvpHPje0kGZFRxyLX9Oo3rGW/sFknc5ioJ+13A==');
define('NONCE_KEY',        'dvsgoXIm9zskYFGtpwBGIigCKYbtUXLies3/LQhZ7qStcfCj2bA0dNR7jQyTEEIo6s5TINeGTdxDAUvCZBUvig==');
define('AUTH_SALT',        'xrFyKShCsThrYn2ctHQLnx9qBPTyQRVotFBJeB/rT7iX6LFi2fjK1Mqea2suISpozTBzudjVqfPj2qCFJ8uwYQ==');
define('SECURE_AUTH_SALT', 'XPVN0YltzKS6f9jS8WNDck5lOhiGhsCCKSD/MrLyTCL5BQtWfkyxu5ipugVZ5p4NyhUwNLCvgh8bH/q3IVvfeA==');
define('LOGGED_IN_SALT',   '1YyRBr2AvKFKzyIqcXyioVJ9qFKi0ud4TJBX87qGL2uxjcqPEF3euKZ0F3BZqiMiN88rpb2NnbfSXzgVr/gzgg==');
define('NONCE_SALT',       'mQfMl15dzz26/ujRL1f4nRxX0SQmoEE7lEpDlL2CRsqaIQADOJBJXt7+EhnJvZ0i/3UBXAn2GlCi8NRFYidY0g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
