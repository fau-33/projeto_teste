<?php
if(post_password_required()) {
	return;
}

if(have_comments()) {

	foreach($comments as $comment) {
		?>
		<div class="comentario">
			<div class="comentario_foto">
				<?php echo get_avatar($comment, 60); ?>
			</div>
			<div class="comentario_area">
				<strong><?php comment_author(); ?></strong> - <?php comment_date(); ?><br/>

				<?php comment_text(); ?>
				
			</div>
		</div>	

		<?php
	}

	the_comments_pagination();

} 



comment_form(array(
	'comment_field' => 'Comentario:</br> <textarea name="comment"></textarea></br>',
	'fields' => array(
		'author' => 'Nome:<input type="text" name="author" placeholder="Digite o seu nome"/></br>',
		'email' => 'E-mail:<input type="email" name="email" placeholder="Digite o seu e-mail"/></br>',
		'url' => 'Url:<input type="text" name="url" placeholder="Digite o seu site"/></br>'
	),
	'class_submit' => 'botao',
	'label_submit' => 'Enviei seu comentário',
	'title_reply' => 'Deixe um comentário'
));
















?>