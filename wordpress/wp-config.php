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
define('DB_NAME', 'blog_mini');

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
define('AUTH_KEY',         'Q%SrwA~yk0p);Q.>{haoK0<@FN }DaPUb $P2/o1|VU&$sc+HI3.WHx,KAJ7qp9K');
define('SECURE_AUTH_KEY',  ';+@?`:;$sW0g}^:i&V>0@FpZg^&;)9GQL(=V[@iQ#<KEfa6q.4EOUjV[ZWq@/P#y');
define('LOGGED_IN_KEY',    'n+?Ok[z@q<U=) P M4UEL~:<9`&KnzRjb}v}#LJ2q(kx75S*k>NweCb*%|%NR::0');
define('NONCE_KEY',        '|2`2/^m hTd>yQZZ~<H}J6/adwjQ (bF#No4oRGc4SFZ^ut~Q>,HTRA)x#f*)9ww');
define('AUTH_SALT',        '(+m.ixL^Q-xn0N3WR^e1i)<UK!Z%W*|@Hc: 6n{+!M99,9Y_?19m#UxK@`%ZIj5m');
define('SECURE_AUTH_SALT', '+CL8Q8itvhP~[r!JId!RtVEw!c<cWRdv)a?mjRCr[IbE]f>Dl#7cOHQE743kF}Qi');
define('LOGGED_IN_SALT',   'LdOZ6aw!MamqWd}ILLQ9#NC(4_yOO>w5C.U6pCylzo@PM+mA=yJs&ebUam(ft_M%');
define('NONCE_SALT',       'jw^KE?r4u|{dQ}0,4lklh#`M`&6Xs!tI?M8:(Ia H[+,UtIvz2#&($YG~@8ds#m8');

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
