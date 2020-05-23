<!DOCTYPE html>
<html>
<head>
	<title>Etudiants</title>
</head>
<body>
	<nav>
		<?php
			include "template.php";
			include "../Controleur/EtudiantControler.php";
		?>
	</nav>

	<div id="index" class="" style="background-image:url('img/studentsbg.jpg');background-size: auto 100%; background-repeat: no-repeat; background-size: cover; background-position: center center;">

		<div class="mask rgba-gradient d-flex justify-content-center align-items-center">
			<div class="container">
				<div class="row myRow mb-5">
					<div class=" col mt-xl-5 mb-5 ml-5">
						<h1 class="h1-responsive font-weight-bold mt-3 mr-5">Les étudiants inscrits en M1 MIAGE</h1>

						<hr class="myHr mr-5">

						<div class="card-columns mr-5">
							
							<?php
								consultEtudiantsInscrits();
							?>

						</div>
										
						
					</div>
				</div>
			</div>
		</div>
	</body>
</html>