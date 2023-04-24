<?php
	require '../include_require_manager_step2.php';
	include '../../model/class/Personnel.php';
	
	
	$managerpersonnel = new ManagerPersonnel();
	
	if (isset($_GET["info"]))
	{
		if ($_GET["info"] == "supprimer_personnel")
		{
			if (isset($_GET['pseudo_personnel']) && $_GET['pseudo_personnel'] != '') 
			{
				$managerpersonnel->delete($_GET['pseudo_personnel']);
				echo '<meta http-equiv="refresh" content="0;URL=profil_personnel.php">';
			}
		}
		else if (($_GET["info"] == "modifier_personnel"))
		{
			if (isset($_GET['pseudo_personnel']) && $_GET['pseudo_personnel'] != '') 
			{
				$e = $managerpersonnel->get($_GET['pseudo_personnel']);
				
				$_SESSION['item'] = array('pseudo_personnel' => $e['pseudo_personnel'],
	                                       'nom_personnel' => $e['nom_personnel'],
										   'prenom_personnel' => $e['prenom_personnel'],
										   'adresse_personnel' => $e['adresse_personnel'],
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