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
define('AUTH_KEY',         'ywRvPY0ssR5WgHy8wmQlKuhDHlkbo3VqsbZH91cZOuevFVebxub8e3aIVIBA82nlrWzox4HBbEGHPG521gIR5w==');
define('SECURE_AUTH_KEY',  'tRGp47GRGCjnPsEEg7N3/Hlg7pbOjS5EHGiJ1L5FyEWN4Ec6iaR61qly8W7fh1heHOGdcE3yAQtm8wMYuPc6oA==');
define('LOGGED_IN_KEY',    'n4FPcnCZ/eQohESDMF7sH19eEJIgOXPZhWpE13ZBuqZXTEmUXGkQiYFo1pCsik2U/IWERwCjsUmKYVYJUADxvg==');
define('NONCE_KEY',        'qNLHyuhUoAU7WP/ioQ1+VmIIppCKos89ba37UBcedpq2nQ6yK9Br1jpx9dkPRXW/k3ffp7v1MZbPAFMMKM1Kdg==');
define('AUTH_SALT',        '8IxypgEsEgZowShg78xRbQ2I456ZbVtiTYRQhN0dUf0/WeC5OM+rOG3TgnHdyCqodkFuaiAmsbcqSlpAQKWwKg==');
define('SECURE_AUTH_SALT', '8ZloQvMJ56MUhrJMabM7P66AR7dxAs3MjIObmpIA81+ysMRo7hG+z9cg5/qlVqPfTI5oyh4ujUHFATrjVZCOrQ==');
define('LOGGED_IN_SALT',   'f5+3nj+/DcaTg3vU0bTHvlrUK8g+uMNyhurWGcGEmbMYzZatjp2zJzE6jFBnUGc78Q447RTy4af8KENcDVKA8Q==');
define('NONCE_SALT',       'hFuZVQqQoe5TD5NjUG4SplDuGImybIIuclo45Ng71NVYoWtWQmdoZIWCaG1VLfmgre3lNwxywmKAJVkgysjkwA==');

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
