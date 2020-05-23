<?php
    include "../Model/StageManager.php";
    include "../Model/EtudiantManager.php";
    include "../Vue/etudiantView.php";

    function consultEtudiantsInscrits(){
        $listInscrits = getAllEtudiantInscrit();
        foreach ($listInscrits as &$value) {
            $spe = getSpecialiteById($value[12]);
            if ($value[0]!= 1 && $value[0]!= 2 && $value[0]!= 3) {
                displayEtudiantClassic($value[1],$value[2],$spe[0][1],$value[15]);
            }else{
                displayEtudiantAvecPage($value[1],$value[2],$spe[0][1],$value[15],$value[17]);
            }
        }
    }

?>