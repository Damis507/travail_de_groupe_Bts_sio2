<?php 
	include '../../model/class/ConnectionDB.php';
	//include '../../model/class/Eleve.php';

	class ManagerEleve
	{		
		private $db;

		public function __construct()
		{
	    	$this->db = new ConnectionDB();
	   	}


		public function insertinto($eleve)
	   	{
			try {
				$requete = "insert into eleve
			            (pseudo_eleve,
						nom_eleve,
						prenom_eleve,
						date_naissance_eleve,
						tel_eleve,
						adresse_eleve) values
						(:pseudo_eleve,
						:nom_eleve,
						:prenom_eleve,
						:date_naissance_eleve,
						:tel_eleve,
						:adresse_eleve)";

						$requete = "select f_ajouter_personnel
									(:pseudo_eleve,
									:nom_eleve,
									:prenom_eleve,
									:date_naissance_eleve,
									:tel_eleve,
									:adresse_eleve)";

						$reponse = $this->db->getDB()->prepare($requete);

						$reponse->execute(array('pseudo_eleve' => strtoupper($eleve->getPseudo()), 
												'nom_eleve' =>strtoupper( $eleve->getNom()), 
												'prenom_eleve' => strtoupper($eleve->getPrenom()), 
												'date_naissance_eleve' => strtoupper( $eleve->getDatenaissance()),
												'tel_eleve' => strtoupper( $eleve->getTel()),
												'adresse_eleve' => $eleve->getAdresse())
											    );
			}
			catch (Exception $e) {
				echo $e->getMessage();
			}
		}
	}
?>