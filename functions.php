<?php
/**
 * The template test History.js with WordPress
 *
 * @package WordPress
 * @subpackage Wp_history
 * @since WordPress History
 * @author Felipe Castro
 */


	// Add thumbnails 
add_theme_support( 'post-thumbnails' ); 

	//Return page active
function check($slug, $page){
	$active = "";
	if($slug == $page){
		echo $active = 'class="active"';
	}else{
		echo $active = '';
	}
}

	// Returb slug post
function get_the_slug() {

	global $post;

	if ( is_single() || is_page() ) {
		return $post->post_name;
	} else {
		return "";
	}

}

	// Return embed code youtube
function get_embed_code( $embed ){

		// https://i.ytimg.com/vi/CODE/mqdefault.jpg

	$output = strip_tags($embed);
	$output = strstr($output, 'watch?v=');
	$output = substr($output, 8, 11);
	return $output;	

}

/**************************************
 * Registro Custom Post type slide_home_registe
 **************************************/
add_action('init', 'slide_home_register');
function slide_home_register(){
	$labels = array(
		'name' => _x('Slide Home', 'post type general name'),
		'singular_name' => _x('Slide_Home', 'post type singular name'),
		'add_new' => _x('Adicionar novo slide', 'slide'),
		'add_new_item' => __('Adicionar novo'),
		'edit_item' => __('Editar slide'),
		'new_item' => __('Novo slide'),
		'view_item' => __('Ver slide'),
		'search_items' => __('Procurar slide'),
		'not_found' =>  __('Nada encontrado'),
		'not_found_in_trash' => __('Nada encontrado no lixo'),
		'parent_item_colon' => ''
		);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'has_archive' => false, 
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 4,
		'supports' => array('title'),
		);
	register_post_type('Slide Home',$args);
}

/**************************************
 * Registro Custom Post type slide_home_registe
 **************************************/
add_action('init', 'leader_team');
function leader_team(){
	$labels = array(
		'name' => _x('Leader Team', 'post type general name'),
		'singular_name' => _x('Leader_Team', 'post type singular name'),
		'add_new' => _x('Adicionar novo Leader Team', 'Leader Team'),
		'add_new_item' => __('Adicionar novo'),
		'edit_item' => __('Editar Leader Team'),
		'new_item' => __('Novo Leader Team'),
		'view_item' => __('Ver Leader Team'),
		'search_items' => __('Procurar Leader Team'),
		'not_found' =>  __('Nada encontrado'),
		'not_found_in_trash' => __('Nada encontrado no lixo'),
		'parent_item_colon' => ''
		);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'has_archive' => false, 
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 4,
		'supports' => array('title'),
		);
	register_post_type('Leader Team',$args);
}

/**************************************
 * Registro Custom Post type slide_home_registe
 **************************************/
add_action('init', 'group_job');
function group_job(){
	$labels = array(
		'name' => _x('Group Job', 'post type general name'),
		'singular_name' => _x('Group_Job', 'post type singular name'),
		'add_new' => _x('Adicionar novo Group Job', 'Group Job'),
		'add_new_item' => __('Adicionar novo'),
		'edit_item' => __('Editar Group Job'),
		'new_item' => __('Novo Group Job'),
		'view_item' => __('Ver Group Job'),
		'search_items' => __('Procurar Group Job'),
		'not_found' =>  __('Nada encontrado'),
		'not_found_in_trash' => __('Nada encontrado no lixo'),
		'parent_item_colon' => ''
		);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'has_archive' => false, 
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 4,
		'supports' => array('title'),
		);
	register_post_type('Group Job',$args);
}

function next_post_class($format){
  $format = str_replace('href=', 'class="postNavButton next" href=', $format);
  return $format;
}

function previous_post_class($format){
  $format = str_replace('href=', 'class="postNavButton prev" href=', $format);
  return $format;
}

add_filter('next_post_link', 'next_post_class');
add_filter('previous_post_link', 'previous_post_class');


/**
 * Enqueue scripts and styles.
 */
function ccz_scripts() {	
	wp_enqueue_script( 'slick.min.js', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), true );
	wp_enqueue_script( 'ccz.js', get_template_directory_uri() . '/assets/js/ccz.js', array('jquery'), true );

	wp_enqueue_script( 'scrollify.js', get_template_directory_uri() . '/assets/js/jquery.fullPage.min.js', array('jquery'), true );
	wp_enqueue_script( 'config-maps.js', get_template_directory_uri() . '/assets/lib/maps.js', array('jquery'), true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ccz_scripts' );





