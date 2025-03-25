<?php

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