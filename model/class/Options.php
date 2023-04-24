<?php
	/**
	 * 
	 */
	class Options
	{
		// ATTRIBUTS
		private $id;
		private $libelle;
		private $niveau;
		private $ordre;
		private $lien;


		// CONSTRUCTEUR
		public function __construct($id, $libelle, $niveau, $ordre, $lien)
		{
			$this->id = $id;
			$this->libelle = $libelle;
			$this->niveau = $niveau;
			$this->ordre = $ordre;
			$this->lien = $lien;
		}


		// SETTERS
		public function setId($id)
		{
			$this->id = $id;
		}

		public function setLibelle($libelle)
		{
			$this->libelle = $libelle;
		}

		public function setNiveau($niveau)
		{
			$this->niveau = $niveau;
		}

		public function setOrdre($ordre)
		{
			$this->ordre = $ordre;
		}

		public function setLien($lien)
		{
			$this->lien = $lien;
		}


		// GETTERS
		public function getId()
		{
			return $this->id;
		}

		public function getLibelle()
		{
			return $this->libelle;
		}

		public function getNiveau()
		{
			return $this->niveau;
		}

		public function getOrdre()
		{
			return $this->ordre;
		}

		public function getLien()
		{
			return $this->lien;
		}
	}
?>