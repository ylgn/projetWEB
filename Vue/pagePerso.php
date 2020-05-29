<!DOCTYPE html>
<html>
	<head>
		<title>Nom de l'étudiant</title>
	</head>
	<body>
		<nav>
			<?php
				include "template.php";
			?>
		</nav>

		<div id="index" class="" style="background-image:url('img/studentsbg.jpg');background-size: auto 100%; background-repeat: no-repeat; background-size: cover; background-position: center center;">
				
			<div class="mask rgba-gradient d-flex justify-content-center align-items-center">
				
				<div class="container">

					<div class="row myRow mb-5">

						<div class=" col mt-2">
							<p class="text-left"><a href="etudiants.php" class="myRetour"><i class="fa fa-chevron-left mr-2 ml-2 mt-2"></i>Retour</a></p>
							<div class="banner_inner d-flex align-items-center ml-5 mb-5">
								<div class="banner_content">
									<div class="media">
										<div class="d-flex">
											<img src="img/tete1.png" class="img-thumbnail myThumbnail mr-5">

										</div>
										<div class="media-body">
											<div class="personal_text">
												<h1>Nom de l'étudiant</h1>
												<h4>Spécialité du stage</h4>
												<p>Parcours de l'étudiant</p>
												<p><i class="fa fa-birthday-cake"></i> Date de naissance</p>
												<p><i class="fa fa-at"></i> Adresse mail</p>
												<p><i class="fa fa-briefcase"></i><a href="#" class="myLink"> Entreprise du stage</a></p>
												<p><i class="fa fa-file-pdf-o"></i><a href="CV.pdf" download class="myLink"> Curiculum Vitae</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>