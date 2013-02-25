		<footer>
		
			<div class="container">
				
				<?php wp_nav_menu(
          array(
            'menu' => 'footer_links', /* menu name */
            'theme_location' => 'footer_links', /* where in the theme it's assigned */
            'menu_class' => 'footer-links', /* container class */
            'container' => false,
            'fallback_cb' => 'foo_footer_links_fallback' 
          )
        ); ?>
			
			</div>
			
		</footer>
	
	</div> <!-- /container -->
			
	<!--[if lt IE 7 ]>
			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
	
	<?php wp_footer(); // js scripts are inserted using this function ?>

</body>

</html>