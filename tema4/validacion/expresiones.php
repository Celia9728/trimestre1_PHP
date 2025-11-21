<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expresiones</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>

<body>
    <?php

    /**
     * 
     * /patron/ : es el patron de la expresion regular
     * 
     * PATRONES COMUNES:
     * 
     * \d: Un digito (0-9)
     * \w: Un caracter alfanumerico (letras, numeros o _)
     * \s: Un espacio en blanco.
     * . : Cualquier caracter a excepcion del salto de linea
     * \.: Para especificar el caracter "."
     * 
     * +: Uno o mas de la expresion anterior (Ej: \d+ indicaria uno o mas digitos del 0 al 9)
     * *: 0 o mas de la expresion anterior
     * ^: Comienza por 
     * $: Termina por
     * []: Define un conjunto de caracteres que puede coincidir con uno cualquiera 
     *     de los caracteres de dentro del conjunto
     * {}: Indico una cantidad especifica de caracteres 
     *     {4}   tengo que tener cuatro caracteres del tipo que sea
     *     {2,4} tengo que tener entre 2 y 4 caracteres del tipo que sea
     *     {4,}  tengo que tener 4 o mas caracteres del tipo que sea
     * 
     * (?=.*) es una expresion de busqueda anticipada que verifica que la condicion
     *        dentro de los parentesis enten en algun lugar de la cadena
     * 
     * 
     */

    $br = "<br>";
    $cadena = "abc12345";
    if (preg_match("/\d+/", $cadena)) { // true
        echo "la cadena contiene numeros";
    }
    echo $br;
    if (preg_match("/^\d+/", $cadena)) { // false
        echo "la cadena comienza por digitos";
    }
    echo $br;

    if (preg_match("/\d+$/", $cadena)) { // true
        echo "la cadena termina por digitos";
    }
    echo $br;

    if (preg_match("/^\d+$/", $cadena)) { // false
        echo "la cadena empieza y termina por digitos";
    }
    echo $br;

    // Verificar un numero de telefono. 
    // La cadena telefono empieza y acaba por 9 digitos
    $telefono = "123456789";
    if (preg_match("/^\d{9}$/", $telefono)) { // true
        echo "es un telefono";
    }
    echo $br;

    // Codigo postal - solo numeros del 1 al 5
    $postal = "12345";
    if (preg_match("/^[1-5]{5}$/", $postal)) { // true
        echo "es un codigo postal inventado";
    }
    echo $br;

    // Codigo portal - primer digito del 1 al 5 y el resto del 0 al 9
    $postal = "12345";
    if (preg_match("/^[1-5]\d{4}$/", $postal)) { // true
        echo "es un codigo postal real";
    }
    echo $br;

    /**
     * La pass tiene que tener: al menos 8 caracteres, incluir una mayuscula,
     * una minuscula, un numero y un caracter especial [@$!%*?&];
     */
    $pass = "";
    if (preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $pass)) { // true
        echo "Pass correcta";
    }
    echo $br;


    /**
     * Censurar numeros
     */
    $texto_original = "Mi telefono es 612345679 y mi DNI es 12345678X";
    $texto_censurado = preg_replace("/[3-8]/", "*", $texto_original);

    echo "Original: $texto_original <br>";
    echo "Censurado: $texto_censurado <br>"



    ?>
</body>

</html>