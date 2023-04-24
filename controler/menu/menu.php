<?php
	/*
		Controleur Menu
	*/
	require 'controler/include_require_manager.php';

	// "Appel au MODEL"
	$managermenu = new ManagerMenu();
	$menu = $managermenu->get();

	// "Appel" à la View
	require "view/menu/affichage.php";
?>



















<?php
	/*if (!isset($_GET["step"]))
	{
		$managermembre = new ManagerMembre();
		$membres = $managermembre->getAll();

		/*echo '<pre>';
		print_r($membres);
		echo '</pre>'; 

		$managercp = new ManagerCP();
		$cp = $managercp->getAll();
	}
	else
	{
	$id_membre = $_POST["id_membre"];
	$type_trajet = $_POST["type_trajet"];
	$date_trajet = $_POST["date_trajet"];
	$heure = $_POST["heure"];
	$minute = $_POST["minute"];
	$nb_places = $_POST["nb_places"];
	$origine = $_POST["origine"];
	$destination = $_POST["destination"];

	$managertrajet = new ManagerTrajet();

	$managertrajet->insert($id_membre, $type_trajet, $date_trajet, $heure, $minute, $nb_places, $origine, $destination);

	echo "<meta http-equiv='refresh' content='0; URL=creation.php'>";
	}

	// View
	require "../../view/trajet/form/creation.php";*/
?>