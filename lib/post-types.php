<?php
if ( ! function_exists('project_post_type') ) {

// Register Custom Post Type
function project_post_type() {

  $labels = array(
    'name'                => _x( 'Projects', 'Post Type General Name', 'thelarman' ),
    'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'thelarman' ),
    'menu_name'           => __( 'Projects', 'thelarman' ),
    'parent_item_colon'   => __( 'Parent Item:', 'thelarman' ),
    'all_items'           => __( 'All Projects', 'thelarman' ),
    'view_item'           => __( 'View Project', 'thelarman' ),
    'add_new_item'        => __( 'Add New Project', 'thelarman' ),
    'add_new'             => __( 'Add New ', 'thelarman' ),
    'edit_item'           => __( 'Edit Project', 'thelarman' ),
    'update_item'         => __( 'Update Project', 'thelarman' ),
    'search_items'        => __( 'Search Projects', 'thelarman' ),
    'not_found'           => __( 'Not found', 'thelarman' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'thelarman' ),
  );
  $args = array(
    'label'               => __( 'project', 'thelarman' ),
    'description'         => __( 'Post Type Description', 'thelarman' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
    'taxonomies'          => array( 'category', 'post_tag' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    //'menu_icon'           => '',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  register_post_type( 'project', $args );

}

// Hook into the 'init' action
add_action( 'init', 'project_post_type', 0 );

}