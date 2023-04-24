

<?php

//include '../../controler/consulter/profil_personnel.php';

if(isset($_SESSION['cours'])) {
   $cours = $_SESSION['cours'];
    foreach ($cours as $e) {
        echo 'Nom du cours: '.$e['libelle_cours'].'<br>';
        echo 'Heure: '.$e['heure_cours'].'<br>';
        echo 'Jours: '.$e['jour_cours'].'<br>';
        echo 'salle: '.$e['libelle_salle'].'<br>';
        echo '<a href="http://localhost//ecolemusique1/controler/consulter/profil_personnel.php?info=supprimer_personnel&pseudo_personnel='.$e['pseudo_personnel'].'">Supprimer</a>';

        echo '<a href="http://localhost//ecolemusique1/controler/consulter/profil_personnel.php?info=modifier_personnel&pseudo_personnel='.$e['pseudo_personnel'].'">Modifier</a>';
        //echo '<a href="?info=modifier_personnel&pseudo_personnel='.$e['pseudo_personnel'].'">Modifier</a>';

       
            
       // echo '<form method="post" action="controler/systeme/profil_personnel.php">
         //     <input type="button" name="info" value="modifier_personnel">';
        echo '<br>';
    }
}
?>