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
define('DB_NAME', 'cc9');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Y`mJQXvVP3 N};U:IJyl/vbP5NIqJ9NX,B96GX9JW4m:s`#F&JxPe1r;g;_4}-0I');
define('SECURE_AUTH_KEY',  '<.Yis^bTX}o-W%XL&yx>u:qi%3>3xm*}g%Ccogu!A:?5avbXAZS}UZw><RZoOR~-');
define('LOGGED_IN_KEY',    'W^j4X!yF7j*]?fE$t(JD?`4d9:7uFs9u`AkjhX[g9s)$ ||>kYmpLHkIH-M{+y1 ');
define('NONCE_KEY',        'g3_DPNKE4cm._ue0%A~mNh!tXlsH{buH+AfaeaG=B}mcoJNrZ4$D|c~U88Mff,YF');
define('AUTH_SALT',        'I0(skTIUU1Ia3#]H1r4Q,o]4%>LmPRD]c4Ps5 xd8%&.[*Un..V:@|;YI_ $TG;`');
define('SECURE_AUTH_SALT', 'n+)Yc1KL`wLg%-]xUN9_~et=< #[0j{gh*.5iGFWjJ&)wZy`nWP.%rIU1zpHy ?]');
define('LOGGED_IN_SALT',   'OP1EInrm[L:@&)^! mk4s@ta#@%Xx@$[#7l:*P-mVdeQ4saEr7TbbDk<=Y<POASR');
define('NONCE_SALT',       'AFY2vFsHg2pqr9g(=G|BVMsO6F76]2/*]p1&BNqyQ3NZv):{KXtZ!U;L|Ish9oyc');

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
