<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Ressources Internet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Fonctions prédéfinies en PHP</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" type="text/css" href="css/reset.css" />  <!--Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ--> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />    
         
    </head>
    <body>
        <?= '' /* date('Y') . "<br>"; */ ?>
        <?= '' /* date("j/m/Y", 1181030400) . "<br>";  */ ?> <!-- Date prends en premier argument le format de la date (voir doc), et en deuxieme argument le timestamp de la date voulu -->
        <?=  '' /* time() . "<br>"; */ ?> <!-- Le time  stamp, donné par la fonction time(), est le nombre de seconde entre une date donnée et le 1er Janvier 1970 a minuit -->

        <?php
            /*
            // strlen permet de connaitre la longueur d'une chaine de caractère
            $chaine = "Je te défie de compter mes caractères !";
            echo $chaine . '<br>';  
            echo strlen($chaine) . ' ' . mb_strlen($chaine) ."<br>";

            echo mb_substr( $chaine , 6 , 5 ) . '<br>';
            */

            // Fonction isset() permet de tester l'existence
                // Elle renvoie true si la vairable existe
                // Elle renvoie false si la variable n'existe pas

            /*
            //$message_erreur="";
            $message_erreur="Il y a eu une erreur";

            //echo $message_erreur;
            echo 'est-ce que $message_erreur est définie : ';
            var_dump(isset($message_erreur));
            echo '<br>';

            if (isset($message_erreur)){
                echo '$message_erreur : ' . $message_erreur . '<br>';
            }

            // Fonction empty() permet de tester si la variable est vide ou non
                // Renvoie 1 si la chaine de caractere est vide
                // False sinon

            echo 'est-ce que $message_erreur est vide : ';
            var_dump(empty($message_erreur));
            echo '<br>';
            */

                        
            $chaine = "Coucou Je suis une chAine faites pour le tEst !<br>";
            echo mb_strtolower($chaine) . '<br>';
            $chaineModifie = str_replace("t","b",$chaine);
            echo $chaineModifie . '<br>';

            
            testVar(0.05);
            testVar(120);
            testVar(null);
            testVar(array());
            testVar('test');
            testVar('143.67');

            function testVar($var) {

                echo '<pre>';
                var_dump($var);
                echo is_int($var) ? ' int' : '';
                echo is_integer($var) ? ' int' : '';
                echo is_long($var) ? ' long' : '';
                echo is_double($var) ? ' double' : '';
                echo is_bool($var) ? ' bool' : '';
                echo is_null($var) ? ' null' : '';
                echo is_float($var) ? ' float' : '';
                echo is_object($var) ? ' object' : '';
                echo is_string($var) ? ' string' : '';
                echo is_array($var) ? ' array' : '';
                echo is_numeric($var) ? ' numeric' : '';
                echo '</pre>';

                /*
                // fonctions concernant les float
                is_finite
                is_infinite
                is_nan
                */

                /*
                // fonction particulières
                is_callablee
                is_countable
                is_iterable
                */

                /*
                // fonctions concernant les objets
                is_scalar
                is_object
                is_subclass_of
                is_a
                */

                /*
                // fonctions concernnat les fichiers
                is_ressource
                is_readable
                is_writable
                is_writeable
                is_link
                is_ressource
                is_dir
                is_file
                is_uploaded_file
                is_executable
                */
            
            }

        ?>

    </body>
</html>