<section class="Slider Banner">
	<?php 
		$args = array( 'post_type' => 'Slide Home', 'posts_per_page' => 3 );
		$loop = new WP_Query( $args );
		$assets = get_template_directory_uri();
		
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="Banner-item">
				<div class="container">
					<img src="<?php echo $assets; ?>/assets/img/logo.svg" alt="CCZ*WOW" class="Banner-logo">
					
					<h2 class="titulo"><?php the_title(); ?></h2>
					<p><?php the_field('conteudo'); ?></p>
					
					<a href="<?php echo the_permalink(); ?>" class="Button--arrow">saiba mais</a>
					
				</div> <!-- container -->
			</div> <!-- Banner-item -->
	<?php 
	endwhile;
	?>
</section> <!-- Banner -->

<section id="Cases" class="Section">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php 
					query_posts('category_name=Home - post - 01');
					$i = 1;
					
					while(have_posts() && $i == 1) : the_post();
						$titulo = get_the_title();
						$i++; ?>

						<h2 class="titulo"><?php echo get_field('titulo'); ?></h2>
						<p><?php echo get_field('conteudo'); ?></p>
						<a href="<?php echo get_permalink(); ?>" class="Button--arrow">conheça nossos cases</a>
						<?php				
					endwhile; ?>
				</div> <!-- col -->
			</div> <!-- row -->
		</div> <!-- container -->
</section> <!-- Cases -->

<section id="Credenciais" class="Section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-6">
					<?php 
					query_posts('category_name=Home - post - 02');
					$i = 1;

					while(have_posts() && $i == 1) : the_post();
						$titulo = get_the_title();
						$i++; ?>

						<h2 class="titulo"><?php echo get_field('titulo'); ?></h2>
						<?php echo get_field('conteudo'); ?>

						<div class="row">
							<div class="col-sm-4">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-google-partner.png" class="" alt="">
							</div>
							<div class="col-sm-4">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-blueprint.png" class="" alt="">
							</div>
							<div class="col-sm-4">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-graduate.png" class="" alt="">
							</div>
						</div> <!-- row -->
						<div class="row">
							<div class="col-sm-5">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-navegg.png" class="" alt="">
							</div>
							<div class="col-sm-4">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-oracle.png" class="" alt="">
							</div>
							<div class="col-sm-2">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-partner.png" class="" alt="">
							</div>
						</div> <!-- row -->
						
						<a href="<?php get_permalink(); ?>" class="Button--arrow">conheça nossas credenciais</a>
					<?php 
					endwhile;
					?>
				</div> <!-- col -->
			</div> <!-- row -->
		</div> <!-- container -->
</section> <!-- Credenciais -->

<?php include('sectionMods/contato.php'); ?>

	<section id="Mapa">
			<div id="map"></div>
	</section>
</div>

</div>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<!-- <script src="<?php bloginfo("template_directory") ?>/assets/lib/maps.js"></script> -->
