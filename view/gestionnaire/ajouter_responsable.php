<form method="post" action="/controler/gestionnaire/ajouter_responsable.php">
	<input type="hidden" name="info" value="ajouter_responsable">
	<label>Nom : </label><input type="text" name="nom" maxlength=30 size=30 required><br>
	<label>Prénom : </label><input type="text" name="prenom" maxlength=30 size=30 required><br>
	<label>Numéro : </label><input type="text" name="no" maxlength="6" size="6"><br>
	<label>Rue : </label><input type="text" name="nom_rue" maxlength="30" size="30"><br>
	<label>Ville : </label>
	<select name="id_code_postal">
		<?php
			$code_nomville = preg_split("/,/", $_GET['cp']);
			
			for ($i = 0; $i < sizeof($code_nomville); $i++) 
			{ 
				$info = preg_split("/_/", $code_nomville[$i]);
		?>		
				<option value="<?php echo $info[0] ?>"><?php echo $info[1] ?></option>
		<?php
			}		
		?>
	</select><br>
	<label>E-mail : </label><input type="email" name="email" maxlength="30" size="30"><br>
	<label>Téléphone : </label><input type="text" name="tel" maxlength="10" size="10"><br>
	<input type="submit" value="Valider">
</form>