<form method="post" action="controler/systeme/ajouter_eleve.php">
<input type="hidden" name="info" value="ajouter_eleve">
    <label for="">Pseudo :</label>
    <input type="text"  name="pseudo_eleve"><br>

    <label for="">Nom :</label>
    <input type="text"  name="nom_eleve"><br>

    <label for="">Prénom :</label>
    <input type="text"  name="prenom_eleve"><br>

    <label for="">Adresse :</label>
    <input type="text"  name="adresse_eleve"><br>

    <label for="">Mail :</label>
    <input type="password"  name="mail_eleve"><br>

    <label for=""> tel :</label>
    <input type="password"  name="tel_eleve"><br>

    <label for="">Confirmer mot de passe :</label>
    <input type="password"  name="mot_de_passe"><br>

<!--    <label for="">Type personnel :</label>
    <select name="type_employe" id="">
        <option value="C">Commercial</option>
        <option value="D" selected>Déménageur</option> -->

    </select><br>

    <label for="">Chef :</label>
    <input type="checkbox"  name="chef"><br><br>
    <input type="submit" value="envoyer">

</form>


<form method="post" action="controler/systeme/ajouter_personnel.php">
	<input type="hidden" name="info" value="ajouter_personnel">
	<input type="hidden" name="info_sup" value="<?php echo $_GET['option'] ?>">
	<?php 
		if (isset($_GET['option']) && $_GET['option'] == "modif.") 
		{
	?>
			<label>Pseudo : </label>
			<input type="text" name="pseudo_personnel" value="<?php echo $_SESSION['item']['pseudo_personnel'] ?>" disabled><br>
			<input type="hidden" name="pseudo_personnel" value="<?php echo $_SESSION['item']['pseudo_personnel'] ?>">
			<label>Nom : </label>
			<input type="text" name="nom_personnel" value="<?php echo $_SESSION['item']['nom_personnel'] ?>"><br>
			<label>Prénom : </label>
			<input type="text" name="prenom_personnel" value="<?php echo $_SESSION['item']['prenom_personnel'] ?>"><br>
			<label>Adresse : </label>
			<input type="text" name="adresse_personnel" value="<?php echo $_SESSION['item']['adresse_personnel'] ?>"><br>
			<label>Mail : </label>
			<input type="text" name="mail_personnel" value="<?php echo $_SESSION['item']['mail_personnel'] ?>"><br>
			
				


                    <label for="">Pseudo :</label>
            <input type="text"  name="pseudo_personnel"><br>

            <label for="">Nom :</label>
            <input type="text"  name="nom_personnel"><br>

            <label for="">Prénom :</label>
            <input type="text"  name="prenom_personnel"><br>

            <label for="">Adresse :</label>
            <input type="text"  name="adresse_personnel"><br>

            <label for="">Mail :</label>
            <input type="text"  name="mail_personnel"><br>

            <label for="">mot de passe :</label>
            <input type="password"  name="mot_de_passe"><br>
			
				
	<?php 
		}
	?>
	<br><br>
	<input type="submit" name="Envoyer">
</form>