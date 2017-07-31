<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?>


		<footer class="motopress-wrapper footer">
			<div class="container">
				<div class="row copyright">
					<div id="footer-text" class="footer-text">
						<a href="//www.nabassett.com">
							<?php 
							$copyright_text = get_theme_mod( 'copyrighttext', '' ); ?>
							<?php if ( $copyright_text !== '' ) : ?>
							<?php echo $copyright_text; ?>
							<?php else: ?>
							&copy; 2016 Na Bassett
							<?php endif; ?>
						</a>
					</div>
				</div>
			</div>
		</footer>
	</div> <!-- main-holder -->

	<div id="back-top-wrapper" class="visible-desktop">
		<p id="back-top"><a href="#top"><span></span></a></p>
	</div>


	
	<script src="//livedemo00.template-help.com/wordpress_52702/wp-includes/js/comment-reply.min.js?ver=4.0.13" type="text/javascript"></script>
	<script src="//livedemo00.template-help.com/wordpress_52702/wp-content/plugins/cherry-parallax/js/jquery.simplr.smoothscroll.min.js?ver=1.0"
		type="text/javascript"></script>
	<script src="//livedemo00.template-help.com/wordpress_52702/wp-content/plugins/cherry-parallax/js/device.min.js?ver=1.0.0"
		type="text/javascript"></script>
	<script src="//livedemo00.template-help.com/wordpress_52702/wp-content/plugins/cherry-parallax/js/cherry.parallax.js?ver=1.0.0"
		type="text/javascript"></script>
	<script src="//livedemo00.template-help.com/wordpress_52702/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.50.0-2014.02.05"
		type="text/javascript"></script>
	<script type="text/javascript">
	var _wpcf7 = {"loaderUrl":"http:\/\/livedemo00.template-help.com\/wordpress_52702\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
	</script>
	<script src="//livedemo00.template-help.com/wordpress_52702/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=3.8"
		type="text/javascript"></script>
	<script src="//livedemo00.template-help.com/wordpress_52702/wp-content/themes/CherryFramework/js/superfish.js?ver=1.5.3"
		type="text/javascript"></script>
	<script src="//livedemo00.template-help.com/wordpress_52702/wp-content/themes/CherryFramework/js/jquery.mobilemenu.js?ver=1.0"
		type="text/javascript"></script>
	<script src="//livedemo00.template-help.com/wordpress_52702/wp-content/themes/CherryFramework/js/jquery.magnific-popup.min.js?ver=0.9.3"
		type="text/javascript"></script>
	<script src="//livedemo00.template-help.com/wordpress_52702/wp-content/plugins/cherry-plugin/lib/js/FlexSlider/jquery.flexslider-min.js?ver=2.2.2"
		type="text/javascript"></script>
	<script src="//livedemo00.template-help.com/wordpress_52702/wp-content/themes/CherryFramework/js/jplayer.playlist.min.js?ver=2.3.0"
		type="text/javascript"></script>
	<script src="//livedemo00.template-help.com/wordpress_52702/wp-content/themes/CherryFramework/js/jquery.jplayer.min.js?ver=2.6.0"
		type="text/javascript"></script>
	<script src="//livedemo00.template-help.com/wordpress_52702/wp-content/themes/CherryFramework/js/tmstickup.js?ver=1.0.0"
		type="text/javascript"></script>
	<script src="//livedemo00.template-help.com/wordpress_52702/wp-content/themes/CherryFramework/js/device.min.js?ver=1.0.0"
		type="text/javascript"></script>
	<script src="//livedemo00.template-help.com/wordpress_52702/wp-content/themes/CherryFramework/js/jquery.zaccordion.min.js?ver=2.1.0"
		type="text/javascript"></script>
	<script src="//livedemo00.template-help.com/wordpress_52702/wp-content/themes/CherryFramework/js/camera.min.js?ver=1.3.4"
		type="text/javascript"></script>
	<script src="//livedemo00.template-help.com/wordpress_52702/wp-content/themes/CherryFramework/js/jquery.debouncedresize.js?ver=1.0"
		type="text/javascript"></script>
	<script src="//livedemo00.template-help.com/wordpress_52702/wp-content/themes/CherryFramework/js/jquery.ba-resize.min.js?ver=1.1"
		type="text/javascript"></script>
	<script src="//livedemo00.template-help.com/wordpress_52702/wp-content/themes/CherryFramework/js/jquery.isotope.js?ver=1.5.25"
		type="text/javascript"></script>
	<script src="//livedemo00.template-help.com/wordpress_52702/wp-content/plugins/cherry-plugin/includes/js/cherry-plugin.js?ver=1.2.6"
		type="text/javascript"></script>
	<script src="//livedemo00.template-help.com/wordpress_52702/wp-content/plugins/cherry-plugin/lib/js/owl-carousel/owl.carousel.min.js?ver=1.31"
		type="text/javascript"></script>
	<script type="text/javascript">
		deleteCookie('cf-cookie-banner');
	</script>
	
    <?php 
	  /*
	   * Always have wp_footer() just before the closing </body>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to reference JavaScript files.
	   */
	  wp_footer(); 
	?>
  </body>
</html>