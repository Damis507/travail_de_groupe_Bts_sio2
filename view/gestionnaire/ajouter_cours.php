<form method="post" action="/controler/gestionnaire/ajouter_cours.php">
	<input type="hidden" name="info" value="ajouter_cours">
	<label>Libelle : </label>
	<input type="text" name="libelle" maxlength=50 size=50 required><br>
	<label>Age minimum : </label>	
	<input type="number" name="agemini" min=6 max=90><br>
	<label>Age maximum : </label>	
	<input type="number" name="agemaxi" min=6 max=90><br>
	<?php
		$instruments = array();

		$lesinstruments = simplexml_load_file('model/xmls/instruments.xml');

		foreach ($lesinstruments->row as $row) {		
  			$instruments[] = array('id' => utf8_decode($row->id), 
  							   'intitule' => utf8_decode($row->intitule));
  		}
	?>
	<label>Instrument : </label>
	<select name="id_instrument">
		<?php
			for ($i = 0; $i < count($instruments); $i++) { 
		?>
				<option value="<?php echo $instruments[$i]['id'] ?>"><?php echo $instruments[$i]['intitule'] ?></option>
		<?php
			}
		?>
	</select><br>
	<?php
		$typecours = array();

		$lestypescours = simplexml_load_file('model/xmls/type_cours.xml');

		foreach ($lestypescours->row as $row) {		
  			$typecours[] = array('id' => utf8_decode($row->id), 
  							     'libelle' => utf8_decode($row->libelle));
  		}
	?>
	<label>Type de cours : </label>
	<select name="id_type_cours">
		<?php
			for ($i = 0; $i < count($typecours); $i++) { 
		?>
				<option value="<?php echo $typecours[$i]['id'] ?>"><?php echo $typecours[$i]['libelle'] ?></option>
		<?php
			}
		?>
	</select><br><br>
	<input type="submit" value="Valider">
</form>