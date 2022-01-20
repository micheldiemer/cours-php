<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="La base d'une page HTML, pour des étudiants">
  <meta name="keywords" content="HTML, CSS, Javascript">
  <meta name="author" content="Ressources Internet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables et expressions en PHP</title>
</head>

<?php
include('corrige.php');

?>

<body>
  <h2>Calcul âge</h2>
  <?php

  // la constante ANNEE contien l'année en cours
  define('ANNEE', date('Y'));
  if (isset($_GET['saisieAge'])) {
    $saisie = $_GET['saisieAge'];
    // la variable $age contient l'âge saisi
    $age = intval($saisie);
    calcul_age(ANNEE, $age);
  } else { ?>
    <form method="GET" action="<?= $_SERVER['PHP_SELF'] ?>">
      <label for="saisieAge">
        Votre âge au 31/12/<?= ANNEE ?>
      </label>
      <input type="text" name="saisieAge" />
      <input type="submit" value="envoyer">
    </form>
  <?php } ?>
  <hr>


  <h2>Calcul PrixHT/PrixTTC</h2>

  <?php
  if (isset($_GET['saisiePrixHT']) && isset($_GET['saisiePrixTTC'])) {
    // la variable $prixHT contient le prix saisi

    // Récupération prixHT
    $prixHT = floatval($_GET['saisiePrixHT']);
    // Récupération prixTTC
    $prixTTC = floatval($_GET['saisiePrixTTC']);
    if ($prixHT != 0 && $prixTTC != 0) {
      calcul_tva($prixHT, $prixTTC);
    } else {
      define('TVA', 5.5 / 100);
      if ($prixHT == 0) {
        calcul_prix_ht(TVA, $prixTTC);
      } else {
        calcul_prix_ttc(TVA, $prixHT);
      }
    }
  } else { ?>
    <form method="GET" action="<?= $_SERVER['PHP_SELF'] ?>">
      <label for="saisieHT">Prix HT</label>
      <input type="text" name="saisiePrixHT" />
      <label for="saisieTTC">Prix TTC</label>
      <input type="text" name="saisiePrixTTC" />
      <input type="submit" value="envoyer">
    </form>
  <?php } ?>
  <hr>

  <h2>Degrés Celcius->Farenheit</h2>
  <?php if (isset($_GET['saisieDegreC'])) {
    $celcius = floatval($_GET['saisieDegreC']);
    calcul_degre_f($celcius);
  } else { ?>
    <form method="GET" action="<?= $_SERVER['PHP_SELF'] ?>">
      <label for="saisieDegreC">
        Température °C :
      </label>
      <input type="text" name="saisieDegreC" />
      <input type="submit" value="envoyer">
    </form>

  <?php } ?>

  <h2>Degrés Farenheit->Celcius</h2>
  <?php if (isset($_GET['saisieDegreF'])) {
    $fahrenheit = floatval($_GET['saisieDegreF']);
    calcul_degre_c($fahrenheit);
  } else { ?>
    <form method="GET" action="<?= $_SERVER['PHP_SELF'] ?>">
      <label for="saisieDegreF">
        Température °F :
      </label>
      <input type="text" name="saisieDegreF" />
      <input type="submit" value="envoyer">
    </form>

  <?php } ?>
  <hr>

  <h2>Modulo : conversion d'un nombre en centaines / dizaines / unités</h2>
  <?php
  if (isset($_GET['saisieEntierNaturel'])) {
    $totalSecondes = intval($_GET['saisieEntierNaturel']);
    modulo_centaines_dizaines_unites($totalSecondes);
  } else { ?>
    <form method="GET" action="<?= $_SERVER['PHP_SELF'] ?>">
      <label for="saisieEntierNaturel">Secondes :</label>
      <input type="number" min="0" step="1" name="saisieEntierNaturel" />
      <input type="submit" value="envoyer">
    </form>

  <?php } ?>
  <hr>


  <h2>Modulo : conversion heures/minutes/secondes</h2>
  <?php
  if (isset($_GET['saisieSecondes'])) {
    $totalSecondes = intval($_GET['saisieSecondes']);
    modulo_heures_minutes_secondes($totalSecondes);
  } else { ?>
    <form method="GET" action="<?= $_SERVER['PHP_SELF'] ?>">
      <label for="saisieSecondes">Secondes :</label>
      <input type="number" min="0" max="1000000000" step="1" name="saisieSecondes" />
      <input type="submit" value="envoyer">
    </form>

  <?php } ?>
  <hr>



</body>

</html>