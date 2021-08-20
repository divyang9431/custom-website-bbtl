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
define( 'DB_NAME', 'wp_1ybcb' );

/** MySQL database username */
define( 'DB_USER', 'wp_rupq5' );

/** MySQL database password */
define( 'DB_PASSWORD', 'w7yHAzg?62Ju@F_O' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 't+%6eKF(9g7Eit#6/uS[61LU89XYN342UiZn7_3NSe4Qm8h6S6_d#z-s98K+mtJ2');
define('SECURE_AUTH_KEY', '9O@58[fU0g~9s_6Hmy12T2@26tR)Do90/PB:b&s+v7K-7j11[ST)|Qp01Jh~b4uh');
define('LOGGED_IN_KEY', ':&6!#G)h4gD*6m#rv/8F-l4eD4+l|7p-L_-V3m!g0O)mcx|hnVM:|_(r6&fzyKC8');
define('NONCE_KEY', '3P4%!]|F!|IXfYju&9_5N:dm&ehT3gT5MxiHYfYtvrpe4|1L99J|hEK;(w47e#(@');
define('AUTH_SALT', 'n8)cBB1MvvLy&_79cZESCEF5]qhOnu)P1c56C93VfI&&1i+9POtSf9aYahy3i%~8');
define('SECURE_AUTH_SALT', 'r%Au#0s7|a||a_Df6Oh31%RtJa2zt+)#_J+0B4Jw7g2X5L6@3-@6DP:3w0FJw*Bk');
define('LOGGED_IN_SALT', '50_/Eid2U!j5I/)G_MH)a1S5-3+dJ#7&6%fB&J24U~S[_15WjFs(A8%nWu4Z033J');
define('NONCE_SALT', '0tNOKE85(5KxN978h-g@gMoyz!0YU;1;&~bfD5&F7-5tt5Oi/znKV!PFrgCcH@:*');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '9hsqzRoQm_';


define('WP_ALLOW_MULTISITE', true);
define('WP_AUTO_UPDATE_CORE', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
