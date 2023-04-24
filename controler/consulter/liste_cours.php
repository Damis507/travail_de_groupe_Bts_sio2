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
		else if (($_GET["info"] == "modifier_cours"))
		{
			if (isset($_GET['libelle_cours']) && $_GET['id_cours'] != '') 
			{
				$e = $managergestionnaire->get($_GET['libelle_cours']);
				
				$_SESSION['item'] = array('id_cours' => $e['libelle_cours'],
	                                       'heure_cours' => $e['nom_personnel'],
										   'jour_cours' => $e['prenom_personnel'],
										   'salle_cours' => $e['adresse_personnel'],
										   'mail_personnel' => $e['mail_personnel']);
				
				echo '<meta http-equiv="refresh" content="0;URL=../systeme/ajouter_personnel.php?option=modif.">';
			}
		}
	}
	else
	{
		$personnel = $managerpersonnel->selectAll();
		
		$_SESSION['personnel'] = array();
		
		foreach ($personnel as $e)
		{		
			$_SESSION['personnel'][] = array('pseudo_personnel' => $e['pseudo_personnel'],
                                                'nom_personnel' => $e['nom_personnel'],
                                                'prenom_personnel' => $e['prenom_personnel'],
                                                'adresse_personnel' => $e['adresse_personnel'],
                                                'mail_personnel' => $e['mail_personnel']);
		}
		
		/*echo "<pre>";
		 print_r($_SESSION['employes']);
		echo "</pre>";*/
		
		echo '<meta http-equiv="refresh" content="0;URL=../../?rubrique=consulter&operation=profil_personnel">';
	}
?>