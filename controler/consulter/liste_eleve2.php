<?php
	require '../include_require_manager_step2.php';
	include '../../model/class/Eleve.php';
	
	
	$managereleve = new ManagerEleve();

if (isset($_GET["info"])) {
    if ($_GET["info"] == "assigner_eleve") {
        if (isset($_GET['libelle_cours'])) {
            $libelle_cours = $_GET['libelle_cours'];
            $_SESSION['libelle_cours'] = $libelle_cours;
            $eleve = $managereleve->selectAll();
            $_SESSION['eleve'] = array();

            foreach ($eleve as $e) {		
                $_SESSION['eleve'][] = array('pseudo_eleve' => $e['pseudo_eleve'],
                    'nom_eleve' => $e['nom_eleve'],
                    'prenom_eleve' => $e['prenom_eleve'],
                    'date_naissance_eleve' => $e['date_naissance_eleve'],
                    'tel_eleve' => $e['tel_eleve'],
                    'adresse_eleve' => $e['adresse_eleve']);
            }
            
            echo '<meta http-equiv="refresh" content="0;URL=../../?rubrique=consulter&operation=liste_eleve2">';
        }
        } 
		else if ($_GET["info"] == "assigner_cours") {
			if (isset($_GET['pseudo_eleve']) && $_GET['pseudo_eleve'] != '') {
				$libelle_cours = $_SESSION['libelle_cours'];
				$managereleve->assigner($_GET['pseudo_eleve'], $libelle_cours );
				echo '<meta http-equiv="refresh" content="0;URL=../../?rubrique=consulter&operation=liste_eleve2">';
			}
    }
}

?>