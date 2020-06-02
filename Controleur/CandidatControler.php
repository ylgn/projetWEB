<?php
    
    include "../Model/EtudiantManager.php";
    include "../Vue/inscriptionView.php";

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
    
    
    checkStatut($firstName,$lastName,$email,$birthDate,$parcours, $noteMaths,$noteInfo, $noteAng, $moyGen,$motivationText);

    function checkStatut($firstName,$lastName,$email,$birthDate,$parcours, $noteMaths,$noteInfo, $noteAng, $moyGen,$motivationText){
        
        $listeEtudiantsBase = searchEtudiant($email);
       
       if (count($listeEtudiantsBase) == 0) {
            addCandidat($firstName,$lastName,$email,$birthDate,$parcours, $noteMaths,$noteInfo, $noteAng, $moyGen,$motivationText);
            candidatureValidee();
           
       }else {
           $statut =  $listeEtudiantsBase[0][9];
           if ($statut == "inscrit") {
                erreurDejaInscrit();
           }else{
            
                $donneesOld = array();
                for ($i=1; $i < 17; $i++) { 
                   
                    array_push($donneesOld,$listeEtudiantsBase[0][$i]);
                }
                $donneeNew = array($firstName,$lastName,$email,$birthDate,$parcours, $noteMaths,$noteInfo, $noteAng, $moyGen,$motivationText);
                $dataOld = json_encode($donneesOld);
                $dataNew = json_encode($donneeNew);
                displayCandidature($dataOld, $dataNew);
           }
       }
    }

    function addCandidat($firstName,$lastName,$email,$birthDate,$parcours, $noteMaths,$noteInfo, $noteAng, $moyGen,$motivationText){
        createCandidat($firstName,$lastName,$email,$birthDate,$noteMaths,$noteInfo,$noteAng,$moyGen,'Candidat',$parcours,$motivationText);
    }
 

?>