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

    $bdd = new PDO("mysql: host=localhost; dbname=bdtest; charset=utf8", "root", "");
    if (isset($_POST['envoyer'])){
        
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];

        $preparation = $bdd->prepare('INSERT INTO tables(nom, prenom, age) VALUES(?, ?, ?)');
        $preparation->execute(array($nom, $prenom, $age));
    }

?>



    <form action="" method="POST">
        <input type="text" name="nom" id=""> nom <br>
        <input type="text" name="prenom" id=""> prenom<br>
        <input type="number" name="age" id=""> age <br>
        <input type="submit" name="envoyer" id="" value="envoyer">
    </form>
</body>
</html>