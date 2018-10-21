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
    // $bdd = new PDO("mysql: host=localhost; dbname=surichat; charset=utf8", "root", "");
    // $preparation = $bdd->prepare('INSERT INTO membres(login, pass, email) VALUES(?, ?, ?)');
    // $preparation->execute(array($login, $pass1, $email));

    if (isset($_POST['envoyer'])){

        $login = $_POST['login'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];
        $email = $_POST['email'];
    }
?>
    


    <h2>Formulaire d'inscription</h2>
    <br>
    <form action="" method="POST">
        <input type="text" name="login" placeholder="Login"> <br>
        <input type="text" name="pass1" id="" placeholder="Mot de passe"> <br>
        <input type="text" name="pass2" id="" placeholder="Confirmez votre mot de passe"> <br>
        <input type="text" name="email" id="" placeholder="Email"> <br>
        <input type="submit" name="envoyer" id="">
    </form>



</body>
</html>


