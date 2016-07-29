<div id="post-comum">
	<div id="particles-js">
		<section id="top-post-comum">
			<style>
				.top-post-comum 
				{
					background-image: url('<?php echo get_field('imagem'); ?>');
				}
			</style>
			<div class="container-fluid top-post-comum">
				<div class="container relative">
					<div class="box">
						<h3 class="titulo"><?php echo get_field('titulo'); ?></h3>
						<p><?php echo get_field('resumo'); ?></p>
					</div>
				</div>
			</div>
		</section>

		<section id="transition-post">
			<div class="container-fluid transition-post">
				<h3 class="titulo"><?php echo get_field('titulo'); ?></h3>
			</div>
		</section>

		<section id="conteudo-post">
			<div class="container-fluid conteudo-post">
				<div class="container">
					<p><?php echo get_field('conteudo'); ?></p>
				</div>
			</div>
		</section>

		<section id="comentarios">
			<div class="container-fluid comentarios">
				<div class="container">
					

					<?php
					comments_template(); 
					?>

				</div>
			</div>
		</section>

	</div>
</div>



