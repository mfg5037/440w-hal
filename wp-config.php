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
define('DB_NAME', 'ist440w');

/** MySQL database username */
define('DB_USER', 'ist440w');

/** MySQL database password */
define('DB_PASSWORD', 'ist440w');

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
define('AUTH_KEY',         'm`7bIPN5c<uqd$/:F@w=m:sO0%h@~4Bvp*3|R$+>>Am1Vj]5QWbB5RbEN&KJ_<[@');
define('SECURE_AUTH_KEY',  'el<}Rh)87-jBj3qp,.[*mUJykg^}N[b^M_}$Uu~!WwV_Pc@V|sbxYde+d!58Mgk8');
define('LOGGED_IN_KEY',    '88O(06zDI7 0;:DV57H.z#WLR.8_&v:A;nU-|R5fD]XptqHveacH1Yy]j>qz&ZxQ');
define('NONCE_KEY',        ',9r{!D{w}9?^<}uX_av*4^ !{b*{{PWR_pPnPXjJ9{o|`o=m1fI^e!$<9MVW!Ucn');
define('AUTH_SALT',        'u:ZLh2I4p_ ~ JP8`FTfW^ ^FcJ!28DDSZv%#GCXc>*M[?%F^n IERK1U3~x})kY');
define('SECURE_AUTH_SALT', 'DIATSR$aSgz +iZuVGnWP=<+us3b`U9;D}A=BeYe#Q;a!Q[Ur(m]h@F/k/<Zl3u&');
define('LOGGED_IN_SALT',   'aT(1^c5L>E)9{@umfFRuxtMG,~xG?7|Er8b66S/do(Y/RTj}t4)Nc>f1+Z?j*)5d');
define('NONCE_SALT',       '7rkBNPA^Ol@VTkfP=bTYlDsG=>L)c<wW$0Ps(Y`e$AhFzIO#9*!IbwQGf~H5Kbgj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
