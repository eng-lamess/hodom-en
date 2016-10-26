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
define('DB_NAME', 'hodom');

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
define('AUTH_KEY',         'OM|aE#AU/kJ]+1.{Wqc,q_vQQL:f*&c6}MUt$LbI:NdyV~*sXFre<0M9OsBUFfr5');
define('SECURE_AUTH_KEY',  '-c06E0HUN3S/j]$}>7xms^/VG[ &EZmD(p ]EqA@= >SgrMo(I.K>y`2PsVd_fci');
define('LOGGED_IN_KEY',    'p7N]QD&r-<r]$OS#<^;Y5G12W&;<{S?0T$hU6xly?R>`bAbhlp(9(}(O{PDKm4<u');
define('NONCE_KEY',        '7x16~{eCEo8TC%a/OujjAvuAB/Cz9QD#x7vW%%]7iGfUrC_hpbhSp_sAm6B?{N7Q');
define('AUTH_SALT',        '2y@x72ANVA::JnOWQ@3tgFoJBks?~4XaU8qe01MC|+j%3!w8yZ^h$=VZXZ`!y6=N');
define('SECURE_AUTH_SALT', 'Rc<gV0l?/,|jdO!*p 91OUDCKP{3BN(r_h`.?^O7??6A^ j-H6]O*m|D=rkyoYz+');
define('LOGGED_IN_SALT',   'qJd.NHb[#c)hJ60Y3#@VqjEw%4Y>n0Dk=&D/8JF:[eRFWH?AME7X5oh[$JqYR<kG');
define('NONCE_SALT',       'nh,.jlumpUy).f@oYlF9Z{ Eyd!tFO,<D88~|=sgwnrUO#{secEq@-|d<|pM*Wr?');

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
