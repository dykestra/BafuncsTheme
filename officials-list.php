<?php
/**
* Template for list of Regional Officials
* For BAFUNCS officers see officers-list.php 
*/
?>

<?php if (have_rows('officials')){
    echo '<div id="banner" class="content_box box-1 style-2 regional-officials"><div class="row"><h3><span style="color: #ffffff;">Regional Officials</span></h3>';
    $count = 0;
    while (have_rows('officials')) {
        the_row();
        if ($count % 4 == 0) {
            echo '<div class"row">';
        }

        echo '<div class="span3 regional-official"> <h6>' . get_sub_field('role') . '</h6>' . get_sub_field('name') . '</div>';

        if ($count % 4 == 0) {
            echo '</div>';
        }
        $count ++;
    }
    echo '</div><div class="clear"></div></div>';
 } ?>