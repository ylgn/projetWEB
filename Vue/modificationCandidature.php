<!DOCTYPE html>
<html>
<head>
	<title>Modification de la Candidature</title>
</head>
<body>
	<nav>
		<?php
			include "../Vue/template.php";
			//include "../Controleur/ModificationControler.php";
		?>
	</nav>
	<?php
	 $array1 = $_GET['donneesOld'];
	 $dataOld = json_decode($array1);
	 $array2 = $_GET['donneesNew'];
	 $dataNew = json_decode($array2);

	
	?>

	<div id="index" class="" style="background-image:url('../Vue/img/postulerbg.jpg'); background-size: auto 100%; background-repeat: no-repeat; background-attachment: fixed; background-size: cover; background-position: center center;">

		<div class="mask rgba-gradient d-flex justify-content-center align-items-center">
			<div class="container">
				<div class="row myRow mb-5">
					<div class=" col mt-xl-5 mb-5 ml-5 mr-5 text-center">
						<h1 class="h1-responsive font-weight-bold mt-3 mr-5">Candidature déjà prise en compte</h1>

						<hr class="myHr mr-5">
						
						<h3>Souhaitez-vous la modifier avec cette nouvelle saisie ?</h3>
						
						<br>
						<form action="../Controleur/ModificationControler.php" method="POST">
						<table class="table table-borderless" style="border-radius: .25em">
							<thead><tr><th></th><th>Anciennes Données</th><th>Nouvelles Données</th></tr></thead>
							<tr><th>Nom</th><td><?php echo $dataOld[0]; ?></td><td><?php echo $dataNew[0]; ?></td></tr>
							<tr><th>Prénom</th><td><?php echo $dataOld[1]; ?><td><?php echo $dataNew[1]; ?></td></tr>
							<tr><th>Parcours</th><td><?php echo $dataOld[9]; ?><td><?php echo $dataNew[4]; ?></td></tr>
							<tr><th>Mail</th><td><?php echo $dataOld[2]; ?><td><?php echo $dataNew[2]; ?></td></tr>
							<tr><th>Date de Naissance</th><td><?php echo $dataOld[3]; ?></td><td><?php echo $dataNew[3]; ?></td></tr>
							<tr><th>Note en Maths</th><td><?php echo $dataOld[4]; ?></td><td><?php echo $dataNew[5]; ?></td></tr>
							<tr><th>Note en Informatique</th><td><?php echo $dataOld[5]; ?></td><td><?php echo $dataNew[6]; ?></td></tr>
							<tr><th>Note en Anglais</th><td><?php echo $dataOld[6]; ?></td><td><?php echo $dataNew[7]; ?></td></tr>
							<tr><th>Moyenne Générale</th><td><?php echo $dataOld[7]; ?></td><td><?php echo $dataNew[8]; ?></td></tr>
						</table>

						<br>
						<input id="emailNew" name="emailNew" type="hidden" value="">
						<input id="emailOld" name="emailOld" type="hidden" value="">
						<input id="nomNew" name="nomNew" type="hidden" value="">
						<input id="prenomNew" name="prenomNew" type="hidden" value="">
						<input id="parcoursNew" name="parcoursNew" type="hidden" value="">
						<input id="dtnNew" name="dtnNew" type="hidden" value="">
						<input id="mathNew" name="mathNew" type="hidden" value="">
						<input id="infoNew" name="infoNew" type="hidden" value="">
						<input id="angNew" name="angNew" type="hidden" value="">
						<input id="moyG" name="moyG" type="hidden" value="">
						
						<button type="button" class="btn btn-lg myBtn" data-toggle="modal" data-target="#modalModificationCancel">Annuler</button>
						<input type="submit" name="formOK"class="btn btn-lg myBtn" data-toggle="modal" data-target="#modalModificationSave" value="Sauvegarder les modifications">
						<input type="submit" name="formOK" class="btn btn-lg myBtn" data-toggle="modal" data-target="#modalDelete" value="Supprimer la candidature">	

						</form>
					</div>
				</div>
				
				
				
			</div>
		</div>
	
		<!-- <div class="modal fade" id="modalModificationCancel" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body text-center">
						<h3>Annulation</h3>
						<h4>Votre candidature ne sera ni modifiée ni supprimée</h4>
						
						<button type="button" class="btn myBtn" data-dismiss="modal" onclick="document.location.href='index.php'">Retour à la page d'accueil</button>
					</div>
				</div>
			</div>
		</div> -->

		<!-- <div class="modal fade" id="modalModificationSave" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body text-center">
						<h3>Sauvegarde</h3>
						<h4>Votre candidature a bien été mise-à-jour</h4>
				
						<button type="button" class="btn myBtn" data-dismiss="modal" onclick="document.location.href='index.php'">Retour à la page d'accueil</button>
					</div>
				</div>
			</div>
		</div> -->

		<!-- <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-hidden="true">
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
		</div> -->
		

		<script type="text/javascript">
			document.getElementById("emailOld").value = "<?php echo $dataOld[2] ?>";
			document.getElementById("emailNew").value = "<?php echo $dataNew[2] ?>";
			document.getElementById("nomNew").value = "<?php echo $dataNew[0] ?>";
			document.getElementById("prenomNew").value = "<?php echo $dataNew[1] ?>";
			document.getElementById("parcoursNew").value = "<?php echo $dataNew[4] ?>";
			document.getElementById("dtnNew").value = "<?php echo $dataNew[3] ?>";
			document.getElementById("mathNew").value = "<?php echo $dataNew[5] ?>";
			document.getElementById("infoNew").value = "<?php echo $dataNew[6] ?>";
			document.getElementById("angNew").value = "<?php echo $dataNew[7] ?>";
			document.getElementById("moyG").value = "<?php echo $dataNew[8] ?>";
		</script>

	</body>
</html>