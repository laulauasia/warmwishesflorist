<?php
define('WP_CACHE_KEY_SALT', 'ed281ebec47a328b92760bca76428010');
// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define('DB_NAME', 'wwf_live3');

/** MySQL database username */
define('DB_USER', 'wp_3l8gr');

/** MySQL database password */
define('DB_PASSWORD', 'Nk!28Z0wlX~M@9lD');

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
define('AUTH_KEY', '8O|!3:Gn9b-2SZy*kVu|J7yj)]9[hpB7NeN0zQ:3HX;|Aai@2tTt*m)5sh!Pe)t7');
define('SECURE_AUTH_KEY', 'dUr4pn_3fS)WcGQoK7C:9XT2Ps7(i2#10Adn/+1593/[~o80/CU3#8;T!q1j+V+%');
define('LOGGED_IN_KEY', ')J]9im_42//B7&Vbj#7H667Mp]ag@4e3l)Uwb8~19uE/I]f1o3q!Ei3(Z3]C8+&:');
define('NONCE_KEY', 'aw4Ea60eo#ka6:AY0/)Az~j6kGyZK1-x8+mUGwA!7mA3CanPjN9TB+6pZx47E[tf');
define('AUTH_SALT', '5K2-(6x7QT)|[tR)+k|A78-vMqcmpeM0vrDCc+rt8[y43MWe0s[ulV2##iWIenEa');
define('SECURE_AUTH_SALT', 'Ao1r4:Sf%nLC:74bOXOLB!q:E;;o/~Pk|;2f0|i61@eoQhns&N41OyCnI3:G0J8S');
define('LOGGED_IN_SALT', '4BCC/z4a)]/a_2x%55Te2oM7Bl~2SCDzo+#0T#8:n~zWW5X%04pBe6/1(is1[UF4');
define('NONCE_SALT', 'y7P1Vg7WL8-cy2EL0[SpVYpT@92C2-9X7F~-sd97;~]0f(CU99kBu9t]](R:ZL~n');

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

define( 'DISABLE_WP_CRON', true );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
