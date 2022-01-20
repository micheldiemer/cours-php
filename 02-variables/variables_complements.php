<h2>les variables </h2>
<p>Les variables en PHP comme en algorithmie permettent de sauvegarder des valeurs temporairement en mémoire pour les réutiliser plus tard</p>

<?php
$nom = 'Marc';
echo $nom;
?>

<h2>On peut aussi faire de l'arithmétique en PHP</h2>
<?php
$note = 10;
$note2 = 15;
echo ($note + $note2)/2;
?>

<h2>Addition avec chaine de caractère</h2>
<?php
$prenom = 'Marc';
$nom = 'Lavoine';
//echo $prenom + $nom;
// Fatal error: Uncaught TypeError: Unsupported operand types: string + string
?>
<p>Cela ne fonctionne pas, si on veut additionner des chaines de caractères, il faut utiliser la concatenation</p>

<?php
$prenom = 'Marc';
$nom = 'Lavoine';
echo $prenom . ' ' . $nom;
?>

<h2>Différence entre guillemets simples et double</h2>
<p>\n permet de créer une plus jolie page de "visualisation de la source".</p>

<?php
$prenom = 'Marc';
$nom = 'Lavoine';
echo $prenom . "\n" . $nom;
?>

<p>Une variable dans un guillemet double sera interprété</p>
<?php
$prenom = 'Marc';
$nom = 'Lavoine';
echo "$prenom $nom";
?>

<p>Une variable avec des guillets simples n'est pas interprétée</p>
<?php
$prenom = 'Marc';
$nom = 'Lavoine';
echo '$prenom $nom';
?>

<p>Pour mettre des guillets simples dans des guillemets simples, il faut antislash</p>
<?php
$prenom = 'Marc';
$nom = 'Lavoine';
echo '$prenom\' $nom';
?>

<h2>d'autres type variables</h2>
<?php
$boolean = true;
$vide = null;
?>

<h2>Exercice</h2>
<?php
$prenom = "Lola";
$nom = "MISHKA";
$note1 = 10;
$note2 = 20;
$moyenne = ((10+20)/2);

echo 'Bonjour' .' '. $prenom . ' ' . $nom .' '. 'vous avez eu' .' '. $moyenne .' '.'de moyenne';
echo "\nBonjour $prenom $nom vous avez eu $moyenne de moyenne";
?>