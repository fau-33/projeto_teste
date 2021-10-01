<?php
/*
Template Name: Página Largura Total
*/

?>
<?php get_header(); ?>

<section>

	<div class="container fullwidth">
		
			<?php while(have_posts()): ?>
				<?php the_post(); ?>

				<article>

					<h2><?php the_title(); ?></a></h2>	

					<p>
						<?php the_content(); ?>
					</p>


					<?php
						if(comments_open()) {
							?>
							<p>
								<hr/>
								<?php comments_number('0 comentários', 'um comentário', '%comentários'); ?> |
							</p>
							<?php
							comments_template();		
						}	 
					?>

				</article> 
			<?php endwhile; ?>	
		
		


	</div>

	

	<div style="clear: both;"></div>
</section>

<?php get_footer(); ?>

		





