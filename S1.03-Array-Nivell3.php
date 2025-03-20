<?php

echo "<h1>Tema 3. Array</h1><br>";
echo "<h2> by Pablo Canteria </h2><br>";

//Nivell 1 - Exercici 1

$firstArray = array(1, 2, 3, 4, 5);

for ($i = 0; $i < count($firstArray); $i++) {
    echo $firstArray[$i] . " ";
}

echo "<br>";

//Nivell 1 - Exercici 2

$X = array(10, 20, 30, 40, 50, 60);
echo "La mida de l'array és " . count($X) . "<br>";


echo "Array original:<br>";
for ($i = 0; $i < count($X); $i++) {
    echo $X[$i] . " ";
}

array_splice($X, 3, 1);
echo "<br>La mida de l'array és " . count($X) . "<br>";

echo "Array sense la posició 3:<br>";
for ($i = 0; $i < count($X); $i++) {
    echo $X[$i] . " ";
}

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

//Nivell 1 - Exercici 4

$infoPersonal = array(
    "nom" => "Pablo Canteria",
    "edat" => 36,
    "email" => "pablo.canteria@gmail.com",
    "menjar favorit" => "burger"
);

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

//Nivell 2 - Exercici 2

$alumnes = [
    "Pablo" => ["Matemàtiques" => 9.8, "Català" => 6.3, "Castellà" => 8, "Anglès" => 7.5, "Educació Física" => 5.5],
    "Laura" => ["Matemàtiques" => 7.8, "Català" => 8.3, "Castellà" => 7, "Anglès" => 6.5, "Educació Física" => 6.5],
    "Marc" => ["Matemàtiques" => 5.8, "Català" => 6.3, "Castellà" => 5, "Anglès" => 5.5, "Educació Física" => 5.5],
    "Anna" => ["Matemàtiques" => 6.8, "Català" => 7.3, "Castellà" => 6, "Anglès" => 6.5, "Educació Física" => 6.5],
];

echo mitjanaAlumne($alumnes);
echo mitjanaTotal($alumnes);

function mitjanaAlumne($alumnes)
{
    $mitjana = 0;
    $total = 0;
    $numAssignatures = 0;

    foreach ($alumnes as $key => $value) {
        $numAssignatures = count($value);
        foreach ($value as $key2 => $value2) {
            $total += $value2;
        }
        $mitjana = $total / $numAssignatures;
        echo "La mitjana de l'alumne " . $key . " és " . $mitjana . "<br>";
        $total = 0;
    }
}

function mitjanaTotal($alumnes)
{
    $mitjana = 0;
    $total = 0;
    $numAssignatures = 0;
    $totalAlumnes = 0;

    foreach ($alumnes as $key => $value) {
        $numAssignatures = count($value);
        foreach ($value as $key2 => $value2) {
            $total += $value2;
        }
        $mitjana = $total / $numAssignatures;
        $totalAlumnes += $mitjana;
        $total = 0;
    }
    $mitjana = $totalAlumnes / count($alumnes);
    echo "La mitjana total de la classe és " . $mitjana . "<br>";
}

//Nivell 3 - Exercici 1
echo "<br>N3 - E1 <br>";

$arrayInt = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function cub($a)
{
    return $a * $a * $a;
}

print_r(array_map("cub", $arrayInt));

//Nivell 3 - Exercici 2
echo "<br>N3 - E2 <br>";

$arrayString = ["hola", "que", "tal", "estas", "avui"];

$evenLenStrings = array_filter($arrayString, function ($str) {
    return strlen($str) % 2 == 0;
});

print_r($evenLenStrings);

//Nivell 3 - Exercici 3
echo "<br>N3 - E3 <br>";

$arrayInt = [1, 2, 3, 4, 5, 6, 7, 0, -3, 10];

$sumPrimes = array_reduce($arrayInt, function ($carry, $item) {
    if (isPrime($item)) {
        return $carry + $item;
    } else {
        return $carry;
    }
});

echo "La suma dels nombres primers de l'array és " . $sumPrimes . "<br>";

function isPrime($a)
{
    if ($a == 1) {
        return false;
    }
    for ($i = 2; $i <= $a / 2; $i++) {
        if ($a % $i == 0) {
            return false;
        }
    }
    return true;
}
?>
