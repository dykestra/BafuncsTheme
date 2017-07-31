<?php
/**
 * Template Name: UNCRP Page Template
 */

get_header(); ?>

<div class="motopress-wrapper content-holder clearfix">        
    <div class="container">
        <div class="row">
            <div class="span12">
                <?php get_breadcrumbs(); ?>
                <h2><?php echo get_the_title(); ?></h2>
                <div class="row">
                    <div class="span8">
                        <?php 
                            echo get_field('main_text');
                            get_img_paragraphs();
                            ?>
                    </div>
                    <div class="span4">
                        <h3>Latest UNCRP News</h3>
                        <ul class="post-list unstyled">
                            <?php query_posts('posts_per_page=2&category_name="UNCRP"'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                                <li class="post-list_li clearfix">

                                    <figure class="featured-thumbnail thumbnail">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <img src="<?php the_post_thumbnail_url(); ?>" />
                                        </a>
                                    </figure>

                                    <?php the_date('F d, Y'); ?>

                                    <h4 class="post-list_h">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h4>

                                    <div class="excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
                                </li>
                            <?php endwhile; ?> <?php wp_reset_query(); ?>
                        </ul>
                    </div>
                </div>    
                <div class="row">
                    <?php
                            get_banner();
                            get_bg_banner();
                        ?>
                </div>
            </div>
        </div><!-- /.row -->
    </div>
</div>

<?php get_footer(); ?>

