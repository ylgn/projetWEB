<?php

function candidatureValidee(){
   // <!-- Pop-up validation candidature -->
    //rediriger vers page
    echo "bien inscrit";
}

function erreurDejaInscrit(){
    //<!-- Pop-up erreur déjà inscrit -->
    // rediriger vers une page
    echo "déjà inscirt";

}

function modifierCandidature($donneesOld, $donneesNew){
    //<!-- Pop-up erreur déjà inscrit -->
    // rediriger vers une page
    echo "modification de l'inscription ";
    

    foreach ($donneesOld as &$value){
        echo $value;
        
    }
    echo "<br>";
    foreach ($donneesNew as &$val){
        echo $val;
        
    }
    echo "<br>";

}

?>