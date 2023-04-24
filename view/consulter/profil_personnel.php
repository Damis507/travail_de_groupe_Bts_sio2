<?php

//include '../../controler/consulter/profil_personnel.php';

if(isset($_SESSION['personnel'])) {
   $personnel = $_SESSION['personnel'];
    foreach ($personnel as $e) {
        echo 'Pseudo: '.$e['pseudo_personnel'].'<br>';
        echo 'Nom: '.$e['nom_personnel'].'<br>';
        echo 'Prénom: '.$e['prenom_personnel'].'<br>';
        echo 'Adresse: '.$e['adresse_personnel'].'<br>';
        echo 'Email: '.$e['mail_personnel'].'<br>';
        echo '<a href="http://localhost//ecolemusique1/controler/consulter/profil_personnel.php?info=supprimer_personnel&pseudo_personnel='.$e['pseudo_personnel'].'">Supprimer</a>';

        echo '<a href="http://localhost//ecolemusique1/controler/consulter/profil_personnel.php?info=modifier_personnel&pseudo_personnel='.$e['pseudo_personnel'].'">Modifier</a>';
        //echo '<a href="?info=modifier_personnel&pseudo_personnel='.$e['pseudo_personnel'].'">Modifier</a>';

       
            
       // echo '<form method="post" action="controler/systeme/profil_personnel.php">
         //     <input type="button" name="info" value="modifier_personnel">';
        echo '<br>';
    }
}
?>

