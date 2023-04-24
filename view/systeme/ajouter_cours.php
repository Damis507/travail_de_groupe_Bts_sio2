<form method="post" action="controler/systeme/ajouter_cours.php">
<input type="hidden" name="info" value="ajouter_cours">


<label for="">nom du cours</label>
        <input type="text" name="libelle_cours" id=""> 
<br><br>




<label for="">Individuel :</label>
        <input type="checkbox" name="individuel" id="">
<br>

<label for="">Nombre de place (2-25) :</label>
        <input type="number" name="nombre_places" value="2" min="2" max="25">
<br><br>         


<label> instrument : </label>
			<select name="id_instrument">
				<option value="1">Flute</option>
				<option value="2" selected>Violon</option>
                                <option value="3">Trompette</option>
				<option value="4" selected>Tambour</option>
			</select>
<br><br>


<label for="">heure :</label>
<input type="time" name="heure_cours"
       min="07:00" max="18:00" required>

<small>Heures de cour possible entre 7h et 18h </small>
<br>

<label for="">Jours :</label>
        <input type="date"  name="jour_cours"
        value="2023-07-22"
        min="2023-01-01" max="2023-12-31">
<br>
<label for="">Salle :</label>
        <select name="libelle_salle">
				<option value="A">Salle A</option>
				<option value="B" selected>Salle B</option>
                                <option value="C">Salle C</option>
				<option value="D" selected>Salle D</option>

			</select>
<br><br>



    
    <input type="submit" value="envoyer">
</form>

