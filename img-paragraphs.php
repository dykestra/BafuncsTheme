<?php if (have_rows('img_paragraphs')): ?>
    <?php $count = 0; while (have_rows('img_paragraphs')): the_row(); ?>
        <?php if($count!=0){echo "<hr/>";}?>
        <?php if (get_sub_field('title')): ?>
            <div class="row">
                <div class="span12">
                    <h2><span style="color: #64a0bc;"><strong>
                        <?php echo get_sub_field('title'); ?>
                    </strong></span></h2>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
        <?php if (get_sub_field('image')): ?>
            <div class="col-sm-4 para_row_pic">
                <p><img src=<?php echo get_sub_field('image'); ?> /></p>
            </div>
            <div class="col-sm-8 para_row_text">
        <?php else: ?>
            <div class="col-sm-12 para_row_text">
        <?php endif; ?>
                <div class="extra-wrap ">
                    <?php echo get_sub_field('paragraph'); ?>
                </div>
            </div>
        </div>
    <?php $count++; endwhile; ?>
<?php endif; ?>