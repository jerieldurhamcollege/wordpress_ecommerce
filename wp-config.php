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
define('AUTH_KEY',         'aqRSQQAePzBeHfjyi7oBj9mvwPE3KPJrIHcrmz+W3ThgTGlJUxwJBVcT0UkDbwuiu3/Umz+sRRxb/FW2cX5DEg==');
define('SECURE_AUTH_KEY',  'NNfDFFhQ8F/3C8rTlXR/OIrR5CCc8gn0B4lVQ4OA/wrBXZ2+ggi7YG5eAG9GbqAVW0Kj4MREqxx7tyEzeUyoQQ==');
define('LOGGED_IN_KEY',    'QJb037E1MIBGadNQqxs5SZUV9Z9IHDVjDN+uaqHmZXPvfhZRPiDH1lc/a5r6wlHYnHnc8A6VGbNaZnBLxzjE0A==');
define('NONCE_KEY',        '4AP2g9b5WzRjIK24vAKJ/lysXiaiXy2tv60jq1SdVKauD+wos8MJPVt26TgtO78hXaduFIq4SpdJlk29dC0qMw==');
define('AUTH_SALT',        'M1maoaSGRatgyZhtDqTUUOz9QtMXrkP1yKLydkLgJCfC6Vqw+lG802BMBgi44TSQ1GQH97lEuBufIJFS0mQ8PQ==');
define('SECURE_AUTH_SALT', 'OdkyqQDUJDPIe5zZKc4ltPYyXPL71Bl6zHKaxYXRKo+WHRftVnoLr5I//gbO9IgFLGDvapwwFiKuF1FJOK+f8A==');
define('LOGGED_IN_SALT',   'AdB0EtCBDsp6DbQJi5lH/DEmKV+/XTE2zfpakdY1Bj8Rbubvv3H/saHo9+7hrNruZFfrPDpVR7O/B21qsYqZUg==');
define('NONCE_SALT',       'r157xM41FoUiHMgpJQjT0WYA5JiC9U8ZSd0+lLHTd8LS+RqT7d7VuxynvPgk1ozTnnVnydFgjtKIr+BE3Bsu7w==');

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
