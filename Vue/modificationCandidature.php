<!DOCTYPE html>
<html>
<head>
	<title>Modification de la Candidature</title>
</head>
<body>
	<nav>
		<?php
			include "template.php";
		?>
	</nav>

	<div id="index" class="" style="background-image:url('img/postulerbg.jpg'); background-size: auto 100%; background-repeat: no-repeat; background-attachment: fixed; background-size: cover; background-position: center center;">

		<div class="mask rgba-gradient d-flex justify-content-center align-items-center">
			<div class="container">
				<div class="row myRow mb-5">
					<div class=" col mt-xl-5 mb-5 ml-5 mr-5 text-center">
						<h1 class="h1-responsive font-weight-bold mt-3 mr-5">Candidature déjà prise en compte</h1>

						<hr class="myHr mr-5">
						
						<h3>Souhaitez-vous la modifier avec cette nouvelle saisie ?</h3>
						
						<br>
						
						<table class="table table-borderless" style="border-radius: .25em">
							<thead><tr><th></th><th>Anciennes Données</th><th>Nouvelles Données</th></tr></thead>
							
							<tr><th>Nom</th><td>OldName</td><td>NewName</td></tr>
							<tr><th>Prénom</th><td>OldName</td><td>NewName</td></tr>
							<tr><th>Parcours</th><td>OldParcours</td><td>NewParcours</td></tr>
							<tr><th>Mail</th><td>OldMail</td><td>NewMail</td></tr>
							<tr><th>Date de Naissance</th><td>OldNBirthdate</td><td>NewBirthdate</td></tr>
							<tr><th>Note en Maths</th><td>10</td><td>11</td></tr>
							<tr><th>Note en Informatique</th><td>15</td><td>16</td></tr>
							<tr><th>Note en Anglais</th><td>17</td><td>16</td></tr>
							<tr><th>Moyenne Générale</th><td>13</td><td>14</td></tr>
						</table>

						<br>
						<button type="button" class="btn btn-lg myBtn" data-dismiss="modal" data-toggle="modal" data-target="#modalModificationCancel">Annuler</button>
						<input type="button" class="btn btn-lg myBtn" data-dismiss="modal" data-toggle="modal" data-target="#modalModificationSave" value="Sauvegarder les modifications">
						<input type="button" class="btn btn-lg myBtn" data-dismiss="modal" data-toggle="modal" data-target="#modalDelete" value="Supprimer la candidature">	
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
						<button type="button" class="btn myBtn" data-dismiss="modal" onclick="document.location.href='index.php'">Retour à la page d'accueil</button>
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
						<button type="button" class="btn myBtn" data-dismiss="modal" onclick="document.location.href='index.php'">Retour à la page d'accueil</button>
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
						<button type="button" class="btn myBtn" data-dismiss="modal" onclick="document.location.href='index.php'">Retour à la page d'accueil</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>