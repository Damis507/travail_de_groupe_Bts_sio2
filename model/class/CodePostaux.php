<?php
	/**
	 * 
	 */
	class CodePostaux
	{
		private $id;
		private $nomville;

		function __construct($id, $nomville)
		{
			$this->id = $id;
			$this->nomville = $nomville;
		}

		public function getId()
		{
			return $this->id;
		}


		public function getNomVille()
		{
			return $this->nomville;
		}

		public function setId($id)
		{
			$this->id = $id;
		}


		public function getNomVille($nomville)
		{
			$this->nomville = $nomville;
		}
	}
?>