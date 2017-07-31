<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BAFUNCS <?php wp_title($sep = '|'); ?></title>
    
	<?php
	  /*
	   * We add some JavaScript to pages with the comment form
	   * to support sites with threaded comments (when in use).
	   */
	  if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		
	  /*
	   * Always have wp_head() just before the closing </head>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to add elements to <head> such
	   * as styles, scripts, and meta tags.
	   */
	  wp_head(); 
    ?>

		<script type="text/javascript">
			jQuery(function(){
				jQuery('.sf-menu').mobileMenu({defaultText: "Navigate to..."});
			});
		</script>
		<script type="text/javascript">
		// Init navigation menu
		jQuery(function(){
		// main navigation init
			jQuery('ul.sf-menu').superfish({
				delay: 50, // the delay in milliseconds that the mouse can remain outside a sub-menu without it closing
				animation: {
					opacity: "show",
					height: "show"
				}, // used to animate the sub-menu open
				speed: "normal", // animation speed
				autoArrows: true, // generation of arrow mark-up (for submenu)
				disableHI: true // to disable hoverIntent detection
			});

		//Zoom fix
		//IPad/IPhone
			var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
				ua = navigator.userAgent,
				gestureStart = function () {
					viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
				},
				scaleFix = function () {
					if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
						viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
						document.addEventListener("gesturestart", gestureStart, false);
					}
				};
			scaleFix();
		})
	</script>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			if(!device.mobile() && !device.tablet()){
				jQuery('.header .nav__primary').tmStickUp({
					correctionSelector: jQuery('#wpadminbar')
				,	listenSelector: jQuery('.listenSelector')
				,	active: true				,	pseudo: true				});
			}
		})
	</script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen, projection" />
  </head>

  <body <?php body_class(); ?>>
    
		<div class="main-holder">
			<header class="motopress-wrapper header">
				<div class="container">
					<div class="row">
						<div class="span12">
								<?php if ( function_exists( 'the_custom_logo' ) ) : the_custom_logo(); endif; ?>
						
								<div class="row">
									<div class="span3">
										<div class="row">
											<div class="span3">
												<div class="logo pull-left">
													<a href="<?php echo get_home_url(); ?>"><h1 class="blog-title" style="color: #<?php echo $header_text_color ?>;"><?php bloginfo( 'name' ); ?></h1>
													<p id="logo_tagline" style="color: #<?php echo $header_text_color ?>"><?php bloginfo( 'description' ); ?></p></a>
												</div>
												<div class="span3 hidden-phone">
												</div>
											</div>
										</div>
									</div>

									<div class="span9">
										<nav class="nav nav__primary clearfix" style="margin-top: 0px">
											<ul id="primary-menu" class="sf-menu">
												<?php
												wp_nav_menu( array(
													'theme_location' => 'primary',
													'menu_class'     => 'primary-menu',
													'container'      => 'false',
													'items_wrap'     => '%3$s',
													'fallback_cb'    => 'bootstrap_canvas_wp_menu_fallback',
													) );
													?>
											</ul>
										</nav>
									</div>
								</div>
						</div>
					</div>
				</div>
			</header>