<?php

/**
 * Crea un programa que muestre "Hola {aquí tu nombre}" usando una variable donde recojas tu nombre.
 * Declara dos variables numéricas e imprime su suma, resta, multiplicación, división y módulo (%).
 * Además, el mensaje deberá de ser el siguiente: "El resultado de la suma entre {valor variable 1} y {valor variable 2} es: {solucion}"
 * Declara una variable con el valor 5. Imprime su valor antes y después de aplicar el incremento y el decremento
 * Declara dos variables numéricas y comprueba si: 1) el primero es mayor que el segundo 
 * 2) ambos son iguales y mayores que 10 3) al menos uno es menor que 100
 * Crea una variable fuera de una función e intenta imprimirla dentro de la función sin usar "global". En caso de no conseguirlo, corrige la llamada a la variable.
 * Crea una función con una variable estática llamada "numerito" inicializada a 2.5, la función deberá de multiplicar por dos el valor de la variable estática y mostrarlo en el navegador. ¿Cambia el resultado de la multiplicación si llamamos a la función varias veces?
 * Crea una función con una variable local llamada "numerito2" inicializada a 3.5, la función deberá
 * de dividir por cuatro el valor de la variable local y mostrarlo en el navegador. ¿Cambia el resultado de la división si llamamos a la función varias veces?
 * Define una constante llamada PHP con el valor "este lenguaje es precioso". Además, impríme el resultado de la constante dentro de una etiqueta h2
 * Crea variables con un numero entero, un decimal, un número muy grande (haciendo uso de la notación científica), un booleano y un string. Ahora muestra cada variable 
 * haciendo uso de la función var_dump() declara una variable llamada hobby que contendrá un string con tu pasatiempos favorito,
 * muestra esta cadena dentro de una etiqueta h1 haciendo uso de una etiqueta PHP diferente al del resto de ejercicios
 */

$br = "<br>";

/**
 * Crea un programa que muestre "Hola {aquí tu nombre}" usando una variable donde recojas tu nombre.
 */
$nombre = "Celia";
echo "Hola $nombre" . $br;

/**
 * Declara dos variables numéricas e imprime su suma, resta, multiplicación, división y módulo (%).
 * Además, el mensaje deberá de ser el siguiente: "El resultado de la suma entre {valor variable 1} y {valor variable 2} es: {solucion}".
 */
$numero1 = 10;
$numero2 = 5;

echo "El resultado de la suma entre $numero1 y $numero2 es: " . ($numero1 + $numero2) . $br;
echo "El resultado de la resta entre $numero1 y $numero2 es: " . ($numero1 - $numero2) . $br;
echo "El resultado de la multiplicacion del $numero1 y $numero2 es: " . ($numero1 * $numero2) . $br;
echo "El resultado de la division entre $numero1 y $numero2 es: " . ($numero1 / $numero2) . $br;
echo "El resultado del modulo entre $numero1 y $numero2 es: " . ($numero1 % $numero2) . $br;

/**
 * Declara una variable con el valor 5. Imprime su valor antes y después de aplicar el incremento y el decremento.
 */
$numeroValor5 = 5;

echo ++$numeroValor5 . $br;
$numeroValor5 = 5;
echo --$numeroValor5 . $br;

/**
 * Declara dos variables numéricas y comprueba si:
 * 1) el primero es mayor que el segundo 
 * 2) ambos son iguales y mayores que 10 
 * 3) al menos uno es menor que 100
 */

$n1 = 10;
$n2 = 5;

echo "El primero es mayor que el segundo: " . ($n1 > $n2) . $br;

echo "Ambos son iguales y mayores que 10: " . (($n1 >= 10) && ($n2 >= 10)) . $br;

echo "Al menos uno es menor que 100: " . (($n1 < 100) || ($n2 < 100)) . $br;

/**
 * Crea una variable fuera de una función e intenta imprimirla 
 * dentro de la función sin usar "global". 
 * En caso de no conseguirlo, corrige la llamada a la variable.
 */
$variable1 = "hola";

function llamarVariable($variable, $br)
{
    echo $variable . $br;
}
llamarVariable($variable1, $br);

/**
 * Crea una función con una variable estática llamada "numerito" inicializada a 2.5, 
 * la función deberá de multiplicar por dos el valor de la variable estática y mostrarlo en el navegador. 
 * ¿Cambia el resultado de la multiplicación si llamamos a la función varias veces?
 */

function multiplicarVariableEstatica()
{
    global $br;
    static $numerito = 2.5;

    echo ($numerito * 2) . $br; // REVISSAAAAARRR!!!!!!!!!!!!!
}

multiplicarVariableEstatica();
multiplicarVariableEstatica();

/**
 * Crea una función con una variable local llamada "numerito2" inicializada a 3.5,
 * la función deberá de dividir por cuatro el valor de la variable local 
 * y mostrarlo en el navegador. 
 * ¿Cambia el resultado de la división si llamamos a la función varias veces?
 */


function dividirNumerito()
{
    $numerito2 = 3.5;
    $numerito2 = $numerito2 / 4;
    echo $numerito2;
}

dividirNumerito();
echo $br;
dividirNumerito();
echo $br;
// El resultado no cambia porque el valor no se guarda una vez terminada la ejecucion de la funcion (por eso utilizamos static).


/**
 * Define una constante llamada PHP con el valor "este lenguaje es precioso". 
 * Además, impríme el resultado de la constante dentro de una etiqueta h2
 */

define("PHP", "Este lenguaje es precioso");
echo "<h2>" . PHP . "</h2>";

/**
 * Crea variables con un numero entero, un decimal, un número muy grande 
 * (haciendo uso de la notación científica), un booleano y un string. 
 * Ahora muestra cada variable haciendo uso de la función var_dump()
 */
$numeroEntero = 5;
$numeroDecimal = 2.5;
$numeroGrande = 5e9;
$booleano = true;
$cadena = "Holiii";

var_dump($numeroEntero);
echo $br;
var_dump($numeroDecimal);
echo $br;
var_dump($numeroGrande);
echo $br;
var_dump($booleano);
echo $br;
var_dump($cadena);
echo $br;


/**
 * Declara una variable llamada hobby que contendrá un string con tu pasatiempos favorito,
 * muestra esta cadena dentro de una etiqueta h1 haciendo uso de una etiqueta PHP 
 * diferente al del resto de ejercicios.
 */
$hobby = "Cuidar de plantas";
echo "<h1> $hobby </h1>";

