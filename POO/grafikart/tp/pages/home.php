<?php
	$host = "localhost";
	$bddname = "tp_blog";
	$log = "root";
	$pass = "";
    $bdd = new PDO("mysql: host=$host; dbname=$bddname; charset=utf8", "$log", "$pass");
    
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $allArticle = $bdd->query('SELECT * FROM articles');
    var_dump($allArticle->fetchAll(PDO::FETCH_OBJ));

    // $count = $bdd->exec('INSERT INTO articles SET titre="Mon titre", contenu="un contenu", date="' . date('y-m-d H:i:s') . '"');
    // var_dump($count);
?>


<h1>HOME</h1>
<a href="index.php?p=single">Single</a>