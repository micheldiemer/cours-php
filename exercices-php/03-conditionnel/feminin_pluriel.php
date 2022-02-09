<?php


function feminin_pluriel($mot, $feminin = false, $pluriel = false)
{
  $resultat = $mot;
  /* COMPLETER ICI
     AJOUTER un e et/ou un s à $resultat selon les parmamètres $feminin et $pluriel
  */
  return $resultat;
}


const MOT = 'sucré';
echo 'Le miel est ' . feminin_pluriel(MOT) . '<br>';
echo 'La configure est ' . feminin_pluriel(MOT, true) . '<br>';
echo 'Les fruits sont ' . feminin_pluriel(MOT, false, true) . '<br>';
echo 'Les framboises sont ' . feminin_pluriel(MOT, true, true) . '<br>';
