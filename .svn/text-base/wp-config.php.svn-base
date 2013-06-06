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
define('DB_NAME', 'kr-a-m_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'y=I,1Q7p7vxX%X9MJ/qP+|h`B LS#.+3YW@6 <Y|<A7_GeGoJ 8$:oD@Ck|riO&0');
define('SECURE_AUTH_KEY',  '+ctm/OsFIW3t+g|_k-OLo^DqlUQF:L)-#_9z;Rz*5`h)=]?fhh+Ka2!D}kFO9=1j');
define('LOGGED_IN_KEY',    'Y5Ez`xNRhR^~d=k:V}%@@kbQxw!iS|AM<O~R9Fmf{gTWZdiCB#dkH41{:RAI4%a$');
define('NONCE_KEY',        'aG=huLCzxS thd)Kv)1,&;G#bQ=,6B1>FW+]Gx!Wn<,+9}d)%k,EV}L);AA|GM+^');
define('AUTH_SALT',        'b&,[^P.<OmJi-{3K-k(OYSrH:M,%MUjx2jSW(..w-aY!a/W]6|=UY<jSQ^o!Z+kE');
define('SECURE_AUTH_SALT', 'X9Q8W>Ng2X-8f+-Tne]l0?/(T8`-)[qQhDR*cD+6Z16R|v`(Z>vG-&<>{Gsb.BsM');
define('LOGGED_IN_SALT',   '^~C2BnVk5{|a.-ZIF`-0d<LC7?GY 5b%Bafu?kj<|!01-ojsN}|XR&H^5.Xh`>a&');
define('NONCE_SALT',       'i-eO|`Cw.c@Cz4+;KMjt{YYH+ttq7#r%PtXF;w|>y-zLY}0$4xl+kU_opf*0gOO$');

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
