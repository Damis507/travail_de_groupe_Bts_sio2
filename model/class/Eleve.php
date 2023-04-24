<?php
	/**
	 * 
	 */
	class Eleve
	{
		private $pseudo;
		private $nom;
		private $prenom;
		private $datenaissance;
		private $tel;
        private $adresse;



		function __construct($pseudo,
		                     $nom, 
							 $prenom, 
							 $datenaissance,
							 $tel, 
							 $adresse)
		{
			$this->pseudo = $pseudo;
			$this->nom = strtoupper($nom);
			$this->prenom = strtoupper($prenom);
			$this->datenaissance = $datenaissance;
			$this->tel =$tel ;
			$this->adresse = $adresse;
		}

		public function setPseudo($pseudo)
		{
			$this->pseudo = $pseudo;
		}

		public function setNom($nom)
		{
			$this->nom = $nom;
		}

		public function setPrenom($prenom)
		{
			$this->prenom = $prenom;
		}

        public function setDatenaissance($datenaissance)
		{
			$this->adresse = $datenaissance;
		}		
 
		public function setTel($tel)
		{
			$this->tel = $tel;
		}

		public function setAdresse($adresse)
		{
			$this->adresse = $adresse;
		}


		public function getPseudo()
		{
			return $this->pseudo;
		}

		public function getNom()
		{
			return $this->nom;
		}

		public function getPrenom()
		{
			return $this->prenom;
		}

		public function getDatenaissance()
		{
			return $this->datenaissance;
		}

		public function getTel()
		{
			return $this->tel;
		}

		public function getAdresse()
		{
			return $this->adresse;
		}

		
	}
?>