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
define('AUTH_KEY',         'MgHxxJZ4W1D0st7Wvbj5NoSfvbYYNoG/8biipmOEKDohpdBQFVdHbiBBUcX2Yj3OnT8zh8ZzvhJ8Mt5ijgYvUw==');
define('SECURE_AUTH_KEY',  'sxsb8SrSCrEkm1PnjGhR/dQZNJWPKsSBYu1PEYigSibqtfHyie5waVlWdFRzxPcOPTlCOqvYAph0SmST7iV8Zw==');
define('LOGGED_IN_KEY',    'r5QVUoJiaffFCrtWHMOzgHFaCdRUqNmJmfFGcEHD+dgJ0JYIxNEjmj6Z9nU5I0Ngd1BJ3N35z5n1dQNWtqArEA==');
define('NONCE_KEY',        'P6TLe2UL7chlUsaCfXF4VX3GgKH6X45KLt2mtMkh0jKcWevaNoC3zNXS0J0DuuLHO24NGm7MqFfRY31rqlY9KA==');
define('AUTH_SALT',        'JrdurtGq9nlT/xdDwYbmVggGE/FG6oWULMs9sEypZ7nseh/bqWgDfwJaV7MNavejBpwci9zf2Xj19kH/2h/pzA==');
define('SECURE_AUTH_SALT', 'RUIP29lHtfGXR05L51/7xVKVbdzaiAH8v7jnB+hKSltawiSKM9Uq/EvXrUuZ26lKyPA//yuz2WHJQAuFUxwUBg==');
define('LOGGED_IN_SALT',   'nxaRyxZCBOiwoXs6eZvNM3v5AK986FftBMmVURx/MX4ReL2qtTucXXEIVf7ZcvQCO/2TOYItY4YVrPbbg4823A==');
define('NONCE_SALT',       'myyu0EcPe0UkVLSv4a1fcZ0hKqPOCQBGDeFCuIQHONoxY463DQcIUmyEySl98frAF8Qe8LKOBTBYjkVgwZcJ0A==');

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
