<?php 
	require '../include_require_manager_step2.php';

	include '../../model/class/Cours.php';

	if (isset($_POST["info"])) 
	{
		if ($_POST["info"] == "ajouter_cours") 
		{
			$managergestionnaire = new ManagerGestionnaire();
			

			$cours = new Cours(0, 
								$_POST["libelle"], 
								$_POST["agemini"], 
								$_POST["agemaxi"], 
								$_POST["id_instrument"],
								$_POST["id_type_cours"]);

			$managergestionnaire->AjouterCours($cours);	
				
		}
	}

	// "Appel" à la View
	echo '<meta http-equiv="refresh" content="0;URL=../../?rubrique=gestionnaire&operation=ajouter_cours">';	
	
?>