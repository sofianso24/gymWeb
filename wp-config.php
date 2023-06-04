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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'R+vOqzn5bROnKzXrxMt6Ml+Yc3mIMd9rK1VHaq1ASeLw4WxCqX3nFWIV8+LhrC+KGdFr8Fwi+QkNNF/ruxaSZQ==');
define('SECURE_AUTH_KEY',  'iEfCmtBDmXAbUmeAjWT2X+Uo5pZkoHezrVwAumqJEzmgBNdsVR3sa8liWzZeVvGsTg87HAn8ykMN+DSLWQOPJg==');
define('LOGGED_IN_KEY',    'a/WJPpAGXUK+qdKds9q72qLlamFrVmr2PMfH9Zb02xlumLTi/6SpW0nLCVRvdPGBcwKIxNL9L2winKdWlFPqNA==');
define('NONCE_KEY',        'HAWtBiU3LC0xcC9rA7PrfxDfEhCd1WHzBS/l7aujJL0DRZlKomOJRmA7AOEeype45FrxYlFKddV1iUUBfsAn8w==');
define('AUTH_SALT',        'yBx+Y5xPEa7TgDW6J4ArRFr3F4Nx/Aw1xRTxs+wkvj9+Kn1k+eNTNlkTowgXeVdS8gleE7bA4VaI4CvQx+bpyw==');
define('SECURE_AUTH_SALT', 'flzGWS2oERDga1m5wJ4LnDTBXm4CimwrmeliKK2AMe290kJybqAvNoypt3cPsozEOpiaVJPJLR+a64da6PmOWQ==');
define('LOGGED_IN_SALT',   'bPOFzH/3+SEhgrZDZmLjSi6lKmlx3QJB5ledXF6QPn3u1y1sKWxQyj5ylwH/uQcF/MSDdS7bnmYr08dHGRhA/A==');
define('NONCE_SALT',       'ThntTVJkjktuhcBAGIyQOs5b+irjJseTT86sJr8uAYlE5rPGt6WfTrZUHqbRBGLBsbCvvI92hZvX3HtX6rKILw==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
