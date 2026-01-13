<?php
$nom = "alice";
$age = 25;
$prix = 19.99;
$estconnecte = true;

echo "Nom : " . $nom . "<br>";
echo "Age : " . $age . "<br>";
echo "Prix : " . $prix . " €<br>";
echo "Connecte : " . ($estconnecte ? "Oui" : "Non") . "<br>";

var_dump($nom);

$nombre = "10";
$nombreInt = (int)$nombre;
echo "Conversion : " . $nombreInt;
?>
