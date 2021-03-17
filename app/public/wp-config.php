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
define('AUTH_KEY',         '56nVB2DbfIdSndM27+lCwsbMPS58+U1rd4bucM7xRc3567YzdVq2IeamSdUwnhZi6h6CHq3v7Irad0oQ11ZtcA==');
define('SECURE_AUTH_KEY',  '+iYJUMQ3qdBcG6rEwB4MGZJN0i7okUDPsFrfMs9q3LkdgYw5ul06L6OmIKr8S/utmsUN2haGSJM7idcC07V5hA==');
define('LOGGED_IN_KEY',    '4yPS4IJYKEXhjFSdUCU7RhEyCpfiDaNw7Ncdt5Rb1jlVnjEPAqgrII/EGmQG+2thej9lWFJMFf/vajMpBNGewQ==');
define('NONCE_KEY',        '543DrKKGI1mvyCQRpOykWSdMsvpgXj9XOfLomKc/b/2qGDXScKNCC/PBr1oluasF1neRpdxzhUzsrDXqr2EU0A==');
define('AUTH_SALT',        'eHxIAgzZaPc5p8b6qN91LLNKSE6u1FPOS4r/2+X0/ARiproCS1p2RnWqUY0NBAR7/Dl4XV7czO5X6SWljvGPLw==');
define('SECURE_AUTH_SALT', 'GRWKcD2Gjq4z2Tp1T7Cu+QcstrgLybpNWrt2XbwzvWOuS4lqgxDefkOduD4RQhCTmE51oOjxW1eNBmzb3mdFcQ==');
define('LOGGED_IN_SALT',   'p72oIDOJci4mDWLynmCjMnEnbwzKfQDm1uhCeWNyMO9S+l7yCLswnZxRqy/MlyyHQPPrfX7gpwPcDPqTnvdj/g==');
define('NONCE_SALT',       'mcI9AijZfcrzPTnf7p7RLoeHDCo/ygNzzdcW30dJIRes5NQ27qtq3ZJf4xA5q5b1hxY8jNDJlMvQsMyjwHk8WA==');

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
