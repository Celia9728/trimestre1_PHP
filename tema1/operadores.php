<?php
$num1 = 10;
$num2 = 20;

$br = "<br>";

$suma = $num1 + $num2;
$division = $num2 / $num1;

echo "La suma es: $suma ";
echo $br;
echo "La resta es: " . ($num2 - $num1);
echo $br;
echo "La division es: $division"; // En el caso de que los 2 sean float si el resultado no tiene decimal es un number;

// echo $br;
// echo "El incremento de la primera variable es: $inc";
// echo $br;
echo "numero1: $num1";

echo $br;
$incremento1 = $num1++; // Si se pone detras te modifica la variable original pero no la nueva.
echo $br;

$incremento2 = ++$num1; // Te modifica la variable original y la nueva.

echo "El primer incremento es $incremento1 y el segundo es $incremento2 ";



$variable1 = 5;
$variable2 = 10;

echo $br;
echo "Otra forma de sumar: " . ($variable1 += $variable2);

echo $br;
echo "variable 1 $variable1";
echo $br;
echo " variable 2 $variable2";


//OPERADORES COMPARACION Y LOGICOS

$numerito1 = 10;
$numerito2 = 15;
$cadena = "10";

echo "10 es menos que 15". ($numerito1<$numerito2);
echo $br;
echo "10 mayor que 15". ($numerito1>$numerito2); // El false en php es igual ha nada.
echo $br;
echo "10 menor o igual que 15: ". ($numerito1<=$numerito2);
echo $br;
echo "10 NO es 15: ". ($numerito1!=$numerito2);
echo $br;
echo "10 ES 15: ". ($numerito1 == $numerito2);
echo $br;
echo "10 como cadena es 10 como entero: ". ($numerito1 == $cadena); // Comparacion simple. (valor).
echo $br;
echo "10 como cadena NO es 10 como entero: ". ($numerito1 === $cadena); // Comparación estricta. (valor y tipo).
echo $br;


// 
echo (($numerito1 < 9) || (($numerito2 >= $numerito1) && ($numerito2 == $numerito1)));











?>