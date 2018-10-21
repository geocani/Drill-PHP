# CONDTION / SWISH:


```
<?php
    function additionne($nb1, $nb2) {
          $resultat = $nb1+$nb2;
          echo $resultat;
        }
    if (isset($_POST['argument1']) AND isset($_POST['argument2'])) {
    additionne($_POST['argument1'], $_POST['argument2']);
    }
?>
```