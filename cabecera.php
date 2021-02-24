<?php

$elementosCabecera = ["*","Mac","iPad","iPhone","Watch","TV","Music","Soporte","*","*"];

?>







	<header>
		<i class="fa fa-bars"></i>
		<ul>


			<?php

				for($i=0; $i< count($elementosCabecera); $i++){

					echo  "<li class='movil'>
					<a href='#' title='#'>$elementosCabecera[$i]</a></li>";
				}

			?>
			


			<!-- 

			<li>
				<h1>
					<a class="logo" href="#" title="#"></a>
				</h1>
			</li>
			<li class="movil">
				<a href="#" title="#">Mac</a>
			</li>
			<li class="movil">
				<a href="#" title="#">iPad</a>
			</li>
			<li class="movil">
				<a href="#" title="#">iPhone</a>
			</li>
			<li class="movil">
				<a href="#" title="#">Watch</a>
			</li>
			<li class="movil">
				<a href="#" title="#">TV</a>
			</li>
			<li class="movil">
				<a href="#" title="#">Music</a>
			</li>
			<li class="movil">
				<a href="#" title="#">Soporte</a>
			</li>
			
			<li class="movil">
				<a href="#" title="#"><i class="fa fa-search"></i></a>
			</li>
			<li>
				<a href="#" title="#"><i class="fa fa-shopping-bag"></i></a>
			</li>
			
			
			 -->
		</ul>
	</header>