<?php if(have_rows('links')): ?>
<ul id="portfolio-grid" class="filterable-portfolio thumbnails portfolio-3cols" data-cols="3cols">

<script>
	jQuery(document).ready(function($) {
		var $container = $('#portfolio-grid'),
			items_count = $(".portfolio_item").size();

		$(window).load(function(){
			var selector = window.location.hash.replace( /^#category/, '.term' );

			if(selector == "#"){
				selector = '';
			}

			setColumnWidth();
			$container.isotope({
				itemSelector : '.portfolio_item',
				hiddenClass : 'portfolio_hidden',
				resizable : false,
				transformsEnabled : true,
				layoutMode: 'fitRows',
				filter: selector
			})

			$('#filters .active').removeClass('active')
			$('#filters li a[data-filter="'+selector+'"]').parent('li').addClass('active');
			change_hash(selector)
		});

		function getNumColumns(){
			var $folioWrapper = $('#portfolio-grid').data('cols');

			if($folioWrapper == '2cols') {
				var winWidth = $("#portfolio-grid").width(),
					column = 2;
				if (winWidth<380) column = 1;
				return column;
			}

			else if ($folioWrapper == '3cols') {
				var winWidth = $("#portfolio-grid").width(),
					column = 3;
				if (winWidth<600) column = 1;
				else if(winWidth>=600 && winWidth<900) column = 2;
				else if(winWidth>=900 && winWidth<1160) column = 3;
				else if(winWidth>=1160) column = 3;
				return column;
			}

			else if ($folioWrapper == '4cols') {
				var winWidth = $("#portfolio-grid").width(),
					column = 4;
				if (winWidth<380) column = 1;
				else if(winWidth>=380 && winWidth<788) column = 2;
				else if(winWidth>=788 && winWidth<1160) column = 3;
				else if(winWidth>=1160) column = 4;
				return column;
			}
		}

		function setColumnWidth(){
			var columns = getNumColumns(),
				containerWidth = $("#portfolio-grid").width(),
				postWidth = containerWidth/columns;
			postWidth = Math.floor(postWidth);

			$(".portfolio_item").each(function(index){
				$(this).css({"width":postWidth+"px"});
			});
		}

		function arrange(){
			setColumnWidth();
			$container.isotope('reLayout');
		}

		$(window).on("debouncedresize", function( event ) {
			arrange();
		});

		// Filter projects
		$('.filter a').click(function(){
			var $this = $(this).parent('li');
			// don't proceed if already active
			if ( $this.hasClass('active') ) {
				return;
			}


			var $optionSet = $this.parents('.filter');
			// change active class
			$optionSet.find('.active').removeClass('active');
			$this.addClass('active');

			var selector = $(this).attr('data-filter');
			$container.isotope({ filter: selector });
			change_hash(selector)

			var hiddenItems = 0,
				showenItems = 0;
			$(".portfolio_item").each(function(){
				if ( $(this).hasClass('portfolio_hidden') ) {
					hiddenItems++;
				};
			});

			showenItems = items_count - hiddenItems;
			if ( ($(this).attr('data-count')) > showenItems ) {
				$(".pagination__posts").css({"display" : "block"});
			} else {
				$(".pagination__posts").css({"display" : "none"});
			}
			return false;
		});
		function change_hash(hash){
			hash = hash.replace( /^.term/, 'category' );
			window.location.href = '#'+hash;

			$('.pagination a').each(function(){
				var item = $(this),
					href = item.attr('href'),
					end_slice = href.indexOf('#')==-1 ? href.length : href.indexOf('#') ;

				href = href.slice(0, end_slice);
				item.attr({'href':href+'#'+hash})
			})
		}
	});
</script>

    <?php while(have_rows('links')): the_row(); ?>
        <li class="portfolio_item">
            <div class="portfolio_item_holder">

                <?php if(have_rows('images')): ?>
                    <?php $count=0; while(have_rows('images')): the_row(); ?>
                        <?php $img_url = get_sub_field('image'); ?>

                        <?php if($count == 0): ?>
                            <figure class="thumbnail thumbnail__portfolio">
                                <a href="<?php echo $img_url ?>" class="image-wrap" rel="prettyPhoto[gallery3]">
                                    <img src="<?php echo $img_url ?>" />
                                    <span class="zoom-icon"></span> </a>
                            </figure>
                        <?php else: ?>
                            <!--/.thumbnail__portfolio-->
                            <a href="<?php echo $img_url ?>" class="image-wrap" style="display:none" rel="prettyPhoto[gallery2]"></a>
                        <?php endif; ?>
                    <?php $count++; endwhile; ?>
                <?php endif; ?>

                <div class="caption caption__portfolio">
                    <?php 
                        $url = get_sub_field('hyperlink'); 
                        echo '<h3><a href="' . $url . '">' . get_sub_field('name') . '</a></h3>';
                        echo get_sub_field('description');
                        echo '<p>';
                        echo '<a href="' . get_sub_field('hyperlink') . '" class="btn btn-primary">Website</a>';
                        if(get_sub_field('more_info_link')) {
                            echo '&nbsp;<a href="' . get_sub_field('more_info_link') . '" class="btn btn-primary">More Info</a>';
                        }
                        echo '</p>';
                    ?>
                </div>
            </div>
        </li>
    <?php endwhile; ?>
<?php endif; ?>