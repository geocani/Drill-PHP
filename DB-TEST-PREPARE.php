<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php 
    $bdd = new PDO("mysql: host=localhost; dbname=bdtest; charset=utf8", "root", ""); // Connection a la base de donnée 

    // Récuperer dans la bdd
    $req1 = $bdd->query("SELECT id, pseudo, bio FROM membres"); // Selectionner certaines infos
    $req2 = $bdd->query("SELECT * FROM membres"); // Selectionner toute les infos
    $req3 = $bdd->query("SELECT * FROM membres WHERE pseudo = 'pseudo4' AND id = '2'"); // Selectionner certaine ligne
    $resultat  = $req2->fetch(); // Récuperer

    echo $resultat['id'] . ". " . $resultat['pseudo'] . "<br>"; // Afficher une ligne d'élément

    while($resultat = $req3->fetch()){
        echo $resultat['id'] . ". " . $resultat['pseudo'] . ". " . $resultat['inscription'] . "<br/>"; // Afficher toutes les lignes d'élément
    }
?>


<!-- Sous forme de tableau -->
<table border="1">
    <?php
        while($resultat = $req2->fetch()){
    ?>  
    <tr>
        <td><?php echo $resultat['id'] ?></td>
        <td><?php echo $resultat['pseudo'] ?></td>
        <td><?php echo $resultat['inscription'] ?></td>
    </tr>
    <?php
    }
    ?>
</table>


</body>
</html>