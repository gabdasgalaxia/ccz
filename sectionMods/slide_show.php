<?php 
$galery = $array[$i]['slider'];
$tamGalery = count($galery);
?>

<section id="slider2">
	<div class="container-fluid  <?php if($tamGalery > 1) {echo 'slider2';} else { echo 'unique_img';} ?>">
		
		<?php 
		for ($y=0; $y < $tamGalery; $y++) { 
			echo '<div class="box-slider"> <img src="'.$galery[$y]['url'].'"/assets/img/slider-02/slider.png" alt=""></div>';
		}
		?>

	</div>
</section>