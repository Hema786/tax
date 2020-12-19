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
define( 'DB_NAME', 'digit9ls_wp200' );

/** MySQL database username */
define( 'DB_USER', 'digit9ls_wp200' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S.H(9jp6m4' );

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
define( 'AUTH_KEY',         'xakgrjuma0ewcgcla64tuq106ypccyunpjcdtxvmltqq9tabgxzwppqu8fdcvm1y' );
define( 'SECURE_AUTH_KEY',  'stym6o0wm2kfn0egx7utdexp08dggooe2grcdbv9ysbzwgtmib8heig8qrjjvgn3' );
define( 'LOGGED_IN_KEY',    '61zjutly8l9bkic4x1jf8gsupcuisuascp2e7yav34nlocwi20tvurpwcgxczypo' );
define( 'NONCE_KEY',        '8haiiiqiikyz6nv7rbcrctt499rtep42z3pruletbyzwzac7n013ag3thevp3uaw' );
define( 'AUTH_SALT',        'hjcbv2kzqeyvpujdqhqc4zazc1wdj1megi88terteogmxpo3gjjhtj8tq0hyuhcz' );
define( 'SECURE_AUTH_SALT', 'dcguzjkosrhcmpqwzuodeqrjhhl2ydchx5quoxabnzq7gxvjyr8syxktwxqswv89' );
define( 'LOGGED_IN_SALT',   'xdrwng2nfgieq2f44gnxtkohuuzwf93cduclvi98mp87wawrkkoydpqi1efzbax0' );
define( 'NONCE_SALT',       'plaku0wtggeoruqjhhb3yzyeatkf2qgmdhdv0hm9qtabrcujoxytkd5ce2emrav1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpxn_';

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
