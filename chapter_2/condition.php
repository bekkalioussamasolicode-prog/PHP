<?php
$age = 17;
$note = 14;
$jour = "Vendredi";
if ($age >= 18) {
  echo "Vous etes majeur.";
} else {
  echo "Vous etes mineur.";
}
if ($note >= 16) {
  echo "tres bien";
} elseif ($note >=10) {
  echo "Passable";
} else {
  echo "Echec";
}
switch ($jour) {
    case "Lundi":
        echo "Début de semaine";
        break;
    case "Vendredi":
        echo "Dernier jour avant le week-end";
        break;
    default:
        echo "Jour normal";
}