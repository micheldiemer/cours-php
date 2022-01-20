<?php

// echo "<pre>";
// print_r($_POST);
// echo "<pre>";


$mdp = filter_input(INPUT_POST,'mdp',FILTER_SANITIZE_SPECIAL_CHARS);

echo "<p>Merci d'avoir rempli votre mot de passe.<br>Le voila : $mdp</p>";

