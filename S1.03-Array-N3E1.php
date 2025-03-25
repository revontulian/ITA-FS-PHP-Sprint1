<?php

//Nivell 3 - Exercici 1
echo "<br>N3 - E1 <br>";

$arrayInt = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function cub($a)
{
    return $a * $a * $a;
}

print_r(array_map("cub", $arrayInt));