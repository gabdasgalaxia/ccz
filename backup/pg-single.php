<?php 	
/*

Template name: pg-single

*/
?>

<?php
/**
 * The template test History.js with WordPress
 *
 * @package WordPress
 * @subpackage Wp_history
 * @since WordPress History
 * @author Felipe Castro
 */

get_header(); ?>

<style>
	body {background: #fff;}
</style>
<div id="pg-single">
	<div id="particles-js">

		<?php 
		$args = array( 'post_type' => 'Group Job');
		$loop = new WP_Query( $args );
		/*while ( $loop->have_posts() ) : */$loop->the_post();




		$qdTop = get_field('quadro_top');
		include('sectionMods/top-single.php');
		
		$array = get_field('quadro');
		$tamArray = count($array);

		for ($i=0; $i < $tamArray ; $i++) { 

			// if (($array[$i]['acf_fc_layout'] == 'transition_single') && ($array[$i]['visibilidade'] != 'hide')){
			// 	include('sectionMods/transition-single.php');
			// }

			// if (($array[$i]['acf_fc_layout'] == 'layout_01') && ($array[$i]['visibilidade'] != 'hide')){
			// 	include('sectionMods/layout-01.php');
			// }

			// if (($array[$i]['acf_fc_layout'] == 'layout_02') && ($array[$i]['visibilidade'] != 'hide')){
			// 	include('sectionMods/layout-02.php');
			// }

			// if (($array[$i]['acf_fc_layout'] == 'layout_03') && ($array[$i]['visibilidade'] != 'hide')){
			// 	include('sectionMods/layout-03.php');
			// }

			// if (($array[$i]['acf_fc_layout'] == 'slide_show') && ($array[$i]['visibilidade'] != 'hide')){
			// 	include('sectionMods/slide_show.php');
			// }

			// if (($array[$i]['acf_fc_layout'] == 'layout_resultado') && ($array[$i]['visibilidade'] != 'hide')){
			// 	include('sectionMods/layout-resultados.php');
			// }

			// if (($array[$i]['acf_fc_layout'] == 'layout_04') && ($array[$i]['visibilidade'] != 'hide')){
			// 	include('sectionMods/layout-04.php');
			// }

		}

		// include('sectionMods/compartilhe.php');

		// endwhile;
		?>


	</div>
</div>

<!-- 
<style>
	#particles-js {background: #000;}
</style>

<section id="constelacao">
	<div id="particles-js"></div>
</section>
-->

<?php get_footer(); ?>
