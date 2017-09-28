/* ----------------------------------------------------------------------------
*
* Create custom taxonomies and post types
* Include in child functions.php
*
* ----------------------------------------------------------------------------- */


// Register Custom Taxonomy
function statistics_tags_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Statistics Tags', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Statistics Tag', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Statistics Tags', 'text_domain' ),
		'all_items'                  => __( 'All Statistics', 'text_domain' ),
		'parent_item'                => __( 'Parent Tag', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Tag:', 'text_domain' ),
		'new_item_name'              => __( 'New Statistics Tag', 'text_domain' ),
		'add_new_item'               => __( 'Add New Statistics Tag', 'text_domain' ),
		'edit_item'                  => __( 'Edit Statistics Tag', 'text_domain' ),
		'update_item'                => __( 'Update Statistics Tag', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate tags with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove statistics tags', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used tags', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search statistics tags', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'statistics_tags', array( 'statistics' ), $args );

}
add_action( 'init', 'statistics_tags_taxonomy', 0 );




// Register Custom Post Type
function statistics_post_type() {

	$labels = array(
		'name'                  => _x( 'Statistics Graphs', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Statistics Graph', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Statistics Graphs', 'text_domain' ),
		'name_admin_bar'        => __( 'Statistics Graphs', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Statistics Graph', 'text_domain' ),
		'description'           => __( 'Statistics graphs.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array( 'statistics_tags' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-chart-bar',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'statistics', $args );

}
add_action( 'init', 'statistics_post_type', 0 );

