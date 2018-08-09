<?php
    // CONDTIONS

    if ($i == 0) {
        echo "i égal 0";
    } elseif ($i == 1) {
        echo "i égal 1";
    } elseif ($i == 2) {
        echo "i égal 2";
    }

    switch ($i) {
        case 0:
            echo "i égal 0";
            break;
        case 1:
            echo "i égal 1";
            break;
        case 2:
            echo "i égal 2";
            break;
        default:
            echo "error";
            break;
    }
?>


