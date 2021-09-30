<html>
	<header>
		<?php wp_head(); ?>
	</header>
	<body <?php body_class( ); ?>>
		<header>
				<h1>Meu primeiro Tema</h1>

			<?php
				if( has_nav_menu('primary')) {
					wp_nav_menu(array(
						'theme_location' => 'primary',
						'container' => 'nav',
						'container_class' => 'main_menu',
						'fallback_cb' => false
					));

				} 
			?>
		</header>