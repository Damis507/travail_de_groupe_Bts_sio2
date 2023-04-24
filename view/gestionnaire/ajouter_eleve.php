<!-- view/gestionnaire/inscription.php -->

<form method="post" action="/controler/gestionnaire/ajouter_eleve.php">
	<input type="hidden" name="info" value="ajouter_eleve">
	<label>Nom : </label><input type="text" name="nom" maxlength=30 size=30 required><br>
	<label>Prénom : </label><input type="text" name="prenom" maxlength=30 size=30 required><br>
	<label>Date de naissance : </label><input type="date" name="date_naiss" required><br><br>
	<input type="submit" value="Valider">
</form>