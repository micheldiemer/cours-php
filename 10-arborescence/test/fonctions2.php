<?php

include_once('fonctions1.php');
include_once('fonctions1.php');

function fonction2() {
    echo __FILE__ . ' ' . __FUNCTION__ . ' ' . __LINE__ . '<br>';
}


function fonction2bis() {
    fonction1();
    fonction2();

}