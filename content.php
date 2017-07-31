<?php 
/**
*   BAFUNCS Custom Post Format
*/
?>
<!-- check if the post has a Post Thumbnail assigned to it. -->
<?php if ( has_post_thumbnail() ) : ?>
<figure class="featured-thumbnail thumbnail large">
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <img src="" data-src="<?php the_post_thumbnail_url(); ?>">
    </a>
    <p class="caption" style="text-align:center;"><?php the_post_thumbnail_caption(); ?></p>
</figure>
<?php endif; ?>

<!-- Post Content -->
<div class="post_content">
    <?php if (is_singular()): ?>
        <?php the_content(); ?>
    <?php else: ?>
        <div class="excerpt">
            <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
    <?php endif; ?>
</div>