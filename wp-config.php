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
define('DB_NAME', 'wp_demo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '?nIDI/NbQ?j *i-T5Hqv;l8>^`4`6zkDy:6ft3bQ#BIFv%OP.2P`L:@FN-<O.:8n');
define('SECURE_AUTH_KEY',  '<uq1#g,Un+G+27PBavm%@pC_[#UX.1xd1E;DZSLhOAgy)S@5u-YJ/3GeSl$g_yjh');
define('LOGGED_IN_KEY',    '7RY2oj&Ns,-O>5L9%s[W_lopra4)b$D=U@M)4_ZKt`^o,ZO@@EyrN<nYg{`&9[i:');
define('NONCE_KEY',        'HH1nH98a/ub*5!Twu.;k!?q*%CkK~A[_l.Q`EC^c)IxVF+&*z0GMy&Kbx=H`G3*=');
define('AUTH_SALT',        'h(f4j_3Iu9gt 4Bne?F-_y<6`p|_:%>OI}mM9v6>L:LI{dlzbnr( ~C]%qGT[Kdo');
define('SECURE_AUTH_SALT', '%4+)AG4mt&DoRX.]nec5d*!-N26q|BV0)UCgX^Z/4S)4J>?b1hXG.h[GfaEhj)%}');
define('LOGGED_IN_SALT',   'EQBXLBV.WT%>Nz*MuT<5]iqV5y[%hQ-Hk3P} c+z@@o.FlclJpb>$ PB|1M3eK^H');
define('NONCE_SALT',       'Pa)K%>WNGhcW$l,Ijw;) <Y6q,Fc:B-|m*!ER-JYy)BB6  2/Juu~j7AyeeX6mo~');

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
