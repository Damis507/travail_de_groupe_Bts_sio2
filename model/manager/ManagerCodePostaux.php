<?php
	/**
	 * 
	 */
	include '../../model/class/ConnectionDB.php';

	class ManagerCodePostaux
	{		
		private $db;

		public function __construct()
		{
	    	$this->db = new ConnectionDB();
	   	}

	   	public function getAll()
	   	{
	   		$requete = "select * from codepostaux order by nomville";

	   		try 
	   		{
	   			$reponse = $this->db->getDB()->query($requete);
	   		} 
	   		catch (Exception $e) 
	   		{
	   			echo $e->getMessage();
	   		}

	   		$codepostaux = array();

	   		while ($donnees = $reponse->fetch()) {
	   			$codepostaux[] = $donnees["id"]."_".$donnees["nomville"]; 
	   		}

	   		return $codepostaux;
	   	}
	}
?>