<!DOCTYPE html>
<html>
<head>
	<title>Postuler</title>
</head>
<body>
	<nav>
		<?php
			include "template.php";
		?>
	</nav>

	<div id="index" class="" style="background-image:url('img/postulerbg.jpg');background-size: auto 100%; background-repeat: no-repeat; background-size: cover; background-position: center center;">

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
												<label for="firstName" class="control-label">Prénom*</label>
												<div>
													<input type="text" id="firstName" placeholder="Prénom" class="form-control" autofocus required minlength="3" maxlength="20">
												</div>
											</div>
										</div>
										<div class="col">
											<div class="form-group">
												<label for="lastName" class="control-label">Nom de famille*</label>
												<div>
													<input type="text" id="lastName" placeholder="Nom de famille" class="form-control" autofocus required minlength="3" maxlength="20">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label for="email" class="control-label">Adresse mail* </label>
												<div>
													<input type="email" id="email" placeholder="Adresse mail" class="form-control" name= "email"  required>
												</div>
											</div>
										</div>
										<div class="col">
											<div class="form-group">
												<label for="birthDate" class="control-label">Date de Naissance*</label>
												<div>
													<input type="date" id="birthDate" class="form-control"  required>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4">
									<label class="control-label" for="parcours">Parcours*</label>
									<div>
										<select class="custom-select m" id="parcours">
											<option disabled selected value> -- choisissez un parcours -- </option>
											<option value="1">Parcours Informatique Décisionnelle</option>
											<option value="2">Parcours Informatique pour la Finance</option>
											<option value="3">Parcours Systèmes d'Information</option>
											<option value="4">Parcours Intelligence Artificielle</option>
										</select>
									</div>
								</div>
							</div>
							<br>
							<h5>Notes obtenues au dernier semestre</h5>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="noteMaths" class="control-label">Mathématiques* </label>
										<div>
											<input type="number" id="noteMaths" placeholder="10" class="form-control" required min="10" max="20">
										</div>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="noteInfo" class="control-label">Informatique* </label>
										<div>
											<input type="number" id="noteInfo" placeholder="10" class="form-control" required min="15" max="20">
										</div>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="noteAng" class="control-label">Anglais* </label>
										<div>
											<input type="number" id="noteAng" placeholder="10" class="form-control" required min="12" max="20">
										</div>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="moyGen" class="control-label">Moyenne Générale* </label>
										<div>
											<input type="number" id="moyGen" placeholder="10" class="form-control" required min="14" max="20">
										</div>
									</div>
								</div>
							</div>
							<br>
							<h5>Lettre de motivation*</h5>
							<div class="form-group">
								<textarea class="form-control" id="motivationText" rows="3" placeholder="Saisissez ici le texte de votre lettre de motivation..."></textarea>
							</div>
							<div class="form-group">
								<label for="motivationFile">...ou chargez le fichier correspondant :</label>
								<input type="file" class="form-control-file" id="motivationFile">
							</div>
							<div class="form-group">
								<div class="col-sm-9 col-sm-offset-3">
									<span class="help-block">(*) Required fields</span>
								</div>
							</div>
							<button class="btn myBtn btn-block mr-5" type="submit">Inscription</button>
						</form> 
						
					</div>
				</div>
			</div>
		</div>
</body>
</html>