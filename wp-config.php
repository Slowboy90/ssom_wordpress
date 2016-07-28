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
define('DB_NAME', 'Blabla');

/** MySQL database username */
define('DB_USER', 'Blabla');

/** MySQL database password */
define('DB_PASSWORD', 'charlie');

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
define('AUTH_KEY',         'VT8rMG$$ZLf1G=B{^2ZG=csDY`^yU{MJ:S@29/QXU9~ N)!q$41K`do=3?*naLGY');
define('SECURE_AUTH_KEY',  '+L--!{<,p*nNxV8E//n_~}O=KgjxbAw.U5JJ6_cI-9bU3kza&!:c[AtOxildg3Yp');
define('LOGGED_IN_KEY',    '[eND]p3Z/#,,dc-weGszw$GkXgR!C)UWaWK(B+@BiFjwQ _leVIhMU}e4q5~TW`?');
define('NONCE_KEY',        'zen+w{4}[vQt8^a>qTMNYc/f_X^C$Er702qS]Qp082&:q0[cuudwZ$&9z={W+A3;');
define('AUTH_SALT',        '5k6am=+L(;=w`*Jg2,Zt0&|jR+?M9_p6bzODzL+TH@7[fDPi$j0dV{.`B-URxWk-');
define('SECURE_AUTH_SALT', 'JRmh!)DG?b)#%v&RW!dI36#Basby@jdTcsr|/|RO^BX,Sjn<@&:4Cv<fY:9G !jv');
define('LOGGED_IN_SALT',   '57>#}VSKics,I^.bN3*8c03 fKwr2ZX)x{{G|%r>bp|#t}jm4FaI}8EPQK6>iY{(');
define('NONCE_SALT',       'Y[w;IW-z}Gnffl1?Ma=-%N1?:c<P]34Cq9/qB;M,td2mE8wdVGR<GrdbTcl+ho/f');

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
