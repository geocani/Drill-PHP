<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Exercices</h2> 
<h3>0. Représente en code le fait de devoir ranger sa chambre si elle est sale.</h3>
<?php
ini_set('display_errors', 1);

    $chambre_sale = "ef";
    $msg = [0 =>"Range ta chambre, on dirait la cage d'un bonobo!", 1 => "Ta chambre est trop propre, vis un peu!", 2 => "cest moyen"];

    if ($chambre_sale == "pas ok") {
        echo $msg[0];
    } 
    else if ($chambre_sale == "moyen"){
        echo $msg[2];
    }else{
        echo $msg[1];
    }
?>
<h3>1. Affiche un message de salutation différent selon l'heure courante.</h3>
Si l'heure est entre 05h00 et 9h00 du matin, affiche "Bonjour!".
Si l'heure est entre 9h01 et 12h00, affiche "Bonne journée!".
Si l'heure est entre 12h01 et 16h00, affiche "Bon après-midi!".
Si l'heure est entre 16h01 et 21h00, affiche "Bonne soirée!".
Si l'heure est entre 21h01 et 04h59, affiche "Bonne nuit!".
Astuce: Exploite le fait que l'on puisse combiner des conditions (via les opérateurs AND / OR).

<?php
    $salut = ["bonjour","bonne journée","bon aprem","bonne soirée","bonne nuit","error"];
    $heure = 1530;
    if ($heure >= 5 and $heure < 9 ) {
        echo $salut[0];
    }
    else if ($heure >= 9 and $heure < 12){
        echo $salut[1];
    }
    else if ($heure >= 12 and $heure < 16){
        echo $salut[2];
    }
    else if ($heure >= 16 and $heure < 21){
        echo $salut[3];
    }
    else if ($heure >= 21 and $heure < 5){
        echo $salut[4];
    }else{
        echo $salut[5];
    }

?>

</body>
</html>

