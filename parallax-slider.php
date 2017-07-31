<script type="text/javascript">
	jQuery(document).ready(function($) {
		if(!device.mobile() && !device.tablet()){
			liteModeSwitcher = false;
		}else{
			liteModeSwitcher = true;
		}
		if($.browser.msie && parseInt($.browser.version) < 9){
	         liteModeSwitcher = true;
	    }

			jQuery('#parallax-slider').parallaxSlider({
				parallaxEffect: "parallax_effect_normal"
			,	parallaxInvert: false			,	animateLayout: "simple-fade-eff"
			,	duration: 1500			,	autoSwitcher: true			,	autoSwitcherDelay: 10000			,	scrolling_description: true			,	slider_navs: true			,	slider_pagination: "none_pagination"
			,	liteMode :liteModeSwitcher
			});

	});
</script>

<div id="parallax-slider" class="parallax-slider">
	<ul class="baseList">
		<?php $count=0; if(have_rows('carousel_slides')):?>
			<?php while(have_rows('carousel_slides')): the_row();?>
				<li data-preview=<?php echo get_sub_field('image')?>>
					<div class="slider_caption">
						<h2 <?php if($count==0){ echo 'class="slide-1"';}?>>
							<?php while (have_rows('caption')) {
								the_row();
								echo get_sub_field('text');
								if(get_sub_field('hyperlink_text')){
									echo '<h3><a href="' . get_sub_field('hyperlink_url') . '">' . get_sub_field('hyperlink_text') . '</a></h3>';
								} 
							}?>
						</h2>
					</div>
				</li>
			<?php $count++; endwhile; ?>
		<?php endif; ?>

	</ul>
</div>