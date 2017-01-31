<?php

add_filter( 'rwmb_meta_boxes', 'YOURPREFIX_register_meta_boxes' );
function YOURPREFIX_register_meta_boxes( $meta_boxes ) {
    $prefix = 'rw_';
    // 1st meta box
    $meta_boxes[] = array(
        'id'         => 'personal',
        'title'      => __( 'Personal Information', 'textdomain' ),
        'post_types' => array( 'post', 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'  => __( 'Full name', 'textdomain' ),
                'desc'  => 'Format: First Last',
                'id'    => $prefix . 'fname',
                'type'  => 'text',
                'std'   => 'Anh Tran',
                'class' => 'custom-class',
                'clone' => true,
            ),
        )
    );
    // 2nd meta box
    $meta_boxes[] = array(
        'title'      => __( 'Media', 'textdomain' ),
        'post_types' => 'movie',
        'fields'     => array(
            array(
                'name' => __( 'URL', 'textdomain' ),
                'id'   => $prefix . 'url',
                'type' => 'text',
            ),
        )
    );
    return $meta_boxes;
}
?>
