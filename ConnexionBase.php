<!DOCTYPE html>

<html>
<head>
	<title>Saisie des notices</title>
	<meta charset="UTF-8">
</head>
<body style="text-align: center;">
	
	<?php
	
	$servername = 'localhost';
	$username = 'root';
	$password = 'root';

	function init(){

		try{
			$connexion = new PDO("mysql:host=$servername;", $username, $password);
			$connexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$connexion -> exec("CREATE DATABASE site_master");
			echo "Base de données créée.";
		}catch(PDOException $e){
		}

		try{

			$connexion = new PDO("mysql:host=$servername;dbname=site_master", $username, $password);
			$connexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			$codesql="CREATE TABLE Etudiant(
				 ID INT UNSIGNED AUTOINCREMENT PRIMARY KEY,
				 Nom VARCHAR(50),
				 Prénom VARCHAR(50),
				 Adresse VARCHAR(150), 
				 Date_de_naissance DATE,
				 Parcours VARCHAR(200),
				 Note_Maths INT(2),
				 Note_Info INT(2),
				 Note_Anglais INT(2),
				 Note_Moyennees INT(2),
				 IDSt INT,
				 Nom_Societe VARCHAR(50),
				 Site VARCHAR(50)
			)";
			$connexion -> exec($codesql);

			$codesql="CREATE TABLE Stage(
				 IDSt INT UNSIGNED AUTOINCREMENT PRIMARY KEY,
				 Domaine VARCHAR(50)
			)";
			$connexion -> exec($codesql);

			$codesql="ALTER TABLE Etudiant ADD
				CONSTRAINT fk_to_IDSt
    			FOREIGN KEY (IDSt)
  				REFERENCES target_table(Stage)";
			$connexion -> exec($codesql);

		}catch(PDOException $e){}


	}
/*	function connect(){
		$connexion = new PDO("mysql:host=$servername;dbname=site_master", $username, $password);
		$connexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}*/

	?>
</body>
</html>