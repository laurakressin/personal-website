<?php

/*************************************************************/
/*  CUSTOM POST TYPES 										 */
/*************************************************************/

// make parent nav item highlighted
add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );
function add_current_nav_class($classes, $item) {
	// Getting the current post details
	global $post;
	// Getting the post type of the current post
	$current_post_type = get_post_type_object(get_post_type($post->ID));
	$current_post_type_slug = $current_post_type->rewrite['slug'];
	// Getting the URL of the menu item
	$menu_slug = strtolower(trim($item->url));
	// If the menu item URL contains the current post types slug add the current-menu-item class
	if (strpos($menu_slug,$current_post_type_slug) !== false) {
		$classes[] = 'current-menu-item';
	}
	// Return the corrected set of classes to be added to the menu item
	return $classes;
}


/*************************************************************/
/*  ADVANCED CUSTOM FIELDS 					 				 */
/*************************************************************/

// add options page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();	
}


/*************************************************************/
/*  EXCERPTS 												 */
/*************************************************************/

// change the excerpt "more" tag
function new_excerpt_more($more) {
	global $post;
	return '&hellip; </br> <a class="moretag" href="'. get_permalink($post->ID) . '">Read more</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// CUSTOM FIELD EXCERPT
function custom_field_excerpt($fieldName) {
	global $post;
	$text = get_field($fieldName);
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$excerpt_length = 20; // set the number of words here
		$excerpt_more = '...';
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	$text = apply_filters('the_excerpt', $text);
	echo $text;
}

// create a shorter/longer excerpt
function get_my_excerpt(){
	$text = get_the_content();
	$text = strip_shortcodes($text);
	$text = apply_filters('the_content', $text);
	$text = strip_tags($text);
	$excerpt_length = 30; // set the number of words here
	$excerpt_more = '...';
	$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	return $text;
}

/*************************************************************/
/*  something else 											 */
/*************************************************************/

/*************************************************************/
/*  something else 											 */
/*************************************************************/



?>