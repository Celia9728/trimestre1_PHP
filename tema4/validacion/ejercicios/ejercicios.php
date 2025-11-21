<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
    <style>
        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["ejercicios"] == "ejercicio1") {
        $temp_comentario = $_POST["comentario"];
        $temp_comentarioO = $temp_comentario;
        if ($temp_comentario == "") {
            $err_comentario = "Introduzca un comentario";
        } elseif (strlen($temp_comentario) < 5 || strlen($temp_comentario) > 70) {
            $err_comentario = "El comentario debe tener entre 5 y 70 caracteres";
        } else {
            $temp_comentario = trim($temp_comentario); // QUitamos espacios en blanco de los lados
            $temp_comentario = htmlspecialchars($temp_comentario); // Forma 1
            // $temp_comentario = filter_var($temp_comentario, FILTER_SANITIZE_SPECIAL_CHARS); // Forma 2
            $comentario = $temp_comentario;
        }
    }
    ?>
    <h2>Ejercicio 1</h2>

    <form action="" method="post">
        <input type="text" name="ejercicios" style="display: none;" value="ejercicio1">
        <input type="text" name="comentario">
        <?php
        if (isset($err_comentario)) {
            echo $err_comentario;
        }
        ?>
        <input type="submit" value="Enviar">
        <?php
        if (isset($comentario)) {
            echo "Mensaje original: $temp_comentarioO - Mensaje sanitizado: $comentario <br> 
            Numero de caracteres del mensaje original: " . strlen($temp_comentarioO) . " Numero de caracteres del mensaje sanitizado: " . strlen($comentario);
        }
        ?>
    </form>



    <?php
    /**
     * Entrada: Un DNI en formato NNNNNNNNL (8 dígitos y 1 letra)
     * Qué hay que hacer:
     * Convertir el valor a mayúsculas y eliminar espacios
     * Validar el formato exacto con una expresión regular (8 dígitos seguidos de 1 letra)
     * Calcular la letra correcta (número % 23) y compararla con la introducida 
     * (buscar en internet el resto de la división entre 23 a qué letra equivale)
     * 
     * Salida: Si es válido, mostrar DNI, número, letra y el texto “Letra correcta”; 
     * si no, indicar el error concreto (formato o letra incorrecta)
     */
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ej2"])) {

        $temp_dni = $_POST["dni"];
        $temp_dniO = $temp_dni;
        $temp_dni = preg_replace("/\s+/", "", $temp_dni);


        if ($temp_dni == "") {
            $err_dni = "Introduce un DNI";
        } elseif (!preg_match("/^\d{8}[a-zA-Z]$/", $temp_dni)) {
            $err_dni = "EL dni 8 caracteres y una letra (mayus o minuscula)";
        } else {
            $num_dni = intval(substr($temp_dni, 0, 8));
            $letra_dni = substr($temp_dni, 8, 1);
            $letra_dni = strtoupper($letra_dni);
            $letras = "TRWAGMYFPDXBNJZSQVHLCKE";

            if ($letra_dni == $letras[$num_dni % 23]) {
                $err_dni = "La letra no esta bien, deberia ser " . $letras[$num_dni % 23];
            } else {
                $dni = $num_dni . $letra_dni;
            }
        }
    }


    ?>

    <h2>Ejercicio 2</h2>
    <form action="" method="post">
        <label for="dni">DNI: </label>
        <input type="text" name="dni">
        <?php
        if (isset($err_dni)) {
            echo $err_dni;
        }
        ?>
        <input type="submit" value="ENVIAR" name="ej2">
    </form>

    <?php
    if (isset($dni)) {
        echo "Mi precioso DNI es: " . $dni . " Mi no tan precioso DNI es: " . $temp_dniO;
    }
    ?>
</body>

</html>