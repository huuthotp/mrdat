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
define('DB_NAME', 'u789172147_mrdat');

/** MySQL database username */
define('DB_USER', 'u789172147_mrdat');

/** MySQL database password */
define('DB_PASSWORD', 'HuuDat@`12');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.vn');

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
define('AUTH_KEY',         '1[Z/d4`T|`*vvO~#CK+26Lw$GxC4_u];|K!)Y$10a8LHt+m%c;U/h>N= VFXgo.A');
define('SECURE_AUTH_KEY',  '6&dW8$M8-S{^uZs{`S|o0_.<>H7a_~W<6w11u,;Bm}A/QLn]/*?K Z<J]E1l?bOZ');
define('LOGGED_IN_KEY',    'b.jpg%,@>HJCnJ.}[yMW1Wbo^_Y~b><80Aviwz`<2Fq<-`u=gU1^.(SU^IvG4XJ8');
define('NONCE_KEY',        '${q$WY]P_Iq^9%Ds-c#nB(3S|qLQVx@<E]02usNm=sG=mM(; g5 A6@ruU(Ux +l');
define('AUTH_SALT',        '+|E^_,`]mfk5=^D%H#o#CNHiNpcq9olC#fnp9(Qw+Tojm(R|hc>;R-{+z$Nd_#a,');
define('SECURE_AUTH_SALT', '9++jJ$8Z}/E;cS b,+KEhQYL9w(P;J9t]5JmZ!I%pO?}w]`-N_J`@XqG.ecpa1iI');
define('LOGGED_IN_SALT',   '~`?wtSpbYuxC1tJzu q+m,?E2zW`UJfiVhP7>Z3s3v+t8V2JrDafaX;hd-Y-s|^E');
define('NONCE_SALT',       'j]cO$+}DRu[2j5J#a9F/DKACtn72q7qD,+-^9MvJ=pub-c^Av:kYSoEEY_<n(c+N');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dat_';

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
