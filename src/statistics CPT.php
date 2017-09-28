/* ----------------------------------------------------------------------------
*
* Create custom taxonomies and post types
* Include in child functions.php
*
* ----------------------------------------------------------------------------- */


// Register Custom Taxonomy
function statistics_tags_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Statistics Tags', 'Taxonomy General Name', 'mfn-opts' ),
		'singular_name'              => _x( 'Statistics Tag', 'Taxonomy Singular Name', 'mfn-opts' ),
		'menu_name'                  => __( 'Statistics Tags', 'mfn-opts' ),
		'all_items'                  => __( 'All Statistics', 'mfn-opts' ),
		'parent_item'                => __( 'Parent Tag', 'mfn-opts' ),
		'parent_item_colon'          => __( 'Parent Tag:', 'mfn-opts' ),
		'new_item_name'              => __( 'New Statistics Tag', 'mfn-opts' ),
		'add_new_item'               => __( 'Add New Statistics Tag', 'mfn-opts' ),
		'edit_item'                  => __( 'Edit Statistics Tag', 'mfn-opts' ),
		'update_item'                => __( 'Update Statistics Tag', 'mfn-opts' ),
		'view_item'                  => __( 'View Item', 'mfn-opts' ),
		'separate_items_with_commas' => __( 'Separate tags with commas', 'mfn-opts' ),
		'add_or_remove_items'        => __( 'Add or remove statistics tags', 'mfn-opts' ),
		'choose_from_most_used'      => __( 'Choose from the most used tags', 'mfn-opts' ),
		'popular_items'              => __( 'Popular Items', 'mfn-opts' ),
		'search_items'               => __( 'Search statistics tags', 'mfn-opts' ),
		'not_found'                  => __( 'Not Found', 'mfn-opts' ),
		'no_terms'                   => __( 'No items', 'mfn-opts' ),
		'items_list'                 => __( 'Items list', 'mfn-opts' ),
		'items_list_navigation'      => __( 'Items list navigation', 'mfn-opts' ),
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






/* ---------------------------------------------------------------------------
 * Add statistics custom post type
 * --------------------------------------------------------------------------- */
function create_statistics_cpt(){
    register_post_type( 'statistics',
        // CPT Options
        array(
            'labels' => array(
            'name' => __( 'Statistics Graphs' ),
            'singular_name' => __( 'Statistics Graph' )
        ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'statistics'),
        )
    );
}
add_action( 'init', 'create_statistics_cpt' );


// Register Custom Post Type
function define_statistics_post_type() {

	$labels = array(
		'name'                  => _x( 'Statistics Graphs', 'Post Type General Name', 'mfn-opts' ),
		'singular_name'         => _x( 'Statistics Graph', 'Post Type Singular Name', 'mfn-opts' ),
		'menu_name'             => __( 'Statistics Graphs', 'mfn-opts' ),
		'name_admin_bar'        => __( 'Statistics Graphs', 'mfn-opts' ),
		'archives'              => __( 'Item Archives', 'mfn-opts' ),
		'attributes'            => __( 'Item Attributes', 'mfn-opts' ),
		'parent_item_colon'     => __( 'Parent Item:', 'mfn-opts' ),
		'all_items'             => __( 'All Items', 'mfn-opts' ),
		'add_new_item'          => __( 'Add New Item', 'mfn-opts' ),
		'add_new'               => __( 'Add New', 'mfn-opts' ),
		'new_item'              => __( 'New Item', 'mfn-opts' ),
		'edit_item'             => __( 'Edit Item', 'mfn-opts' ),
		'update_item'           => __( 'Update Item', 'mfn-opts' ),
		'view_item'             => __( 'View Item', 'mfn-opts' ),
		'view_items'            => __( 'View Items', 'mfn-opts' ),
		'search_items'          => __( 'Search Item', 'mfn-opts' ),
		'not_found'             => __( 'Not found', 'mfn-opts' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'mfn-opts' ),
		'featured_image'        => __( 'Featured Image', 'mfn-opts' ),
		'set_featured_image'    => __( 'Set featured image', 'mfn-opts' ),
		'remove_featured_image' => __( 'Remove featured image', 'mfn-opts' ),
		'use_featured_image'    => __( 'Use as featured image', 'mfn-opts' ),
		'insert_into_item'      => __( 'Insert into item', 'mfn-opts' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'mfn-opts' ),
		'items_list'            => __( 'Items list', 'mfn-opts' ),
		'items_list_navigation' => __( 'Items list navigation', 'mfn-opts' ),
		'filter_items_list'     => __( 'Filter items list', 'mfn-opts' ),
	);
	$args = array(
		'label'                 => __( 'Statistics Graph', 'mfn-opts' ),
		'description'           => __( 'Statistics graphs.', 'mfn-opts' ),
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
add_action( 'init', 'define_statistics_post_type', 0 );

