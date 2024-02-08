<?php get_header();?>
<div class="container min-vh-100 border-left border-right p-0 p-md-5 bg-white">	


	<?php 
	if (have_posts()) : while(have_posts()) : the_post();?>
	<div class= "row min-vh-100 justify-content-center p-0 m-0">
		<div class="col-12 p-0 col-md-6">
			<h1 class="text-center"><?php the_title();?></h1>
			<?php 
				if(!empty(get_the_content())):
					the_content();

				else:
					$messageNoContent = "De volgende pagina die u bezoekt bevat nog geen content.";
					echo wpautop($messageNoContent);
				endif;

			?>
		</div>
	</div>

	<?php 
	endwhile;
	else:
	?>
	<div class= "row min-vh-100 justify-content-center p-0 m-0">
		<div class="col-12 col-md-6">
			<p class="text-center">
				<?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
			</p>
		</div>
	</div>
	<?php
	endif;
	?>

</div>
<?php get_footer();?>