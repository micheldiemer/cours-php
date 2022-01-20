<h2>Switch feu tricolore</h2>
<p>Ecrire un switch d'après la couleur du feu.
  Vert je passe, rouge je m'arrête, orange, je redouble d'attention.
</p>

<?php
$action = filter_var($_SERVER['PHP_SELF'], FILTER_VALIDATE_URL);

$saisie = $_GET['saisie'] ?? '-1';
$couleur = $saisie;
?>
<form method="GET" action="<?= $action ?>">
  <label for="saisie">Couleur</label>
  <input type="text" name="saisie" value="<?= $saisie ?? '' ?>" />
  <input type="submit" value="envoyer">
</form>

<?php

/* compléter à partir d'ici */

?>