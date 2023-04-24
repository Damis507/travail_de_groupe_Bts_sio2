


<?php
	/**
	 * 
	 */
	include 'Utilisateurs.php';
	
	class Responsables extends Utilisateurs
	{
		private $no;
		private $nom_rue;
		private $id_code_postal;
		private $email;
		private $quotient_familial;
		private $tel;

		function __construct($id_reponsable,
							$nom,
							$prenom,
							$no,
							$nom_rue,
							$id_code_postal,
							$email,
							$quotient_familial,
							$tel)
		{
			parent::__construct($id_reponsable,
								$nom,
								$prenom);

			$this->no = strtoupper($no);
			$this->nom_rue = strtoupper($nom_rue);
			$this->id_code_postal = $id_code_postal;
			$this->email = strtoupper($email);
			$this->quotient_familial = $quotient_familial;
			$this->tel = $tel;
		}

		public function setNo($no)
		{
			$this->no = $no;
		}

		public function setNomRue($nom_rue)
		{
			$this->nom_rue = $nom_rue;
		}

		public function setIdCodePostal($id_code_postal)
		{
			$this->id_code_postal = $id_code_postal;
		}

		public function setEmail($email)
		{
			$this->email = $email;
		}

		public function setQuotientFamilial($quotient_familial)
		{
			$this->quotient_familial = $quotient_familial;
		}

		public function setTel($tel)
		{
			$this->tel = $tel;
		}
							
		public function getNo()
		{
			return $this->no;
		}

		public function getNomRue()
		{
			return $this->nom_rue;
		}

		public function getIdCodePostal()
		{
			return $this->id_code_postal;
		}

		public function getEmail()
		{
			return $this->email;
		}

		public function getQuotientFamilial()
		{
			return $this->quotient_familial;
		}

		public function getTel()
		{
			return $this->tel;
		}
	}
?>