<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /**
     * SINTAXIS DEL BUCLE FOR
     * 
     * for(inicializacion; condicion; actualizacion){
     *      codigo a ejecutar
     * }
     * 
     * 
     */

    echo "<h1> Ejemplo básico de for </h1>";


    // EJERCICIO 1: Sacar por pantalla los numeros del 1 al 10 con guiones
    echo "-------------------------------------------------";
    echo "<h3> Ejercicio 1 </h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo ($i < 10) ? $i . "--" : $i;
    }
    echo "<br>";
    echo "<br>";

    // EJERCICIO 2: Saca por pantalla los numeros del 1 al 10 en diagonal
    echo "-------------------------------------------------";
    echo "<h3> Ejercicio 2 </h3>";
    function diagonal1()
    {
        $cadena = "";
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                $cadena = $cadena . "<pre>";
                if ($i == $j) {
                    for ($k = 0; $k <= $j; $k++) {
                        $cadena = $cadena . " ";
                    }
                    $cadena = $cadena . $i . "</pre>";
                }
            }
        }
        echo $cadena;
    }

    function diagonal2()
    {
        $cadena = "";
        for ($i = 1; $i <= 10; $i++) {
            $cadena = "<pre>";
            for ($j = 1; $j <= 10; $j++) {
                if ($i == $j) {
                    $cadena = $cadena . $i;
                }
                $cadena = $cadena . " ";
            }
            $cadena = $cadena . "</pre>";
            echo $cadena;
        }
    }

    function diagonal3()
    {
        $cadena = "";
        for ($i = 1; $i <= 10; $i++) {
            echo $cadena = $cadena . "&nbsp;";
            echo $i . "<br>";
        }
    }

    echo diagonal1();
    echo diagonal2();
    echo diagonal3();

    echo "<br>";
    echo "<br>";

    // EJERCICIO 3: Mostrar por pantalla con un espacio en blanco los numeros pares del 1 al 100;
    echo "-------------------------------------------------";
    echo "<h3> Ejercicio 3 </h3>";
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo $i . "<br>";
        }
    }

    echo "<br>";
    echo "<br>";
    /**
     * EJERCICIO 4: Dado un numero guardado en una variable mostrar la tabla de multiplicar de dicho numero
     * Que aparezca tabla de x: x x 1,2,3.
     * */
    echo "-------------------------------------------------";
    echo "<h3> Ejercicio 4 </h3>";
    $numero = 5;

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado <br>";
    }

    echo "<br>";
    echo "<br>";
    /**
     * EJERCICIO 5: Mostrar los numeros del 1 al 100 pero solo los que sean 
     * multiplos de 3 y de 5 a la vez y con su espacio.
     */
    echo "-------------------------------------------------";
    echo "<h3> Ejercicio 5 </h3>";
    for ($i = 1; $i <= 100; $i++) {
        if (($i % 3 == 0) && ($i % 5 == 0)) {
            echo $i . " ";
        }
    }

    echo "<br>";
    echo "<br>";

    //Igual pero mostrando los numero en funcion del multiplo
    for ($i = 1; $i <= 100; $i++) {
        if (($i % 3 == 0) && ($i % 5 == 0)) {
            echo $i . " m 3 y 5<br>";
        } else if (($i % 3 == 0)) {
            echo $i . " m 3 <br>";
        } else if (($i % 5 == 0)) {
            echo $i . " m 5 <br>";
        }
    }

    echo "<br>";
    echo "<br>";

    /**
     * EJERCICIO 6: La suma de la acumuladora de los numeros del 1 al 150. Lo que viene siendo un sumatorio.
     */
    echo "-------------------------------------------------";
    echo "<h3> Ejercicio 6 </h3>";
    $suma = 0;
    for ($i = 1; $i <= 150; $i++) {
        echo $suma += $i;
        echo $suma . "<br>";
    }

    echo "<br>";
    echo "<br>";

    //EJERCICIO 7: Factorial
    echo "-------------------------------------------------";
    echo "<h3> Ejercicio 7 </h3>";
    $factorial = 1;
    for ($i = 1; $i <= 5; $i++) {
        $factorial *= $i;
        echo $factorial . "<br>";
    }

    echo "<br>";
    echo "<br>";

    /**
     * EJERCICIO 8: Sumar pares y mostrar y luego mostrar impares.
     */
    echo "-------------------------------------------------";
    echo "<h3> Ejercicio 8 </h3>";
    $sumaPares = 0;
    $sumaImpares = 0;
    for ($i = 1; $i <= 500; $i++) {
        if ($i % 2 == 0) {
            $sumaPares += $i;
        } else {
            $sumaImpares += $i;
        }
    }
    echo "Suma de pares: " . $sumaPares;
    echo "<br>";
    echo "Suma de Impares: " . $sumaImpares;

    echo "<br>";
    echo "<br>";
    echo "<br>";

    /**
     * ejercicio 9: Encontrar los primeros 3 multiplos de 12 hasta 200 hacia abajo.
     */
    echo "-------------------------------------------------";
    echo "<h3> Ejercicio 9 </h3>";
    $contador = 0;
    for ($i = 200; $i > 0; $i--) {
        if ($i % 12 == 0) {
            if ($contador < 3) {
                echo "Multiplo: $i " . "<br>";
                ++$contador;
            }
        }
    }

        $contador = 3;
    for ($i = 200; $contador > 0; $i--) {
        if ($i % 12 == 0) {
            if ($contador < 3) {
                echo "Multiplo: $i " . "<br>";
                $contador--;
            }
        }
    }

    ?>
</body>

</html>