<?php
	/**
	 * model/manager/ManagerMenu.php
	 */
	include "model/class/Options.php";
	include "model/class/ConnectionDB.php";
	
	class ManagerMenu
	{
		
		private $db;

		public function __construct()
		{
	    	$this->db = new ConnectionDB();
	   	}

	   	public function get()
	   	{
	   		try {
                
	   			
				$requete = "select O1.libelle_option as libelle_menu, IDMIDOPLOPP.libelle_option, IDMIDOPLOPP.lien as lien	
				from 
					(select id_option_m as id_menu, OPTION_PSEUDO.id_option as id_option, 
						OPTION_PSEUDO.libelle_option as libelle_option, OPTION_PSEUDO.pseudo_personnel as pseudo, OPTION_PSEUDO.lien_option as lien
					from 
						(select O1.id_option, libelle_option, O1.lien_option, P.pseudo_personnel 
						from avoir A
						inner join personnel P on P.pseudo_personnel = A.pseudo_personnel 
						inner join option O1 on A.id_option = O1.id_option 
						where P.pseudo_personnel = '".$_SESSION['logged_user']."' and lien_option <> ''
						) as OPTION_PSEUDO 
						inner join comporte C on C.id_option_o = OPTION_PSEUDO.id_option 
						order by id_menu
					) as IDMIDOPLOPP 
					inner join option O1 on O1.id_option = IDMIDOPLOPP.id_menu ;
			
				"; 


	   			/*$requete = "select m.libelle as rubrique, op1.id as id_option, op1.libelle as option_l, m.ordre as 		 ordre_rubrique, lien
							from (select libelle, id_option, ordre
									from options o
									inner join avoir a on a.id_rubrique = o.id) as m
							inner join options op1 on m.id_option = op1.id
							order by m.ordre";*/
							//echo $requete;




				/* $requete = "select O1.libelle_option as libelle_menu, IDMIDOPLOPP.libelle 
									from 
									(select id_option_m as id_menu, OPTION_PSEUDO.id_option as id_option, 
									OPTION_PSEUDO.libelle as libelle, OPTION_PSEUDO.pseudo_personnel as pseudo 
									from (select O.id_option, libelle_option as libelle, P.pseudo_personnel 
									from avoir A
									inner join personnel P on P.pseudo_personnel = A.pseudo_personnel 
									inner join options O on A.id_option = O.id_option where P.pseudo_personnel = '".$_SESSION['logged_user']."') as OPTION_PSEUDO 
									inner join comporte C on C.id_option_m = OPTION_PSEUDO.id_option order by id_menu) as IDMIDOPLOPP 
									inner join options O1 on O1.id_option = IDMIDOPLOPP.id_menu";

				*/

		   		$reponse = $this->db->getDB()->query($requete);
	   			
	   		} catch (Exception $e) {
	   			echo $e->getMessage();
	   		}
		   		

	   		$menu = array();

	   		while ($donnees = $reponse->fetch()) 
	   		{                                                       
	   			$menu[] = array('rubrique' => $donnees["libelle_menu"], 
	   							'option' => new Options(0,
	   								$donnees["libelle_option"],
	   								$donnees["niveau"],               
	   								$donnees["ordre_rubrique"],
	   								$donnees["lien"]));
	   		}

			/*while ($donnees = $reponse->fetch()) 
	   		{
	   			$menu[] = array('rubrique' => $donnees["libelle_menu"], 
	   							'option' => new Options(0, 
	   								$donnees["libelle_option"], 
	   							    '', 
	   								'', 
	   								$donnees["lien"]));
	   		}*/

	   		return $menu;
	   	}
	}




?>



