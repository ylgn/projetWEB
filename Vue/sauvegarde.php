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
	<?php
		$firstName = $_POST["firstName"];
		$lastName = $_POST["lastName"];
		$email = $_POST["email"];
		$birthDate = $_POST["birthDate"];
		$parcours = $_POST["parcours"];
		$noteMaths = $_POST["noteMaths"];
		$noteInfo = $_POST["noteInfo"];
		$noteAng = $_POST["noteAng"];
		$moyGen = $_POST["moyGen"];
		$motivationText = $_POST["motivationText"];
		//$motivationFile = $_POST["motivationFile"]; 
	?>
	

	<div id="index" class="" style="background-image:url('img/postulerbg.jpg');background-size: auto 100%; background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: center center;">

		<div class="mask rgba-gradient d-flex justify-content-center align-items-center">
			<div class="container">
				<div class="row myRow mb-5">
					<div class=" col mt-xl-5 mb-5 ml-5 mr-5">
						<h1 class="h1-responsive font-weight-bold mt-3 mr-5">Inscription</h1>

						<hr class="myHr">

						<form class="form-horizontal" role="form" method="POST" action="../Controleur/CandidatControler.php">
							<h5>Identité</h5>
							<div class="row">
								<div class="col-8">
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label for="firstName" class="control-label">Prénom</label>
												<div>
													<input type="text" id="firstName" name="firstName" class="form-control" readonly>
												</div>
											</div>
										</div>
										<div class="col">
											<div class="form-group">
												<label for="lastName" class="control-label">Nom de famille</label>
												<div>
													<input type="text" id="lastName" name="lastName" class="form-control" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label for="email" class="control-label">Adresse mail</label>
												<div>
													<input type="email" id="email" name="email" class="form-control" readonly>
												</div>
											</div>
										</div>
										<div class="col">
											<div class="form-group">
												<label for="birthDate" class="control-label">Date de Naissance</label>
												<div>
													<input type="text" id="birthDate" name="birthDate" class="form-control"  readonly>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4">
									<label class="control-label" for="parcours">Parcours</label>
									<div>
										<select class="custom-select m" id="parcours" name="parcours" disabled style="opacity: 1;">
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
										<label for="noteMaths" class="control-label">Mathématiques</label>
										<div>
											<input type="number" id="noteMaths" name="noteMaths" class="form-control" readonly>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="noteInfo" class="control-label">Informatique</label>
										<div>
											<input type="number" id="noteInfo" name="noteInfo"  class="form-control" readonly>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="noteAng" class="control-label">Anglais</label>
										<div>
											<input type="number" id="noteAng" name="noteAng"  class="form-control" readonly>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="moyGen" class="control-label">Moyenne Générale</label>
										<div>
											<input type="number" id="moyGen" name="moyGen"  class="form-control" readonly>
										</div>
									</div>
								</div>
							</div>
							<br>
							<h5>Lettre de motivation</h5>


							<!-- ATTENTION Mettre un if selon si l'utilisateur a chargé un fichier ou a tapé sa lettre de motivation -->
							

							<div class="form-group">
								<textarea class="form-control" id="motivationText" name="motivationText" rows="3"  readonly></textarea>
							</div>
							<div class="form-group">
								<a href="FichierChargé" download class="myLink"> FichierChargé.pdf</a>
								
							</div>
							
							<div class="text-center">
								<!-- <button class="btn btn-lg myBtn" type="submit">Retour</button>
								<button class="btn btn-lg myBtn" type="submit">Sauvegarde</button> -->
								<input type="button" class="btn myBtn btn-lg" value="Retour" onclick="document.location.href='postuler.php'; ">
								<input type="submit" class="btn myBtn btn-lg" value="Sauvegarde">
							</div>


							
						</form> 
						<script type="text/javascript">
							document.getElementById("firstName").value = "<?php echo $firstName ?>";
							document.getElementById("lastName").value = "<?php echo $lastName ?>"; 
							document.getElementById("email").value = "<?php echo $email ?>"; 
							document.getElementById("birthDate").value = "<?php echo $birthDate ?>"; 
							document.getElementById("parcours").value  = "<?php echo $parcours ?>"; 
							document.getElementById("noteMaths").value = "<?php echo $noteMaths ?>"; 
							document.getElementById("noteInfo").value = "<?php echo $noteInfo ?>";
							document.getElementById("noteAng").value = "<?php echo $noteAng ?>"; 
							document.getElementById("moyGen").value = "<?php echo $moyGen ?>"; 
							document.getElementById("motivationText").value = "<?php echo $motivationText ?>"; 
						</script>
						
					</div>
				</div>
			</div>
		</div>

		

		

		<!-- Pop-up erreur déjà inscrit -->
		<div class="modal fade" id="modalErreur" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body text-center">
						<h3>Erreur</h3>
						<h4>Votre inscription a déjà été validée, vous ne pouvez plus postuler</h4>
						<button type="button" class="btn myBtn" data-dismiss="modal">Ok</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Pop-up modification candidature -->
		<div class="modal fade" id="modalModification" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-body text-center center">
						<h3>Candidature déjà prise en compte</h3>
						<h4>Souhaitez-vous la modifier avec cette nouvelle saisie ?</h4>
						<table class="table">
							<tr><td></td><td>Anciennes données</td><td>Nouvelles données</td></tr>
							<tr><td>Nom</td><td>OldName</td><td>NewName</td></tr>
							<tr><td>Prénom</td><td>OldName</td><td>NewName</td></tr>
							<tr><td>Parcours</td><td>OldParcours</td><td>NewParcours</td></tr>
							<tr><td>Mail</td><td>OldMail</td><td>NewMail</td></tr>
							<tr><td>Date de Naissance</td><td>OldNBirthdate</td><td>NewBirthdate</td></tr>
							<tr><td>Note en Maths</td><td>10</td><td>11</td></tr>
							<tr><td>Note en Informatique</td><td>15</td><td>16</td></tr>
							<tr><td>Note en Anglais</td><td>17</td><td>16</td></tr>
							<tr><td>Moyenne Générale</td><td>13</td><td>14</td></tr>
						</table>
						<!-- <button type="button" class="btn myBtn" data-dismiss="modal">Annuler</button> -->
						<button type="button" class="btn myBtn" data-dismiss="modal" data-toggle="modal" data-target="#modalModificationCancel">Annuler</button>
						<input type="button" class="btn myBtn" data-dismiss="modal" data-toggle="modal" data-target="#modalModificationSave" value="Sauvegarder les modifications">
						<input type="button" class="btn myBtn" data-dismiss="modal" data-toggle="modal" data-target="#modalDelete" value="Supprimer la candidature">
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="modalModificationCancel" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body text-center">
						<h3>Annulation</h3>
						<h4>Votre candidature ne sera ni modifiée ni supprimée</h4>
						<button type="button" class="btn myBtn" data-dismiss="modal">Ok</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="modalModificationSave" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body text-center">
						<h3>Sauvegarde</h3>
						<h4>Votre candidature a bien été mise-à-jour</h4>
						<button type="button" class="btn myBtn" data-dismiss="modal">Ok</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body text-center">
						<h3>Suppression</h3>
						<h4>Votre candidature a bien été supprimée</h4>
						<h6>Cette suppression est définitive</h6>
						<button type="button" class="btn myBtn" data-dismiss="modal">Ok</button>
					</div>
				</div>
			</div>
		</div>

	</body>


</html>