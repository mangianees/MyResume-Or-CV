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
define('DB_NAME', 'theworld405_y34w');

/** MySQL database username */
define('DB_USER', 'theworld405_y34w');

/** MySQL database password */
define('DB_PASSWORD', 'b5qc87s1ibia9uey');

/** MySQL hostname */
define('DB_HOST', '10.169.0.247');

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
define('AUTH_KEY',         'ITNQS9wfn9LDTqUqGx4tU4uxhj2krYWGip7fyChdDsZ11nOIKQQlw76TUAXgcwDJ');
define('SECURE_AUTH_KEY',  'GwsO5msDacWFREm7VQQHei722LHpplMa1qXia9elgZCiP9AXujBlxnyKV6FHHdL1');
define('LOGGED_IN_KEY',    'ShJT0X3NPyZc6gtRo1EMEp4hhL7LmxpRGjoDu5G6I2GZ6Ia5VnDmDDPgQkOIedQk');
define('NONCE_KEY',        'IuOWFm98rOXNRiYcsqNaBoBa5qeX4JdjvHWmcl2VZzp4TC6v3gVV1DltjUF6uKi6');
define('AUTH_SALT',        'xZH1qQks5FFmEp1NkQZTlvB1sjBHjBsSoVF1lvHAIFSdiWV7VaghBrAv383YVye0');
define('SECURE_AUTH_SALT', 'bFBWFY9PDd3SrucuQJp1Kd6fYu3A6iFed9uVz5FYMppTDVADZreX92kwhiEOqOCZ');
define('LOGGED_IN_SALT',   'pGxTfInxbn4129ZiPaUKkXYoRv9yavGrrjBGsWkU5Kvxbg2DHHNDl1HbdV9IE5Ng');
define('NONCE_SALT',       'ZaBjaVJGAnbEUl5CvJnjMIgT17sfXYJRwv1IGQ4dnJgpzBOs6i6v7cioZJ1dUxGv');

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
$table_prefix  = 'rkhb_';

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
