# BOUCLES:
* **while** -> "tant que" 
* **do… while** -> while "faire… tant que"
* **for** -> "pour"
* **foreach** -> "pour chaque"

## While

```
<?php
    $x = 0;
    while ($x <= 10){
        echo "boucle" .$x. ".";
        $x++;
    }
?>
```
## Do… While:
```
<?php
    $x = 0;
    $y = 20;

    do{
        echo "$x contien la valeur : " .$x. ".<br>";
        $x++;
    }
    while ($x <= 5);
    do{
        echo "$y contient la valeur : " .$y. ".<br>";
        $y++;
    }
    while ($y <= 5);
?>
```
## For:
```
<?php
    for($x = 0; $x <= 5; $x++){
            echo "boucle " .$x. ".<br>";
    }
?>
```
## Foreach:
```
<?php
    $nombres = array("un", "deux", "trois", "quatre");
    
    foreach ($nombres as $nombre) {
        echo "$nombre <br>";
    }
?>
```



