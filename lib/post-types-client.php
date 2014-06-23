if ( ! function_exists('client_post_type') ) {

// Register Custom Post Type
function client_post_type() {

  $labels = array(
    'name'                => _x( 'Clients', 'Post Type General Name', 'thelarman' ),
    'singular_name'       => _x( 'Client', 'Post Type Singular Name', 'thelarman' ),
    'menu_name'           => __( 'Clients', 'thelarman' ),
    'parent_item_colon'   => __( 'Parent Item:', 'thelarman' ),
    'all_items'           => __( 'All Clients', 'thelarman' ),
    'view_item'           => __( 'View Client', 'thelarman' ),
    'add_new_item'        => __( 'Add New Client', 'thelarman' ),
    'add_new'             => __( 'Add New ', 'thelarman' ),
    'edit_item'           => __( 'Edit Client', 'thelarman' ),
    'update_item'         => __( 'Update Client', 'thelarman' ),
    'search_items'        => __( 'Search Clients', 'thelarman' ),
    'not_found'           => __( 'Not found', 'thelarman' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'thelarman' ),
  );
    $rewrite = array(
        'slug'                => 'clients',
        'with_front'          => false,
        'pages'               => true,
        'feeds'               => true,
    );
  $args = array(
    'label'               => __( 'client', 'thelarman' ),
    'description'         => __( 'Client pages', 'thelarman' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', /*'author',*/ 'thumbnail', /*'comments',*/ /*'trackbacks',*/ 'revisions', 'custom-fields', 'page-attributes', /*'post-formats',*/ ),
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
    'rewrite'             => $rewrite,
    'capability_type'     => 'page',
  );
  register_post_type( 'client', $args );

}

// Hook into the 'init' action
add_action( 'init', 'client_post_type', 0 );

}