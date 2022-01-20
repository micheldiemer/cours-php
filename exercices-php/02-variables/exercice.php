<?php
// TODO compléter les fonctions pour effectier les calculs et afficher les résultats
function calcul_age($annee, $age)
{
  $resultat = 0;
  echo 'L\'âge de la personne est : ' . $resultat . '<br>';
}


function calcul_tva($prixHT, $prixTTC)
{
  $resultat = 0;
  echo 'Le taux de TVA est : ' . $resultat . '<br>';
}


function calcul_prix_ht($TVA, $prixTTC)
{
  $resultat = 0;
  echo "Le prix HT d'un artiche dont le prix TTC est $prixTTC avec un taux de TVA de $TVA vaut : ";
  echo $resultat . '<br>';
}


function calcul_prix_ttc($TVA, $prixHT)
{
  $resultat = 0;
  echo "Le prix TTC d'un artiche dont le prix HT est $prixHT avec un taux de TVA de $TVA vaut : ";
  echo $resultat . '<br>';
}


function calcul_degre_f($celcius)
{
  $resultat = 0;
  echo "La température $celcius °C vaut " . $resultat . '°F<br>';
}


function calcul_degre_c($fahr)
{
  $resultat = 0;
  echo "La température $fahr °F vaut " . $resultat . '°C<br>';
}


function modulo_centaines_dizaines_unites($entierNaturel)
{
  $centaines = 0;
  $dizaines = 0;
  $unites = 0;
  echo 'Le nombre de secondes ' . $entierNaturel . ' correspond à : <br>';
  echo "<ul>";
  echo "  <li>$centaines centaines</li>";
  echo "  <li>$dizaines centaines</li>";
  echo "  <li>$unites centaines</li>";
  echo "</ul>";
}


function modulo_heures_minutes_secondes($totalSecondes)
{
  $heures = 0;
  $minutes = 0;
  $secondes = 0;
  echo 'Le nombre entier naturel ' . $totalSecondes . ' se décompose en : <br>';
  echo "<ul>";
  echo "  <li>$heures heures</li>";
  echo "  <li>$minutes minutes</li>";
  echo "  <li>$secondes secondes</li>";
  echo "</ul>";
}
