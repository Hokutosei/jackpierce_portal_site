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
//$dbconn = pg_connect("host=ec2-54-243-190-226.compute-1.amazonaws.com port=5432 dbname=dg558f4q6lelg user=nlhywgbsmwfxqr password=HRjBwZta5j66k3XIY2ua6yt1eI sslmode=require options='--client_encoding=UTF8'") or die('Could not connect: ' . pg_last_error());
$db = parse_url($_ENV["DATABASE_URL"]);
//define('DB_NAME', 'jackpierce_development');
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
//define('DB_USER', 'root');
define('DB_USER', $db["user"]);

/** MySQL database password */
//define('DB_PASSWORD', 'root');
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
//define('DB_HOST', 'localhost');
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         'O>SO_M)6Y-cYn$QK7-T[6angtv{&{Kt,k-G- RS]tR/z[E1C0sRU-V/+Q#/3SC%(');
define('SECURE_AUTH_KEY',  'G2FN2G!y~$mH+N?ba#@^b`$P,H1eDZ,i])?&(OX]xLoS`gQhM=xx>L$bK7<5,nPF');
define('LOGGED_IN_KEY',    ';0$ 5Tf0hZp#E_O=Uun9)3Ig@h+MtvSmT~sqyS&!SNK7!u,rGBFx4@zaw8(v>jUw');
define('NONCE_KEY',        '9!,e7Vs0ud*18-}h+enzd`vp,I.e0d=HSSsA6JMA}ao4_oT#?.]fW{|^4k-=2Xq]');
define('AUTH_SALT',        'a+9a:Yr^1hIEVSX%&O{d|0Ku-tjs[j,fcEg!.<1rpS0)}i2S++aY#eW94-TzCcOf');
define('SECURE_AUTH_SALT', 'K[+R+B>z<WY<@Nv=8]@r6H!?[Hw#:sU?N2>+mg9x,WPC3m{V95,d*~,|~2W@c(@q');
define('LOGGED_IN_SALT',   'a1+)1rTU!%l]{cccfHq38<4Ys62B#kClF!-;zgc)I=m|mwDA$:[!U+(`Qt7>0$V!');
define('NONCE_SALT',       '%Ebt5P[g?nn}&ui^Nj,@=x:4Wb>Kq4O5W6l|x7xtAHxb!*1D.S8/<k@@6HLc;rnc');

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
