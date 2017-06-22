<?php
/*
  Plugin Name: SORBI Connect
  Plugin URI: http://www.sorbi.com
  Description: Connect your website to the SORBI network
  Author: Yoeri Dekker
  Author URI: http://www.csorbamedia.com/
  Text Domain: sorbi-connect
  Version: 1.0.0
*/

// define global variables
define("SORBI_PLUGIN_FILE", __FILE__);
define("SORBI_PATH",plugin_dir_path(__FILE__) );
define("SORBI_URL",	plugin_dir_url(__FILE__) );
define("SORBI_TD",	"sorbi-connect");

// require the sorbi API class
require_once( SORBI_PATH . 'lib/sorbi.class.php' );
require_once( SORBI_PATH . 'lib/update.class.php' );

// run the updater 
if( is_admin() ) {
	$updater = new SorbiPluginUpdater( SORBI_PLUGIN_FILE, 'csorbamedia', 'sorbi_connect_wordpress' );
	var_dump( $updater );
	die;
}

// init the SorbiConnect class
$sorbi = new SorbiConnect();