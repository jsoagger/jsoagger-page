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

define('WP_HOME','http://nexitia.com');
define('WP_SITEURL','http://nexitia.com');
define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nexitiacom140');

/** MySQL database username */
define('DB_USER', 'nexitiacom140');

/** MySQL database password */
define('DB_PASSWORD', 'Fuk6Z7tdUVvm');

/** MySQL hostname */
define('DB_HOST', 'nexitiacom140.mysql.db');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'HNe9aEE/YC/vOo9Ge9GKDN8hW1hGR8KrEcD7NXnRhfGRWkcSo0egxe9ICpVe');
define('SECURE_AUTH_KEY',  'wu1kiqGZJE4BkQcoyasWkLPGllVkIEwxm6HzVCjDN6/fbCKPMyE1bV2K+eEL');
define('LOGGED_IN_KEY',    '2cP9BTG7yer1IlNv4nTGprEmp0sOjmDQaCccxoIH3mhz+66gt0xg4E95sWHo');
define('NONCE_KEY',        '/W4U83gGe+QU5MV6TRstuAPeA1j2Qw76K5tpEItYkl8MnNNSO0FFlf1e+ODW');
define('AUTH_SALT',        '5GFr1EgwboqoRHtGqapvZUDkwPSMOiTyDA5czPHKf+d2BDdMlMECxhEJyhup');
define('SECURE_AUTH_SALT', 'QFHg6zdgLf1hQZTnG8hL7aNTjmRYCPX1xcZLUPGvWT+LLG5g9X5N1PejfTPM');
define('LOGGED_IN_SALT',   'IVfWOQcS3582gBY2ltG0cesZUbPVyXJba13DiLSwjbo+jQ4v7zOMG0GqkIBm');
define('NONCE_SALT',       '9Z36hh9AHU8J5GJWcjnu6MlMdvbH5gCqVWCAbnYIojBiYuTqjIXyYdx8Taii');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );


/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');