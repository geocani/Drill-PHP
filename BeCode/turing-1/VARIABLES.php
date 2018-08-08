<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Exercices
Initie une variable décrivant ton prénom.
Ensuite, sur une seconde ligne, initie une variable qui représente ton âge.
Ensuite, à la ligne suivante, initie une variable qui décrive si tu as faim ou pas.
Ensuite, à la ligne suivante, initie une variable qui décrive la couleur de tes yeux.
Ensuite, à la ligne suivante, initie une variable qui décrive ta famille 
(avec une variable Tableau, dont chaque entrée est le prénom d'un membre de ta famille).

<?php
ini_set('display_errors', 1);

    $prenom = "Geoffrey";
    $age = 33;
    $faim = true;
    $couleur_yeux = "bleu";
    $tab_famille = [0 => 'Lionel', 1 => "Corentin", 2 => "Martine",3 => "Etienne"];
    echo $tab_famille[2];
?>
</body>
</html>

