<?php
/**
 * Template Name: About Sub Page Template
 */

get_header(); ?>

<div class="motopress-wrapper content-holder clearfix">        
    <div class="container">
        <div class="row">
            <div class="span12">
                <?php get_breadcrumbs(); ?>
                <h2><?php echo get_the_title(); ?></h2>
                <?php 
                    get_img_paragraphs();
                    get_banner();
                    if ( get_field('include_googlemap')) { 
                        echo '<h2><span style="color: #64a0bc;"><strong>Contact</strong></span></h2>';
                        get_googlemap(); 
                    }
                    if ( get_field('include_officers_list')) { get_officers_list(); }
                ?>
            </div>
        </div><!-- /.row -->
    </div>
</div>

<?php get_footer(); ?>

