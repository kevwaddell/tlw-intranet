<?php 

if ( !function_exists(core_mods) ) {
	function core_mods() {
		if ( !is_admin() ) {
			wp_register_style( 'styles', get_stylesheet_uri(), null, filemtime( get_stylesheet_directory().'/style.css' ) );
			wp_register_script( 'slim-scroll', get_stylesheet_directory_uri() . '/_/js/jquery.slimscroll.min.js', array('jquery'), '1.0.0', true );
			wp_register_script( 'bootstrap-tabs', get_stylesheet_directory_uri() . '/_/js/bootstrap-tabs.js', array('jquery','jquery-ui-core'), '1.0.0', true );
			wp_register_script( 'functions', get_stylesheet_directory_uri() . '/_/js/functions.js', array('jquery', 'jquery-ui-core', 'bootstrap-all-min', 'slim-scroll', 'bootstrap-tabs'), '1.0.1', true );
			//wp_register_script( 'img-fit', get_stylesheet_directory_uri() . '/_/js/jquery.imagefit.js', array('jquery'), '1.0.0', true );
			
			wp_enqueue_style('styles');
			wp_enqueue_script('slim-scroll');
			wp_enqueue_script('bootstrap-tabs');
			wp_enqueue_script('functions');
			//wp_enqueue_script('img-fit');
		}
	}
	core_mods();
}

add_theme_support('html5', array('search-form'));


if ( function_exists( 'register_nav_menus' ) ) {
		register_nav_menus(
			array(
			  'side_links_menu' => 'Hidden side menu'
			)
		);
}

if ( function_exists( 'register_sidebar' ) ) {
	
	$login_sb_args = array(
	'name'          => "User actions",
	'id'            => "user-actions",
	'description'   => 'Area for logged in user widget',
	'class'         => 'user-links',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<div class="user-title">',
	'after_title'   => '</div>' 
	);
	
	register_sidebar( $login_sb_args );	
}


add_theme_support( 'post-thumbnails', array( 'page', 'post' ) );
add_post_type_support( 'page', 'excerpt' );

if( function_exists('add_term_ordering_support') ) {
add_term_ordering_support ('category');
}


function add_feat_img ( $post ) {	
	
	if (has_post_thumbnail($post->ID)) {
		
		$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
		$attachment = get_post( $post_thumbnail_id );
		$alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);
		
		//echo '<pre>';print_r($attachment->post_excerpt);echo '</pre>';
		
		
		$img_atts = array(
		'class'	=> "img-responsive"
		);
		
		if (!empty($alt)){
		$img_atts['alt'] = 	trim(strip_tags( $alt ));
		}
		
		if (!empty($attachment->post_title)){
		$img_atts['title'] = 	trim(strip_tags( $attachment->post_title ));
		}
		
		echo get_the_post_thumbnail($post->ID ,'feat-img', $img_atts );
	
	}
	
}

function add_gravityforms_style() {
	global $post;
	$form = get_field('form', $post->ID);
	
	if (!empty($form)) {
		wp_enqueue_style("gforms_css", GFCommon::get_base_url() . "/css/forms.css", null, GFCommon::$version);
	}
	
}
add_action('wp_print_styles', 'add_gravityforms_style');

function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Register Custom Navigation Walker
//require_once(STYLESHEETPATH . '/_/functions/wp_bootstrap_navwalker.php');

/* GRAVITY FORMS FUNCTIONS */
require_once(STYLESHEETPATH . '/_/functions/gravity-forms-functions.php');

/* MEETINGS CPT */
require_once(STYLESHEETPATH . '/_/functions/meetings-cpt.php');

/* ROOMS TAX */
require_once(STYLESHEETPATH . '/_/functions/rooms-tax.php');

//holder_add_theme( 'wordpress', '333333', 'eeeeee' );
holder_add_theme( 'lite-gray', '888888', 'eeeeee' );

function bm_bbp_no_breadcrumb ($param) {
return true;
}

add_filter ('bbp_no_breadcrumb', 'bm_bbp_no_breadcrumb');

function change_author_permalinks() {

    global $wp_rewrite;

    // Change the value of the author permalink base to whatever you want here
    $wp_rewrite->author_base = 'user';

    $wp_rewrite->flush_rules();
}

add_action('init','change_author_permalinks');

 ?>