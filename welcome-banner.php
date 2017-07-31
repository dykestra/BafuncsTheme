<div class="content_box box-1 ">
    <div class="row ">
        <?php if(have_rows('welcome_banner')):?>
            <?php while(have_rows('welcome_banner')): the_row();?>
                <div class="span4">
                    <?php echo get_sub_field('column');?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="clear">
    </div>
</div>