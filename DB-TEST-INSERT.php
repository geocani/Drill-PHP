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


?>

<form action="" method="POST">
    <input type="text" name="pseudo" placeholder="pseudo">
    <input type="text" name="bio" placeholder="bio">
    <input type="date" name="inscription" id="">
    <input type="submit" name="submit" id="" value="ENVOYER">
</form>
<?php
// EXEC
// if (1 == 1){
//     $req = $bdd->exec("INSERT INTO membres (pseudo, bio, inscription) VALUES ('GEOooofff', 'gdszfh', '2018-09-05')");
// }
?>
<?php
// $pseudo = $_POST['pseudo'];
// $bio = $_POST['bio'];
// $inscription = $_POST['inscription'];

if (isset($_POST["pseudo"]) AND isset($_POST["bio"]) AND isset($_POST["inscription"])){
// PREPARE
    $req = $bdd->prepare("INSERT INTO membres (pseudo, bio, inscription) VALUES (?, ?, ?)");
    $req = $bdd->exec($_POST["pseudo"], $_POST["bio"], $_POST["inscription"]);
}






?>

</body>
</html>