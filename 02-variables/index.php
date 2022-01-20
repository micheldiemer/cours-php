<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Ressources Internet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Variables en PHP</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <!-- link rel="stylesheet" type="text/css" href="css\reset.css" / -->  <!--Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ--> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />    
         
    </head>
    <body>

        
    
    
        <!-- En PHP on est capable de faire des calculs -->
        <?php
        /*
            echo "<p>";
            echo 10+7; 
            echo "</p>";
        
            $nombre1 = 10;

            echo "<p>";
            echo $nombre1;
            echo "</p>";

            $nombre2 = 5;
            $addition = $nombre1 + $nombre2;

        //    Quand on utilise les guillements, les variables sont interprétées 
            echo "<p>L'addition du nombre1 et du nombre2 est $addition</p>";

            // Quand on utilise des quotes, les variables ne sont pas interprétées
            echo '<p>L\'addition du nombre1 et du nombre2 est $addition</p>';
            echo '<p>L\'addition du nombre1 et du nombre2 est ' . $addition . '</p>';

            $concat = $nombre1 . $nombre2;
            echo '$nombre1 . $nombre2 = ' . $concat . '<br>';
        */
            // Types de valeurs

            // Type int pour les nombres entiers
            /*
            $nombre = 8;
            echo $nombre . ' ' .gettype($nombre) . "<br>";

            // Type double pour les nombres decimaux
            $nombre = 10.5;
            echo $nombre . ' ' . gettype($nombre)  . "<br>";

            // Type double pour les nombres irrationnels

            $nombre = 10/3; // 3.33333333333333
            echo '$nombre=' . $nombre . ' ' . gettype($nombre)  . "<br>";

            // Type float compatible pour les nombres rationnels et irrationnels

            // Type string pour les chaines de caracteres
            $variable = "Ceci est une chaine de caractere";
            echo $variable . ' ' . gettype($variable)  . "<br>";

            // Type string pour un caractere
            $variable="a";
            echo $variable . ' ' . gettype($variable)  . "<br>";

            // Type boolean pour True et False
            // Attention, si une variable est true, alors un echo renverra 1
            // Si la variable est fausse, il renvoie une chaine de caractere vide
            $variable = true;
            echo $variable . ' ' . gettype($variable)  . "<br>";

            $variable = false;
            echo $variable . ' ' . gettype($variable)  . "<br>";
            */

            // Référence par assignation
            /*
            echo '<hr>';
            $fruit1 = "fraise";
            $fruit2 = $fruit1;
            echo "<p>Le fruit1 est $fruit1</p>";
            echo "<p>Le fruit2 est $fruit2</p>";
            echo '<hr>';
            $fruit1 = "abricot";
            echo "<p>Le fruit1 est $fruit1</p>";
            echo "<p>Le fruit2 est $fruit2</p>";
            */

            // Les constantes
            /*
            define("CAPITAL", "Paris");
            const CAPITALE_EUR = "Strasbourg";
            echo CAPITAL . "<br>";
            echo CAPITALE_EUR . "<br>";
            */
            // Une constante ne peut pas être défini une deuxieme fois. Si ça arrive, une erreur est levé
            //define("CAPITAL", "Marseille");
            //const CAPITALE_EUR = "Bruxelles";

            /*
            echo '<h2>Constrantes magiques</h2>';
            echo "Répertoire : " . htmlspecialchars(__DIR__) . '<br>';
            echo "Fichier : " . htmlspecialchars(__FILE__) . '<br>';
            echo "Version PHP : " . PHP_VERSION . '<br>';
            echo "Cette instruction se trouve à la ligne : " . __LINE__ . '<br>';
            echo "Fonction courante : " . __FUNCTION__ . '<br>';
            */
            ///*
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
            echo "Ajouter des sauts de ligne dans le code source : #\n\n\n\n\n#";
            echo '</p>';

            //*/
            // Concatenation

            //echo "coucou" . ", " . "ça va ?" . "<br>";

            //echo 2 . 5 . true . "<br><br>";
           
            // Opérateurs de comparaisons

            echo '<h2>Opérateurs de comparaisons</h2>'. "<br>\n";
            $resultat = 3 == 3; // Operateur == compare deux valeurs.
            
            $resultat = "coucou" == "coucou"; // Il fonctionne aussi avec une chaine de caractere
            
            $resultat = 1 == "1"; // L'opérateur == ne compare pas le type de donnée
            echo "<pre>résultat = ";var_dump($resultat);echo "</pre>";

            $resultat = 1 === "1"; // L'opérateur === compara les valeurs ET les types de valeurs
            echo "<pre>résultat = ";var_dump($resultat);echo "</pre>";
            
            $resultat = 1 === 1; // L'opérateur === compara les valeurs ET les types de valeurs
            echo "<pre>résultat = ";var_dump($resultat);echo "</pre>";

            
            

            $resultat = 5 > 2; // Operateur > strictement superieur a
            $resultat = 5 < 2; // Operateur < strictement inferieur a
            $resultat = 5 >= 5; // Operateur >=  superieur ou egale a
            $resultat = 5 <= 5; // Operateur <= inferieur ou egale a

            $resultat = 5 != 8; // Renvoie true si les deux nombres sont differents
            

            echo '<p>Opérateur !=</p>';
            $resultat = 1 != 5;
            echo "<pre>résultat = ";var_dump($resultat);echo "</pre>";
            $resultat = 1 != "1";  // Résultat = faux, comparaison des valeurs
            echo '<p>Opérateur !==</p>';  
            $resultat = 1 !== "1"; // Résultat = vrai, types différents
            echo "<pre>résultat = "; var_dump($resultat); echo "</pre>";

            
        echo '<h2>Conversions de type et formatage</h2>'. "<br>\n";
        $v = 10009671482.1E-5;
        echo "<pre>";
        echo 'Nombre en notation scientifique : 10009671482.1E-5<br>';
        var_dump(strval($v));    // Transforme une variable en chaîne
        var_dump(intval($v));    // Retourne la valeur numérique entière équivalente d'une variable
        var_dump(floatval($v));  // Convertit une chaîne en nombre à virgule flottante
        var_dump(boolval($v));   // Récupère la valeur booléenne d'une variable
        var_dump(number_format($v,2,',',' ')); // Formate un nombre pour l'affichages
        echo "</pre>";
        /* https://www.php.net/manual/fr/function.strval.php */


        echo "<pre>";
        $x = 1.1 * 10 ** 400;
        var_dump($x);
        $y  = -1.1 * 10 ** 400;
        var_dump($y);
        $z = $x + $y;
        var_dump($z);

        echo 'analyse $x<br>';
        var_dump(is_finite($x));
        var_dump(is_infinite($x));
        var_dump(is_nan($x));

        echo 'analyse $y<br>';
        var_dump(is_finite($y));
        var_dump(is_infinite($y));
        var_dump(is_nan($y));

        echo 'analyse $z<br>';
        var_dump(is_finite($z));
        var_dump(is_infinite($z));
        var_dump(is_nan($z));




        $x1 = 1 * 0;
        var_dump($x1);
        $x2 = -1 * 0;
        var_dump($x2);
        

        echo 'analyse $x1<br>';
        var_dump(is_finite($x1));
        var_dump(is_infinite($x1));
        var_dump(is_nan($x1));

        echo "</pre>";

        
        ?>



    </body>
</html>