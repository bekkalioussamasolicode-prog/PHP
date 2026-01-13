<?php
  // declare variables n functions
  $compteur = 0;
  function saluer() {
    echo  "Benjour tout le monde !";
  }
  function addition($a, $b) {
    return $a + $b;
  }
  function bienvenue($nom = "visiteur"){
    echo "<br> Bienvenue " . $nom;
  }
  function incrementer() {
    static $compteur = 0;
    $compteur++;
    echo $compteur;
  }
  // calling the func 
  saluer();
  echo "<br> Somme : " . addition(5, 10);
  bienvenue();
  incrementer();
  incrementer();

?>