<?php

/*Plugin Name: Property Check
*Plugin URI: https://localhost
*Description: Check for properties and buy.
*Version: 0.0.1
*/

if (! defined ('ABSPATH')){
  exit;
}

require (plugin_dir_path(__FILE__).'property_check_post_type.php');
require (plugin_dir_path(__FILE__).'creating-meta-box.php');

?>
