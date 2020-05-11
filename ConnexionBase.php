<!DOCTYPE html>

<html>
<head>
	<title>Connexion à la bdd</title>
	<meta charset="UTF-8">
</head>
<body style="text-align: center;">
	
	<?php
	
	$serveur = "localhost";
	$login = "yannis";
	$pass = "yannis";

	function init(){
		echo "entre dans la fonction<br>";
		try{
			echo "entre dans le try 1<br>";
			$conn = new PDO("mysql:host=$serveur", $login, $pass);
			$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			echo "connexion serveur<br>";
			$conn -> exec("CREATE DATABASE site_master");
			echo "Base de données créée.";
		}catch(PDOException $e){
			echo "entre dans le catch<br>";
		}
		
		try{
			echo "entre dans le try 2<br>";
			$conn = new PDO("mysql:host=$serveur;dbname=site_master", $login, $pass);
			$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			echo "connexion bdd<br>";

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
				Moyenne INT(2),
				IDSt INT,
				Nom_Societe VARCHAR(50),
				Site VARCHAR(50)
			)";
			$conn -> exec($codesql);
			echo "table étudiant créée";

			$codesql="CREATE TABLE Stage(
				 IDSt INT UNSIGNED AUTOINCREMENT PRIMARY KEY,
				 Domaine VARCHAR(50)
			)";
			$conn -> exec($codesql);
			echo "table stage créée";


			$codesql="ALTER TABLE Etudiant ADD
				CONSTRAINT fk_to_IDSt
    			FOREIGN KEY (IDSt)
  				REFERENCES target_table(Stage)";
			$conn -> exec($codesql);
			echo "foreign key créée";

			$insert = "INSERT INTO Stage(Domaine)
				values ('Business Intelligence')";
			$conn -> exec($insert);
			echo "insertion stage<br>";
			$insert = "INSERT INTO Etudiant(Nom,Prénom,Adresse,Date_de_naissance,Parcours,Note_Maths,Note_Info,Note_Anglais,Moyenne,IDSt,Nom_Societe,Site)
				values ('PIGANEAU','Thaïs','16 rue Royer-Collard, 75005 Paris',01/04/1998,'L1 et L2 MIE à Dauphine, L3 et M1 MIAGE en Apprentissage à Dauphine',12,12,17,13,1,'Cerqual - Groupe QUALITEL','wwww.qualitel.org')
			";
			$conn -> exec($insert);
			echo "insertion étudiant<br>";

		}catch(PDOException $e){}

	}

	function connect(){
		$connexion = new PDO("mysql:host=$servername;dbname=site_master", $username, $password);
		$connexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}

	init();


	?>
</body>
</html>