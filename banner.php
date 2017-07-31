<?php if(have_rows('banner')) {
    echo '<div id="banner" class="content_box box-1 style-2"><div class="row"><h3><span style="color: #ffffff;">' . get_field('banner_title') . '</span></h3>';

    // The size of each span depends on the number of entries in the banner repeater
    // the sum of the span sizes must be 12
    $n_rows = count(get_field('banner')); 
    $span_size =  12 / $n_rows; 
    $rem = 12 % $n_rows; 
    $count = 0;

    while(have_rows('banner')){
        the_row();

        // determine the size of this span
        if($count < $n_rows or $rem == 0 ) {
            $x = $span_size; 
        } else { 
            $x = $rem; 
        }
        echo '<div class="span' . $x . '">';

        if(get_field('is_numbered')) {
            echo '<span class="dropcap" id="col' . ($count+1) . '">' . $count . '</span><div class="extra-wrap">';
        }

        // display the title div if a title exists
        if(get_sub_field('title')){
            echo '<h6><span style="color: #fff;">' . get_sub_field('title') . '</span></h6>';
        }

        // display the main text
        echo get_sub_field('text') . '</div>';

        // close the extra wrap div
        if (get_field('is_numbered')) {
            echo '</div>';
        }

        $count++;
    }
    echo '</div><div class="clear"></div></div>';
} ?>