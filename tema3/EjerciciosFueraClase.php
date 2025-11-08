<?php

/**
 * EJERCICIO 1: Triángulo de números
 */
echo "-------------------------------------------------";
echo "<h3> Ejercicio 1 </h3>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}

/**
 * EJERCICIO 2: Pirámide de asteriscos
 */
echo "-------------------------------------------------";
echo "<h3> Ejercicio 2 </h3>";

$cadena = "";
for ($i = 0; $i <= 10; $i++) {
    $cadena = "<pre>";
    for ($j = 10; $j > $i; $j--) {
        $cadena = $cadena . " ";
    }
    for ($k = 0; $k < ($i * 2) + 1; $k++) {
        $cadena = $cadena . "*";
    }
    echo $cadena . "</pre>";
}

$cadena = "";
for ($i = 0; $i <= 10; $i++) {
    $cadena = "<pre>";
    for ($j = 10; $j > $i / 2; $j--) {
        $cadena = $cadena . " ";
    }
    for ($k = 0; $k < $i; $k++) {
        $cadena = $cadena . "*";
    }
    echo $cadena . "</pre>";
}

/**
 * EJERCICIO 3: Cuadrado con diagonal
 */
echo "-------------------------------------------------";
echo "<h3> Ejercicio 3 </h3>";

$cadena2 = "";
for ($i = 0; $i <= 10; $i++) {
    for ($j = 0; $j <= 10; $j++) {
        if ($i == $j) {
            $cadena2 = $cadena2 . "X";
        }
        $cadena2 = $cadena2 . "0";
    }
    $cadena2 = $cadena2 . "<br>";
}
echo $cadena2;

/**
 * EJERCICIO 4: Números pares en forma de escalera
 */
echo "-------------------------------------------------";
echo "<h3> Ejercicio 4 </h3>";

$cadena = "";
for ($i = 2; $i <= 10; $i++) {
    for ($j = 2; $j <= $i; $j += 2) {
        if ($j % 2 == 0) {
            $cadena = $cadena . $j;
        }
    }
    $cadena = $cadena . "<br>";
}
echo $cadena;

