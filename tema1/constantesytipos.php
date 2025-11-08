<?php
$br = "<br>";

define("PI", 3.14159); //constsntes
echo PI; // Para llamar a una constante no hace falta el dolar.

$numero = 2.1;
echo $br;
var_dump($numero); // Para mostrar el valor de la variable junto con su tipo

$cadena = "2.5";
echo $br;
var_dump($cadena); // Al ser un String nos sale fuera y el valor de dentro son los caracteres
echo $br;

$nuevoEntero = intval($cadena); // Convierte un string a un int.
var_dump($nuevoEntero);
echo $br;

$nuevoFloat = floatval($cadena);
var_dump($nuevoFloat);
echo $br;

$nuevoString = strval($nuevoFloat);
var_dump($nuevoString);
echo $br;








