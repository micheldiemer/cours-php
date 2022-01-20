<?php

function calcul_age($annee, $age)
{
  $resultat = $annee - $age;
  echo 'L\'âge de la personne est : ' . $resultat . '<br>';
}


function calcul_tva($prixHT, $prixTTC)
{
  $resultat = $prixTTC / $prixHT - 1;
  echo 'Le taux de TVA est : ' . number_format($resultat * 100, 1, ',', "\u{202F}") . '%<br>';
}


function calcul_prix_ht($TVA, $prixTTC)
{
  $resultat = $prixTTC / (1 + $TVA);
  echo "Le prix HT d'un artiche dont le prix TTC est $prixTTC avec un taux de TVA de $TVA vaut : ";
  echo number_format($resultat, 2, ',', "\u{202F}") . '<br>';
}


function calcul_prix_ttc($TVA, $prixHT)
{
  $resultat = $prixHT * (1 + $TVA);
  echo "Le prix TTC d'un artiche dont le prix HT est $prixHT avec un taux de TVA de $TVA vaut : ";
  echo number_format($resultat, 2, ',', "\u{202F}") . '<br>';
}


function calcul_degre_f($celcius)
{
  $resultat = $celcius * 1.8 + 32;
  echo "La température $celcius °C vaut " . number_format($resultat, 1, ',', "\u{202F}") . '°F<br>';
}


function calcul_degre_c($fahr)
{
  $resultat = ($fahr - 32) / 1.8;
  echo "La température $fahr °F vaut " . number_format($resultat, 1, ',', "\u{202F}") . '°C<br>';
}


function modulo_centaines_dizaines_unites($entierNaturel)
{
  $n = $entierNaturel;
  $centaines = intdiv($n, 100);
  $dizaines = intdiv($n % 100, 10);
  $unites = $n % 10;
  echo 'Le nombre de secondes ' . $entierNaturel . ' correspond à : <br>';
  echo "<ul>";
  echo "  <li>$centaines centaines</li>";
  echo "  <li>$dizaines centaines</li>";
  echo "  <li>$unites centaines</li>";
  echo "</ul>";
}


function modulo_heures_minutes_secondes($totalSecondes)
{
  $heures = intdiv($totalSecondes, 3600);
  $minutes = intdiv($totalSecondes % 3600, 60);
  $secondes = $totalSecondes % 60;
  echo 'Le nombre entier naturel ' . $totalSecondes . ' se décompose en : <br>';
  echo "<ul>";
  echo "  <li>$heures heures</li>";
  echo "  <li>$minutes minutes</li>";
  echo "  <li>$secondes secondes</li>";
  echo "</ul>";
}
