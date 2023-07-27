<?php
	require '../include_require_manager_step2.php';
	include '../../model/class/cours.php';
	
	
	$managergestionnaire = new ManagerGestionnaire();
	
	if (isset($_GET["info"]))
	{
		if ($_GET["info"] == "supprimer_cours")
		{
			if (isset($_GET['libelle_cours']) && $_GET['libelle_cours'] != '') 
			{
				$managergestionnaire->delete($_GET['libelle_cours']);
				echo '<meta http-equiv="refresh" content="0;URL=liste_cours.php">';
			}
		}
	/*	else if (($_GET["info"] == "assigner_eleve"))
		{
			if (isset($_GET['libelle_cours']) && $_GET['libelle_cours'] != '') 
			{
				$cours = $managergestionnaire->selectAll();
				
				$_SESSION['cours'] = array();
				
				foreach ($cours as $e)
				{		
					$_SESSION['cours'][] = array('libelle_cours' => $e['libelle_cours'],
													'heure_cours' => $e['heure_cours'],
													'jour_cours' => $e['jour_cours'],
													'libelle_salle' => $e['libelle_salle']);
				}
				
				echo '<meta http-equiv="refresh" content="0;URL=../systeme/liste_eleve.php?option=modif.">';

			}
		}*/
	}
	else
	{
		$cours = $managergestionnaire->selectAll();
		
		$_SESSION['cours'] = array();
		
		foreach ($cours as $e)
		{		
			$_SESSION['cours'][] = array('libelle_cours' => $e['libelle_cours'],
											'heure_cours' => $e['heure_cours'],
											'jour_cours' => $e['jour_cours'],
											'libelle_salle' => $e['libelle_salle']);
		}
		
		/*echo "<pre>";
		 print_r($_SESSION['employes']);
		echo "</pre>";*/
		
		echo '<meta http-equiv="refresh" content="0;URL=../../?rubrique=consulter&operation=liste_cours">';
	}
?>
