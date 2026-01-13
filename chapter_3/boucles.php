<?php 
  $j = 1;
  // print from 1 to 10
  for ($i = 1; $i <= 10; $i++) {
    echo "N : $i <br>";
  }
  // print what in echo until j reach 5
  while ($j <= 5) {
    echo "Iteration : $j <br>";
    $j++;
  }
  // dsiplay each animal in the animaux array
  $animaux = ["Chat", "Chien", "Lapin"];
  foreach ($animaux as $animal) {
    echo "Animal : $animal <br>";
  }
  // skip 5 stops at 8
  for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) continue; // saute le 5
    if ($i == 8) break; // arrête à 8
    echo "Valeur : $i <br>";
  }
  
?>
