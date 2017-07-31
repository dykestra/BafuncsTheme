<?php
/**
 * Bootstrap Canvas WP functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, bootstrapcanvaswp_setup(), sets up the theme by registering support
 * for various features in WordPress, such as post thumbnails, navigation menus, and the like.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * We can remove the parent theme's hook only after it is attached, which means we need to
 * wait until setting up the child theme:
 *
 * <code>
 * add_action( 'after_setup_theme', 'my_child_theme_setup' );
 * function my_child_theme_setup() {
 *     // We are providing our own filter for excerpt_length (or using the unfiltered value)
 *     remove_filter( 'excerpt_length', 'bootstrapcanvaswp_excerpt_length' );
 *     ...
 * }
 * </code>
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
function get_id_by_slug($page_slug) {
	$page = get_page_by_path($page_slug);
	if ($page) {
		return $page->ID;
	} else {
		return null;
	}
}

function get_officials_list( $name = null )
{
	do_action('get_officials_list', $name );
	$templates = array();
	$name = (string) $name;
	if ('' != $name) {
		$templates[] = "officials-list-{$name}.php";
	}
	$templates[] = 'officials-list.php';
	locate_template($templates, true );
}

 function get_contacts( $name = null ) 
 {
	 do_action('get_contacts', $name );
	 $templates = array();
	 $name = (string) $name;
	 if ('' != $name ) {
		 $templates[] = "contacts-{$name}.php";
	 }
	 $templates[] = 'contacts.php';
	 locate_template($templates, true );
 }


 function get_googlemap( $name = null ) 
 {
	 do_action('get_googlemap', $name );
	 $templates = array();
	 $name = (string) $name;
	 if ('' != $name ) {
		 $templates[] = "googlemap-{$name}.php";
	 }
	 $templates[] = 'googlemap.php';
	 locate_template($templates, true );
 }

 function get_featured_posts( $name = null ) 
 {
	 do_action('get_featured_posts', $name );
	 $templates = array();
	 $name = (string) $name;
	 if ('' != $name ) {
		 $templates[] = "featured-{$name}.php";
	 }
	 $templates[] = 'featured.php';
	 locate_template($templates, true );
 }

 function get_link_description( $name = null ) 
 {
	 do_action('get_link_description', $name );
	 $templates = array();
	 $name = (string) $name;
	 if ('' != $name ) {
		 $templates[] = "link-description-{$name}.php";
	 }
	 $templates[] = 'link-description.php';
	 locate_template($templates, true );
 }

 function get_link_boxes( $name = null ) 
 {
	 do_action('get_link_boxes', $name );
	 $templates = array();
	 $name = (string) $name;
	 if ('' != $name ) {
		 $templates[] = "links-{$name}.php";
	 }
	 $templates[] = 'links.php';
	 locate_template($templates, true );
 }

 function get_banner( $name = null ) 
 {
	 do_action('get_banner', $name );
	 $templates = array();
	 $name = (string) $name;
	 if ('' != $name ) {
		 $templates[] = "banner-{$name}.php";
	 }
	 $templates[] = 'banner.php';
	 locate_template($templates, true );
 }

 function get_bg_banner( $name = null ) 
 {
	 do_action('get_bg_banner', $name );
	 $templates = array();
	 $name = (string) $name;
	 if ('' != $name ) {
		 $templates[] = "bg-banner-{$name}.php";
	 }
	 $templates[] = 'bg-banner.php';
	 locate_template($templates, true );
 }

 function get_img_paragraphs( $name = null ) 
 {
	 do_action('get_img_paragraphs', $name );
	 $templates = array();
	 $name = (string) $name;
	 if ('' != $name ) {
		 $templates[] = "img-paragraphs-{$name}.php";
	 }
	 $templates[] = 'img-paragraphs.php';
	 locate_template($templates, true );
 }

 function get_officers_list( $name = null ) 
 {
	 do_action('get_officers_list', $name );
	 $templates = array();
	 $name = (string) $name;
	 if ('' != $name ) {
		 $templates[] = "officers-list-{$name}.php";
	 }
	 $templates[] = 'officers-list.php';
	 locate_template($templates, true );
 }

 function get_section_links( $name = null ) 
 {
	 do_action('get_section_links', $name );
	 $templates = array();
	 $name = (string) $name;
	 if ('' != $name ) {
		 $templates[] = "section-links-{$name}.php";
	 }
	 $templates[] = 'section-links.php';
	 locate_template($templates, true );
 }

 function get_tagline( $name = null ) 
 {
	 do_action('get_tagline', $name );
	 $templates = array();
	 $name = (string) $name;
	 if ('' != $name ) {
		 $templates[] = "tagline-{$name}.php";
	 }
	 $templates[] = 'tagline.php';
	 locate_template($templates, true );
 }

 function get_breadcrumbs( $name = null ) 
 {
	 do_action('get_breadcrumbs', $name );
	 $templates = array();
	 $name = (string) $name;
	 if ('' != $name ) {
		 $templates[] = "breadcrumbs-{$name}.php";
	 }
	 $templates[] = 'breadcrumbs.php';
	 locate_template($templates, true );
 }

 function get_parallax_slider( $name = null ) 
 {
	 do_action('get_parallax_slider', $name );
	 $templates = array();
	 $name = (string) $name;
	 if ('' != $name ) {
		 $templates[] = "parallax-slider-{$name}.php";
	 }
	 $templates[] = 'parallax-slider.php';
	 locate_template($templates, true );
 }
 

 function get_service_boxes( $name = null ) 
 {
	 do_action('get_service_boxes', $name );
	 $templates = array();
	 $name = (string) $name;
	 if ('' != $name ) {
		 $templates[] = "service-boxes-{$name}.php";
	 }
	 $templates[] = 'service-boxes.php';
	 locate_template($templates, true );
 }

 function get_welcome_banner( $name = null ) 
 {
	 do_action('get_welcome_banner', $name );
	 $templates = array();
	 $name = (string) $name;
	 if ('' != $name ) {
		 $templates[] = "welcome-banner-{$name}.php";
	 }
	 $templates[] = 'welcome-banner.php';
	 locate_template($templates, true );
 }

 function get_owl_carousel( $name = null ) 
 {
	 do_action('get_owl_carousel', $name );
	 $templates = array();
	 $name = (string) $name;
	 if ('' != $name ) {
		 $templates[] = "owl-carousel-{$name}.php";
	 }
	 $templates[] = 'owl-carousel.php';
	 locate_template($templates, true );
 }

 function wptuts_scripts_basic()
{
	/* CSS */
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css');	
	
	wp_enqueue_style( 'camera', get_stylesheet_directory_uri() . '/css/camera.css');
	wp_enqueue_style( 'flexslider', get_stylesheet_directory_uri() . '/css/flexslider.css');
	wp_enqueue_style( 'owl.carousel', get_stylesheet_directory_uri() . '/css/owl.carousel.css');
	wp_enqueue_style( 'owl.theme', get_stylesheet_directory_uri() . '/css/owl.theme.css');
	wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css');
	wp_enqueue_style( 'cherry-plugin', get_stylesheet_directory_uri() . '/css/cherry-plugin.css');
	wp_enqueue_style( 'paralax', get_stylesheet_directory_uri() . '/css/parallax.css');		
	wp_enqueue_style( 'theme', get_stylesheet_directory_uri() . '/css/theme.css');
	wp_enqueue_style( 'magnific-popup', get_stylesheet_directory_uri() . '/css/magnific-popup.css');
	wp_enqueue_style( 'custom', get_stylesheet_directory_uri() . '/css/custom.css');
	wp_enqueue_style( 'responsive', get_stylesheet_directory_uri() . '/css/responsive.css');
	/* Javascript */
	
	// wp_register_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js' );
    // wp_enqueue_script( 'bootstrap' );
	

	wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/js/jquery-1.7.2.min.js' );
    wp_enqueue_script( 'jquery' );
	
	wp_register_script( 'jquery-migrate-1.2.1', get_stylesheet_directory_uri() . '/js/jquery-migrate-1.2.1.min.js' );
    wp_enqueue_script( 'jquery-migrate-1.2.1' );

	wp_register_script( 'modernizr', get_stylesheet_directory_uri() . '/js/modernizr.js' );
    wp_enqueue_script( 'modernizr' );
	
	wp_register_script( 'mousewheel', get_stylesheet_directory_uri() . '/js/mousewheel.js' );
    wp_enqueue_script( 'mousewheel' );

    wp_register_script( 'parallaxSlider', get_stylesheet_directory_uri() . '/js/parallaxSlider.js' );
    wp_enqueue_script( 'parallaxSlider' );

    wp_register_script( 'swfobject', get_stylesheet_directory_uri() . '/js/swfobject.js' );
    wp_enqueue_script( 'swfobject' );
	
    wp_register_script( 'custom', get_stylesheet_directory_uri() . '/js/custom.js' );
    wp_enqueue_script( 'custom' );
	
    wp_register_script( 'jflickrfeed', get_stylesheet_directory_uri() . '/js/jflickrfeed.js' );
    wp_enqueue_script( 'jflickrfeed' );
	
	wp_register_script( 'jquery-easing', get_stylesheet_directory_uri() . '/js/jquery.easing.1.3.js' );
    wp_enqueue_script( 'jquery-easing' );
	
    wp_register_script( 'jquery-elastislide', get_stylesheet_directory_uri() . '/js/jquery.elastislide.js' );
    wp_enqueue_script( 'jquery-elastislide' );
	
    wp_register_script( 'jquery-mobile-customized', get_stylesheet_directory_uri() . '/js/jquery.mobile.customized.min.js' );
    wp_enqueue_script( 'jquery-mobile-customized' );
	

}
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_basic' );

add_action( 'after_setup_theme', 'bct_theme_setup' );

function bct_theme_setup() {
    add_theme_support( 'breadcrumb-trail' );
}

function add_post_formats() {
    add_theme_support( 'post-formats', array( 'gallery', 'quote', 'video', 'aside', 'image', 'link', 'bafuncs' ) );
}
 
add_action( 'after_setup_theme', 'add_post_formats', 20 );

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
