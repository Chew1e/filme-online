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
define('DB_NAME', 'filme-online');

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
define('AUTH_KEY',         'a;`|vSHTi4WLF#Vj{VQ+9UlfoM!K> 8V;M6PmG%6 ^S5sK[F{1/|KC=v17yR?B;2');
define('SECURE_AUTH_KEY',  '#J0Y/C<$3Z%|B<98.!hm/oc ]rcghH`<)D~3#Z>]oD@Y@n~Jkw2&qx6n[I>1gvSr');
define('LOGGED_IN_KEY',    'ui@q|BQ5c+ W>Gw[UJZjk.d$w#;jEvOWp[Xa8/l#`!-UTbY VkTO(G&uX+MLa6(}');
define('NONCE_KEY',        '.K%!`?UPLD{~[]g>?_vm5GluREL%?<P]S@b&9dIi)OhR|[E@O{~3>y}D#DTap-0!');
define('AUTH_SALT',        '+!^LnlJTYqf7DQN{6DXe9!5NARAE[Ggl,sEpY,,18TQ_xh9pAL0KI<FW`gg[p5>$');
define('SECURE_AUTH_SALT', '>p/gx{WssX]+&2W+V+k+v+>[ZxL5fjX*->X2_Gj0r!w^/wvo$B.X`y$wPI1&`j58');
define('LOGGED_IN_SALT',   'KC<f/,RMvzM:pSAdFFyK Z!VZY9eHEwsX=Q$P8P053C?Tw_37{kW!R_^TMnTO%qj');
define('NONCE_SALT',       '=+J6*fM/zEz`E.E|ce@LERNypeI`Oi/3^<X|T=Wd>;c9x7t<<rRQl:YgwlYDxAtl');

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
