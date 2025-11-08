<?php


$br = "<br>";

//EJERCICIO 1 Creamos una función que se llame esMayor($a,$b) y sacamos cuál es mayor a través de un echo. a>b , b>a , a=b
echo ("EJERCICIO 1");
function esMayor($a, $b)
{
    if ($a > $b) {
        echo ("$a es mayor que $b <br>");
    } elseif ($b > $a) {
        echo ("$b es mayor que $a <br>");
    } else {
        echo ("Los numeros son iguales: $a = $b <br>");
    }
}

esMayor(3, 4);

function esMayor2($a, $b)
{
    //CON SWITCH
    switch (true) {
        case ($a > $b):
            echo "EL numero $a es mayor que $b <br>";
            break;
        case ($a < $b):
            echo " El numero $b es mayor que el numero $a <br>";
            break;
        default:
            echo "Los 2 numeros son iguales ($a,$b) <br>";
    }
}

esMayor(rand(1, 10), rand(1, 10));
esMayor2(rand(1, 10), rand(1, 10));

// Una funcion que te diga si es par o impar

function esPar($numero)
{
    if ($numero == 0) {
        echo "$numero es cero <br>";
    } elseif ($numero == 0) {
        echo "$numero es numero par <br>";
    } else {
        echo "El numero $numero impar <br>";
    }
}

// EJERCICIO 4. Funcion enRango($n, $min, $max). Comprobar si el numero está dentro del rango (incluidos el maximo y el minimo). 
// Si el min es mayor que el maximo, sacar que no se puede hacer
// Minimo va a ser 0 y el maximo 100. 
// Calcular la mitad del rango y decir si n está en el rango inferior o en el rango superior o justo en la mitad.

$numero = rand(0, 100);
$minimo = rand(0, 100);
$maximo = rand(0, 100);

function esRango($n, $min, $max)
{
    if ($min >= $max) {
        echo "No se puede realizar la funcion por los valores incorrectos <br>";
    } else {
        echo "N: $n, Rango minimo $min, Rango superior $max <br>";
        $valorMedio = ($max + $min) / 2; // (($max - $min)/2) + $min;
        if ($n < $min || $n > $max) {
            echo "$n fuera de rango <br>";
        }
        if ($n > $min && $n <= $valorMedio) {
            echo "$n esta en el rango inferior <br>";
        } elseif ($n > $valorMedio && $n < $max) {
            echo "$n esta en el rango superior <br>";
        } elseif ($n == $min) {
            echo "$n es el valor minimo <br>";
        } elseif ($n == $max) {
            echo "$n es el valor maximo <br>";
        }
    }
}

esRango($numero, $minimo, $maximo);


function esRangoSwitch($n, $min, $max)
{
    if ($min >= $max) {
        echo "No se puede realizar la funcion por los valores incorrectos <br>";
    } else {
        echo "N: $n, Rango minimo $min, Rango superior $max <br>";
        $valorMedio = ($max + $min) / 2; // (($max - $min)/2) + $min;
        if ($n < $min || $n > $max) {
            echo "$n fuera de rango <br>";
        }
        // TERMINAR
    }
}


// Calculadora funcion. ($operacion, $x, $y). (string, entero,entero);

function calculadora($op, $x, $y)
{
    switch (true) {
        case ($op == 'suma'):
            echo "La suma de $x + $y es: " . ($x + $y) . "<br>";
            break;
        case ($op == 'resta'):
            echo "La resta de $x - $y es: " . ($x - $y) . "<br>";
            break;
        case ($op == 'div'):
            if ($y == 0) {
                echo "No se puede dividir entre 0";
            } else {
                echo "La division de $x / $y es: " . ($x / $y) . "<br>";
            }
            break;
        case ($op == 'mult'):
            echo "La suma de $x * $y es: " . ($x * $y) . "<br>";
            break;
        case ($op == 'mod'):
            if ($y == 0) {
                echo "No se puede dividir entre 0";
            } else {
                echo "EL modulo de $x % $y es: " . ($x % $y) . "<br>";
            }
            break;
        default:
            echo "No se conoce esta operacion <br>";
            break;
    }
}

calculadora("div", 5, 8);

function cadenaRandom($n)
{
    switch (true) {
        case ($n == 0):
            return "suma";
            break;
        case ($n == 1):
            return "resta";
            break;
        case ($n == 2):
            return "mult";
            break;
        case ($n == 3):
            return "div";
            break;
        case ($n == 4):
            return "mod";
            break;
        default:
            echo "No se puede";
            break;
    }
}

echo calculadora(cadenaRandom(rand(0, 4)), rand(1, 10), rand(0, 10));

