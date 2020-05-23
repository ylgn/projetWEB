<?php

function getSpecialiteById($ID){
	include("ConnexionBase.php");
	$querry = "SELECT * FROM `STAGE` WHERE `IDSt` = ".$ID ;
	$prepared_querry = $connect->prepare($querry);
    $prepared_querry->execute();
	$resultat = $prepared_querry->fetchAll();
	return $resultat;
}

?>