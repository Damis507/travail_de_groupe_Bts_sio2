<?php 
	include '../../model/class/ConnectionDB.php';
	include_once '../../model/class/Personnel.php';

	class ManagerPersonnel
	{		
		private $db;

		public function __construct()
		{
	    	$this->db = new ConnectionDB();
	   	}


		public function insertinto($personnel)
	   	{
			try {
				/*$requete = "insert into personnel
			            (pseudo_personnel,
						nom_personnel,
						prenom_personnel,
						adresse_personnel,
						mail_personnel,
						mot_de_passe) values
						(:pseudo_personnel,
						:nom_personnel,
						:prenom_personnel,
						:adresse_personnel,
						:mail_personnel,
						:mot_de_passe)";*/ 

						$requete = "select f_ajouter_personnel
									(:pseudo_personnel,
									:nom_personnel,
									:prenom_personnel,
									:adresse_personnel,
									:mail_personnel,
									:mot_de_passe)";

						$reponse = $this->db->getDB()->prepare($requete);

						$reponse->execute(array('pseudo_personnel' => strtoupper($personnel->getPseudo()), 
												'nom_personnel' =>strtoupper( $personnel->getNom()), 
												'prenom_personnel' => strtoupper($personnel->getPrenom()), 
												'adresse_personnel' => strtoupper( $personnel->getAdresse()),
												'mail_personnel' => strtoupper( $personnel->getMail()),
												'mot_de_passe' => $personnel->getMdp())
											    );
			}
			catch (Exception $e) {
				echo $e->getMessage();
			}
		}

		public function update($personnel) 
		{
			try 
			{
				$requete = "select f_update_personnel(:pseudo_personnel, 
													 :nom_personnel, 
													 :prenom_personnel, 
													 :adresse_personnel,
													 :mail_personnel)";
													
				
				$reponse = $this->db->getDB()->prepare($requete);
				
				$reponse->execute(array('pseudo_personnel' => strtoupper($personnel->getPseudo()), 
										'nom_personnel' =>strtoupper( $personnel->getNom()), 
										'prenom_personnel' => strtoupper($personnel->getPrenom()), 
										'adresse_personnel' => strtoupper( $personnel->getAdresse()),
										'mail_personnel' => strtoupper( $personnel->getMail())
			                        	));
			} 
			catch (Exception $e) 
			{
				echo $e->getMessage();
			};
		}


		public function selectAll()
	   	{
	   		try 
	   		{
	   			$requete = "SELECT P.pseudo_personnel, 
							nom_personnel,
							prenom_personnel,
							adresse_personnel,
							mail_personnel 
							FROM personnel P
							ORDER BY nom_personnel, prenom_personnel";
								
	   			
	   			$reponse = $this->db->getDB()->prepare($requete);
	   			
	   			$reponse->execute();
	   			
	   			$personnel = array();
	   			
	   			while ($donnees = $reponse->fetch())
   				{
   					$personnel[] = array('pseudo_personnel' => $donnees["pseudo_personnel"],
   									  'nom_personnel' => $donnees["nom_personnel"],
   									  'prenom_personnel' => $donnees["prenom_personnel"],
   									  'adresse_personnel' => $donnees["adresse_personnel"], 
   									  'mail_personnel' => $donnees["mail_personnel"]);		
   				}
   				
   				/*echo "<pre>";
   				 print_r($employes);
   				echo "</pre>";*/
   				
   				return $personnel;
	   		} 
	   		catch (Exception $e) 
	   		{
	   			echo $e->getMessage();
	   		}
	   	}


		public function get($pseudo_personnel)
		{
			try
			{
				$requete = "select pseudo_personnel,
				nom_personnel,
				prenom_personnel,
				nom_personnel,
				adresse_personnel,
				mail_personnel
				from personnel 
				where pseudo_personnel = :pseudo_personnel";
				 
				$reponse = $this->db->getDB()->prepare($requete);
				 
				$reponse->execute(array('pseudo_personnel' => $pseudo_personnel));
				 
				while ($donnees = $reponse->fetch())
				{
					$personnel = array('pseudo_personnel' => $donnees["pseudo_personnel"],
					'nom_personnel' => $donnees["nom_personnel"],
					'prenom_personnel' => $donnees["prenom_personnel"],
					'adresse_personnel' => $donnees["adresse_personnel"], 
					'mail_personnel' => $donnees["mail_personnel"]);	
				}
					
				/*echo "<pre>";
				 print_r($employe);
				echo "</pre>";*/
					
				return $personnel;
			}
			catch (Exception $e)
			{
				echo $e->getMessage();
			}
		}



		public function delete($pseudo_personnel)
{
    try {
        $requete = "select f_delete_personnel(:pseudo_personnel)";
        $reponse = $this->db->getDB()->prepare($requete);
        $reponse->execute(array(':pseudo_personnel' => $pseudo_personnel));
    } catch (PDOException $e) {
        
        throw new Exception("Erreur : " . $e->getMessage());
    }
}

			


	   	public function exist($personnel)
	   	{
	   		try {
	   			$requete = "select count(*) as quantite
		   					from personnel
		   					where pseudo_personnel = :pseudo and 
		   					mot_de_passe = :mdp";

		   		$reponse = $this->db->getDB()->prepare($requete);

	   			$reponse->execute(array('pseudo' => strtoupper($personnel->getPseudo()), 
	   									'mdp' => $personnel->getMdp()));

	   			$donnees = $reponse->fetch();

	   			return ($donnees["quantite"] == 1);
	   		} catch (Exception $e) {
	   			echo $e->getMessage();
	   		}
	   			


	   	}
	}
?>