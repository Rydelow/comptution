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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 * 
 */
 
define('WP_SITEURL', 'http://www.comptution.com');
 define('WP_HOME', 'http://www.comptution.com');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i6889255_wp1' );

/** Database username */
define( 'DB_USER', 'i6889255_wp1' );

/** Database password */
define( 'DB_PASSWORD', 'C.xoxEKkMwY5Bjw2Nz551' );

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
define('AUTH_KEY',         'bRG4WQJYPMlT5NVtTxAXnjlpNDFMk4bkNsebbIDX5re2ov0VCYfOvolah7aijJw5');
define('SECURE_AUTH_KEY',  'unQq1jZuY71I2gEqghDDHkkuoKvC903haYUmkermJI44dq7HZQaE8cVbmM0BxE7E');
define('LOGGED_IN_KEY',    'ELYHS34WwQFES9sUSrgQkWrQG1cw51wvUeiDk9E1I2S3N9LjgBgcrfMxvr82nDnl');
define('NONCE_KEY',        'TyDXbBkNVa0PlmpBhsQvy2Zo939zzyakmhYWCi0NdwA7FpkuRaFEgh7gli0z2eOi');
define('AUTH_SALT',        '4nnncvMkD24ha6SGut9EDwcfyRcv7jz3n8rhq5jBaXhq6lq70FfnixVzZGNuPleu');
define('SECURE_AUTH_SALT', 'iJibUauiax25UVO8ceLFRXXg0EmkFYTqzIOIvfUN3EGZyuj4UREJu7KqZj4m7VRp');
define('LOGGED_IN_SALT',   'XgW4wPb3ZOVkU33LmV403PQ6ksGhaBVuAfOWfF9SkeVARzhwQbBF7YtB0YoO8Fde');
define('NONCE_SALT',       'K7YPh7wDKHftDrehVuNBZfZzJNhqVssHjxPOpxMP1e7n6YoNTmPLo5wR8UEXsMPq');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
