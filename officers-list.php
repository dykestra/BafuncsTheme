<div id="content" class="row">
    <div class="span12" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
        <div id="post-1797" class="post-1797 page type-page status-publish hentry">

            <!-- .content_box (end) -->
            <div class="content_box box-2 par_inn ">

                <!-- .row (end) -->
                <section class="parallax-box image-parallax-box style-1">
                    <div id="officerslist" class="parallax-content">
                        <div class="row ">
                            <?php 
                                $page_id = get_id_by_slug('About');
                                if(have_rows('officers_list', $page_id)){
                                    while(have_rows('officers_list', $page_id)){
                                        the_row();
                                        echo get_sub_field('column');
                                    }
                                }
                            ?>
                        </div>
                        <!-- .row (end) -->
                        <div class="clear"></div>
                    </div>
                    <div class="parallax-bg" data-parallax-type="image" data-img-url="<?php echo get_field('officers_list_background_image', $page_id);?>" data-speed="normal" data-invert="false"></div>
                </section>
                <div class="clear"></div>
            </div>
            <!-- .content_box (end) -->
            <div class="clear"></div>
            <!--.pagination-->
        </div>
        <!--post-->
    </div>
</div>