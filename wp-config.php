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
define('DB_NAME', 'semana');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         '7ed`h<Xb(#KTuSk<uHxNHt-5vkGcsV8Y}#q7+{%o*^wU6R`{&u:[z:Qc7f<C,m[S');
define('SECURE_AUTH_KEY',  '}wG7Tex!Uy.t*VM81c$;Msf,]NySpL7{B~_YMHPERm0;M_)oJQv4cnk0#$>%sH/n');
define('LOGGED_IN_KEY',    'q+e@#G?*s3hWY< 5i3Ejpz=WJV-i$HvBAYGfKr/0O5W2eqt5iw=hO~.pGDXBXUu~');
define('NONCE_KEY',        'U&+V6c%-zJ%PXG`p} Ooge1es[TE4pKl`3KCs_I1Y}&[%mzwXubqfA<t ]d`G-N)');
define('AUTH_SALT',        'zxf-h<]?>:Y}h*.20[<(Ib|bgK;^(97eYW,o1XB+rXlGaYq,|6zL2wifodmgCPw_');
define('SECURE_AUTH_SALT', '.t}UL$UVH6rv3=sRmA8;AVCn?pjp4=IF~7<{ePA-?_(d*zZ7ki_UfC<iiB+&Ax9E');
define('LOGGED_IN_SALT',   'zK.nN,%>)te]F+!j39R9h%83(#iM==H?,[D:KJw-Vqlwpd`K6BR!``L=yQ+kt9b^');
define('NONCE_SALT',       'M$EAGS#h:uD;b?#Wp_L~6V+)HVqC--$y5{0f@t(3113HmF=`7ZE?sdL740!HGia:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'semana_';

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
