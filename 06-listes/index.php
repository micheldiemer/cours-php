<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <!--Sélectionne l'encodage-->
  <meta name="description" content="La base d'une page HTML, pour des étudiants">
  <meta name="keywords" content="HTML, CSS, Javascript">
  <meta name="author" content="Ressources Internet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Les listes en PHP</title>
  <!---- La balise <title> permet d'ajouter
        le titre dans l'onglet -->
  <link rel="icon" type="image/png" href="images/favicon.png" />

  <link rel="stylesheet" type="text/css" href="css/style.css" />

</head>

<body>
  <?php
  /*
  // Utilisation du tableau comme dictionnaire
  $livre1['titre'] = 'Harry Potter';
  $livre1['auteur'] = 'JK Rowling';
  $livre1['ISBN'] = '#72';
  echo '<pre>';
  print_r($livre1);
  echo '</pre>';
  //echo gettype($livre1);

  // Utilisation du tableau comme dictionnaire
  $livre2['titre'] = 'Choupi';
  $livre2['auteur'] = 'T. Courtin';
  $livre2['ISBN'] = '#13';
  echo '<pre>';
  print_r($livre2);
  echo '</pre>';
  //echo gettype($livre2);
  */

  /*
  // Utilisation du tableau comme liste indicée
  // Création d'une liste vide
  $livres = []; // syntaxe alternative : $livres = array();
  //Ajout d'un élément dans la liste
  $livres[] = $livre1;
  $livres[] = $livre2;
  //Alternative : préciser l'indice
  //$nbLivres = 0;
  //$livres[$nbLivres++]= $livre1;
  //$livres[$nbLivres++]= $livre2;

  echo '<pre>';
  print_r($livres);
  echo '</pre>';

  //echo 'Premier livre :';
  //echo '<pre>'; print_r($livres[0]); echo '</pre>';

  //echo 'Second livre :';
  //echo '<pre>'; print_r($livres[1]); echo '</pre>';
  */

  /*
  echo 'Auteur du deuxième livre : ' .
    $livres[1]['auteur'] . '<br>';

  echo 'Titre du deuxième livre : ' .
    $livres[1]['titre'] . '<br>';

  echo 'Nombe d\'éléments dans le tableau : ' .
    count($livres) . '<br>';

  echo 'Nombe d\'informations pour un livre : ' .
    count($livres[0]) . '<br>';

  */

  /*
            // 2 façons de creer une liste
            $listePrenom1 = array('Myckael', 'Antoine', 'Samir', 'Jean-Christophe', 'Evan');
            $listePrenom2 = ['Christiane', 'David', 'Sarah', 'Lucia', 'Alexis'];


            // 2 façons de visualiser une liste (pour dev)
            echo '<pre>';
            print_r($listePrenom1);
            echo '</pre>';

            echo '<pre>';
            var_dump($listePrenom2);
            echo '</pre>';


            // 2 façons d'ajouter un élément a la fin d'une liste
            $listePrenom2[] = 'Cecilia';
            array_push($listePrenom2, 'Lucia', 'Khalid');

            echo '<pre>';
            print_r($listePrenom2);
            echo '</pre>';

            // Appeler un élément d'une liste

            echo $listePrenom2[1];
            */

  ///*
  // Tableau associatif
  $color = [
    'Rouge' => 'ff0000',
    'Vert' => '00ff00',
    'Bleu' => '0000ff',
    'Noir' => '000000',
    'Blanc' => 'ffffff',
  ];
  /*
  echo '<pre>';
  print_r($color);
  echo '</pre>';
  echo $color['Vert'];
  */

  foreach ($color as $cle => $valeur) {
    echo '<p style="background: #f0f0f0; color: #' . $valeur . '; ">';
    echo "Le code hexadecimal de $cle est $valeur</p>";
  }

  echo '<pre>array_keys : clés<br>';
  print_r(array_keys($color));
  echo '</pre>';

  echo '<pre>array_values : valeurs<br>';
  print_r(array_values($color));
  echo '</pre>';

  echo '<pre>asort : tri sur les valeurs<br>';
  asort($color);
  print_r($color);
  echo '</pre>';

  echo '<pre>ksort : tri sur les clés<br>';
  ksort($color);
  print_r($color);
  echo '</pre>';

  $gris = [
    'Gris1' => '020202',
    'Gris2' => 'AAAAAA',
    'Gris3' => 'f0f0f0',
  ];

  $couleurs = array_merge($color, $gris);
  foreach ($couleurs as $cle => $valeur) {
    echo '<p style="background: #f0f0f0; color: #' . $valeur . '; ">';
    echo "Le code hexadecimal de $cle est $valeur</p>";
  }
  //*/
  ?>
</body>

</html>