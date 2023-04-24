<?php
		require '../include_require_manager_step2.php';
		include '../../model/manager/ManagerEmploye.php';

	    if (isset($_POST["info"])) 
		{
			if ($_POST["info"] == "ajouter_eleve") 
			{
                //$chef = isset($_POST['chef']) ? 'true' : 'false';
				/*if (isset($_POST['chef']))
				  $chef = 'true';
				else
				  $chef = 'false';*/

				$employe = new Eleve($_POST["pseudo_eleve"],
				$_POST["nom_eleve"], 
				$_POST["prenom_eleve"], 
				$_POST["date_naissance_eleve"],
				$_POST["tel_eleve"], 
			    $_POST["adresse_eleve"]);
				
				$manageremploye = new ManagerEleve();
				$manageremploye->insertinto($eleve);
			}
		}
	    echo '<meta http-equiv="refresh" content="0;URL=../../?rubrique=systeme&operation=ajouter_demenageur">';

?>