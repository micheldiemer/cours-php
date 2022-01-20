<h2>Calcul de l'aire d'un cercle</h2>
<?php

$action = filter_var($_SERVER['PHP_SELF'], FILTER_VALIDATE_URL);
$nom = 'rayon';
$rayon = -1;
if (isset($_GET[$nom])) {
  $saisie = $_GET[$nom];
  $rayon = floatval($saisie);
}
?>
<form method="GET" action="<?= $action ?>">
  <label for name="<?= $nom ?>">Rayon</label>
  <input type="number" name="<?= $nom ?>" />
  <input type="submit" value="envoyer">
</form>