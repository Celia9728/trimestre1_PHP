<?php

/**
 *  sintaxis del while:
 * 
 * while(){
 * 
 * }
 * 
 * do{
 * 
 * }while();
 */

/* for ($i = 0; $i < 100; $i++) {

    $numeroRand = (rand(1, 50));
    $esPrimo = true;


    for ($j = 2; $j < $numeroRand; $j++) {
        if ($numeroRand % $j == 0) {
            $esPrimo = false;
        }
    }
    if ($esPrimo) {
        echo "El numero $numeroRand es primo <br>";
    } else {
        echo "El numero $numeroRand es NO primo <br>";
    }
}

echo "<hr>"; */


/* $primerPrimo = false;
while (!$primerPrimo) {
    $numeroRand = (rand(1, 50));
    $esPrimo = true;


    for ($j = 2; $j < $numeroRand; $j++) {
        if ($numeroRand % $j == 0) {
            $esPrimo = false;
        } else {
            $primerPrimo = true;
        }
    }
    if ($esPrimo) {
        echo "El numero $numeroRand es primo <br>";
    } else {
        echo "El numero $numeroRand es NO primo <br>";
    }
} */

echo "<br>";
// Sumar numeros random del 1 al 20 hasta que la suma total sea 100

/*$suma = 0;
$contador = 0;
do {
    $num = rand(1, 20);
    $contador++;
    echo "Intento numero $contador : numero = $num, suma total = $suma <br>";
} while ($suma <= 100);*/

// Sacar los primeros 20 multiplos de 7
$contador = 1;
$numero = 0;
echo "<ol>";
while ($contador <= 20) {
    echo "<li>" . ($contador * 7) . "</li>";
    $contador++;
}
echo "</ol>";


// Buscar un numero secreto con un rand() y de un bucle while
// Si el numero no es el mismo que el secreto, y lo decimos por pantalla por lista no ordenada
// Cuando se encuentre sacamos el numero secreto en un h2

$numeroSecreto = 9;

echo "<ul>";
while ($numero != $numeroSecreto) {
    $numero = rand(1, 20);
    if ($numero != $numeroSecreto) {
        echo "<li>" . "El numero $numero no es el secreto" . "</li>";
    }
}
echo "</ul>";

echo "<h2>" . "El numero secreto es : $numeroSecreto" . "</h2>";


// Numeros acomulativos hasta el 100 y meterlo en tabla

$acum = 0;
$contador = 0;
echo "<table border = '1'>";
while ($acum <= 100) {
    $numeroRandom = rand(1, 10);
    $acum += $numeroRandom;
    $contador++;
    echo " <tr> <th colspan = '2'> Intento numero $contador </th></tr>";
    echo "<tr>";
    echo "<td> Numero = $numeroRandom </td> <td> Acum = $acum </td>";
    echo "</tr>";
}
echo "</table>";

// Igual pero en en un mismo intento que aparezca 5 random

$acum2 = 0;
$contadorIntento = 0;
echo "<table border = '1'>";
while ($acum2 <= 300) {
    $contadorIntento++;
    echo " <tr> <th colspan = '2'> Intento numero $contadorIntento </th></tr>";
    $contadorRamdom = 1;
    echo "<tr>";
    echo "<td> Numero = ";
    while ($contadorRamdom <= 5) {
        $numeroRandom2 = rand(1, 10);
        $acum2 += $numeroRandom2;
        if ($contadorRamdom < 5) {
            echo "$numeroRandom2 //";
        } else {
            echo "$numeroRandom2";
        }
        $contadorRamdom++;
    }
    echo "</td>";
    echo "<td> Acum = $acum2 </td>";
    echo "</tr>";
}
echo "</table>";


$contador = 1;
echo "<ul>";
while ($contador <= 10) {
    echo "<li> $contador";
    $contadorDivisiores = 3;
    echo "<ol>";
    while ($contadorDivisiores < $contador) {
        if ($contadorDivisiores % $contador == 0) {
        } else {
            echo "<li> $contadorDivisores </li>"; 
        }
        $contadorDivisiores++;
    }
    echo "</ol>";
    echo "</li>";
    $contador++;
}
echo "</ul>";
