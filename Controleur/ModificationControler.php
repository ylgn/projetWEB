<?php
    
    include "../Model/EtudiantManager.php";
    $emailOld = $_POST["emailOld"];
    $emailNew = $_POST["emailNew"];
    $val = $_POST["formOK"];
    $nom =  $_POST["nomNew"];
    $prenom =  $_POST["prenomNew"];
    $date_naissance =  $_POST["dtnNew"];
    $note_maths =  $_POST["mathNew"];
    $note_info =  $_POST["infoNew"];
    $note_anglais =  $_POST["angNew"];
    $note_moyenne =  $_POST["moyG"];
    $parcours =  $_POST["parcoursNew"];
   
    
    if ($val == "Supprimer la candidature") {
       deleteCandidature($emailOld);
       
    }else{
        updateCandidature($nom,$prenom,$emailNew,$date_naissance,$note_maths,$note_info,$note_anglais,$note_moyenne,$parcours);
    }
    
    function deleteCandidature($add){
        deleteEtudiant($add);
        header('Location: ../Vue/index.php');
    }

    function updateCandidature($nom,$prenom,$emailNew,$date_naissance,$note_maths,$note_info,$note_anglais,$note_moyenne,$parcours){
        updateEtudiant($nom,$prenom,$emailNew,$date_naissance,$note_maths,$note_info,$note_anglais,$note_moyenne,$parcours);
        header('Location: ../Vue/index.php');
    }

?>