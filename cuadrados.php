<?php


$informacion_contenido = [

	[	"header2"=>"Diseño y pantalla", 
		"header3"=>"La nueva pantalla Super Retina de 5,8 pulgadas ocupa toda la superficie y, tanto la parte delantera como la posterior, están hechas con el vidrio más resistente jamás usado en un smartphone.", 
		"video"=>"videos/design.mp4"], //$informacion_contenido[0][header2][header3][video]

	[	"header2"=>"Face ID", 
		"header3"=>"Tu cara es tu contraseña. Ahora tienes una forma segura y privada de desbloquear, identificarte y pagar con solo una mirada.",
		"video"=>"videos/faceIdReconocimiento.mp4"], //$informacion_contenido[1][header2][header3][video]

	[	"header2"=>"Cámara y TrueDepth", 
		"header3"=>"La tecnología no ocupa lugar. La cámara TrueDepth permite usar Face ID, el modo Retrato, Iluminación de Retratos y los Animoji.",
		"video"=>"videos/modoRetrato.mp4"], //$informacion_contenido[2][header2][header3][video]

	[	"header2"=>"Cámaras traseras radicalmente nuevas", 
		"header3"=>"La cámara dual de 12 Mpx hace fotos asombrosas gracias a la doble estabilización óptica de imagen y la Iluminación de Retratos.",
		"video"=>"videos/modoRetrato.mp4"],  //$informacion_contenido[3][header2][header3][video]

	[	"header2"=>"A11 Bionic",
		"header3"=>"Es el chip más inteligente y con mayor potencia de todos los smartphones. Su motor neuronal puede realizar hasta 600.000 millones de operaciones por segundo.",
		"video"=>"videos/chipBionic.mp4"],//$informacion_contenido[4][header2][header3][video]

	[	"header2"=>"Carga inalámbrica",
		"header3"=>"El iPhone X se carga con solo dejarlo sobre la base. Está diseñado para un mundo sin cables.",
		"video"=>"videos/cargaRapida.mp4"]
		
];
	
	echo "<br>";

	

	for($i=0; $i< count($informacion_contenido); $i++){

		// print_r($informacion_contenido [$i]['header2']);
		// print_r($informacion_contenido [$i]['header3']);
		// print_r($informacion_contenido [$i]['video']);

		echo "
		<section class='cuadrado'>
			<div class='info'>
				<h2>". $informacion_contenido [$i]['header2'] ."</h2>
				<h3>". $informacion_contenido [$i]['header3'] ."</h3>
			</div>
		
			<video autoplay muted loop>
				<source src='".$informacion_contenido [$i]['video']. "' type='video/mp4'>
			</video>
		</section>";
	}
	
	
	
	// for ($j=0; $j < count($elementosCabecera); ; $j++) { 

	


	// "<section class='cuadrado'>
	// <div class='info'>
	// 	<h2>Diseño y pantalla</h2>
	// 	<h3>La nueva pantalla Super Retina de 5,8 pulgadas ocupa toda la superficie y, tanto la parte delantera como la posterior, están hechas con el vidrio más resistente jamás usado en un smartphone.</h3>
	// </div>
	// <video autoplay muted loop>
	// 	<source src='videos/design.mp4' type='video/mp4'>
	// </video>
	// </section>"

?>

<!-- 
	<section class="cuadrado">
		<div class="info">
			<h2>Diseño y pantalla</h2>
			<h3>La nueva pantalla Super Retina de 5,8 pulgadas ocupa toda la superficie y, tanto la parte delantera como la posterior, están hechas con el vidrio más resistente jamás usado en un smartphone.</h3>
		</div>
		<video autoplay muted loop>
			<source src="videos/design.mp4" type="video/mp4">
		</video>
	</section>
	<section class="cuadrado">
		<div class="info">
			<h2>Face ID</h2>
			<h3>Tu cara es tu contraseña. Ahora tienes una forma segura y privada de desbloquear, identificarte y pagar con solo una mirada.</h3>
		</div>
		<video autoplay muted loop>
			<source src="videos/faceIdReconocimiento.mp4" type="video/mp4">
		</video>
	</section>
	<section class="cuadrado">
		<div class="info">
			<h2>Cámara y TrueDepth</h2>
			<h3>La tecnología no ocupa lugar. La cámara TrueDepth permite usar Face ID, el modo Retrato, Iluminación de Retratos y los Animoji.</h3>
		</div>
		<video autoplay muted loop>
			<source src="videos/modoRetrato.mp4" type="video/mp4">
		</video>
	</section>
	<section class="cuadrado">
		<div class="info">
			<h2>Cámaras traseras radicalmente nuevas</h2>
			<h3>La cámara dual de 12 Mpx hace fotos asombrosas gracias a la doble estabilización óptica de imagen y la Iluminación de Retratos.</h3>
		</div>
		<video autoplay muted loop>
			<source src="videos/modoRetrato.mp4" type="video/mp4">
		</video>
	</section>
	<section class="cuadrado">
		<div class="info">
			<h2>A11 Bionic</h2>
			<h3>Es el chip más inteligente y con mayor potencia de todos los smartphones. Su motor neuronal puede realizar hasta 600.000 millones de operaciones por segundo.</h3>
		</div>
		<video autoplay muted loop>
			<source src="videos/chipBionic.mp4" type="video/mp4">
		</video>
	</section>
	<section class="cuadrado">
		<div class="info">
			<h2>Carga inalámbrica</h2>
			<h3>El iPhone X se carga con solo dejarlo sobre la base. Está diseñado para un mundo sin cables.</h3>
		</div>
		<video autoplay muted loop>
			<source src="videos/cargaRapida.mp4" type="video/mp4">
		</video>
	</section> -->