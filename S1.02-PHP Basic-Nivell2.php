<?php

declare(strict_types=1);

//N1 Exercici 1

$int = 5; //integer
$double = 92836; //double
$bool = true; //boolean
$str = "Hello"; //string

define("NAME", "Pablo Canteria"); //constant

echo "<h1>El meu nom és " . NAME . "</h1>";

//N1 Exercici 2   

$intro = "Hello, World!";
$line = "Aquest és el curs de PHP";
echo "$intro";
echo "<br>";

echo strtoupper($intro); //Converteix la cadena a majúscules
echo "<br>";

echo strlen($intro); //Retorna la longitud de la cadena
echo "<br>";

echo strrev($intro); //Inverteix la cadena
echo "<br>";

echo "$intro" . " " . "$line"; //Concatena les dues cadenes amb un espai al mig

echo "<br>";
echo "<br>";

//N1 Exercici 3

//a
$X = 6; //integer
$Y = 13; //integer
$M = 3286; //double
$N = 9283; //double

echo "La variable X conté el valor $X i la variable Y conté el valor $Y <br>";
echo "<br>";

echo "Operacions:";
echo "suma: " . ($X + $Y) . "<br>";
echo "resta: " . ($X - $Y) . "<br>";
echo "multiplicació: " . ($X * $Y) . "<br>";
echo "divisió: " . ($X / $Y) . "<br>";
echo "mòdul: " . ($X % $Y) . "<br>";

echo "La variable M conté el valor $M i la variable N conté el valor $N <br>";
echo "<br>";

echo "Operacions:";
echo "suma: " . ($M + $N) . "<br>";
echo "resta: " . ($M - $N) . "<br>";
echo "multiplicació: " . ($M * $N) . "<br>";
echo "divisió: " . ($M / $N) . "<br>";
echo "mòdul: " . ($M % $N) . "<br>";
echo "<br>";

echo "Per totes les variables: X, Y, M i N. <br>";
echo "Dobles respectius: ". 2*$X . ", " . 2*$Y . ", " . 2*$M . ", " . 2*$N . "<br>";
echo "Suma total: ". ($X + $Y + $M + $N) . "<br>";
echo "Producte total: ". ($X * $Y * $M * $N) . "<br>";

//b
function Calculadora ($a, $b, $c) {
    switch ($c) {
        case "+":
            return $a + $b;
            break;
        case "-":
            return $a - $b;
            break;
        case "*":
            return $a * $b;
            break;
        case "/":
            return $a / $b;
            break;
        default:
            return "Operació no vàlida";
    }
}

//N1 Exercici4

echo "<br>";
echo "Programa per comptar fins a 10 amb un increment de 2 <br>";
comptar();
echo "<br>";

function comptar() {
    $num = 0;
    $delta = 2; //aqui podriem capturar els increments.
    $upperLimit = 10; //aqui podriem capturar fins a quin número volem comptar.

    for ($i = 0; $num < $upperLimit; $i++) {
        $num += $delta;
        echo $num . "<br>";
    }
    return $num;
}

//N1 Exercici5

echo "Programa per verificar el grau d'un estudiant. <br>";
$nota = 75;

if ($nota >= 60) {
    echo "Primera Divisió. <br>";
} elseif ($nota >= 45) {
    echo "Segona Divisió. <br>";
} elseif ($nota >= 33) {
    echo "Tercera Divisió. <br>";
} else {
    echo "Suspès. <br>";
}


//N1 Exercici6

function IsBitten() {
    $random = rand(0, 1);
    if ($random == 0) {
        return true;
    } else {
        return false;
    }
}

//N2 Exercici1

$initialCost = 10; //10 cèntims
$additionalCost = 5; //5 cèntims per minut addicional
$minutes; //minuts de trucada

function CostTrucada(int $minutes) {
    global $initialCost, $additionalCost;
    if ($minutes <=3){
        return $initialCost;
    } else {
        return $initialCost + ($additionalCost * ($minutes - 3));
    }
    
}

//N2 Exercici2

function CostXocolates(int $numXocolates){
    $ChocolateUnitCost = 1; //1€ per xocolata
    return $numXocolates * $ChocolateUnitCost;
}

function CostXiclets(int $numXiclets){
    $XicletUnitCost = 0.5; //1€ per xocolata
    return $numXiclets * $XicletUnitCost;
}

function CostCaramels(int $numCaramels){
    $CaramelUnitCost = 1.5; //1€ per xocolata
    return $numCaramels * $CaramelUnitCost;
}

function TotalCost(int $numXocolates, int $numXiclets, int $numCaramels){
    return CostXocolates($numXocolates) + CostXiclets($numXiclets) + CostCaramels($numCaramels);
}

echo "Programa per calcular el cost de la compra. <br>";
$numXocolates = 2;
$numXiclets = 1;
$numCaramels = 1;

echo "El cost total de la compra és de " . TotalCost($numXocolates, $numXiclets, $numCaramels) . "€. <br>";

?>