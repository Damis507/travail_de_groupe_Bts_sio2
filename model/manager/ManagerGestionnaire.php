<?php
	/**
	 * 
	 */
	include '../../model/class/ConnectionDB.php';
	//include_once '../../model/class/Cours.php';

	class ManagerGestionnaire
	{		
		private $db;

		public function __construct()
		{
	    	$this->db = new ConnectionDB();
	   	}

	   	public function AjouterCours($cours)
	   	{
	   		try {
	   			$requete_c = "select f_ajouter_cours
							(
							:libelle_cours,
							:id_instrument,
							:individuel,
							:nombre_places,
							:heure_cours,
							:jour_cours,
							:libelle_salle)";

	   			$reponse = $this->db->getDB()->prepare($requete_c);

	   			$reponse->execute(array(
	   									'libelle_cours' => $cours->getLibelle_cours(), 
										'id_instrument' => strtoupper($cours->getId_instrument()),
	   									'individuel' => $cours->getIndividuel(),
									    'nombre_places' => $cours->getNombre_places(),
									    'heure_cours' => $cours->getHeure_cours(),
									    'jour_cours' => $cours->getJour_cours(),
									    'libelle_salle' => $cours->getLibelle_salle()));
	   								

	   		} catch (Exception $e) {
	   			echo $e->getMessage();
	   		}
	   	}

		



	   	private function InscrireUtilisateur($utilisateur)
	   	{
	   		try 
			{
				$requete_u = "insert into utilisateurs (nom, prenom) values ('".$utilisateur->getNom()."', '".$utilisateur->getPrenom()."')";
				
				$reponse = $this->db->getDB()->query($requete_u);
			} 
			catch (Exception $e) 
			{
	   			echo $e->getMessage();
			}
	   	}

	   	public function InscrireEleve($eleve)
	   	{
	   		$this->InscrireUtilisateur($eleve);
	   		
	   		try 
			{
				$requete_e = "insert into eleves (id_eleve, date_naiss) values ((select id from utilisateurs where nom = '".$eleve->getNom()."' and prenom = '".$eleve->getPrenom()."'), '".$eleve->getDateNaiss()."')";
				
				$reponse = $this->db->getDB()->query($requete_e);
			} 
			catch (Exception $e) 
			{
				echo $e->getMessage();
			}
	   	}

	   	public function InscrireResponsable($responsable)
	   	{
	   		$this->InscrireUtilisateur($responsable);

	   		try 
	   		{
	   			$requete = "insert into responsables values ((select id from utilisateurs where nom = :nom and prenom = :prenom), :no, :nom_rue, :id_code_postal, :email, :quotient_familial, :tel)";

	   			$reponse = $this->db->getDB()->prepare($requete);

	   			$reponse->execute(array('nom' => $responsable->getNom(),
	   									'prenom' => $responsable->getPrenom(),
	   									'no' => $responsable->getNo(), 
	   									'nom_rue' => $responsable->getNomRue(), 
	   									'id_code_postal' => $responsable->getIdCodePostal(), 
	   									'email' => $responsable->getEmail(), 
	   									'quotient_familial' => 0, 
	   									'tel' => $responsable->getTel()));

	   		} 
	   		catch (Exception $e) 
	   		{
	   			echo $e->getMessage();
	   		}
	   	}
	}
?>