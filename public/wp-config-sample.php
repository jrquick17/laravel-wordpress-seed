<?php
// BEGIN A2 CONFIG
define('DISALLOW_FILE_EDIT', true);
// END A2 CONFIG
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME',     'jrquickc_a2wp449');
define('DB_USER',     'jrquickc_a2wp449');
define('DB_PASSWORD', '5JU@B.7Sp1');
define('DB_HOST',     'localhost');
define('DB_CHARSET',  'utf8');
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
define('AUTH_KEY',         'u1skzy398ndgh7pm7uylpgfbd5m8esflsulp9j4jk8qoraexcvoph1fcbufzpyuk');
define('SECURE_AUTH_KEY',  'x2uwflmuo45t3guzxswhhbs2d9vtnwbjgujphsy1wgqxl2axvkqhyfo0fvacwkt3');
define('LOGGED_IN_KEY',    'tsdqmnvijuww57nijrwgvtrccydj6egvjg9dsule6gahpkruqugh9hyjxjnvbax5');
define('NONCE_KEY',        'a8npmgqfmqkwkyhdpkpfepstexooj6icaixzarpotqqn7uawpqdjgkisfzjrkr6z');
define('AUTH_SALT',        'mqz6uorrpukyacjcwnyhdhnvx5d3enp5q8ckdsbz0jmlhxa0goxcvcjtagpy5e1g');
define('SECURE_AUTH_SALT', '6z86abs05rhvmj3zvgssxxci7gjvyxsjy0mlovtojgeinwagupwazmt2zud0vpea');
define('LOGGED_IN_SALT',   'tsqfgbdnftxarytf64xnpkbqbz5zqmwse2oz6cxnqumknv0pk9trbyf5z2bdulwn');
define('NONCE_SALT',       'zqhrbwo4i6bcfuyga7nw4puwqwffeci50zqwrj8nnpqfssyxiqhjovosde9fdjjs');

define('WP_HOME','http://localhost:8002/');
define('WP_SITEURL','http://localhost:8002/');

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
define('WP_DEBUG', env('APP_DEBUG'));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
