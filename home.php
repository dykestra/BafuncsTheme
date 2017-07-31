<?php
/**
 * Template Name: Blog Posts
 */

get_header(); ?>

<div class="motopress-wrapper content-holder clearfix">        
    <div class="container">
        <div class="row">
            <div class="span12">
                <?php get_breadcrumbs(); ?>
                <h2>News</h2>
                <div class="row">
                    <div class="span8 right">
                        <?php 
                            get_template_part( 'loop', 'index' );
                        ?>
                    </div>
                    <div class="span4">
                        <?php
                            get_featured_posts();
                        ?>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
    </div>
</div>

<?php get_footer(); ?>

