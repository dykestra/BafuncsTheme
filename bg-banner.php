<?php if(have_rows('bg_banner')):
    // The size of each span depends on the number of entries in the banner repeater
    // the sum of the span sizes must be 12
    $n_rows = count(get_field('bg_banner')); 
    $span_size =  12 / $n_rows; 
    $rem = 12 % $n_rows; 
    $count = 0;
    ?>

    <div id="bg-banner" class="row">
        <div class="span12" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
            <div id="post-1797" class="post-1797 page type-page status-publish hentry">

                <!-- .content_box (end) -->
                <div class="content_box box-2 par_inn ">

                    <!-- .row (end) -->
                    <section class="parallax-box image-parallax-box style-1">
                        <div class="parallax-content">
                            <div class="row ">
                                <?php while(have_rows('bg_banner')): 
                                    the_row(); 
                                                            
                                    // determine the size of this span
                                    if($count < $n_rows or $rem == 0 ) {
                                        $x = $span_size; 
                                    } else { 
                                        $x = $rem; 
                                    }
                                ?>
                                    <div class="span' . $x . '"> 
                                
                                    <?php if(get_sub_field('title')): ?>
                                        <h3><span style="color: #ffffff;">
                                            <?php echo get_sub_field('title'); ?>
                                        </span></h3>
                                    <?php endif; ?>

                                    <?php echo get_sub_field('text'); ?>
                                        
                                    </div>
                                <?php $count++; endwhile; ?>
                            </div>
                            <!-- .row (end) -->
                            <div class="clear"></div>
                        </div>
                        <div class="parallax-bg" data-parallax-type="image" data-img-url="<?php echo get_field('banner_image'); ?>" data-speed="normal" data-invert="false"></div>
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
<?php endif; ?>