<?php 
/*
		echo '<pre>';
	   		print_r($menu);
	   	echo '</pre>';


		Array
		(
		    [0] => Array
		        (
		            [menu] => MENU1
		            [option] => Options Object
		                (
		                    [id:Options:private] => 3
		                    [libelle:Options:private] => M1O2
		                    [niveau:Options:private] => 1
		                    [ordre:Options:private] => 
		                    [lien:Options:private] => 
		                )
		        )

		    [1] => Array
		        (
		            [menu] => MENU1
		            [option] => Options Object
		                (
		                    [id:Options:private] => 4
		                    [libelle:Options:private] => M1O3
		                    [niveau:Options:private] => 1
		                    [ordre:Options:private] => 
		                    [lien:Options:private] => 
		                )
		        )

		    [2] => Array
		        (
		            [menu] => MENU1
		            [option] => Options Object
		                (
		                    [id:Options:private] => 6
		                    [libelle:Options:private] => M1O5
		                    [niveau:Options:private] => 1
		                    [ordre:Options:private] => 
		                    [lien:Options:private] => 
		                )
		        )

		    [3] => Array
		        (
		            [menu] => MENU2
		            [option] => Options Object
		                (
		                    [id:Options:private] => 5
		                    [libelle:Options:private] => M2O4
		                    [niveau:Options:private] => 1
		                    [ordre:Options:private] => 
		                    [lien:Options:private] => 
		                )
		        )

		    [4] => Array
		        (
		            [menu] => MENU3
		            [option] => Options Object
		                (
		                    [id:Options:private] => 8
		                    [libelle:Options:private] => M3O1
		                    [niveau:Options:private] => 1
		                    [ordre:Options:private] => 
		                    [lien:Options:private] => 
		                )
		        )

		    [5] => Array
		        (
		            [menu] => MENU3
		            [option] => Options Object
		                (
		                    [id:Options:private] => 9
		                    [libelle:Options:private] => M3O2
		                    [niveau:Options:private] => 1
		                    [ordre:Options:private] => 
		                    [lien:Options:private] => 
		                )
		        )

		    [6] => Array
		        (
		            [menu] => MENU3
		            [option] => Options Object
		                (
		                    [id:Options:private] => 10
		                    [libelle:Options:private] => M3O3
		                    [niveau:Options:private] => 1
		                    [ordre:Options:private] => 
		                    [lien:Options:private] => 
		                )
		        )

		)
	   	*/
?>


















<?php
	   	/*
	   	public function getAll()
	   	{
	    	$requete = "select * from membre order by nom ASC";
	       $reponse = $this->_db->getDB()->query($requete);

	       $membres = array();
	       
	       while ($donnees = $reponse->fetch())
	       {
	        $membres[] = array("id" => $donnees["id"],
	          "autres_donnees" => new Membre($donnees["nom"], $donnees["prenom"],
	           $donnees["num_adr"],
	           $donnees["rue_adr"],
	           $donnees["mail"],
	           $donnees["mobile"],
	           $donnees["mdp"],
	           $donnees["id_cp"]));
	       }
	       return $membres;
	   }

	   public function insert($nom,
	      $prenom,
	      $num_adr,
	      $rue_adr,
	      $cp,
	      $mail,
	      $mobile,
	      $mdp)
	   {
	    try {
	    $requete = "insert into membre (nom,
	    prenom,
	    num_adr,
	    rue_adr,
	    id_cp,
	    mail,
	    mobile,
	    mdp)
	    values (:nom,
	    :prenom,
	    :num_adr,
	    :rue_adr,
	    :cp,
	    :mail,
	    :mobile,
	    :mdp)";

	    $reponse = $this->_db->getDB()->prepare($requete);

	   $reponse->execute(array('nom' => $nom,
	    'prenom' => $prenom,
	    'num_adr' => $num_adr,
	    'rue_adr' => $rue_adr,
	    'cp' => $cp,
	    'mail' => $mail,
	    'mobile' => $mobile,
	    'mdp' => $mdp));    
	    } catch (Exception $e) {
	    echo $e->getMessage();
	    }
		}*/
	
?>