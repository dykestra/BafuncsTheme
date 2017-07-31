<?php
/**
 * Template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */

	get_header(); ?>
    
        <div class="motopress-wrapper content-holder clearfix">        
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <?php get_breadcrumbs(); ?>
                        <h2><?php the_title(); ?></h2>       

                        <?php if (has_post_thumbnail()): ?>
                            <div class="row">
                                <div class="span2"></div>
                                <div class="span8">
                                    <figure class="featured-thumbnail thumbnail large">
                                        <img src="<?php the_post_thumbnail_url(); ?>">
                                    </figure>
                                </div>
                                <div class="span2"></div>
                            </div>
                        <?php endif; ?>

                        <?php echo get_post_field('post_content', $post->ID); ?>
                    </div>
                </div><!-- /.row -->
            </div>
      </div>
	<?php get_footer(); ?>

