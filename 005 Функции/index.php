<?php

function hello ($a = 1, $b = 3) {
    $c = $a + $b;
    return $c + 5;
}
$sum = hello(3,2);
echo $sum;