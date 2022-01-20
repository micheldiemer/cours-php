# PHP

## Les bases

### Balise php et commentaire

```php
<?php
// commentaire mono-ligne
# commentaire mono-ligne
/*
commentaire multi-ligne
*/
?>
```

### Combiner PHP et HTML

Tout code HTML valide est du code PHP valide.
Le moteur php renvoie directement ce qui n'est pas entre balise `php`.  
Le moteur php interprète ce qui se trouve entre `<?php` et `?>`.

Attention :

- si un fichier ne contient que du code php, mettre la balise `<?php` immédiatement en tête de fichier
- si un fichier se termine par du code php, ne pas refermer la balise php, ne pas mettre le `?>` pour éviter d'envoyer des caractères blancs

### Instruction echo

Les instructions PHP se terminent par un ;

```php
<html>
<?php
   echo '<p>Hello, world!</p>';
?>
</html>
```

### Raccourci avec ?=

```php
<html>
<p><?= 'Hello, world' ?></p>
</html>
```

### Déclaration de constante

```php
const CAPITALE_EUR = 'Strasbourg';
echo CAPITALE_EUR;
```

### Déclaration de variable

```php
$v1 = true;         // Booléen
$v2 = 5;            // Entier
$v3 = 3.14;         // Float
$v4 = 'bonjour';    // Chaîne de caractères

echo $v1;
```

### Affichage détaillé avec var_dump

```php
echo '<pre>';
var_dump($v1);
echo '</pre>';
```

### Opérateurs booléens

```php
echo '<pre>';
$bool_true = true;
$bool_false = false;
// non logique
echo 'non logique !$bool_true'; var_dump(!$bool_true); echo '<br>';
echo 'non logique !$bool_false'; var_dump(!$bool_false); echo '<br>';
// et logique
echo 'et logique && ';  var_dump($bool_true && $bool_false); echo '<br>';
// ou logique
echo 'ou logique || ';  var_dump($bool_true || $bool_false); echo '<br>';
echo '</pre>';
```

### Concaténation de chaîne de caractères

```php
$nom = 'Dupond';
$prenom = 'Jean';
echo 'Bonjour ' . $nom . ' ' . $prenom;
```

### Différence entre ' et "

```php
$variable = 'valeur';
echo '<h2>Caractères spéciaux avec apostrophe</h2>'. "<br>\n";
echo 'Guillement dans apostrophe = "'. "<br>\n";
echo 'Apostrophe dans apostrophe avec le caractère \ : \' FIN'. "<br>\n";
echo 'Balise html interprétée : <b>test</b>'. "<br>\n";
echo htmlspecialchars('Balise html avec htmlspecialchars : <b>test é €</b>'). "<br>\n";
echo 'Avec \' on affiche $variable' . "<br>\n";
//echo htmlentities('Balise html avec htmlentities : <b>test é €</b>') . "<br>\n";

echo '<h2>Caractères spéciaux avec guillement</h2>'. "<br>\n";
echo "Avec des guillements on peut afficher des apostrophes  :'" . "<br>\n";
echo "Afficher $variable : \$variable  " . "<br>\n";
echo "Afficher un backslash : doublebackslash \\  ". "<br>\n";
echo "Afficher un guillement : attr=\"test\"  ". "<br>\n";
echo "Ajouter des sauts de ligne dans le code source : #\n\n\n\n\n";
echo '</p>';
```

### Tirage d'un nombre aléatoire

```php
$alea1 = rand(1,100);
```

### Opérateurs mathématiques

```php
$entier1 = rand(1,100);
$entier2 = rand(1,100);
$chiffre = 10;
echo '+ addition ' . $entier1 + $entier2 . '<br>';
echo '- soustraction ' . $entier1 - $entier2 . '<br>';
echo '_ multiplicaton ' . $entier1 * $entier2 . '<br>';
echo '/ division ' . $entier1 / $entier2 . '<br>';
echo '** exposant $entier1² = ' . $entier1 ** 2 . '<br>';
echo 'sqrt racine carrée ' . sqrt($entier1). '<br>';
```

### Opérateurs mathématiques sur les entiers uniquements

```php
echo '$entier1 = ' . $entier1 . ' $entier2 = ' . $entier2 . '<br>';
echo '% reste de la division entière ' . $entier1 % 10 . '<br>';
echo 'intdiv division entière ' . intdiv($entier1, 10) . '<br>';
```

### Opérateurs mathématiques sur les float/double

