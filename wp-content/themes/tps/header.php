<!DOCTYPE html>
<html>
	<head>
		<meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="https://kit.fontawesome.com/a6af6f552e.js" crossorigin="anonymous"></script>
		
		<?php wp_head();?>
		
	</head>
	

<body <?php body_class('color-scheme-1'); ?>>
	<header class="sticky-top site-header ">
		<nav class="navbar navbar-expand-md navbar-dark color-scheme-4">
			<div class="container">
	      		<div class="site-branding navbar-brand">

		      		<?php
					if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					}
					?>
					<!--
					<h1 class="site-title">
						<a href = "<?php //echo esc_url( home_url( '/' ) ); ?>" rel = "home">
							<?php //bloginfo( 'name' ); ?>
						</a>
					</h1>
					<?php
					/*
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ){ ?>
					*/
					//<p class = "site-description">
						//<?php echo $description; /* WPCS: xss ok. */ 

					//}		
					?>
					</p>
					-->
					
						

				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<?php
					wp_nav_menu([
						'menu'		=>	'primary',
						'theme_location'		=>	'top-menu',
						'container'		=>	'div',  
						'container_id'		=>	'bs4navbar',
						'container_class'		=>	'collapse navbar-collapse',
						'menu_id'		=>	'main-menu',
						'menu_class'		=>	'navbar-nav ml-auto',
						'depth'		=>	2,
						'fallback_cb'		=>	'bs4navwalker::fallback',
						'walker'		=>	new bs4navwalker(),
					]);
				?>
	    	</div>
	    </nav>
	</header>