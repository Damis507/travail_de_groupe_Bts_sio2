<?php
	/**
	 * 
	 */
	class instrument {
        private $id_instrument;
        private $famille_instrument;
      
        function __construct($id_instrument,
							 $famille_instrument)
							// $nombre_de_place
		{
			$this->id_instrument = $id_instrument;
			$this->famille_instrument = $famille_instrument;

		}
      
        public function get_id_instrument() {
          return $this->id_instrument;
        }
      
        public function get_famille_instrument() {
          return $this->famille_instrument;
        }

        public function setId_instrument($id_instrument)
        {
          $this->id_instrument = $id_instrument;
        }

        public function setFamille_instrument($famille_instrument)
        {
          $this->famille_instrument = $famille_instrument;
        }
      }


      // Récupérer les instruments sélectionnés
//$instrumentsChoisis = $_POST['instrument'];

// Récupérer la famille d'instruments choisie
//$familleChoisie = $_POST['famille_instrument'];

    


      