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
define('DB_NAME', 'tdm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1111');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('WP_HOME', 'http://rr_wp');
define('WP_SITEURL', 'http://rr_wp');

define('RELOCATE',true);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'm^a<.yqD$/o+gDfCAw&>}?eJ5yD[Vvm5cz|W>8p,keKK6`i9iwP:P_V0K2D;WY.4');
define('SECURE_AUTH_KEY',  'p}Ds?>nb=-e,b6}fxxJh#F!@q<INjHq|L#eaC#d47EIsE%~)P?})<61UeRLmdtSz');
define('LOGGED_IN_KEY',    'TTP~d96z$7  *Y&!D&g#r[O,>eewUXb]Nn*BxMs30@c~#bOfvdi@HMTt+B2+J`U3');
define('NONCE_KEY',        '7puWR.r1=coED(ETm3yN-rf>1tNI5h9NUq&SLO<fn7GhF|A ;m32AtHjeW&N[NR]');
define('AUTH_SALT',        'pr_j6c%=k1-Bua}Y]:Lz:]H]N}U%.Oc}qK<LqRBd1j&|`#$>}-4DXQo,*~wU!n@G');
define('SECURE_AUTH_SALT', 'i>@[G+3#4GIyy^M)iM$;G1c$z.6OCt5*1Kxa-9b:3+diKp_ *Mgle6nHc1FoQ(_W');
define('LOGGED_IN_SALT',   '8w*r<v7^v-r5d{?~:/KIGU}CA-k7gF#lV[r4NK:eVLKaD7Gv8bEBO/W/4vK7 :R+');
define('NONCE_SALT',       'r|JSYYkKqDQyExx2=B8uqJ$F2qW:KXRvL2ebe|g$)]q-66ke!@?vxRefi7-Qx77n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'grr_';

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
