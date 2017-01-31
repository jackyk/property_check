<?php


function pcwp_register_post_type(){
  $singular = 'Property List';
  $plural = 'Property Lists';

  $labels = array(
            'name'              => $plural,
            'singular'          => $singular,
            'add_name'          => 'Add New',
            'add_new_item'      => 'Add New '.$singular,
            'edit'              => 'Edit',
            'edit_item'         => 'Edit '.$singular,
            'new_item'          => 'New '.$singular,
            'view'              => 'View '.$singular,
            'view_item'         => 'View'.$singular,
            'search_item'       =>'Search '.$plural,
            'parent'            => 'Parent '.$singular,
            'not_found'         => 'No '.$singular.' found',
            'not_found_in_trash'=> 'No '.$singular.'in trash',
            );

 $args = array(
        'labels'              => $labels,
        'public'              => true,
        // should be allowed and searched by wordpress
        'public_queryable'    => true,
        //when searching in wordpress
        'exclude_from_search' => false,
        // shows your plugin in theme when adding a navbar
        'show_in_nav_menus'   => true,
        // allows it to be seen in the left side panel in the dashboard
        'show_ui'             => true,
        'show_in_menu'        => true,
        // allows alternative addition from the top menu bar
        'show_in_bar'         => true,
        // shows where the position it will be in the left panel
        'menu_position'       => 5,
        // sets the type of icon you should use
        'menu_icon'           => 'dashicons-businessman',
        'can_export'          => true,
        // when deleting the user don't delete their data
        'delete_with_user'    => false,
        // should it have inheritance and have categories
        'hierachical'         => false,
        // want to have an arvhieve area
        'has_archieve'        => true,
        // shows when searching and in the url instead of having a ? have a name/tag
        'query_var'           => true,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,

        'rewrite'             =>array(
              'slug'       => 'property',
              'with_front' => true,
              'pages'      => true,
              // if not admin or editor then cannot edit
              'feeds'       => false,
                                  ),
        'supports'            =>array(
          'title',
          // 'editor',
          // 'author',
          // 'custom-fields',
          // sets the featured image
          'thumbnail',
        )
      );

  register_post_type('All properties', $args);
}

add_action('init', 'pcwp_register_post_type');
?>
