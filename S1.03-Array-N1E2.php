<?php

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
