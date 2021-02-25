<?php
define('DISABLE_WP_CRON', true);
define('WP_CACHE_KEY_SALT', '3d8d2ea04a7a8eb9d1c6c473066f6ac4');
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
define('CONCATENATE_SCRIPTS', false);
define('DISALLOW_FILE_EDIT', true);
define('WP_CACHE', false);

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
define('DB_NAME', 'wwf_live');

/** MySQL database username */
define('DB_USER', 'wp_d7ohr');

/** MySQL database password */
define('DB_PASSWORD', '4az8X2Cu#G');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY', 'P)2(#-4%f&raV#Q;co4PnT+!fWb63u*r](H)b&|LR[/O4V)85;MqkJHMv7I+A7S-');
define('SECURE_AUTH_KEY', 'D3(P~7ft+13Sn8sa%m#7r|k_mva+SU1R86D/:0fjrN6VJo84@81Q39kFvwLV/5QC');
define('LOGGED_IN_KEY', 'K)|%weX@5mP8&8IE9Q6YT|y2@;haOD7YY(o-c%M!%09|Xi7z6v15f/@MYlP&]09&');
define('NONCE_KEY', '2|Nf1@)q5fHQOpVvp:Q#)2(fD|~cTLv]!9A8xz#e[en/jL808n4NV2a+(HTn5Ks3');
define('AUTH_SALT', '%DRubU4d%H!3A4d8&!Bt[62T/2T4RkCnJQ6|I[Yu_d+H2Qk85o5#/cOn%/;9CJwX');
define('SECURE_AUTH_SALT', 'sa]j1KYKcZCo%v]]&:8tuk5%~A3UaCtCYP)qaqX-|!1r4ES#ulAn+P4V%5-%gNrM');
define('LOGGED_IN_SALT', 'LVICGm]/-E072L5mZQ6H08vQP50ed#0bC14AS3p3xvnU_@+-ixcz##Am[890q[5V');
define('NONCE_SALT', 'cv3G[Bdn+(x/(w@2&YnD+6E46ZD8hxx#c)vYEC#1_0J5Z[Dw!3_8P1]4*5R4U|!~');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = "wwf_";

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
