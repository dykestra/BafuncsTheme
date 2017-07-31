<?php
/**
 * Template Name: Home Page Template
 */

	get_header();
    get_parallax_slider();
?>

<div class="motopress-wrapper content-holder clearfix">        
    <div class="container">
        <div class="row">
            <div class="span12">
                <?php 
                    get_service_boxes(); 
                    get_owl_carousel();
                    get_welcome_banner(); 
                ?>
            </div>
        </div><!-- /.row -->
    </div>
</div>

<?php get_footer(); ?>

