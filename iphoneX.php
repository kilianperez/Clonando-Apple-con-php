<?php

	$disponible= "Disponible el";
	$terminal = "iPhone X";
	$fechaLanzamiento ="3 / 11";
	$dileHola="Dile hola al futuro";
	$masInfo="Más información";
	$reservar= "Reservar";
	$informacion_iphone = ["Disponible el", "iPhone X", "3 / 11", "Dile hola al futuro", "Más información", "Reservar"];

?>

	<section class="iphoneX">
		<h2><?php echo $informacion_iphone[1];?></h2>
		<h3><?php echo $informacion_iphone[3];?></h3>

		<div class="reserva">
			<p><?php echo $informacion_iphone[0];?> <?php echo $informacion_iphone[2];?></p>
			<ul>
				<li>
					<a href="#"><?php echo $informacion_iphone[4];?> <i class="fa fa-angle-right"></i></a>
				</li>
				<li>
					<a href="#"><?php echo $informacion_iphone[5];?> <i class="fa fa-angle-right"></i></a>
				</li>
			</ul>
		</div>
	</section> 	