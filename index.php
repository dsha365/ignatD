<?php

use ignateva\Square;

include 'ignateva/Square.php';

$sqr = new Square();
$res = $sqr->solve(1, 4, 4);

if ($res == null) {
    echo "The equation does not have roots";
} else {
    foreach ($res as $el) {
        echo $el;
    }
}