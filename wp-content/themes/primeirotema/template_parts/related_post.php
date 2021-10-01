<div class="post_related_item">

<?php if(has_post_thumbnail()): ?>
	<a href="<?php the_permalink(); ?>" class="post_thumbnail">
		<?php the_post_thumbnail('thumbnail', array('class' => 'post_miniatura')); ?>
	</a>
<?php endif; ?>

	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


	<p>
		<?php comments_number('0 comentários', 'um comentário', '%comentários'); ?><br/>

		<a href="<?php the_permalink(); ?>">LEIA MAIS</a> 
	</p>						

</div> 