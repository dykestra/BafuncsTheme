<div class="row">
    <?php if(have_rows('section_links')):?>
        <?php while(have_rows('section_links')): the_row();?>
            <div class="span4 ">
                <?php $post_object = get_sub_field('hyperlink'); ?>
                <a href="<?php echo get_permalink($post_object->ID); ?>">
                    <p class="about-block">
                        <img class="alignnone size-full" src="<?php echo get_sub_field('image'); ?>" width="370" height="270" />
                    </p>
                    <h6><span style="color: #64a0bc;"><?php echo $post_object->post_title ?></span></h6>
                </a>
                <?php echo get_sub_field('description') ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>