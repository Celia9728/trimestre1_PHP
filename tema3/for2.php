<?php

/**
 * EJERCICIO 10: 
 * Crear una funcion llamada "matrizGraciosa" dandole un valor
 * entero como argumento. Tiene que quedar algo asi:
 * Las esquinas con asteriscos, formando una cruz en medio, y las coordenadas que
 * den valor par se repesentan con "+" y las impares con "-". 
 * Es decir, en la primera figura, el primer "-" es la coordenada 1,2 porque la suma
 * da 3, por lo que es impar. Mientras en la segunda el primer "+" esta en la 1. 
 * Porque es par ya que la suma es 3.
 * 
 */
echo "<h3> Ejercicio 10 </h3>";

function matrizGraciosa(int $n)
{
    $cadena = "";
    $contador = $n;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {

            if ($i == $j) {
                $cadena = $cadena . "*";
                if ($j == $contador) {
                    $contador--;
                }
            } else if ($j == $contador) {
                $cadena = $cadena . "*";
                $contador--;
            } else if (($i + $j) % 2 == 0) {
                $cadena = $cadena . "+";
            } else if (($i + $j) % 2 != 0) {
                $cadena = $cadena . "-";
            }

            $cadena = $cadena . "&nbsp;"; // Espacio en blanco. Por estetica
        }
        $cadena = $cadena . "<br>";
    }
    echo $cadena;
}

echo matrizGraciosa(6);
echo "<br>";

/**
 * EJERCICIO 11: 
 * Triangulo de numeros.
 */
echo "-------------------------------------------------";
echo "<h3> Ejercicio 11 </h3>";
function ejercicio11($n, $m)
{


    $contador = 1;
    for ($i = 1; $i <= $n; $i++) {
        for ($k = 1; $k <= $i; $k++) {
            if ($contador < 10) {
                echo "&nbsp" . $contador . "&nbsp";
            } else {
                echo $contador . "&nbsp";
            }
            $contador++;
        }
        echo "<br>";
    }

    echo "<pre>";
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo match (true) {
                ($j == 0) => "| ",
                ($i == $n - 1) => "_ ",
                ($i == $j) => "\\",
                default => "  "
            };
        }
        echo "<br>";
    }
    echo "</pre>";
}

echo ejercicio11(12, 5);
echo "<br>";

/**
 * EJERCICIO 12: 
 * Triangulo de numeros y en piramide.
 */
echo "-------------------------------------------------";
echo "<h3> Ejercicio 12 </h3>";
function ejercicio12($n)
{

    $contador = 1;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $n; $j > $i; $j--) {
            echo "&nbsp;";
        }
        for ($k = 1; $k <= $i; $k++) {
            echo $contador;
            $contador++;
        }
        echo "<br>";
    }
}

echo ejercicio12(4);
echo "<br>";

/**
 * EJERCICIO 13: 
 * Piramide de asteriscos pero con que las filas
 * sean 1,2,3,4,5....
 */
echo "-------------------------------------------------";
echo "<h3> Ejercicio 13 </h3>";
function ejercicio13($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $n; $j > $i / 2; $j--) {
            echo "&nbsp;";
        }
        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        echo "<br>";
    }
}

echo ejercicio13(10);
echo "<br>";

/**
 * EJERCICIO 14: 
 * Crear una función llamada rectangulo (int $n, int $m)
 * que cree un rectángulo con asteriscos (*) PERO el interior del
 * rectángulo está vacio. SOlo se pintaran los bordes.
 */
echo "-------------------------------------------------";
echo "<h3> Ejercicio 14 </h3>";
function rectangulo(int $n, int $m)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $m; $j++) {
            if ($i == 1 || $i == $n) {
                echo "*";
            } else {
                if ($j == 1  || $j == $m) {
                    echo "*";
                } else {
                    echo "&nbsp&nbsp";
                }
            }
        }
        echo "<br>";
    }


    for ($i = 1; $i <= $n; $i++) {
        $cadena = "<pre>";
        for ($j = 1; $j <= $m; $j++) {
            if ($i == 1 || $i == $n) {
                $cadena = $cadena . "*";
            } else {
                if ($j == 1  || $j == $m) {
                    $cadena = $cadena . "*";
                } else {
                    $cadena = $cadena . " ";
                }
            }
        }
        echo $cadena . "</pre>";
    }

    echo "<pre>";
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $m; $j++) {
            echo match (true) {
                ($j == 0) => ". ",
                ($j == $m - 1) => "+ ",
                ($i == 0) => "* ",
                ($i == $n - 1) => "% ",
                default => "  "
            };
        };
        echo "\n";
    }
    echo "</pre>";
}
echo rectangulo(5, 10);

echo "<br>";
/**
 * EJERCICIO 15: 
 *  Mostrar por pantalla el tablero de un ajedrez (8x8).
 * Los espacios en blanco se mostraran con el caracter # y los espacios
 * en negro con .
 */
echo "-------------------------------------------------";
echo "<h3> Ejercicio 15 </h3>";
function ejercicio15()
{
    $lado = 8;

    for ($i = 1; $i <= $lado; $i++) {
        for ($j = 0; $j <= $lado; $j++) {
            if (($i + $j) % 2 == 0) {
                echo "# ";
            } else {
                echo ". ";
            }
        }
        echo "<br>";
    }
}

echo ejercicio15();



echo "<br>";
/**
 * EJERCICIO 16: 
 * 
 */
echo "-------------------------------------------------";
echo "<h3> Ejercicio 16 </h3>";

function ejercicio16($n)
{

    function primero($n)
    {

        $cadena = "";
        $contador = $n;
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $n; $j++) {

                if ($i == $j) {
                    $cadena = $cadena . "/";
                    if ($j == $contador) {
                        $contador--;
                    }
                } else if ($j == $contador) {
                    $cadena = $cadena . "/";
                    $contador--;
                } else {
                    if (($n / 2) >= $i) {
                        $cadena = $cadena . "+";
                    } else if (($n / 2) <= $i) {
                        $cadena = $cadena . "*";
                    } else {
                        $cadena = $cadena . "-";
                    }
                }

                $cadena = $cadena . "&nbsp;";
            }
            $cadena = $cadena . "<br>";
        }
        echo $cadena;
    }
}

echo ejercicio16(6);

echo "<br>";

/**
 * Ejercicio 17: Piramide de floyd alreves.
 */
function ejercicio17($n)
{

    $contador = 0;
    for ($i = $n; $i >= 1; $i--) {
        $contador += $i;
    }

    for ($i = 1; $i <= $n; $i++) {
        for ($k = 1; $k <= $i; $k++) {
            echo "&nbsp";
        }
        for ($j = $i; $j <= $n; $j++) {
            echo $contador-- . "&nbsp";
        }

        echo "<br>";
    }
}

echo ejercicio17(14);
