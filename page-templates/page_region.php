<?php
/**
 * Template Name: Region Page
 */

get_header(); ?>

<div class="motopress-wrapper content-holder clearfix">        
    <div class="container">
        <div class="row">
            <div class="span12">
                <?php get_breadcrumbs(); ?>
                <h2><?php the_title(); ?></h2>
                <div class="row">
                    <?php $span_size = 12; if (has_post_thumbnail()): $span_size = 6; ?>
                        <div class="span6">
                            <figure class="featured-thumbnail thumbnail large">
                                <img src="<?php the_post_thumbnail_url(); ?>">
                                <p class="caption"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
                            </figure>
                        </div>
                    <?php endif; ?>
                    <div class="span<?php echo $span_size; ?> region-text">
                        <?php echo get_field('main_text'); ?>
                    </div>
                </div>
                <?php get_img_paragraphs(); ?>
                <div class="row">
                    <?php get_officials_list(); ?>
                </div>
            </div>
        </div><!-- /.row -->
    </div>
</div>

<?php get_footer(); ?>

