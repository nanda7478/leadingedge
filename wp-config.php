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
define('DB_NAME', 'trimurty_leadingedgeas');

/** MySQL database username */
define('DB_USER', 'trimurty_james');

/** MySQL database password */
define('DB_PASSWORD', 'ml8(@v){RzLD');

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
define('AUTH_KEY',         '9.If,}eI(+?TicoV*R^)vKQ&u1yM1Z-cJ&ol8oyR#pUG*0#oTOoyzyO|PWtMMVC9');
define('SECURE_AUTH_KEY',  '@/1goG6J7K}iV@^)1CGM&HC1zyJ~3b&|0f% wLT<|JBw22)!3J&HhQXH|z@[2gAM');
define('LOGGED_IN_KEY',    'St<eKG!aniBG2bG3:6]MuR&IC5y%6jTuT)9$=6))`^j(jSD[M|l%4-+v_ZM[I:{W');
define('NONCE_KEY',        ' 2 e.Od2R5JM0?B*-RGb^i^ WNRbUZ;tByT$uQ8!*Bi#q3; 1ni=ASR0VQiJ:ZU.');
define('AUTH_SALT',        'faV:|`Gi?W8{dNAZ@C(CHznaEjpYTs7m=1Pp_q7+,:0S<&#W[Rtfu<NcWV7PH)K#');
define('SECURE_AUTH_SALT', '1:xY]zkmPVfeD0,&s.{JQYoR7&{G9Lv]vD.-SHU97yA@TpceA8J4ZW~.=4r5Vb+f');
define('LOGGED_IN_SALT',   'v<i4U=|<`a5~[]D*eQ5H0- ViR8UJ.fG{EY6M:K`_aLtM0tM%oK~(#O!T#a wzv*');
define('NONCE_SALT',       'Tl +w)YA0&(.YJ>X;}|Avb^ts8~IoR-lk65n?,ts3~PC&u(zwls(^97kr}wMwUrI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpleas_';

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
