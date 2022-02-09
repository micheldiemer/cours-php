<?php
// Contrôleur principal

session_start();
if (($_SESSION['prevPage'] ?? '') === $_SERVER['REQUEST_URI'] && !str_ends_with($_SERVER['REQUEST_URI'], 'index.php')) {
  header('Location: index.php');
  die();
}
$_SESSION['prevPage'] = $_SERVER['REQUEST_URI'];

const BASE_INCLUDE = '';
const BASE_URL = 'http://localhost/cours-php/exercices-php/15-connexion_bdd_mvc/student_mvc/';

require_once(BASE_INCLUDE . 'vue/head.php');
require_once(BASE_INCLUDE . 'modele/connect_bdd.php');

resetDb();

$table = $_GET['table'] ?? '';
$id = intval($_GET['id'] ?? -1);
$op = $_GET['op'] ?? '';


switch ($table) {
  case 'tag':
    require(BASE_INCLUDE . 'controller/TagController.php');
    break;
  default;
    require(BASE_INCLUDE . 'controller/TagController.php');
    break;
}

require_once(BASE_INCLUDE . 'vue/foot.php');
