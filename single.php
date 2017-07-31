<?php
/**
 * Template for displaying all single posts
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
                <div class="row">
                    <div class="span8 right">
                        <?php get_template_part( 'loop', 'single' ); ?>
                    </div>

                    <div class="span4">
                        <?php get_featured_posts(); ?>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
    </div>
</div>

<?php get_footer(); ?>

