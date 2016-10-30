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
define('DB_NAME', 'newproject');

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
define('AUTH_KEY',         'Wk9$9fuEcm48oB=D_?>8aMW%4|jj><y[OMGV(=?T%$wfHQ!A?YGy%EU/{+o+O[N)');
define('SECURE_AUTH_KEY',  'n.<LL-,Dz4vyN(+ rR[U<1-fz#)3 j$`]Ln`2:}(=EDF]0Dus^xuhyp=?-&x7gB;');
define('LOGGED_IN_KEY',    '/J~NJt)^:%!(z:}ut.T5SFEd-C1%f_lLP-( O@_8cIumS7{4yL(PNr/?:lxkJ>m#');
define('NONCE_KEY',        'qG3H-I}UaivrQ#G93X7kw1!wnh(d,haVunT{S!=}<z/vO62EBz1QK*&Tt6y EH6|');
define('AUTH_SALT',        'm#O&8uD3j$cd-9b/A|_K:=jaH0}|6|[4/?AiC5XDw;@Hn|>K7;D:eW/)KjPN;d@V');
define('SECURE_AUTH_SALT', '&Ol2^%$kh%-x@k0~Q;+MW-Z?}|Mxs;=N&<@*#T#DU>dY|1E[kCL6*EDP>lZVI=%/');
define('LOGGED_IN_SALT',   '@)IRK[|0idYLGGf&-9)}4B^Ksl=rXIQ$vl@-;IVwm.~}940{+o*fei`#n[-<~|rb');
define('NONCE_SALT',       ' Rt JM[VF7GKW>Uz+{/P!WE,0L^x@9fA!u,Oo+EB}@)FBl.-b$#+h(G%|ux]ffa+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'np_';

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
