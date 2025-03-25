<?php

//Nivell 1 - Exercici 3

echo "<br>N1 - E3 <br>";
$array = ["hola", "Php", "html"];
$char1 = "h";
$char2 = "l";

echo "El resultat d'aplicar la funció desenvolupada és: " . findCharInEachArray($array, $char1) . "<br>";
echo "El resultat d'aplicar la funció desenvolupada és: " . findCharInEachArray($array, $char2) . "<br>";

function findCharInEachArray($array, $char)
{
    $resultingArray = [];
    $foundEverywhere = false;
    $resultat = "";

    for ($j = 0; $j < count($array); $j++) {
        if (findCharInStr($array[$j], $char)) {
            $foundInArray = array_push($resultingArray, true);
        } else {
            $foundInArray = array_push($resultingArray, false);
        }
    }

    for ($k = 0; $k < count($resultingArray); $k++) {
        if ($resultingArray[$k] == false) {
            $foundEverywhere = false;
            $resultat = "No s'ha trobat aquest caràcter en tots els elements de l'array";
            break;
        } else {
            $foundEverywhere = true;
            $resultat = "Sí s'ha trobat aquest caràcter en tots els elements de l'array";
        }
    }
    return $resultat;
}

function findCharInStr($str, $char)
{
    $found = false;

    for ($i = 0; $i < strlen($str); $i++) {
        if (strpos($str[$i], $char) !== false) {
            $found = true;
            break;
        }
    }
    return $found;
}