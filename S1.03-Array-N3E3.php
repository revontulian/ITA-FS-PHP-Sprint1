<?php

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
