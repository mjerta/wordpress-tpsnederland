<?php get_header();?>
<div class="container min-vh-100 border-left border-right p-0 p-md-5 bg-white">
<?php
$post_id = $post->ID;
//first main if statement
if($post_id == 51):
$args = array(
'post_type' => 'post',
'p' => 51,
'posts_per_page' => 1
);

$the_query = new WP_Query( $args );
if ( $the_query->have_posts()) :
	while($the_query->have_posts()) :
	$the_query->the_post();

?>

<div class= "row min-vh-100 justify-content-center p-0 m-0">
	<div class="col-md-6">
		<?php
		the_content();
		?>
	</div>
	<div class="card col-md-6 p-0">
		<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">
		<div class="card-body">
			<h4 class="card-title"><a><i class="fas fa-address-card"></i> Adres gegevens</a></h4>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
				<address>
					<table>
						<tr>
						<td>
							<i class="fas fa-map-marker"></i>
							</td>
							<td>Morsestraat 6</td>
						</tr>
						<tr>
							<td></td>
							<td>
								Ede 6716 AH
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								Nederland
							</td>
						</tr>
					</table>
				</address>
				</li>
				<li class="list-group-item">
					<table>
						<tr>
							<td>
								<i class="fas fa-phone"></i>
							</td>
							<td>
								06 34 56 78 91
							</td>
						</tr>
					</table>
				</li>
				<li class="list-group-item">
					<table>
						<tr>
							<td>
								<i class="fas fa-envelope"></i>
							</td>
							<td>
								<a href = "mailto: vdekruijf@tpsnederland.nl">vdekruijf@tpsnederland.nl</a>
							</td>
						</tr>
					</table>
				</li>
			</ul>
		</div>
	</div>
</div>


<?php
endwhile;
wp_reset_postdata();
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
//first main else statement
else:
	if (have_posts()) :
	while(have_posts()) :
	the_post();
?>

<div class= "row min-vh-100 justify-content-center p-0 m-0">
		<!-- with the thumnail container the text inside can be set absolute and appear on top of the picture -->
		<div class="col-12 p-0 col-md-6 singlepage">
			<div class="thumbnail-container">
				<img src="<?php the_post_thumbnail_url('largest');?>" class="img-fluid rounded">
				<h1 class="text-center"><?php the_title();?></h1>
			</div>
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
endif;
?>
</div>
</div>
<?php get_footer();?>