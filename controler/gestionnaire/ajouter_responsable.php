<?php
	require '../include_require_manager_step2.php';

	include '../../model/class/Responsables.php';

	if (isset($_POST["info"])) 
	{
		if ($_POST["info"] == "ajouter_responsable") 
		{	
			$managergestionnaire = new ManagerGestionnaire();

			$responsable = new Responsables(0,
											$_POST["libelle"],
											$_POST["prenom"],
											$_POST["no"],
											$_POST["nom_rue"],
											$_POST["id_code_postal"],
											$_POST["email"],
											0,
											$_POST["tel"]);

			$managergestionnaire->InscrireResponsable($responsable);

			// "Appel" à la View
			echo '<meta http-equiv="refresh" content="0;URL=ajouter_responsable.php">';
		} 
	}
	else 
	{
		$managercodepostaux = new ManagerCodePostaux();

		$codepostaux = $managercodepostaux->getAll();
	?>
		<meta http-equiv="refresh" content="0;URL=../../?rubrique=gestionnaire&operation=ajouter_responsable<?php echo '&cp='.implode(",", $codepostaux) ?>">';
	<?php
	}
?>