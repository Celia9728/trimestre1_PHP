<?php

$br = "<br>";

// Probando variables globables y funciones
$globalMal = "Hola desde fuera mal";

function mostrarMal()
{
    echo $globalMal;
}
mostrarMal();


$globalBien = "Hola desde fuera bien";
function mostrarBien()
{
    global $globalBien; // Para acceder a una variable de fuera dentro de una funcion
    echo $globalBien;
}
mostrarBien();
echo $br;

// Probando variables estáticas
function contador()
{
    static $cont = 0; // Guarda el valor de la ultima ejecucion
    $cont++;
    echo $cont;
}

contador();
echo $br;
contador();
echo $br;

function sumar($a, $b)
{
    $solucion = $a + $b;
    return $solucion;
}
$x = 1;
$y = 2.4;

echo sumar($x, $y) . $br;
