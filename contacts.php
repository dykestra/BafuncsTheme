<?php if (have_rows('contacts')): ?>
    <?php $count=0; while(have_rows('contacts')): the_row(); ?>
        <?php if($count % 3 == 0){
            echo '<div class="row">';
        } ?>

            <div class="span4 ">

                <h5>
                    <?php echo get_sub_field('area'); ?>
                </h5>
                <address>
                    <strong><?php echo get_sub_field('role'); ?></strong>
                    <?php echo get_sub_field('address'); ?>
                    <?php if(get_sub_field('email')) {
                        echo 'E-mail: <a href="mailto:' . get_sub_field('email') . '">' . get_sub_field('email') . '</a>';
                    } ?>
                </address>
            </div>
        <?php if(($count+1) % 3 == 0) {
            echo '</div>';
        } ?>
    <?php $count++; endwhile; ?>
<?php endif; ?>