<form method="POST" action="instrument.php">
  <?php foreach($instruments as $instrument) { ?>
    <label>
      <input type="checkbox" name="instruments[]" value="<?php echo $instrument['nom_instrument']; ?>">
      <?php echo $instrument['nom_instrument']; ?>
    </label>
  <?php } ?>
  
  <select name="famille_instrument">
    <?php foreach($familles as $famille) { ?>
      <option value="<?php echo $famille['nom_famille']; ?>"><?php echo $famille['nom_famille']; ?></option>
    <?php } ?>
  </select>

  <input type="submit" value="Envoyer">
</form>
