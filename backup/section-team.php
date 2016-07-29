<section id="team">
	<div class="container-fluid team">
		<h2 class="titulo">
			TEAM
		</h2>


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

			echo '<div id="leader_team_0'.$i.'" class="col-md-3 col-sm-6 col-xs-6 pessoa  "> <div class="box sm-hide "> <div class="foto">';
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
</section>