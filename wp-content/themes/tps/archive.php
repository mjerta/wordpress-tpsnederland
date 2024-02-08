<?php get_header();?>
<div class="container min-vh-100 border-left border-right p-5 bg-white">
	<div class= "row">
		<?php if (have_posts()) : while(have_posts()) : the_post();?>
			<div class="col-md-6 p-1">
			<div class="card h-100">
				<div class="card-body">
					<h3 class="text-center"><?php the_title();?></h3>
					<?php if(has_post_thumbnail()):?>
					<a href="<?php the_permalink();?>" alt="<?php the_permalink();?>">
						<img src="<?php the_post_thumbnail_url('middle');?>" class="img-fluid rounded m-1">
					</a>
					<?php endif;?>
					<?php the_excerpt();?>
					<a href="<?php the_permalink();?>" class="btn btn-success btn-sm">Lees hierover</a>
				</div>
			</div>
			</div>
		<?php endwhile; 
		wp_reset_postdata();
		else:
		?>
		<p>
			<?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
		</p>
		<?php
		
		endif; ?>
		
	</div>
</div>
<?php get_footer();?>