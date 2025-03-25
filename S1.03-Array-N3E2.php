<?php

//Nivell 3 - Exercici 2
echo "<br>N3 - E2 <br>";

$arrayString = ["hola", "que", "tal", "estas", "avui"];

$evenLenStrings = array_filter($arrayString, function ($str) {
    return strlen($str) % 2 == 0;
});

print_r($evenLenStrings);