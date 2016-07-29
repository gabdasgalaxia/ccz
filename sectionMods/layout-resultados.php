<section id="resultados">
	<div class="container-fluid resultados">
		<div class="container ">
			<div class="box-titulo">
				<h2 class="titulo txtc"><?php echo $array[$i]['titulo']; ?></h2>
				<p class="col-sm-6 cntr txtc"><?php echo strip_tags($array[$i]['conteudo']); ?></p>
			</div>



			<?php 

			$resultados =  $array[$i]['resultados']; 
			$tamResultados = count($resultados);

			// var_dump($resultados);
			
			if ($tamResultados > 3 ){
				echo '			<div class="slider_resultados">';
			}

			for ($iR=0; $iR < $tamResultados; $iR++) { 
				switch ($tamResultados) {
					case 1:
					
					echo '			<div class="item col-md-6 col-sm-12 col-xs-12 cntr">';
					echo '				<div class="box-img">';
					echo '					<img src="'.$resultados[$iR]['icon'].'" alt="">';
					echo '				</div>';
					echo '				<p class="col-md-8 col-sm-12 col-xs-12 cntr ">'.strip_tags($resultados[$iR]['descricao']).'</p>';
					echo '			</div>';

					break;
					case 2:
					
					echo '			<div class="item col-md-6 col-sm-6 col-xs-12 xstop30">';
					echo '				<div class="box-img">';
					echo '					<img src="'.$resultados[$iR]['icon'].'" alt="">';
					echo '				</div>';
					echo '				<p class="col-md-8 col-sm-12 col-xs-12 cntr ">'.strip_tags($resultados[$iR]['descricao']).'</p>';
					echo '			</div>';

					break;
					case 3:
					
					if ($iR < 2) {
						echo '			<div class="item col-md-4 col-sm-6 col-xs-12 xstop30">';
						echo '				<div class="box-img">';
						echo '					<img src="'.$resultados[$iR]['icon'].'" alt="">';
						echo '				</div>';
						echo '				<p class="col-md-12 col-sm-12 col-xs-12 cntr ">'.strip_tags($resultados[$iR]['descricao']).'</p>';
						echo '			</div>';
					} else {
						echo '			<div class="item col-md-4 col-sm-12 col-xs-12 smtop60 xstop30">';
						echo '				<div class="box-img">';
						echo '					<img src="'.$resultados[$iR]['icon'].'" alt="">';
						echo '				</div>';
						echo '				<p class="col-md-12 col-sm-12 col-xs-12 cntr ">'.strip_tags($resultados[$iR]['descricao']).'</p>';
						echo '			</div>';
					}

					break;
					default:

					
					echo '			<div class="item ">';
					echo '				<div class="box-img">';
					echo '					<img src="'.$resultados[$iR]['icon'].'" alt="">';
					echo '				</div>';
					echo '				<p class="col-md-8 col-sm-12 col-xs-12 cntr ">'.strip_tags($resultados[$iR]['descricao']).'</p>';
					echo '			</div>';
				}
			}

			if ($tamResultados > 3 ){
				echo '			</div>';
			}


			?>


<!--
			<div class="item col-md-4 col-sm-6 col-xs-12">
				<div class="box-img">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/icon-clock.png" alt="">
				</div>
				<p class="col-md-8 col-sm-12 col-xs-12 cntr ">Em questão de horas, a campanha se espalhou pelas redes sociais</p>
			</div>

			<div class="item col-md-4 col-sm-12 col-xs-12">
				<div class="box-img">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/icon-love.png" alt="">
				</div>
				<p class="col-md-8 col-sm-12 col-xs-12 cntr ">Mais de 100 mil compartilhamentos e mais de 1 milhão de likes</p>
			</div> -->
		</div>

		<img src="<?php bloginfo('template_directory'); ?>/assets/img/contorno-asterix-cinza.png" alt="">
	</div>
</section>