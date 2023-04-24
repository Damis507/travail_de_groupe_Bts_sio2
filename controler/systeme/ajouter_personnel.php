

<?php
	require '../include_require_manager_step2.php';

	include '../../model/class/Personnel.php';

	if (isset($_POST["info"])) 
	{
		$managerpersonnel = new ManagerPersonnel();
		
		if ($_POST["info"] == "ajouter_personnel") 
		{
			if (isset($_POST["info_sup"])) 
			{
				if ($_POST["info_sup"] != "modif.")
				{
				
					$personnel = new Personnel($_POST["pseudo_personnel"],
								$_POST["nom_personnel"], 
								$_POST["prenom_personnel"], 
								$_POST["adresse_personnel"], 
								$_POST["mail_personnel"],
								$_POST["mot_de_passe"]);
				
					$managerpersonnel->insertinto($personnel);
				}
				else if ($_POST["info_sup"] == "modif.")
				{
					
					$personnel = new Personnel($_POST["pseudo_personnel_hidden"],
								$_POST["nom_personnel"], 
								$_POST["prenom_personnel"], 
								$_POST["adresse_personnel"], 
								$_POST["mail_personnel"],
								"");
					
					/*echo "<pre>";
					 print_r($employe);
					echo "</pre>";*/
					$managerpersonnel->update($personnel);
					
					echo '<meta http-equiv="refresh" content="0;URL=../../controler/consulter/profil_personnel.php">';
					exit;
				}
			}
		}
	}

	$chaine = '<meta http-equiv="refresh" content="0;URL=../../?rubrique=systeme&operation=ajouter_personnel';

	echo $chaine.$complementchaine.'">';
	
?>