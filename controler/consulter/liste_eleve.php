<?php
	require '../include_require_manager_step2.php';
	include '../../model/class/Eleve.php';
	
	
	$managereleve = new ManagerEleve();
	
	if (isset($_GET["info"]))
	{
		if ($_GET["info"] == "supprimer_eleve")
		{
			if (isset($_GET['pseudo_eleve']) && $_GET['pseudo_eleve'] != '') 
			{
				$managereleve->delete($_GET['pseudo_eleve']);
				echo '<meta http-equiv="refresh" content="0;URL=liste_eleve.php">';
			}
		}
		else if (($_GET["info"] == "modifier_eleve"))
		{
			if (isset($_GET['pseudo_eleve']) && $_GET['pseudo_eleve'] != '') 
			{
				$e = $managereleve->get($_GET['pseudo_eleve']);
				
				$_SESSION['item'] = array('pseudo_eleve' => $e['pseudo_eleve'],
	                                       'nom_eleve' => $e['nom_eleve'],
										   'prenom_eleve' => $e['prenom_eleve'],
										   'adresse_eleve' => $e['adresse_eleve'],
										   'tel_eleve' => $e['tel_eleve'],
										   'date_naissance_eleve' => $e['date_naissance_eleve']);
				
				echo '<meta http-equiv="refresh" content="0;URL=../systeme/ajouter_eleve.php?option=modif.">';

			}
		}
	}
	else
	{
		$eleve = $managereleve->selectAll();
		
		$_SESSION['eleve'] = array();
		
		foreach ($eleve as $e)
		{		
			$_SESSION['eleve'][] = array('pseudo_eleve' => $e['pseudo_eleve'],
											'nom_eleve' => $e['nom_eleve'],
											'prenom_eleve' => $e['prenom_eleve'],
                                            'date_naissance_eleve' => $e['date_naissance_eleve'],
											'tel_eleve' => $e['tel_eleve'],
                                            'adresse_eleve' => $e['adresse_eleve']);
		}
		
		/*echo "<pre>";
		 print_r($_SESSION['employes']);
		echo "</pre>";*/
		
		echo '<meta http-equiv="refresh" content="0;URL=../../?rubrique=consulter&operation=liste_eleve">';
	}
?>