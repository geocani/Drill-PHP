<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .cont{
        text-align: center;
    }
    .erreur{
        color: red;
    }
    .succes{
        color: green;
    }

</style>
<body>


<?php
    // $bdd = new PDO('mysql:host=localhost; dbname=espace-membre; charset=utf8', 'root', '');
    $bdd = new PDO("mysql: host=localhost; dbname=bdtest; charset=utf8", "root", "");
    // Isset -> Si la variable existe.
    if (isset($_POST['envoyer'])){

        // Sanitisation.
        $pseudo = htmlspecialchars($_POST['pseudo']); // htmlspecialchars -> Elimite les balise html.
        $email = htmlspecialchars($_POST['email']);
        $mdp1 = sha1($_POST['mdp1']); // sha1 -> hachage du mot de passe.
        $mdp2 = sha1($_POST['mdp2']);

        if (!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['mdp1']) AND !empty($_POST['mdp2'])) {

            // Verification.
            $pseudolenght = strlen($pseudo);
            if ($pseudolenght <= 100) {
                if ($mdp1 == $mdp2) {

                    $insertmembre = $bdd->prepare("INSERT INTO tables(nom, prenom, age) VALUES(?, ?, ?)");
                    $insertmembre->execute(array($pseudo, $email, $mdp1));
                    $succes = "Vous êtes correctement inscrit!";
                } else {
                    $erreur = "Les mdp ne sont pas les memes.";
                }
            } else {
                $erreur = "Pseudo ne doit pas dépasser 100.";
            }
        } 
        else {
            $erreur = "Tout les champs doivent etre complété.";
        }
    }

?>










    <br><br><br>
    <div class="cont">
        <h2>Inscription</h2>
        <br>
        <form action="" method="POST">
            <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" value="<?php if(isset($pseudo)) {echo $pseudo;} ?>"><br>
            <input type="text" name="email" id="email" placeholder="Email" value="<?php if(isset($email)) {echo $email;} ?>"><br>
            <input type="text" name="mdp1" id="mdp1" placeholder="Mot de passe"><br>
            <input type="text" name="mdp2" id="mdp2" placeholder="Confirmer le mot de passe"><br><br>
            <input type="submit" name="envoyer" id="envoyer" value="Envoyer">
        </form>
        <?php
            if (isset($erreur)){
                echo "<p class='erreur'>" . $erreur . "</p>";
            };
            if (isset($succes)){
                echo "<p class='succes'>" . $succes . "</p>";
            }

        ?>
    </div>
</body>
</html>