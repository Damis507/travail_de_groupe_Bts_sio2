<?php
	session_start();

	function chargerModel($classe)
	{
	/*
	On inclut la classe correspondante au paramètre passé.
	*/
	  require "model/manager/".$classe.".php";
	}
	spl_autoload_register('chargerModel');
?>