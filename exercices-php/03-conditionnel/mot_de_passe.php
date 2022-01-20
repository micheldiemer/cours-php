<h2>Exercice mot de passe</h2>
<?php


$action = filter_var($_SERVER['PHP_SELF'], FILTER_VALIDATE_URL);

$nom = 'motdepasse';
if (isset($_POST[$nom])) {
  $saisie = $_POST[$nom] ?? '';
  $motdepasse = $saisie;
} else {
?>
  <form method="POST" action="<?= $action ?>">
    <label for name="<?= $nom ?>">Mot de passe</label>
    <input type="pawword" name="<?= $nom ?>" />
    <input type="submit" value="envoyer">
  </form>
<?php } ?>

<?php

/* compléter à partir d'ici */

?>