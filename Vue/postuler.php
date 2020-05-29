<!DOCTYPE html>
<html>
<head>
	<title>Postuler</title>
	<script type="text/javascript">

		function verif(){
			var e = "";
			firstName = document.getElementById("firstName").value;
			lastName = document.getElementById("lastName").value;
			email = document.getElementById("email").value;
			birthDate = document.getElementById("birthDate").value;
			parcours = document.getElementById("parcours").options;
			noteMaths = document.getElementById("noteMaths").value;
			noteInfo = document.getElementById("noteInfo").value;
			noteAng = document.getElementById("noteAng").value;
			moyGen = document.getElementById("moyGen").value;
			motivationText = document.getElementById("motivationText").value;
			motivationFile = document.getElementById("motivationFile");


			// options = document.getElementById('module').options;
			// nb_module = 0;
			// for (var i=0; i < options.length; i++) {
 		// 		if (options[i].selected) nb_module++;
			// }
			if(firstName.length==0){
				e += "Le champ PRENOM est vide. "
			}
			if(lastName.length==0){
				e += "Le champ NOM est vide. "
			}
			if(email.length==0){
				e += "Le champ ADRESSE MAIL est vide. "
			}
			if(birthDate.length==0){
				e += "Le champ DATE DE NAISSANCE est vide. "
			}
			if(parcours.length==0){
				e += "Vous devez sélectionner un PARCOURS. "
			}
			if(noteMaths.length==0){
				e += "Vous devez saisir une note de MATHS. "
			}
			if(noteInfo.length==0){
				e += "Vous devez saisir une note d'INFO. "
			}
			if(noteAng.length==0){
				e += "Vous devez saisir une note d'Anglais. "
			}
			if(moyGen.length==0){
				e += "Vous devez saisir une MOYENNE. "
			}
			if(motivationText.length==0 and motivationFile.files.length == 0){ 
				e += "Vous devez saisir ou joindre une lettre de motivation. "
			}

			var age = today.getFullYear() - date.getFullYear();
			if(age<20 || age >35){
				e += "Vous devez avoir entre 20 et 35 ans pour postuler à cette formation. "
			}

			var letters = /^[A-Za-z]+$/;
			if(!firstName.match(letters)){
				e += "Le prénom ne doit contenir que des lettres. "
			}
			if(!lastName.match(letters)){
				e += "Le nom ne doit contenir que des lettres. "
			}
			if(firstName.length<3||firstName.length>20){
				e += "Le prénom doit contenir entre 3 et 20 caractères. "
			}
			if(lastName.length<3||lastName.length>20){
				e += "Le nom doit contenir entre 3 et 20 caractères. "
			}


			if(noteMaths<10){
				e += "La note de Maths doit être supérieure à 10";
			}
			if(noteInfo<15){
				e += "La note d'Info doit être supérieure à 15";
			}
			if(noteAng<12){
				e += "La note d'Anglais doit être supérieure à 12";
			}
			if(moyGen<14){
				e += "La moyenne doit être supérieure à 14";
			}


			if(e.length>0){
				alert(e);
				return false;
			}
			return true;
		}
	</script>
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

						<!-- <form class="form-horizontal" role="form" method="POST" action="sauvegarde.php"> -->
							<form class="form-horizontal" role="form">
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
							<!-- <button class="btn myBtn btn-lg btn-block mr-5" type="submit">btn myBtn btn-lg btn-block mr-5</button> -->
							<input type="button" class="btn myBtn btn-lg btn-block mr-5" value="Inscription" onclick="document.location.href='sauvegarde.php'; ">
						</form> 
						
					</div>
				</div>
			</div>
		</div>
</body>
</html>