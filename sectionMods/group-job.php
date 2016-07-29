
<div class="Case">
		<?php 

		$qdTop = get_field('quadro_top');
		$array = get_field('quadro');
		$tamArray = count($array);

		include('top-single.php');
		
		for ($i=0; $i < $tamArray ; $i++) { 

			if (($array[$i]['acf_fc_layout'] == 'transition_single') && ($array[$i]['visibilidade'] != 'hide')){
				include('transition-single.php');
			}

			if (($array[$i]['acf_fc_layout'] == 'layout_01') && ($array[$i]['visibilidade'] != 'hide')){
				include('layout-01.php');
			}

			if (($array[$i]['acf_fc_layout'] == 'layout_02') && ($array[$i]['visibilidade'] != 'hide')){
				include('layout-02.php');
			}

			if (($array[$i]['acf_fc_layout'] == 'layout_03') && ($array[$i]['visibilidade'] != 'hide')){
				include('layout-03.php');
			}

			if (($array[$i]['acf_fc_layout'] == 'slide_show') && ($array[$i]['visibilidade'] != 'hide')){
				include('slide_show.php');
			}

			if (($array[$i]['acf_fc_layout'] == 'layout_resultado') && ($array[$i]['visibilidade'] != 'hide')){
				include('layout-resultados.php');
			}

			if (($array[$i]['acf_fc_layout'] == 'layout_04') && ($array[$i]['visibilidade'] != 'hide')){
				include('layout-04.php');
			}

		}

		include('compartilhe.php');
		include('contato-single.php');
		
		?>



</div>
