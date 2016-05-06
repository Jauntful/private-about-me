<?php 

//Pagination Archive

function my_custom_posts_per_page( &$q ) {
      if ( $q->is_archive ) // any archive
      if($q->query_vars['category_name'] == 'blog-post'){  //custom post type "inspiration" archive
               $q->set( 'posts_per_page', 12 );
      }
      return $q;
  }

add_filter('parse_query', 'my_custom_posts_per_page');


register_post_type('inspiration', array(	'label' => 'inspiration','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => '','with_front' => false),'query_var' => true,'has_archive' => true,'supports' => array('title','editor','excerpt','custom-fields','author','page-attributes',),'taxonomies' => array('category','post_tag',),'labels' => array (
  'name' => 'inspiration',
  'singular_name' => '',
  'menu_name' => 'inspiration',
  'add_new' => 'Add inspiration',
  'add_new_item' => 'Add New inspiration',
  'edit' => 'Edit',
  'edit_item' => 'Edit inspiration',
  'new_item' => 'New inspiration',
  'view' => 'View inspiration',
  'view_item' => 'View inspiration',
  'search_items' => 'Search inspiration',
  'not_found' => 'No inspiration Found',
  'not_found_in_trash' => 'No inspiration Found in Trash',
  'parent' => 'Parent inspiration',
),) );

function myfeed_request($qv) {
	if (isset($qv['feed']))
		$qv['post_type'] = get_post_types();
	return $qv;
}
add_filter('request', 'myfeed_request');


function create_my_customfeed() {
load_template( TEMPLATEPATH . 'feed-rssrg.php'); // You'll create a your-custom-feed.php file in your theme's directory
}
add_action('do_feed_customfeed', 'create_my_customfeed', 10, 1); // Make sure to have 'do_feed_customfeed'

?>