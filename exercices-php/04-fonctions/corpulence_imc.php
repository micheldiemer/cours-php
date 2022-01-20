<h2>Calcul IMC et corpulence</h2>

<?php
$action = filter_var($_SERVER['PHP_SELF'], FILTER_VALIDATE_URL);
$nom = 'poids';
$nom2 = 'taille';
$taille = -1;
$poids = -1;
if (isset($_GET[$nom]) && isset($_GET[$nom2])) {
  $saisie = $_GET[$nom];
  $poids = intval($saisie);

  $saisie = $_GET[$nom2];
  $taille = intval($saisie);
}
?>
<form method="GET" action="<?= $action ?>">
  <label for name="<?= $nom ?>">Poids (kg)</label>
  <input type="number" name="<?= $nom ?>" min="0" step="1" /><br>
  <label for name="<?= $nom2 ?>">Taille (cm)</label>
  <input type="number" name="<?= $nom2 ?>" min="80" step="1" max="300" /><br>
  <input type="submit" value="envoyer">
</form>

<?php

/* rédiger le code à partir d'ici*/
function imc(int $poids, float $taille)
{
  return 0;
}


function corpulence(float $imc)
{
  return 'maigre';
}
