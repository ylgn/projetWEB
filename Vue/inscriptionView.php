<?php

function candidatureValidee(){
    header('Location: ../Vue/validation.php');
    exit();
}

function erreurDejaInscrit(){
    header('Location: ../Vue/erreurDejaInscrit.php');
    exit();
}

function modifierCandidature($donneesOld, $donneesNew){
    header('Location: ../Vue/modificationCandidature.php');
    exit();
}

function displayCandidature($donneesOld, $donneesNew){
    header('Location: ../Vue/modificationCandidature.php?donneesOld='.$donneesOld.'&donneesNew='.$donneesNew);
    exit();
}

?>