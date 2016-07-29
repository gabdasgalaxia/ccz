<section class="Banner--arrow" style="background-image: url(<?php echo $qdTop[0]['imagem']; ?>)">
	<div class="container">
		<div class="Banner-content">
			<h3 class="Banner-title"><?php echo $qdTop[0]['titulo']; ?></h3>
		
			<div class="Banner-text"><?php echo $qdTop[0]['descricao']; ?></div>
		</div> <!-- Banner-content -->

		<i class="i-mouse"></i>
	</div> <!-- container -->
</section> <!-- Banner -->

<div class="SideMenu">
	<div class="ButtonGrid" id="btn1">
		  <span></span>
		  <span></span>
		  <span></span>
		  <span></span>
		</div> <!-- ButtonGrid -->
</div> <!-- SideMenu -->

<?php next_post_link( '%link', '' ); ?>

<?php previous_post_link( '%link', '' ); ?>




<section id="top-single">
	<div class="container-fluid top-single relative" style="background-image: url(<?php echo $qdTop[0]['imagem']; ?>)">

		<div class="box-master hidden">
				<?php
				$get_lista = array( 'post_type' => 'groupjob');
				$lista_de_case = get_posts( $get_lista );

				foreach ($lista_de_case as $lista) {

					$idPost =  $lista->ID;
					$arrayDePosts = get_field('quadro_top', $idPost);

					foreach ($arrayDePosts as $postInterno) {						
						echo '	<div class="box-mini">';
						echo '		<a href="'.get_permalink($idPost).'" class="">';
						echo '			<img src="'.$postInterno['imagem'].'" alt="">';
						echo '			<h4>'.$postInterno['titulo'].'</h4>';
						echo '		</a>';
						echo '	</div>';						
					}
				}
				?>
		</div>		
	</div>
</section> 