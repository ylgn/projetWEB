<?php


function getEtudiantById($ID){
	include("ConnexionBase.php");
	$querry = "SELECT * FROM `ETUDIANT` WHERE `ID` = ".$ID ;
	$prepared_querry = $connect->prepare($querry);
    $prepared_querry->execute();
	$resultat = $prepared_querry->fetchAll();
	return $resultat;
}

function getAllEtudiantInscrit(){
	include("ConnexionBase.php");
	$querry = "SELECT * FROM `ETUDIANT` WHERE `statut` ='inscrit'";
	$prepared_querry = $connect->prepare($querry);
    $prepared_querry->execute();
	$resultat = $prepared_querry->fetchAll();
	return $resultat;
}

function searchEtudiant($adresse){
	include("ConnexionBase.php");
	$querry = "SELECT * FROM `ETUDIANT` WHERE `adresse` LIKE '".$adresse."'";
	$prepared_querry = $connect->prepare($querry);
    $prepared_querry->execute();
	$resultat = $prepared_querry->fetchAll();
	return $resultat;
}

function createCandidat($nom,$prenom,$adresse,$date_naissance,$note_maths,$note_info,$note_anglais,$note_moyenne,$statut,$parcours,$lettre_motivation){
	include("ConnexionBase.php");
	$querry = "INSERT INTO `ETUDIANT` (`ID`, `nom`, `prenom`, `adresse`, `date_naissance`, `note_maths`, `note_info`, `note_anglais`, `note_moyenne`, `statut`, `parcours`, `lettre_motivation`, `IDSt`, `Nom_societe`, `Site`,`Photo`,`CV`,`Page`) VALUES (NULL, '".$nom."', '".$prenom."', '".$adresse."', '".$date_naissance."', '".$note_maths."', '".$note_info."', '".$note_anglais."', '".$note_moyenne."', '".$statut."', '".$parcours."', '".$lettre_motivation."', NULL, NULL, NULL,NULL,NULL,NULL)";
	$prepared_querry = $connect->prepare($querry);
    $prepared_querry->execute();
}

function createEtudiant($nom,$prenom,$adresse,$date_naissance,$note_maths,$note_info,$note_anglais,$note_moyenne,$statut,$parcours,$lettre_motivation,$idst,$nom_societe,$site,$photo){
	include("ConnexionBase.php");
	$querry = "INSERT INTO `ETUDIANT` (`ID`, `nom`, `prenom`, `adresse`, `date_naissance`, `note_maths`, `note_info`, `note_anglais`, `note_moyenne`, `statut`, `parcours`, `lettre_motivation`, `IDSt`, `Nom_societe`, `Site`,`Photo`,`CV`,`Page`) VALUES (NULL, '".$nom."', '".$prenom."', '".$adresse."', '".$date_naissance."', '".$note_maths."', '".$note_info."', '".$note_anglais."', '".$note_moyenne."', '".$statut."', '".$parcours."', '".$lettre_motivation."', '".$idst."', '".$nom_societe."', '".$site."','".$photo."',NULL,NULL)";
	$prepared_querry = $connect->prepare($querry);
    $prepared_querry->execute();
}


function deleteEtudiant($adresse){
	include("ConnexionBase.php");
	$querry = "DELETE FROM `ETUDIANT` WHERE `adresse` LIKE '".$adresse."'";
	$prepared_querry = $connect->prepare($querry);
    $prepared_querry->execute();
}

function updateEtudiant($nom,$prenom,$adresse,$date_naissance,$note_maths,$note_info,$note_anglais,$note_moyenne,$parcours,$lm){
	include("ConnexionBase.php");
	$querry = "UPDATE `ETUDIANT` SET `nom`='".$nom."',`prenom`='".$prenom."',`date_naissance`='".$date_naissance."',`note_maths`='".$note_maths."',`note_info`= '".$note_info."',`note_anglais`='".$note_anglais."',`note_moyenne`='".$note_moyenne."',`parcours`='".$parcours."',`lettre_motivation` = '".$lm."' WHERE `adresse` LIKE '".$adresse."'";
	$prepared_querry = $connect->prepare($querry);
    $prepared_querry->execute();
}



?>