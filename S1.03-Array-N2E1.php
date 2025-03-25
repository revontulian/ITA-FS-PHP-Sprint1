<?php

//Nivell 2 - Exercici 1

echo "<br>N2 - E1 <br>";

$array1 = [1, 2, 3, 4, 5];
$array2 = [6, 7, 3, 1, 10];
$resultingArray1 = [];
$resultingArray2 = [];

$resultingArray1 = array_intersect($array1, $array2);
var_dump($resultingArray1); //verifiquem que la funció retorna els elements comuns
echo "<br>";

$resultingArray2 = array_merge($array1, $array2);
var_dump($resultingArray2); //verifiquem que la funció retorna la mescla dels dos arrays.
echo "<br>";