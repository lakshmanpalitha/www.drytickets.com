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
define('DB_NAME', 'drytickets');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '9fPk~m-,7i_J_VsD}b-6fl-jK*[`2XuSbFf+moMy*o:CYI.B{;N.W>q|MA3cw24j');
define('SECURE_AUTH_KEY',  'Os-|Y:nBi}:%1w*#>;!|HVnN,,%ghXpb:n}oy,a77eTIS=x&>S+<Uc8)-hTkPz=<');
define('LOGGED_IN_KEY',    'k/_h-H++F*`w4&I&-V*=Q7<LpIq#9X@?=zX}M%|)<up-)6_ve2%pn`kNf&1STn3{');
define('NONCE_KEY',        'ltREk+o4L6_`/Mt(kg[<KudKBMn3X<b2/I:k!qzTG>Buxl-:vGI+D`=Ex z YKaf');
define('AUTH_SALT',        'nCs#_bj*O=.Cz2;rC<<>WQk`S6,>+i72|[{Em+}X-g-wYYYX`?MQ!S72T`,K#ZK,');
define('SECURE_AUTH_SALT', ';5%ZKHx)mcUIeO5Oo2k/M5[`9hLmj0 g[{1DBs|x[z72mQ}p>UVeImb8,Zc*Dyr2');
define('LOGGED_IN_SALT',   'a*A+Z7j_4o4dR| ?v;qd1MAZhsI$L)G% +Nj#KE]^Z(.~eu~4~h+JRvo+hRR8Uq)');
define('NONCE_SALT',       '-n`N|&C>t2YspQxER_)9>&|2t)|B[7o$/o;_!&}-FM+nUEJ=VrkP+{8xgcCpi])c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dry_';

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
