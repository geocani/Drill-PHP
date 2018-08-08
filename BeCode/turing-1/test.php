<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post"> 
Nom : <input type="text" name="nom" size="12"><br> 
Prénom : <input type="text" name="prenom" size="12"> 
<input type="submit" value="OK"> 


<?php 
$prenom = $_POST['prenom']; 
$nom = $_POST['nom']; 
print("<center>Bonjour $prenom $nom</center>"); 
?> 

</body>
</html>

