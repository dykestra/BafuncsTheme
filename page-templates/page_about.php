<?php
/**
 * Template Name: About Page Template
 */

get_header(); ?>

<div class="motopress-wrapper content-holder clearfix">        
    <div class="container">
        <div class="row">
            <div class="span12">
                <?php get_breadcrumbs(); ?>
                <h2><?php echo get_the_title(); ?></h2>
                <?php 
                    get_tagline(); 
                    get_section_links(); 
                    get_officers_list();
                ?>
            </div>
        </div><!-- /.row -->
    </div>
</div>

<?php get_footer(); ?>

