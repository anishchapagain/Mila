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
define('DB_NAME', 'mila');

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
define('AUTH_KEY',         '3CT!efO40L;=Q{aTs-a`V6SJlWeVo<Lwnh!}!2(-s7R]=c>Fpug>7rDqy2$12s^-');
define('SECURE_AUTH_KEY',  '798Z86{Tc_^Sq#@-?5[QyguhUT.j+NM3owC%lGm*lR6 -@[w3L>`z?FDTLs*.->-');
define('LOGGED_IN_KEY',    ' g9ymWm{3:n$KP++.4wpQ4O~[@6aZv0Wjb+A#0+Z>lA:=b]gJh-4cRa+P}jmP[}r');
define('NONCE_KEY',        'C$sU#}bV@y/znSBm>zR2mD`E(]qjbd(X8E5X2rR?qOb2/nxF+u6V?PIF&cOTF^+J');
define('AUTH_SALT',        'mLC6}^rKe]ILmCd]MDC#}#>v;.^k!Q08-`BmPx13+1~mGN-VLt550m+TWTA+PzN%');
define('SECURE_AUTH_SALT', '.(V~|-|z~4P/;g<t>o{Q;:T!kBov3gU|&sD7K.q+0h?9PUT78A:w9~i)0]ScXYIa');
define('LOGGED_IN_SALT',   'ob|BW++bA/J/+5.p[vtDp@wkGs&*}Vj3f|D:TC= `Uq`MEn|#TK_[UE1}4r-&Jix');
define('NONCE_SALT',       '>%0nVD-r05=D|X~AcB|WUMC%._dvOj2G0..0k.Ovc~zs&o#e3(9.^KI&Z+2EHJam');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ml_';

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
