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
			parcours = document.getElementById("parcours").value;
			noteMaths = document.getElementById("noteMaths").value;
			noteInfo = document.getElementById("noteInfo").value;
			noteAng = document.getElementById("noteAng").value;
			moyGen = document.getElementById("moyGen").value;
			motivationText = document.getElementById("motivationText").value;
			//motivationFile = document.getElementById("motivationFile");		
		
			if(firstName.length==0){
				e += "Le champ PRENOM est vide.  \n";
			}
			if(lastName.length==0){
				e += "Le champ NOM est vide.  \n";
			}
			if(email.length==0){
				e += "Le champ ADRESSE MAIL est vide.  \n";
			}
			if(birthDate.length==0){
				e += "Le champ DATE DE NAISSANCE est vide. \n";
			}
			if(parcours.length==0){
				e += "Vous devez sélectionner un PARCOURS.  \n";
			}
			if(noteMaths.length==0){
				e += "Vous devez saisir une note de MATHS. \n";
			}
			if(noteInfo.length==0){
				e += "Vous devez saisir une note d'INFO. \n";
			}
			if(noteAng.length==0){
				e += "Vous devez saisir une note d'Anglais.  \n";
			}
			if(moyGen.length==0){
				e += "Vous devez saisir une MOYENNE.  \n";
			}
			if((motivationText.length==0)){ // && (motivationFile.files.length == 0)){ 
				e += "Vous devez saisir votre lettre de motivation. \n";
			}

			var today = new Date();
			var bday = new Date(birthDate)
			var age = today.getFullYear() - bday.getFullYear();
			if(age<20 || age >35){
				e += "Vous devez avoir entre 20 et 35 ans pour postuler à cette formation. \n ";
			}

			var letters = new RegExp("^((?:\\w|[\\-_ ](?![\\-_ ])|[\\u00C0\\u00C1\\u00C2\\u00C3\\u00C4\\u00C5\\u00C6\\u00C7\\u00C8\\u00C9\\u00CA\\u00CB\\u00CC\\u00CD\\u00CE\\u00CF\\u00D0\\u00D1\\u00D2\\u00D3\\u00D4\\u00D5\\u00D6\\u00D8\\u00D9\\u00DA\\u00DB\\u00DC\\u00DD\\u00DF\\u00E0\\u00E1\\u00E2\\u00E3\\u00E4\\u00E5\\u00E6\\u00E7\\u00E8\\u00E9\\u00EA\\u00EB\\u00EC\\u00ED\\u00EE\\u00EF\\u00F0\\u00F1\\u00F2\\u00F3\\u00F4\\u00F5\\u00F6\\u00F9\\u00FA\\u00FB\\u00FC\\u00FD\\u00FF\\u0153])+)$", "i");

			if(!firstName.match(letters)){
				e += "Le prénom ne doit contenir que des lettres.\n";
			}
			if(!lastName.match(letters)){
				e += "Le prénom ne doit contenir que des lettres.\n";
			}
			if(firstName.length<3||firstName.length>20){
				e += "Le prénom doit contenir entre 3 et 20 caractères. \n";
			}
			if(lastName.length<3||lastName.length>20){
				e += "Le nom doit contenir entre 3 et 20 caractères. \n";
			}


			if(noteMaths<10){
				e += "La note de Maths doit être supérieure à 10  \n";
			}
			if(noteInfo<15){
				e += "La note d'Info doit être supérieure à 15 \n";
			}
			if(noteAng<12){
				e += "La note d'Anglais doit être supérieure à 12  \n";
			}
			if(moyGen<14){
				e += "La moyenne doit être supérieure à 14  \n";
			}


			if(e.length>0){
				alert(e);
				return false;
			}else{
				return true;
			}
			
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

						
							<form class="form-horizontal" role="form" method="POST" action="sauvegarde.php">
							<h5>Identité</h5>
							<div class="row">
								<div class="col-8">
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label for="firstName" class="control-label">Prénom*</label>
												<div>
													<input type="text" id="firstName" name="firstName" placeholder="Prénom" class="form-control" autofocus required minlength="3" maxlength="20">
												</div>
											</div>
										</div>
										<div class="col">
											<div class="form-group">
												<label for="lastName" class="control-label">Nom de famille*</label>
												<div>
													<input type="text" id="lastName" name="lastName" placeholder="Nom de famille" class="form-control" autofocus required minlength="3" maxlength="20">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label for="email" class="control-label">Adresse mail* </label>
												<div>
													<input type="email" id="email" name="email" placeholder="Adresse mail" class="form-control" name= "email"  required>
												</div>
											</div>
										</div>
										<div class="col">
											<div class="form-group">
												<label for="birthDate" class="control-label">Date de Naissance*</label>
												<div>
													<input type="date" id="birthDate" name="birthDate" class="form-control"  required>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4">
									<label class="control-label" for="parcours">Parcours*</label>
									<div>
										<select class="custom-select m" id="parcours" name="parcours">
											<option selected value> -- choisissez un parcours -- </option>
											<option value="Informatique Décisionnelle">Parcours Informatique Décisionnelle</option>
											<option value="Informatique pour la Finance">Parcours Informatique pour la Finance</option>
											<option value="Systemes des Information">Parcours Systèmes d'Information</option>
											<option value="Intelligence Artificielle">Parcours Intelligence Artificielle</option>
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
											<input type="number" id="noteMaths" name="noteMaths" placeholder="10" class="form-control" required min="10" max="20">
										</div>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="noteInfo" class="control-label">Informatique* </label>
										<div>
											<input type="number" id="noteInfo" name="noteInfo" placeholder="10" class="form-control" required min="15" max="20">
										</div>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="noteAng" class="control-label">Anglais* </label>
										<div>
											<input type="number" id="noteAng" name="noteAng" placeholder="10" class="form-control" required min="12" max="20">
										</div>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="moyGen" class="control-label">Moyenne Générale* </label>
										<div>
											<input type="number" id="moyGen" name="moyGen" placeholder="10" class="form-control" required min="14" max="20">
										</div>
									</div>
								</div>
							</div>
							<br>
							<h5>Lettre de motivation*</h5>
							<div class="form-group">
								<textarea class="form-control" id="motivationText" name="motivationText" rows="3" placeholder="Saisissez ici le texte de votre lettre de motivation."></textarea>
							</div>
							<!-- <div class="form-group">
								<label for="motivationFile">...ou chargez le fichier correspondant :</label>
								<input type="file" class="form-control-file" id="motivationFile">
							</div> -->
							<div class="form-group">
								<div class="col-sm-9 col-sm-offset-3">
									<span class="help-block">(*) Champs obligatoires</span>
								</div>
							</div>
							<!-- <button class="btn myBtn btn-lg btn-block mr-5" type="submit">btn myBtn btn-lg btn-block mr-5</button> -->
							<input type="submit" class="btn myBtn btn-lg btn-block mr-5" value="Inscription" onclick="return verif()">
						</form> 
						
						<br>
							<!-- <div class="text-center">
								<button type="button" class="btn myBtn" data-toggle="modal" data-target="#modalError">
									Pop-up Erreur de Saisie
								</button>
							</div> -->
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="modalError" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body text-center">
						<h3>Erreur de Saisie</h3>
						<h4>Merci de remplir correctement les champs requis.</h4>
						<button type="button" class="btn myBtn" data-dismiss="modal">Ok</button>
					</div>
				</div>
			</div>
		</div>
</body>
</html>