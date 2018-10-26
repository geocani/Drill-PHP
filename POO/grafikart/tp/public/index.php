<?php
require('../app/class.php');


if (isset($_GET['p'])) { // Si '?p=' dans l'url 
    $p = $_GET['p']; // renvois à la page définie
} else {
    $p = 'home'; // Sionon renvois à la page par défaut 
}


ob_start();
if ($p === 'home') {
    require '../pages/home.php';
} elseif ($p === 'single') {
    require '../pages/single.php';
}
$content = ob_get_clean();
require '../pages/templates/default.php';