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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '50hMXN8qBUOCPqVn4uBeVJVOvLXZ0H/riddtTch2OKW1ex3Ml8RotC/yuqtN/SrNldMcZTKfpZuI18anb6woqQ==');
define('SECURE_AUTH_KEY',  'ZNVQ6ZI+OmUIN2cN3/bD+AtRYcP7WPD0fhLsxCH+Com+T1Tlrjyx6RBXNc1GppkTbqysbxi7vEngSBeV96bx0w==');
define('LOGGED_IN_KEY',    'oA7c5kHylPgcCrrZdGL3L6HydmnkK0Ypq2z0unNZU/zXr+eRPcLMvjGhXDIrlaJPB//IAMkETeEWmyvSq6TEkQ==');
define('NONCE_KEY',        'zaAmNQWERwVSLkj1tdGBq8TlSlplrG81+oY5j3wQ9LOb/BpmoAPh1Coy0D9hQKt1VP7KyUAsmZ2s7yL810ANng==');
define('AUTH_SALT',        'Syl07CJTmxvgwIvjRJmEp9LHVEhA+MX9DFA57b18u3U92+44Ovl0q31DvIvSgl8jc9rf/PSXmUCuD4xBWbWlmg==');
define('SECURE_AUTH_SALT', '2cbXQfUrzsRllOwFllZ7ALTnJuYGzH17U8H0twTFfcYLu4Rv9rIk904sI2+ER+hxwGp55+sDcFkc4iyg9Bh9Fw==');
define('LOGGED_IN_SALT',   '+pZoCOVRWb92ZDV5IFgqu+PQcMYYKFUcw8fK7jxo569wGkbPLrj/yhGLC9r1svPGYaLd24PpQAv3Aloo2+NH+A==');
define('NONCE_SALT',       'RqBl/PsnAKzxKaAHYzPZTMBPK3dMbpZwDRCCsmcycGoEMXuDRUnDaLQBJpQ+RMiCNL9DXDghmjF1th3OuE2fXg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
