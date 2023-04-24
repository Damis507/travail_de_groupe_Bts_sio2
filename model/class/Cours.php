<?php
	/**
	 * 
	 */
	class Cours
	{
		private $libelle_cours;
		private $id_instrument;
		private $individuel;
		private $nombre_places;
		private $heure_cours;
		private $jour_cours;
		private $libelle_salle;




		function __construct(
							 $libelle_cours,
							 $id_instrument,
							 $individuel,
							 $nombre_places,
							 $heure_cours,
							 $jour_cours,
							 $libelle_salle)
							// $nombre_de_place
		{
			$this->libelle_cours = $libelle_cours;
			$this->id_instrument = $id_instrument;
			$this->individuel = $individuel;
			$this->nombre_places = $nombre_places;
			$this->heure_cours = $heure_cours;
			$this->jour_cours = $jour_cours;
			$this->libelle_salle = $libelle_salle;
		}


		public function getLibelle_cours()
		{
			return $this->libelle_cours;
		}

		public function getId_instrument()
		{
			return $this->id_instrument;
		}

		public function getIndividuel()
		{
			return $this->individuel;
		}

		public function getNombre_places()
		{
			return $this->nombre_places;
		}

		public function getHeure_cours()
		{
			return $this->heure_cours;
		}

		public function getJour_cours()
		{
			return $this->jour_cours;
		}

		public function getLibelle_salle()
		{
			return $this->libelle_salle;
		}

		//public function getNombre_de_place()
		//{
		//	return $this->nombre_de_place;
		//}


		public function setLibelle_cours($libelle_cours)
		{
			$this->libelle_cours = $libelle_cours;
		}

		public function setId_instrument($id_instrument)
		{
			$this->id_instrument = $id_instrument;
		}

		public function setIndividuel($individuel)
		{
			$this->individuel = $individuel;
		}

		public function setNombre_places($nombre_places)
		{
			$this->nombre_places = $nombre_places;
		}

		public function setHeure_cours($heure_cours)
		{
			$this->heure_cours = $heure_cours;
		}

		public function setJours_cours($jour_cours)
		{
			$this->jour_cours = $jour_cours;
		}

		public function setLibelle_salle($libelle_salle)
		{
			$this->libelle_salle = $libelle_salle;
		}

	}
?>