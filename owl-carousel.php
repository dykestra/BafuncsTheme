<div class="content_box box-2" style="padding-top:0; background:transparent;">
    <div class="carousel-wrap owl-1">
        <h2>Latest News</h2>
        <?php $recent_posts = wp_get_recent_posts(); ?>
        <div id="owl-carousel-58105f2ade54e" class="owl-carousel-post owl-carousel" data-auto-play="0" data-items="3" data-nav="true"
            data-pagination="true">
            <!--GET NUMBER OF DATA ITEMS-->
            <?php $count=0; foreach( $recent_posts as $recent ): ?>
                <div class="item format-standart item-list-<?php echo $count ?>">
                    <div class="desc">
                        <a href=<?php echo get_permalink($recent["ID"]) ?>>
                            <time>
                                <?php 
                                    $post_date = strtotime($recent["post_date"]);
                                    echo date('d', $post_date);
                                ?>/
                                <span><?php echo date('m', $post_date) ?></span>
                            </time>
                            <!--GET DATE OF POST-->
                            <p class="excerpt">
                                <?php echo $recent["post_title"] ?>
                            </p>
                        </a>
                    </div>
                </div>
            <?php  wp_reset_query(); $count++; endforeach; ?>
        </div>
    </div>
    <div class="clear">
    </div>
</div>