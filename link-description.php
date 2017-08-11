<div class="row link-description-row">
    <?php $spansize = 12; if (get_field('image')): $spansize = 5; ?>
        <div class="span7">
            <figure class="featured-thumbnail thumbnail large">
                <img src="<?php echo get_field('image'); ?>"/>
            </figure>
            <div class="clear"></div>
        </div>
    <?php endif ?>
    <div class="entry-content span<?php echo $spansize; ?>">
        <div class="link-description">
            <?php echo get_field('description'); ?>
            <a class="btn btn-primary grey-bg-hover" href="<?php echo get_field('hyperlink'); ?>">
                Go To Website
            </a>
        </div>
    </div>
</div>