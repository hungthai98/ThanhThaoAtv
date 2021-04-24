<?php  
 define('WP_SITEURL', 'https://thanhthaoatv.com');  
 define('WP_HOME', 'https://thanhthaoatv.com');  
 
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.

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



// ** MySQL settings ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'tha09126_ctnmdl' );


/** MySQL database username */

define( 'DB_USER', 'tha09126_aCmv2F' );


/** MySQL database password */

define( 'DB_PASSWORD', 'CDGLIRS43@AiUW3v6' );


/** MySQL hostname */

define( 'DB_HOST', 'localhost:3306' );



/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8' );



/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );



/**

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define('AUTH_KEY', '7+1eXUoy+:z/G0&&o3kgp44d1%T)szs)ino6CkgJk1d&(9X9-;0X5411)73w;0H#');

define('SECURE_AUTH_KEY', ')[289p*JC;4u2TO0+8:eEuW[e3B_L%*H2MfxX~%6I1c6*O[~4G57Z8Y4oRNoc09V');

define('LOGGED_IN_KEY', 'W11l3rk+0#03hIe_A88Jl6S2q77vgif@h;0cK5EYRL5gF-@~*;12+(:0T23-2@-t');

define('NONCE_KEY', '+*a%7zS([5(++%|16Vcx83h|p~JnR@F-f43J|z)6uV%4@HK98)7vXy8)4nZq|v[~');

define('AUTH_SALT', '56yfw[7u0kH4kp8~456]*v2HsU-[!H|4|T#[IN)6:j/[k7uT9[&41)HxC_1*D_+l');

define('SECURE_AUTH_SALT', 'vWE7JPoa2Y6Sk:V2Ew1_jO;1%::7UNU862UitUFpQ@|0dgXk1+gc!MmvYQTFG~m*');

define('LOGGED_IN_SALT', '65CC36![:](6H]/203P;b:-631O/|:|IjCaGWg~0]wn3]LmmK6aZ|-VRIjfMKAJ7');

define('NONCE_SALT', '0@HX2|bW*5%B0%PudPdrkU/C2!j0;7/7*@xC7|T!3x+gWFD&)Eicip;Q+DvrznPd');



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'xQyPzWf_';





define('WP_ALLOW_MULTISITE', true);



/* That's all, stop editing! Happy blogging. */



/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) )

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );



/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

