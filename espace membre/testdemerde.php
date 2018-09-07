<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="" method="POST">
        <input type="text" name="pseudo"> pseudo <br>
        <input type="text" name="mail" id=""> mail <br>
        <input type="text" name="mdp" id=""> mdp <br>
        <input type="submit" name="envoyer" id="">
    </form>


    <?php

$bdd = new PDO('mysql:host=localhost; dbname=espace-membre; charset=utf8', 'root', '');



        if (isset($_POST['envoyer'])){
            $insertmembre = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
                    $insertmembre->execute(array($_POST['pseudo'], $_POST['mail'], $_POST['mdp']));
        }
    ?>
</body>
</html>