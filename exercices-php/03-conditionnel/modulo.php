<h2>Modulo</h2>
<p>Indiquer si un nombre est divisible par 2, 3 et 5</p>
<?php
$nom = 'nb';
$nb = 0;
if (isset($_GET[$nom])) {
  $saisie = $_GET[$nom];
  $nb = intval($saisie);
}
?>
<form method="GET" action="<?= $action ?>">
  <label for name="<?= $nom ?>">Nombre</label>
  <input type="pawword" name="<?= $nom ?>" />
  <input type="submit" value="envoyer">
</form>

<?php

/* compléter à partir d'ici */

?>