<!DOCTYPE html>
<html>
<head>
	<title>Sauvegarde</title>
</head>
<body>
	<nav>
		<?php
			include "template.php";
		?>
	</nav>

	<div id="index" class="" style="background-image:url('img/postulerbg.jpg');background-size: auto 100%; background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: center center;">

		<div class="mask rgba-gradient d-flex justify-content-center align-items-center">
			<div class="container">
				<div class="row myRow mb-5">
					<div class=" col mt-xl-5 mb-5 ml-5 mr-5">
						<h1 class="h1-responsive font-weight-bold mt-3 mr-5">Inscription</h1>

						<hr class="myHr">

						<form class="form-horizontal" role="form" method="POST" action="validation.php">
							<h5>Identité</h5>
							<div class="row">
								<div class="col-8">
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label for="firstName" class="control-label">Prénom</label>
												<div>
													<input type="text" id="firstName" placeholder="PrénomSaisi" class="form-control" readonly>
												</div>
											</div>
										</div>
										<div class="col">
											<div class="form-group">
												<label for="lastName" class="control-label">Nom de famille</label>
												<div>
													<input type="text" id="lastName" placeholder="NomSaisi" class="form-control" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label for="email" class="control-label">Adresse mail</label>
												<div>
													<input type="email" id="email" placeholder="AdresseSaisie" class="form-control" readonly>
												</div>
											</div>
										</div>
										<div class="col">
											<div class="form-group">
												<label for="birthDate" class="control-label">Date de Naissance</label>
												<div>
													<input type="text" id="birthDate" class="form-control"  placeholder="01/01/2001" readonly>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4">
									<label class="control-label" for="parcours">Parcours</label>
									<div>
										<input type="text" id="parcours" class="form-control"  placeholder="ParcoursChoisi" readonly>
									</div>
								</div>
							</div>
							<br>
							<h5>Notes obtenues au dernier semestre</h5>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="noteMaths" class="control-label">Mathématiques</label>
										<div>
											<input type="number" id="noteMaths" placeholder="NoteSaisie" class="form-control" readonly>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="noteInfo" class="control-label">Informatique</label>
										<div>
											<input type="number" id="noteInfo" placeholder="NoteSaisie" class="form-control" readonly>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="noteAng" class="control-label">Anglais</label>
										<div>
											<input type="number" id="noteAng" placeholder="NoteSaisie" class="form-control" readonly>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="moyGen" class="control-label">Moyenne Générale</label>
										<div>
											<input type="number" id="moyGen" placeholder="NoteSaisie" class="form-control" readonly>
										</div>
									</div>
								</div>
							</div>
							<br>
							<h5>Lettre de motivation</h5>


							<!-- ATTENTION Mettre un if selon si l'utilisateur a chargé un fichier ou a tapé sa lettre de motivation -->
							

							<div class="form-group">
								<textarea class="form-control" id="motivationText" rows="3" placeholder="TexteSaisi" readonly></textarea>
							</div>
							<div class="form-group">
								<a href="FichierChargé" download class="myLink"> FichierChargé.pdf</a>
							</div>
							
							<div class="text-center">
								<!-- <button class="btn btn-lg myBtn" type="submit">Retour</button>
								<button class="btn btn-lg myBtn" type="submit">Sauvegarde</button> -->
								<input type="button" class="btn myBtn btn-lg" value="Retour" onclick="document.location.href='postuler.php'; ">
								<input type="button" class="btn myBtn btn-lg" value="Sauvegarde" onclick="document.location.href='validation.php'; ">
							</div>
						</form> 
						
					</div>
				</div>
			</div>
		</div>
</body>
</html>