<?php
  $animaux = ["chat", "chien", "lapin"];
  // print the first string
  echo "premier animal : " . $animaux[0] . "<br>";
  // loop into the arr and print each string followed with br
  foreach ($animaux as $animal) {
    echo "Animal : $animal <br>";
  }
  // new arr 
  $voiture = [
    "marque" => "toyota",
    "modele" => "corolla",
    "annee" => 2020
  ];
  // print the model using the bracket notition;
  echo "modele : " . $voiture["modele"] . "<br>";
  // fruits array
  $fruits = ["pomme", "banane"];
  array_push($fruits, "mangue"); // literly sam as js
  unset($fruits[1]); // its like pop() on js

  // this from me to check the arr
  foreach ($fruits as $fruit) {
    echo "fruit : $fruit <br>";
  }

  echo "N de fruits : " . count($fruits); // count() same function as mysql
?>