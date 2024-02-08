<?php get_header();?>
<div class="container-fluid h-100 p-0">
	<div class="main-background blur-image h-100 w-100"></div>
	<div class= "row h-100 justify-content-center align-items-center m-0">
		
		<div class="text-center text-white col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
      		<?php
			if ( has_post_thumbnail()) {
				?>
				<img src="<?php the_post_thumbnail_url('middle');?>" class="img-fluid rounded m-1">
				<?php
			}
			?>

				<h1>TPS Nederland</h1>
				<p>Met kennis verpakt</p>

			<button type="button" id="toggle-sliding" class="btn btn-outline-dark btn-lg text-white">Klik hier voor info</button>
		</div>
	</div>
</div>

<div id="2nd-container-frontpage" class="container container-below border-left border-right  p-0 bg-white p-3">
	<div class="row h-100 m-0">
		<div class="col-12 col-sm-6  m-0 p-0 d-flex align-items-center">
			<div class="m-1 p-1">
				<?php
				$args = array(
				'post_type' => 'post',
				'p' => 46,
				'posts_per_page' => 1
				);
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post();
					
				?>
				
					<?php
						the_content();
					?>
					
				<?php
				endwhile;
					wp_reset_postdata();
				else:
				?>
				<p>
					<?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
				</p>
				<?php
					endif;
					
				?>
			</div>
					
		</div>
		<div class="col-12 col-sm-6  m-0 p-0 d-flex align-items-center">
			<div class="m-1 p-1">
				<img src="./wp-content/uploads/example-picture1.jpg" class="img-fluid rounded" alt="Responsive image">
			</div>
		</div>
		
		<div class="col-12"><hr></div>
		<div class="col-12 col-sm-6  m-0 p-0 d-flex align-items-center">
			<div class="m-1 p-1">
				<img src="./wp-content/uploads/example-picture2.jpg" class="img-fluid rounded" alt="Responsive image">
			</div>
		</div>
		<div class="col-12 col-sm-6  m-0 p-0 d-flex align-items-center">
			<div class="m-1 p-1">
				<?php
				$args = array(
				'post_type' => 'post',
				'p' => 42,
				'posts_per_page' => 1
				);
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post();
					
				?>
				
					<?php
						the_content();
					?>
				<?php
				endwhile;
					wp_reset_postdata();
				else:
				?>
				<p>
					<?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
				</p>
				<?php
					endif;
					
				?>
			</div>
		</div>
		<div class="col-12"><hr></div>
	</div>
</div>
<div class="container border-left container-below border-right min-vh-100 p-3 bg-white">
	<div class="row h-100 m-0">
		<div class="col-12 col-sm-6  m-0 p-0 d-flex align-items-center">
			<div class="m-1 p-1">
				<?php
				$args = array(
				'post_type' => 'post',
				'p' => 66,
				'posts_per_page' => 1
				);
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post();
					
				?>
				
					<?php
						the_content();
					?>
				<?php
				endwhile;
					wp_reset_postdata();		
				else:
				?>	
				<p>
					<?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
				</p>
				<?php
					endif;
					
				?>
		</div>						
					
		</div>										
		<div class="col-12 col-sm-6  m-0 p-0 d-flex align-items-center">
			<div class="m-1 p-1">
				<img src="./wp-content/uploads/example-picture3.jpg" class="img-fluid rounded" alt="Responsive image">
			</div>
		</div>
		<div class="col-12"><hr></div>
		<div class="col-12 col-sm-6  m-0 p-0 d-flex align-items-center">
			<div class="m-1 p-1">
				<img src="./wp-content/uploads/example-picture4.jpg" class="img-fluid rounded" alt="Responsive image">
			</div>
		</div>
		<div class="col-12 col-sm-6  m-0 p-0 d-flex align-items-center">
			<div class="m-1 p-1">
				<?php
				$args = array(
				'post_type' => 'post',
				'p' => 69,
				'posts_per_page' => 1
				);
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post();
					
				?>
				
					<?php
						the_content();
					?>
				<?php
				endwhile;
					wp_reset_postdata();
				else:
				?>
				<p>
					<?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
				</p>
				<?php
					endif;
					
				?>
			</div>
		</div>
		<div class="col-12"><hr></div>
	</div>
</div>
<div class="container border-left container-below border-right bg-white p-3">
	<div class="row justify-content-center m-0">
		<div class="col-md-6 m-0 p-0">
			<p>
			<i>
				Wilt u contact opnemen met TPS Nederland, dan kan dat via het onderstaande contactformulier.
			</i>
			</p>
		</div>
	</div>
	<div class="row justify-content-center m-0">
		<div class="col-md-6 m-0 p-0 ">
			<?php
			$args = array(
			'post_type' => 'post',
			'p' => 51,
			'posts_per_page' => 1
			);
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post();
				
			?>
			
				<?php
					the_content();
				?>
			<?php
			endwhile;
				wp_reset_postdata();
			else:
			?>
			<p>
				<?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
			</p>
			<?php
				endif;
				
			?>					
		</div>
	</div>
</div>


<?php get_footer();?>