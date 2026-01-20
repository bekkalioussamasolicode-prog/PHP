<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form  method="get">
    <input type="text" name="search" placeholder="Search by title">
    <button type="submit">Search</button>
</form>


<?php
  $livres = [

    [

        "titre" => "Apprendre PHP",

        "auteur" => "Fatine Chebab",

        "annee" => 2024,

        "prix" => 120,

        "disponible" => true

    ],

    [

        "titre" => "JavaScript pour débutants",

        "auteur" => "Ali Ahmed",

        "annee" => 2023,

        "prix" => 100,

        "disponible" => false

    ],

    [

        "titre" => "HTML & CSS",

        "auteur" => "Sara Benali",

        "annee" => 2022,

        "prix" => 80,

        "disponible" => true

    ],

    [

        "titre" => "Language c",

        "auteur" => "Med Alae",

        "annee" => 2022,

        "prix" => 899,

        "disponible" => true

    ],
    
    [

        "titre" => "Python",

        "auteur" => "Mouad Mouad",

        "annee" => 2022,

        "prix" => 40,

        "disponible" => false

    ],

    [

        "titre" => "React",

        "auteur" => "Soulaiman Chat",

        "annee" => 2020,

        "prix" => 10,

        "disponible" => true

    ],

    [

        "titre" => "Germany",

        "auteur" => "Salah Massad",

        "annee" => 2019,

        "prix" => 400,

        "disponible" => true

    ],

    [

        "titre" => "Machine leraning",

        "auteur" => "Oussama Bakkali",

        "annee" => 2006,

        "prix" => 999,

        "disponible" => false

    ],

    [

        "titre" => "Language Go",

        "auteur" => "Yassir Mssbahi",

        "annee" => 2025,

        "prix" => 4000,

        "disponible" => true

    ],

    [

        "titre" => "Assembly",

        "auteur" => "Houssam el Mouden",

        "annee" => 2006,

        "prix" => 899,

        "disponible" => true

    ],

];
// i declare it here so no error show when it empty
$search = "";
if (isset($_GET['search'])) {
    // strtolower make the input value lowercase
    $search = strtolower($_GET['search']);
}
$total = 0;
foreach ($livres as $livre) {
        // first check if it not empty
        if ($search != "") {
        // here i search if value is on the arr using strposition
        if (strpos(strtolower($livre['titre']), $search) === false ) {
            // false here make index 0 works
            continue;
        }
    }
    $shelf = "<div class='shelf'>";
    $shelf .= "<p>Titre de livre : {$livre['titre']}</p>";
    $shelf .= "<p>Auteur de livre : {$livre['auteur']}</p>";
    $shelf .= "<p>Annee : {$livre['annee']}</p>";
    $shelf .= "<p>Prix de livre : {$livre['prix']} £</p>";
    $shelf .=  $livre['disponible'] ? "<span class='available'>Disponible</span>" : "<span class='unavailable'>Non Disponible</span>";
    $shelf .= "</div>";
    echo $shelf;
    if ($livre['disponible']) {
        $total += $livre['prix'];
    }
}
echo "<p id='total'>Total des livres disponibles : $total</p>";



?>
  
</body>
</html>