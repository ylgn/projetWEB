<?php

function createEtudiant($nom,$prenom,$adresse,$date_naissance,$parcours,$note_maths,$note_info,$note_anglais,$note_moyenne,$lettre_motivation){
	include("ConnexionBase.php");
	$insert = "INSERT INTO `ETUDIANT` (`ID`, `nom`, `prenom`, `adresse`, `date_naissance`, `note_maths`, `note_info`, `note_anglais`, `note_moyenne`, `statut`, `parcours`, `lettre_motivation`, `IDSt`, `Nom_societe`, `Site`) VALUES (NULL, '$nom', '$prenom', '$adresse', '$date_naissance', '$note_maths', '$note_info', '$note_anglais', '$note_moyenne', 'Candidat', '$parcours', \'oui\', NULL, NULL, NULL)";
	$connect -> exec($insert);
}

function searchEtudiant($adresse){
	include("ConnexionBase.php");
	$search = "SELECT `ID` FROM `ETUDIANT` WHERE `adresse` = '$adresse'";
	return $connect -> exec($search);
}

function getAllEtudiantInscrit(){
	include("ConnexionBase.php");
	$inscrit = "SELECT * FROM `ETUDIANT` WHERE `statut` ='inscrit'";
	$connect -> exec($inscrit);
}

function getEtudiantById($ID){
	include("ConnexionBase.php");
	$by_id = "SELECT * FROM `ETUDIANT` WHERE `ID` = = '$ID'";
	$connect -> exec($inscrit);
}

// function addCV($ID,$CV){
// 	include("ConnexionBase.php");
// 	$update = "UPDATE `ETUDIANT` SET `CV` = '$CV' WHERE `ETUDIANT`.`ID` = $ID;";
// 	$connect -> exec($insert);
// }

createEtudiant('PEYNET','Emilie','emilie.peynet@dauphine.eu','1998-11-09','L1 et L2 MIE à Dauphine, L3 et M1 MIAGE en Apprentissage à Dauphine','15','15','15','15','oui');
echo searchEtudiant('yannis.le-guen@hotmail.fr');
?>