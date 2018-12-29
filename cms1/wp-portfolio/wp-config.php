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
define('DB_NAME', 'wp_portfolio');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'wpuserpass');

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
define('AUTH_KEY',         'wzJ+I[na;w.xZM]i!dUyK8j>JUOE9Of4U2<%LA5H2GT5RVq!!x1^V}E4+r~Z$r1o');
define('SECURE_AUTH_KEY',  'sRJG)<vf/od{a3D(6ErzB1Wo%h@w$~;@T2@LNlO9TF`F:gN<F(/<LQNuWw:xBjmx');
define('LOGGED_IN_KEY',    'a&;xvMz*>>_Y.AR ^E[pD?]Xn%^;$!QM*LVEn]!6}6LhA&}pdANw;fm<ZgAI6^t^');
define('NONCE_KEY',        'S>h}r-:W2_>RrlM)g8EHBc_:=e_te1a?IxTP^:MQ3A5eb7BK>=>`{izL<:x9}4j.');
define('AUTH_SALT',        '7BcSUY3y$`Z|2ViKRKp}hw>D71E$> )lwTLxbHqFAOey.!J?Zay_B Woy%jXA |g');
define('SECURE_AUTH_SALT', 'ZO #Q,x%eq0oh?%rJ.nRhtsJL( S`_n:P8ZV?Lp[S49v!zogRmyxnDuWFKW,o7Zz');
define('LOGGED_IN_SALT',   'rA<HEc[/Fz~HHwX<|G,&T@cS7dKFTZvBVs#.[k$sWi+<u.t4Ac2DwMACT%bM1 )g');
define('NONCE_SALT',       'c1j)Q|bzurgjWk^!;RUxVRQ$bww-T<03+@&85;2.QY?7[L;.<WURCuD%;?{i2GtC');

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
