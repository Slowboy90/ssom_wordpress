<?php
/**
* Plugin Name: Football clubs
* Author: Maikel
**/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

require_once ( plugin_dir_path(__FILE__) . 'wp-clubs-cpt.php' );
require_once ( plugin_dir_path(__FILE__) . 'wp-club-fields.php' );