```php
$x = 10 ** 5000;
echo '<pre>Is_finite : '; var_dump(is_finite($x)); echo '</pre>';
echo '<pre>Is_infinite : '; var_dump(is_infinite($x)); echo '</pre>';
echo '<pre>Is_nan : '; var_dump(is_nan($x)); echo '</pre>';
$y = 1/3;
echo 'Toujours arrondir les float/double : ' . round($y,3);
echo 'Affichage formaté avec number_format ' .  number_format($v,2,',',"\u{202F}");
```

### Opérateurs de comparaison

````php
$nb1 = rand(1,6);
$nb2 = rand(1,6);
echo '<pre>';
echo "\$nb1 = $nb1 \$nb2 = $nb2<br>";
echo 'égal == $nb1 == $nb2 '; var_dump($nb1 == $nb2 ); echo '<br>';
echo 'différent != $nb1 != $nb2 '; var_dump($nb1 != $nb2 ); echo '<br>';
echo 'inférieur $nb1 < nb2 '; var_dump($nb1 < $nb2 ); echo '<br>';
echo 'supérieur $nb1 > nb2 '; var_dump($nb1 > $nb2 ); echo '<br>';
echo 'inférieur ou égal $nb1 <= $nb2 '; var_dump($nb1 <= $nb2 ); echo '<br>';
echo 'supérieur ou égal $nb1 >= $nb2 '; var_dump($nb1 >= $nb2 ); echo '<br>';
echo '</pre>';
```

## Instructions

### If

```php
$condition = true;
if($condition) {
  echo 'La condition est vraie';
} else {
  echo 'La condition est fausse';
}
echo '<br>';
````

### Opérateur ternaire (condition) ? (valeur-si-vrai) : (valeur-si-faux)

```php
$condition = true;
echo ($condition ? 'La condition est vraie' : 'La condition est fausse') . '<br>';
```

### Switch

```php
$couleur_feu = 'vert';
switch ($couleur_feu) {
  case 'vert':
    echo 'je passe';
    break;
  case 'orange':
    echo 'attention!';
    break;
  case 'rouge':
    echo 'stop!';
    break;
  default:
    echo 'erreur couleur de feu inconnue';
    break;
}
echo '<br>';
```

## For

```php
echo '<table>';
for($i = 1 ; $i <= 10 ; $i++) {
  echo '<tr>';
  for($j = 1 ; $j <= 10 ; $j++) {
    echo '<td>' . $i*$j . '</td>';
  }
  echo '</tr>';
}
echo '</table>';
```

## While

```php
const CIBLE = 6;
const MIN = 1;
const MAX = 6;
$essais = 0;
$de = rand(MIN,MAX);
$essais++;
echo "Essai nº $essais tirage $de<br>";
while($de != CIBLE) {
  $essais++;
  $de = rand(MIN,MAX);
  echo "Essai nº $essais tirage $de<br>";
}
echo 'Il vous a fallu ' . $essais . ' tirages pour obtenir ' . CIBLE . '<br>';
```

## Do While

```php
const CIBLE = 6;
const MIN = 1;
const MAX = 6;
$essais = 0;
do {
  $de = rand(MIN,MAX);
  $essais++;
  echo "Essai nº $essais tirage $de<br>";
} while($de != CIBLE);
echo 'Il vous a fallu ' . $essais . ' tirages pour obtenir ' . CIBLE . '<br>';
```

## Définition de fonctions

```php
function maPremiereFonction() {
  return 42;
},
echo maPremiereFonction() . '<br>';
```

```php
function formatage($nom, $prenom) {
  // la fonction ne fait pas de echo
  // c'est le programme appelant qui fait le echo
  //  mb_strtoupper chaîne en majuscules
  //  ucfirst première lettre en majuscule
  return 'Nom : ' . mb_strtoupper($nom) . '<br>Prénom : ' . ucfirst($prenom);
}
echo formatage('Dupond','Jean') . '<br>';

function choisirParmi($a, $b, $c) {
  $choix = rand(1,3);
  if($choix == 1) return $a;
  if($choix == 2) return $b;
  if($choix == 3) return $c;
}
echo choixirParmi('vert','orange','rouge') . ' '. choixirParmi('vert','orange','rouge') . ' ' . choixirParmi('vert','orange','rouge') . '<br>';
```

## include, require, include_once, require_once

Factorisation de code avec include / require / include_once / require_once

- include : le plus simple, émet un warning si le fichier n'existe pas, risque d'inclure le fichier deux fois
- include_once : si le fichier est déjà inclus, ne le remets pas
- require : émet une erreur si le fichier n'existe pas
- require_once : n'inclus qu'une seule fois le ficher, émet une erreur

```php
// fichier mydump.php
function mydump($var) {
  echo '<pre>'; var_dump($var); echo '</pre>';
}

// autres fichiers php
require_once('mydump.php');
$var = 'uneVariable';
mydump($var);
```
