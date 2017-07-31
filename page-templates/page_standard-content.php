<?php
/**
 * Template Name: Standard Content Page Template
 */

get_header(); ?>

<div class="motopress-wrapper content-holder clearfix">        
    <div class="container">
        <div class="row">
            <div class="span12">
                <?php get_breadcrumbs(); ?>
                <h2><?php echo get_the_title(); ?></h2>
                <?php 
                    echo get_field('main_text');
                    get_img_paragraphs();
                    get_banner();
                    get_bg_banner();
                ?>
            </div>
        </div><!-- /.row -->
    </div>
</div>

<?php get_footer(); ?>

