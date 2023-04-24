<?php
require '../include_require_manager_step2.php';
include '../../model/class/Cours.php';
//include '../../model/class/ManagerInstrument.php';


if (isset($_POST["info"])) 
{
    if ($_POST["info"] == "ajouter_cours") 
    {
        
       // $model = new ModelInstrument();
        //$instruments = $model->getAllInstruments();
       $individuel = isset($_POST['individuel']) ? 'true' : 'false';
        if (isset($_POST['individuel']))
				  $individuel = 'true';
		else
				  $individuel = 'false';

        if(empty($_POST['nombre_places'])) {
                $_POST["nombre_places"] = 2;
        }
                


        $cours = new Cours(
                            $_POST["libelle_cours"],
                            $_POST["id_instrument"],
                            $individuel,
                            $_POST["nombre_places"],
                            $_POST["heure_cours"],
                            $_POST["jour_cours"],
                            $_POST["libelle_cours"]
                            );

        $managergestionnaire = new ManagerGestionnaire();
        $managergestionnaire->AjouterCours($cours);

        
    }
}

// "Appel" à la View
echo '<meta http-equiv="refresh" content="0;URL=../../?rubrique=systeme&operation=ajouter_cours">';
?>
