<?php
	/**
	 * 
	 */
	class Personnel
	{
		private $pseudo;
		private $nom;
		private $prenom;
		private $adresse;
        private $mail;
		private $mdp;


		function __construct($pseudo,
		                     $nom, 
							 $prenom, 
							 $adresse,
							 $mail, 
							 $mdp)
		{
			$this->pseudo = $pseudo;
			$this->nom = strtoupper($nom);
			$this->prenom = strtoupper($prenom);
			$this->adresse =strtoupper($adresse) ;
			$this->mail =$mail ;
			$this->mdp = $mdp;
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

        public function setAdresse($adresse)
		{
			$this->adresse = $adresse;
		}		
 
		public function setMail($mail)
		{
			$this->mail = $mail;
		}

		public function setMdp($mdp)
		{
			$this->mdp = $mdp;
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

		public function getAdresse()
		{
			return $this->adresse;
		}

		public function getMail()
		{
			return $this->mail;
		}

		public function getMdp()
		{
			return $this->mdp;
		}

		
	}
?>