<footer class="page-footer color-scheme-3 text-white">
	<div class="container-fluid p-3 h-100 text-center text-md-left">
		<div class="row">
				
			<div class="col-md-6">

			</div>
			<div class="col-md-3">
				<h3>About</h3>
				<?php wp_nav_menu( array(
					'menu'				=>	'Footer Menu',
					'theme_location'	=>	'footer-menu',
					//'container'			=>	'div',
					//'container_class'	=>	'container',
					//'container_id'		=>	'footer-menu',
					'menu_class'		=>	'footer-list',
					'menu_id'			=>	'footer-list1',
					'item_wraps'		=> ''

				));
				?>				
			</div>
			<div class="col-md-3">
				<h3>Adres</h3>
				<ul id="footer-list2" class="footer-list">
					<li>Morsestraat 6</li>
					<li>Ede 6716 AH</li>
					<li>Nederland</li>

				</ul>
			</div>				
		</div>
	</div>
	<div class="footer-copyright color-scheme-2 text-center">© 2015 - <span id="this-year"></span> Copyright:
		<a href="<?php get_home_url(); ?>"> TPS-Nederland.nl</a>
	</div>
</footer>
<?php wp_footer();?>
</body>
</html>