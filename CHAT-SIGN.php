<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php 
    $bdd = new PDO("mysql: host=localhost; dbname=bdtest; charset=utf8", "root", ""); // Connection BDD

    if (isset($_POST['inscription'])){
        if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['pass']) AND !empty($_POST['confpass'])){
            echo "ok";
        } else {
            $erreur = "pas ok";
            echo $erreur;
        }
    }
?>
<body>
 <h1>INSCRIPTION:</h1>
 <form action="" method="post">
    <input type="text" name="pseudo" id="" placeholder="Ton Pseudo"><br>
    <input type="email" name="mail" id="" placeholder="Ton Mail"><br>
    <input type="password" name="pass" id="" placeholder="Ton pass"><br>
    <input type="password" name="confpass" id="" placeholder="Confirm pass"><br>
    <input type="submit" name="inscription" value="ENVOYER">
 </form>
</body>
</html>