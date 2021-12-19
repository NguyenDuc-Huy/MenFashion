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
define('AUTH_KEY',         'repROdpH8/DRsboMcQ4eSsRizaMqgtv4VCrOq5E4/i6S33fbFxjidkabg8MVvlrowENNDqu9TjSLyFsW48O5IA==');
define('SECURE_AUTH_KEY',  'cejllo1/nkGnaKNV85A2f+HZy8ZiE9iHvJVcD9AcQvGpXnk+JneBXCKy9mI50r3r9wJkre0ZOe+oIzWPFtX24A==');
define('LOGGED_IN_KEY',    'QQnsyNodGdn5hMgXTYcVNbwzBFmdUi5mopLuqp/ZNHqGia0h5Uedrv+Hdyb3xjtC0gip3ny3kiCZs2CP2c/5Dg==');
define('NONCE_KEY',        'WXJ/RP7OxcUfU4Y+kzN97OyTrcxfxYAjjsCfHEFnCxS1hTAKjoaT/hjlt5/kCvx+H0b6d1qgQ66Nz2IdLbGtKw==');
define('AUTH_SALT',        'hMcoiIGBbpIaBRp3LEA7uUjyN7LeqoI2VUi5JIZnnGrLNa2xN+zr37kyeuc8GmqaVOe0QPVWvhbYR/juLiNHCQ==');
define('SECURE_AUTH_SALT', 'q+jjHY1933A1/am0n3lZ9urZHzoy+NsHKVXvmQ63S33ZF98zvFbEOLW5lkeVsV5OIM4vg+VDiap0EmHKR54cNQ==');
define('LOGGED_IN_SALT',   'guGDSA0nl2i06WBdsL9U6XSUQCMnTqFA7GM2fBVUnYgXwcOJMPw1CvBRhe1cuqoIiQGWZ3ocwl7Bnr40CBcxAw==');
define('NONCE_SALT',       'GJww2K0fR9JdJPSPT/ZGAEtCtIhSvTTS4bvlpWRdxfrNLL33ZoplNDvq4CC3BXshPusUmXv2VdbiDB6M7dvvGQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'w9th_';

define('WP_DEBUG', false);


if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

// WORDPRESS_CONFIG_EXTRA
define('WP_SITEURL', 'http://localhost:10022');
define('WP_HOME', 'http://localhost:10022');
define('WP_THEME_ACTIVE', 'sage-theme');





/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
