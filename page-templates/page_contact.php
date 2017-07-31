<?php
/**
 * Template Name: Contact Page Template
 */

get_header(); ?>

<div class="motopress-wrapper content-holder clearfix">        
    <div class="container">
        <div class="row">
            <div class="span12">
                <?php get_breadcrumbs(); ?>
                <h2><?php the_title(); ?></h2>
                <div class="row">
                    <div class="span12">
                        <?php 
                            // get_googlemap();
                            get_contacts();
                        ?>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
    </div>
</div>

<?php get_footer(); ?>

