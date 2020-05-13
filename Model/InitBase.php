
    
    <?php

    $db_type = 'mysql';
    $host = 'localhost';
    $db_name ='site_master';
    //$dsn = $db_type.':host='.$host.';dbname='.$db_name;
    $username = 'master';
    $password = 'master';
    //$connect= new PDO($dsn, $username, $password);

  
	

	function init($db_type,$db_name,$host,$username,$password){
		try {
            $conn = new PDO($db_type.':host='.$host, $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "CREATE DATABASE IF NOT EXISTS ".$db_name;
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "Database created successfully<br>";
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }
          
		try{
			$conn = new PDO($db_type.':host='.$host.';dbname='.$db_name, $username, $password);
			$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			echo "connexion bdd<br>";

            $codesql="CREATE TABLE IF NOT EXISTS `site_master`.`ETUDIANT` ( `ID` INT NOT NULL AUTO_INCREMENT , `nom` VARCHAR(21) NOT NULL , `prenom` VARCHAR(21) NOT NULL , `adresse` VARCHAR(150) NOT NULL , `date_naissance` DATE NOT NULL , `note_maths` DOUBLE NOT NULL , `note_info` DOUBLE NOT NULL , `note_anglais` DOUBLE NOT NULL , `note_moyenne` DOUBLE NOT NULL , `statut` VARCHAR(10) NOT NULL , `photo` VARCHAR(200) NOT NULL , `parcours` VARCHAR(200) NOT NULL , `lettre_motivation` LONGTEXT NOT NULL , `CV` TEXT NOT NULL , `IDSt` INT NOT NULL , `Nom_societe` VARCHAR(200) NOT NULL , `Site` VARCHAR(200) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB; ";
			$conn -> exec($codesql);
            
            echo "table étudiant créée";

			$codesql="CREATE TABLE IF NOT EXISTS `site_master`.`STAGE` ( `IDSt` INT NOT NULL AUTO_INCREMENT , `domaine` VARCHAR(50) NOT NULL , PRIMARY KEY (`IDSt`)) ENGINE = InnoDB;";
			$conn -> exec($codesql);
            echo "table stage créée";
           
          
           
            try {
                $codesql="ALTER TABLE `ETUDIANT` ADD CONSTRAINT `link_stage` FOREIGN KEY (`IDSt`) REFERENCES `STAGE`(`IDSt`) ON DELETE RESTRICT ON UPDATE RESTRICT; ";
			    $conn -> exec($codesql);
            } catch (\Throwable $th) {
                //throw $th;
            }

            //AJOUT FOREIGN KEY
            
            
            
            //VIDER LA TABLE ETUDIANT

            $codesql="DELETE FROM ETUDIANT";
            $conn -> exec($codesql);

            $codesql="DELETE FROM STAGE";
            $conn -> exec($codesql);

            $codesql = "ALTER TABLE ETUDIANT AUTO_INCREMENT = 1";
            $conn -> exec($codesql);
            $codesql = "ALTER TABLE STAGE AUTO_INCREMENT = 1";
            $conn -> exec($codesql);


            $codesql="INSERT INTO `STAGE` (`IDSt`, `domaine`) VALUES (NULL, 'Accompagnateur du changement'), (NULL, 'Administrateur de BDD'), (NULL, 'Administrateur réseau'), (NULL, 'Administrateur sécurité'), (NULL, 'Analyste'), (NULL, 'Auditeur'), (NULL, 'Architecte de données'), (NULL, 'Architecte informatique'), (NULL, 'Architecte logiciel'), (NULL, 'Assembleur d\'ordinateur'), (NULL, 'Business Intelligence'), (NULL, 'Bio-informaticien'), (NULL, 'Data Officer'), (NULL, 'Chargé de Reporting'), (NULL, 'Développeur'), (NULL, 'Développeur full stack'), (NULL, 'Développeur graphique'), (NULL, 'Développeur logiciel'), (NULL, 'Développeur web'), (NULL, 'Infogérance'), (NULL, 'Ingénieur commercial'), (NULL, 'Ingénieur logiciel'), (NULL, 'Ingénieur système'), (NULL, 'Intégrateur'), (NULL, 'Maîtrise d\'œuvre'), (NULL, 'Maîtrise d\'ouvrage'), (NULL, 'Webmaster');";
            $conn -> exec($codesql);
            
            $codesql="INSERT INTO `ETUDIANT` (`ID`, `nom`, `prenom`, `adresse`, `date_naissance`, `note_maths`, `note_info`, `note_anglais`, `note_moyenne`, `statut`, `photo`, `parcours`, `lettre_motivation`, `CV`, `IDSt`, `Nom_societe`, `Site`) VALUES (NULL, 'PIGANEAU', 'Thaïs', '16 rue Royer-Collard, 75005 Paris', '1998-04-01', '15', '15', '15', '15', 'inscrit', '', 'L1 et L2 MIE à Dauphine, L3 et M1 MIAGE en Apprentissage à Dauphine', 'oui', '', '11', 'Cerqual - Groupe QUALITEL', 'www.qualitel.org') ;";
            $conn -> exec($codesql);
			

		}catch(PDOException $e){}
        echo $e;
	}


	init($db_type,$db_name,$host,$username,$password);


	?>