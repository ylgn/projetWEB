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
										<input type="text" id="parcours" name="parcours" class="form-control"  readonly>	
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

							<div class="form-group">
								<textarea class="form-control" id="motivationText" name="motivationText" rows="3"  readonly></textarea>
							</div>
							<!-- <div class="form-group">
								<a href="FichierChargé" download class="myLink"> FichierChargé.pdf</a>
								
							</div> -->

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
							
							<div class="text-center">
								<input type="button" class="btn myBtn btn-lg" value="Retour" onclick="document.location.href='postuler.php'; ">
								<input type="submit" class="btn myBtn btn-lg" value="Sauvegarde">
							</div>
							
						</form> 			
					</div>
				</div>
			</div>
		</div>
	</body>
</html>