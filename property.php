<?php

/*Plugin Name: Property Check
*Plugin URI: https://localhost
*Description: Check for properties and buy.
*Version: 0.0.1
*/

if (! defined ('ABSPATH')){
  exit;
}

function wp_register_post_type(){

  $args = array('public'=> true, 'label'=>'Property');

  register_post_type('All properties', $args);
}

add_action('init', 'wp_register_post_type');


?>
