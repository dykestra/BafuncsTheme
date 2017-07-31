<h3>Featured Posts</h3>
<ul class="post-list unstyled">
    <?php query_posts('posts_per_page=3&category_name="Featured"'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

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