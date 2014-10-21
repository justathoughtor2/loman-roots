<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'loman');

/** MySQL database username */
define('DB_USER', 'loman');

/** MySQL database password */
define('DB_PASSWORD', 'LomanCompany');

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
define('AUTH_KEY',         'ZJT|&PBF68CGg-7#{N|[+5j>$gR^{~,0KqIw :G;zhnzur[%Q)^@)C),]-;WN#$4');
define('SECURE_AUTH_KEY',  ':jK;+1j`HUntG3Mxl`#S+ p[zw|gW5`h7(toY?0HM@hubVYSm9B-YVAc/;[&|:=(');
define('LOGGED_IN_KEY',    ' ?dtWC%0izXAkp[?zZKNn{V*-V~/>s%lyrL;V!Z0q@ha5OLzUfF&shT<Ee8|*v[t');
define('NONCE_KEY',        'y&)O(Z+|IEvT.Q1%hnjY ?@Kv_I8J%37-4DqsIgc0lJ4I*YS 5~&a)g}U+/-v[V6');
define('AUTH_SALT',        'ke[=ftD@ci*2Li^mt$P(x-whQt~2V@=3+mgp^tFeARN~}?K:lQ1F|f Bx!NXI3!-');
define('SECURE_AUTH_SALT', 'x`Gp;$x2-#RZasHi-u,O-5ZpD;m0EKyqNtiP2aIc=ZA,!R|uh#AC6W7cbkxjSHuD');
define('LOGGED_IN_SALT',   ']h|@tCpo$uT.lq9Js+$Xj1,lb0NN]7^9W[5it7=U;AIGH:UJa1_Zu2]2E3N)KRA?');
define('NONCE_SALT',       '|HtnfDA?%k]9x 4@k|cq?C{sQp~<Zn-^6@X7X79GoU%uyX;nPWT7ax8YE(fMm1#T');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

