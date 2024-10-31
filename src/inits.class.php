<?php 
add_action('init', 'custom_post');
function custom_post() {
    register_post_type('behandelingen',
        array(
            'label'                 => 'Behandelingen',
            'singular_label'        => 'Behandelingen',
            'hierarchical'          => true,
            'public'                => true,
            'publicly_queryable'    => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'query_var'             => true,
            'rewrite'               => array('slug' => 'dfbehandelingen'),
            'capability_type'       => 'post',
            'has_archive'           => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-networking',
            'supports'              => array('title', 'thumbnail', 'editor', 'page-attributes'),
        )
    );

    
}