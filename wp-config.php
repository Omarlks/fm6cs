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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fm6cs' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@S)4%5+6SS(E;y{myG!VRP6ts9NKk#: 3wG%!dTcq:zhZuA%X|}-.poHT,Z_iYv%' );
define( 'SECURE_AUTH_KEY',  'vkXib&n}<&!hRhC8GkvM4tXw79G??u =mCB2BuWT p,i=^PLo8VS*Rd?MhCX0fYr' );
define( 'LOGGED_IN_KEY',    '@jm[Fdf.PucLvc9lKyf^(ZQz[x~-!Ga6F4jM!Mp[Cn%wFlaXJ!Twv)Ws(O~vgLl=' );
define( 'NONCE_KEY',        '!p]9w,BhA;IH>xrXa.x.iyQ_Br^?xW[a5Mrtf^h$3VPr*-8:J7Usd7NE6jD_v`9s' );
define( 'AUTH_SALT',        '~#j:?ZloLhYbVqXd9D96D;(ZPH=$M?b^B9+oM_h{$=n)#pNB`d!`:5Wm==ziFA% ' );
define( 'SECURE_AUTH_SALT', 'sdVYYwsuC ARAOo?d~+Z$8PAv[bUSA7t`j9}Ug dsi?Bd`mQ5KC,Fh5>PLlU2HGR' );
define( 'LOGGED_IN_SALT',   'P]p*,><jq<qw=kCDOP~Nrg`l9}30[e)mqvlo9lM]9{2^IQ%PvJ&mG)oNKJw|pSv`' );
define( 'NONCE_SALT',       'Q~c$!&LckhUXN2=;/[ov9W<A|gVMe:3+)uXhJ|)$F|{!/?C>Y^8Ujp9Tw wTBhdl' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'w_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
