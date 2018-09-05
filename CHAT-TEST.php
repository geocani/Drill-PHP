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

    if (isset($_POST['pseudo']) AND isset($_POST['message'])){
        $pseudo = $_POST['pseudo'];
        $message = $_POST['message'];

        $req_insert = $bdd->prepare('INSERT INTO testchat(pseudo, message) VALUE(?, ?)');
        $req_insert ->execute(array($pseudo, $message));
    }
?>
<body>
    <form action="" method="POST">
        <input type="text" name="pseudo" id="" placeholder="Pseudo"><br>
        <input type="text" name="message" id="" placeholder="Message"><br>
        <input type="submit" value="ENVOYER">
    </form>

    <?php
        $allmsg = $bdd->query('SELECT * FROM testchat ORDER BY id DESC');
        while($msg = $allmsg->fetch()){
    ?>
    <b><?php echo $msg['pseudo'] ?>: </b><?php echo $msg['message'];?>. <br>
    <?php    
    }
    ?>
</body>
</html>