//Como tipar los datos de una función
function tipar(int $numero): string
{
    return $numero; // Te lo convierte a un string, porque te lo interpreta
}

var_dump(tipar(14.1)); // Lo trunca porque la variable tiene que ser un int
echo "<br>";

/**
 * Calcular suscripcion ( String $plan, boolean $estudia, $boolean anual ) : String
 * Planes: "basicos", "pro", "para empresas";
 * Precios: "basicos: 60", "pro: 40", "basico: 20"
 * Descuentos: SI eres estudiante tienes un 15% de descuento y si 
 * pagas anual 20%; Si tienes los 2 primero se aplica el de estudiante y luego el anual.
 * PLan x Total: euros y descuentos aplicados; Una e si es el estudiante y a para el anual.
 */


// 
function suscripcion(String $plan, bool $estudia, bool $anual): String
{
    $precio = 0;

    switch ($plan) {
        case "basico":
            $precio = 20;
            break;
        case "pro":
            $precio = 40;
            break;
        case "empresa":
            $precio = 60;
            break;
        default:
            $precio = -1;
            break;
    }

    $cadena = "Plan $plan. -- Descuento: ";

    if ($estudia) {
        $precio = $precio - ($precio * 0.15);
        $cadena = $cadena . "e. ";
    }

    if ($anual) {
        $precio = $precio - ($precio * 0.20);
        $cadena = $cadena . "a. ";
    }

    $cadena = $cadena . " -- Total: $precio";


    return ($precio < 0) ? "Plan no valido" : $cadena;
}

// echo suscripcion("basico", true, true);
echo "<br>";

function planAleatorio(): String
{
    $numero = rand(1, 3);
    $plan = "";

    switch ($numero) {
        case 1:
            $plan = "basico";
            break;
        case 2:
            $plan = "pro";
            break;
        case 3:
            $plan = "empresa";
            break;
    }
    return $plan;
}

echo suscripcion(planAleatorio(), true, true);

echo "<pre> \ hola </pre>";

/**
 * EJERCICIO 2: LOGIN(String $user, String $pass) : String
 * Si falta user --> un String que te pida que rellenes el campo de usuario
 * Si falta pass --> lo mismo
 * SI la pass falla (si el usuario no es un usuario registrado ) --> el campo "pass" no es valido
 * Si los 2 fallan --> ambos campos son incorrectos
 * Solo hacemos login si el usuario y la contraseña son correctas
 * USER =  admin  PASS = 123
 * USER = cliente PASS = 321
 *  
 */

function login(String $user, String $pass): String
{

    // Cadenas vacias
    if ($user == "") {
        return "Rellena el campo de usuario";
    }

    if ($pass == "") {
        return "Rellena el campo de pass";
    }

    // Pass falla
    if ($user == "admin" && $pass != "123") {
        return "El campo pass no es valido";
    }

    if ($user == "cliente" && $pass != "321") {
        return "El campo pass no es valido";
    }

    // Casos correctos
    if ($user == "admin" && $pass == "123") {
        return "Se ha logeado correctamente";
    } else if ($user == "cliente" && $pass == "321") {
        return "Se ha logeado correctamente";
    } else {
        return "Ninguno es correcto";
    }

    return "";
}

function loginAlejandro(String $user, String $pass): String
{
    $usuario1 = "admin";
    $usuario2 = "cliente";
    $contra1 = "123";
    $contra2 = "321";

    if ($user == "") return "Rellena el campo usuario <br>";
    if ($pass == "") return "Rellena el campo contraseña <br>";

    if ($user == $usuario1) {
        if ($pass == $contra1) {
            return "Has iniciado sesion admin :D <br>";
        } else {
            return "Contraseña incorrecta admin D: <br>";
        }
    }
    if ($user == $usuario2) {
        if ($pass == $contra2) {
            return "Has iniciado sesion admin :D <br>";
        } else {
            return "Contraseña incorrecta admin D: <br>";
        }
    }
    return "";
}

echo login("admin", "123");
echo "<br>";

function comparador(int $num1, int $num2, int $num3)
{
    //Devolvera los 3 numeros son iguales;
    //Al menos 2 numeros son iguales o "NIngun numero es igual a otro";

    if (($num1 == $num2) && ($num2 == $num3)) {
        return "Los 3 numeros son iguales";
    } else if (($num1 == $num2) || ($num1 == $num3) || $num2 == $num3) {
        return "Al menos 2 son iguales";
    } else {
        return "Ninguno es igual";
    }
}

echo comparador(3, 1, 2);

?>

<!-- <pre> <?php echo "\n hola" ?> </pre> -->