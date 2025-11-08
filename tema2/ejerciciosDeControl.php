<?php
/*Crea una funcion que se llame operciones (a,b) que muestre por pantalla la suma y la resta,
la multiplicación, la división y el módulo. Para la resta, la división y el módulo hay que comprobar
si a es mayor que b o b es mayor que a  y cambiar el orden, para el modulo si son iguales poner que son iguales*/


function operaciones($a, $b)
{
    echo "<p>La suma de $a + $b es: " . ($a + $b) . "</p>";
    if ($a > $b) {
        echo "<p>La resta de $a - $b es: " . ($a - $b) . "</p>";
        echo "<p>La division de $a : $b es: " . ($a / $b) . "</p>";
        echo "<p>El modulo de $a y $b es: " . ($a % $b) . "</p>";
    } elseif ($a < $b) {
        echo "<p>La resta de $b - $a es: " . ($b - $a) . "</p>";
        echo "<p>La division de $b : $a es: " . ($b / $a) . "</p>";
        echo "<p>El modulo de $b y $a es: " . ($b % $a) . "</p>";
    } else {
        echo "<p>Resta: La resta de las dos variables es: " . ($a - $b) . "</p>";
        echo "<p>División:Son iguales y la solucion es 1</p>";
        echo "<p>Modulo:Son iguales y la solucion es 0</p>";
    }

    echo "<p>La multiplicación de $a x $b es: " . ($a * $b) . "</p>";
}


operaciones(2, 3);
operaciones(3, 2);
operaciones(3, 3);
$num1 = rand(1, 10);
$num2 = rand(1, 10);
operaciones($num1, $num2);
