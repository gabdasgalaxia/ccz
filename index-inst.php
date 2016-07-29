<?php 	
/*

Template name: pg-inst

*/

get_header(); 

$post_inst = get_field('post_-_institucional'); 
$post_bg = get_field('post_-_background'); 
$qdPoints = get_field('quadro_points');
$link = get_bloginfo("template_directory");
?>

<div class="stay-transition">
	<div id="institucional" class="clearfix">

		<section id="slider-institucional">
			<div class="container-fluid slider-institucional">
				<div class="container slider-top-institucional">
					<div class=" slider slider-01 ">
						<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo3.png" alt="">
						<h2 class="titulo">
							<?php the_field('destaque_topo_-_titulo'); ?>
						</h2>
						<p>
							<?php the_field('destaque_topo_-_conteudo'); ?>
						</p>
						<a href="<?php the_field('destaque_topo_-_link'); ?>" class="btn-01">saiba mais <img src="<?php echo $link ?>/assets/img/arrow.png" alt=""></a>
					</div>
				</div>
			</div> 
		</section>

		<section id="cases">
			<div class="container-fluid cases">
				<div class="container">
					<div class="col-sm-9 col-xs-12 box ">
						<?php 
						query_posts('category_name=Home - post - 01');
						$i = 1;
						while(have_posts() && $i == 1) : the_post();
						$titulo = get_the_title();
						$i++;

						echo '<h2 class="titulo">'.get_field('titulo').'</h2>';
						echo '<p>'.strip_tags(get_field('conteudo')).'</p>';
						echo '<a href="'.get_permalink().'" class="btn-01"> conheça nossos cases <img src="'. $link .'/assets/img/arrow.png" alt=""></a>';


						endwhile;
						?>
					</div>

				</div>
			</div>
		</section>	 
		
		<section id="credenciais">
			<div class="container-fluid credenciais bs">
				<div class="container">
					<div class="col-md-7 col-sm-12 col-xs-12 box fr">
						<?php 
						query_posts('category_name=Home - post - 02');
						$i = 1;
						while(have_posts() && $i == 1) : the_post();
						$titulo = get_the_title();
						$i++;


						echo '<h2 class="titulo">'.get_field('titulo').'</h2>';
						echo '<p>'.strip_tags(get_field('conteudo')).'</p>';
						?>

						<div class="selos sm-hide">
							<div class="col-xs-4">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-google-partner.png" class="" alt="">
							</div>
							<div class="col-xs-4">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-blueprint.png" class="" alt="">
							</div>
							<div class="col-xs-4">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-graduate.png" class="" alt="">
							</div>
							<div class="col-xs-4 pl23">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-navegg.png" class="" alt="">
							</div>
							<div class="col-xs-4 pl60">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-oracle.png" class="" alt="">
							</div>
							<div class="col-xs-4 pl75">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-partner.png" class="" alt="">
							</div>
						</div>

						<div class="selos-slide-inst selos-slide sm-show">
							<div class="item">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-google-partner.png" class="" alt="">
							</div>
							<div class="item">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-blueprint.png" class="" alt="">
							</div>
							<div class="item">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-graduate.png" class="" alt="">
							</div>
							<div class="item">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-navegg.png" class="" alt="">
							</div>
							<div class="item">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-oracle.png" class="" alt="">
							</div>
							<div class="item">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-partner.png" class="logo-partner" alt="">
							</div>
						</div>
						<?php
						echo '<a href="'.get_permalink().'" class="btn-01"> conheça nossas credenciais <img src="'. $link .'/assets/img/arrow.png" alt=""></a>';

						endwhile;
						?>
					</div>
				</div>
			</div>
		</section>
		
		<section id="points">
			<style>
				<?php $imgPontos = $qdPoints[0]['imagem'];?>
				body #institucional #points .points {background-image: url('<?php echo $imgPontos; ?>'); };
			</style>

			<div class="container-fluid points">
				<div class="container">
					<?php 

					$pontos = $qdPoints[0]['points'];

					foreach ($pontos as $ponto) {
						echo '<div class="item">';
						echo '	<h3 class="titulo">';
						echo $ponto['titulo'];
						echo '	</h3>';
						echo '	<p>';
						echo strip_tags($ponto['conteudo']);
						echo '	</p>';
						echo '</div>';
					}

					?>
				</div>
			</div>
		</section>


		<section id="team">
			<div class="container-fluid team">
				<h2 class="titulo">
					TEAM
				</h2>

				<div class="swiper-container gallery-top">
					<div class="swiper-wrapper container-pessoas">

						<div class="swiper-slide controle">
							<?php 
							$args = array( 'post_type' => 'Leader Team', 'posts_per_page' => 4 );
							$loop = new WP_Query( $args );
							$posicao = 0;

							while ( $loop->have_posts() ) : $loop->the_post();
							$posicao = get_field('posicao');
							$cargo[$posicao] = array(
								'nome' => get_field('nome'),
								'foto' => get_field('foto_perfil')['url'],
								'cargo' => get_field('cargo'),
								'posicao' => get_field('posicao'),
								);
							endwhile;

							$i = 1;
							while ( $i <= 4) {

								echo '<div id="leader_team_0'.$i.'" class="col-md-3 col-sm-6 col-xs-6 pessoa index-slide  " data-index="'.$i.'"> <div class="box sm-hide "> <div class="foto">';
								echo '<img src="'.$cargo[$i]['foto'].'" alt="">'; 
								echo '</div>';

								echo '<h3 class="nome titulo"> '.$cargo[$i]['nome'].' </h3>';
								echo '<p class="funcao">'.$cargo[$i]['cargo'].'</p>';
								echo '</div>';

								echo '<div class="box2 sm-show"> <img src="'.$cargo[$i]['foto'].'" alt=""> </div>';
								echo '</div>';
								$i++;
							}
							?>
						</div>

						<div class="swiper-slide turn-slide-index">slide_01</div>
						<div class="swiper-slide turn-slide-index">slide_02</div>
						<div class="swiper-slide turn-slide-index">slide_03</div>
						<div class="swiper-slide turn-slide-index">slide_04</div>
					</div>

				</div>
				<div class="swiper-container gallery-thumbs">
					<div class="swiper-wrapper">
						<div class="swiper-slide"></div>
						<div class="swiper-slide"></div>
						<div class="swiper-slide"></div>
						<div class="swiper-slide"></div>
					</div>
				</div>
			</div>
		</section>

		<section id="contato">
			<div class="container-fluid contato">
				<div class="container">
					<h2 class="titulo">
						CONTATO
					</h2>
					<div class="col-sm-6 col-xs-12 box-form">
						<p>
							Deixe sua mensagem que o mais breve<br>
							entraremos em contato.
						</p>
						<form>
							<input type="text" class="input" name="nome" placeholder="Nome" id="nome">
							<input type="text" class="input" name="email" placeholder="E-mail" id="email">
							<input type="text" class="input" name="telefone" placeholder="Telefone" id="telefone">
							<textarea class="input" name="msg" id="msg"></textarea>
							<a id="submit-form-inst">ENVIAR <img src="<?php echo $link . '/assets/img/arrow-yellow.png' ?>"></a>
						</form>
					</div>

					<div class="col-sm-6 col-xs-12 box-endereco">
						<h4 class="titulo">
							ENDEREÇO
						</h4>
						<p>
							R. Prof. Fernando Moreira, 775
						</p>
						<p>
							80430-080
						</p>
						<p>
							Curitiba - PR
						</p>
						<p>
							+55 41 3340 850
						</p>

						<div class="icons-sociais">
							<div class="flip">
								<div class="front">
									<a href="https://www.facebook.com/CCZComunicacao" target="_blank">
										<img src="<?php bloginfo('template_directory'); ?>/assets/img/icon-face-black.png" alt="">
									</a>
								</div>
								<div class="back">
									<a href="https://www.facebook.com/CCZComunicacao" target="_blank">
										<img src="<?php bloginfo('template_directory'); ?>/assets/img/icon-face-color.png" alt="">
									</a>
								</div>
							</div>
							<div class="flip">
								<div class="front">
									<a href="https://twitter.com/cczcom" target="_blank">
										<img src="<?php bloginfo('template_directory'); ?>/assets/img/icon-twitter-black.png" alt="">
									</a>
								</div>
								<div class="back">
									<a href="https://twitter.com/cczcom" target="_blank">
										<img src="<?php bloginfo('template_directory'); ?>/assets/img/icon-twitter-color.png" alt="">
									</a>
								</div>
							</div>
							<div class="flip">
								<div class="front">
									<a href="https://www.youtube.com/channel/UC848kAOj6Z4h8SehgR1iGVQ" target="_blank">
										<img src="<?php bloginfo('template_directory'); ?>/assets/img/icon-youtube-black.png" alt="">
									</a>
								</div>
								<div class="back">
									<a href="https://www.youtube.com/channel/UC848kAOj6Z4h8SehgR1iGVQ" target="_blank">
										<img src="<?php bloginfo('template_directory'); ?>/assets/img/icon-youtube-color.png" alt="">
									</a>
								</div>
							</div>
							<div class="flip">
								<div class="front">
									<a href="mailto:contato@cczcom.com.br">
										<img src="<?php bloginfo('template_directory'); ?>/assets/img/icon-contact-black.png" alt="">
									</a>
								</div>
								<div class="back">
									<a href="mailto:contato@cczcom.com.br">
										<img src="<?php bloginfo('template_directory'); ?>/assets/img/icon-contact-color.png" alt="">
									</a>
								</div>
							</div> 
						</div>
					</div>
				</div>
			</div>
		</section> 

	</div>
</div> <!-- Fim stay transition -->

<script>
	// setTimeout(function(){
		// var galleryTop = new Swiper('.gallery-top', {
		// 	nextButton: '.swiper-button-next',
		// 	prevButton: '.swiper-button-prev',
		// 	spaceBetween: 10,
		// });
		// var galleryThumbs = new Swiper('.gallery-thumbs', {
		// 	spaceBetween: 10,
		// 	centeredSlides: true,
		// 	slidesPerView: 'auto',
		// 	touchRatio: 0.2,
		// 	slideToClickedSlide: true
		// });

		// galleryTop.params.control = galleryThumbs;
		// galleryThumbs.params.control = galleryTop;

		// $("body").on('click', '.index-slide', function(){
		// 	var index = $(this).attr("data-index");
		// 	galleryTop.slideTo(index);
		// });

		// $('body').on('click', '.turn-slide-index', function(){
		// 	galleryTop.slideTo(0);
		// });

	// }, 6000);
</script>

<?php get_footer(); ?>

