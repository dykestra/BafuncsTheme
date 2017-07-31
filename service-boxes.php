<div class="row ">
    <?php $count=1; if(have_rows('service_boxes')):?>
        <?php while(have_rows('service_boxes')): the_row();?>
            <div class="span3">
                <a href=<?php echo get_sub_field('hyperlink')?>>
                    <div class="service-box serv-<?php echo $count ?>">
                        <div class="service-box_body">
                            <h2 class="title"><?php echo get_sub_field('title')?></h2>
                            <h5 class="sub-title"><?php echo get_sub_field('subtitle')?></h5>
                        </div>
                    </div>
                </a>
            </div>
        <?php $count++; endwhile; ?>
    <?php endif; ?>
</div>