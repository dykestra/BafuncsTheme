<div class="row link-description-row">
    <div class="span7">
        <figure class="featured-thumbnail thumbnail large">
            <img src="<?php echo get_field('image'); ?>"/>
        </figure>
        <div class="clear"></div>
    </div>

    <div class="entry-content span5">
        <div class="link-description">
            <?php echo get_field('description'); ?>
            <a class="btn btn-primary grey-bg-hover" href="<?php echo get_field('hyperlink'); ?>">
                Go To Website
            </a>
        </div>
    </div>
</div>