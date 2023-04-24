<?php 
	require '../include_require_manager_step2.php';

	//include '../../model/class/Personnel.php';

	if (isset($_POST["info"])) 
	{
		
		if ($_POST["info"] == "connexion") 
		{
			$managerpersonnel = new ManagerPersonnel();
			

			$personnel = new Personnel($_POST["pseudo"],
			                    "", 
								"", 
								"", 
								"",
								$_POST["mot_de_passe"]);


			$pseudo = $_POST["pseudo"];
			if ($managerpersonnel->exist($personnel))
			{
				$chaine = '<meta http-equiv="refresh" content=';
				$chaine .='"0;URL=../../?rubrique=bienvenue&operation=bienvenue">';
				
				$_SESSION['logged_user'] = strtoupper($_POST['pseudo']);
				
				echo $chaine;
			}
			else
				echo '<meta http-equiv="refresh" content="0;URL=../../">';
				
		}
	}	
	
?>