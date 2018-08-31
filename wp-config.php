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
define('DB_NAME', 'muzej');

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
define('AUTH_KEY',         'SRMP;jCbV:N&EE[vm .5j/L;}7xjQxo,g1q+,$?oT=`U@Mw$GI}Gy_eAE1F~4$j?');
define('SECURE_AUTH_KEY',  'IEY+<M9ch7V<=?qxLssk0iAPX;qd^:6=$S_<XG`9m>vLf-+LwVa|/Q}:tI$QMp^I');
define('LOGGED_IN_KEY',    ']ut`g/%5-jdgH*p&mhz/McRJ],15sB-D1[o;keD#9)iayj1)wqSp[&/h#_JyO!hd');
define('NONCE_KEY',        '0jU@VBRj0mdL+xd-)DRewwsky@t#aA*;W|PQu[p 0cYd]09BFHnhedI:lg)}~Q! ');
define('AUTH_SALT',        'k@moe{Us>Q6@O!tt0@hD1$x0Ga+NSK4X7eTED0?~Oh3}&IpO tO67;X$,t u-{1,');
define('SECURE_AUTH_SALT', 'x85krM/.1Vtd6gVU^nt221d80,3 kj4|2t^moj.6;V1n[OM(/,L`5_Fm]%(xs[`A');
define('LOGGED_IN_SALT',   '%T!Z:FJu1_ PP408ghOf<%DgQ4e52Aw|g^Zp@Ocq7a#:kh=(&r748x,S 6NiQ]oT');
define('NONCE_SALT',       'M#7}<7_92oT90mRKh,9K1o/HbHm2,7{HLP$L+QEeDfTmO%nL-&O$@Az[QU+32zGK');

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
