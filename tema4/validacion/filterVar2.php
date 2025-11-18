<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizacion</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>

<body>
    <!-- FORMULARIO 1-->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["ejercicios"] == "email") {
        $email = $_POST["correo"];
        $email_sanitizado = filter_var($email, FILTER_SANITIZE_EMAIL);
    }
    ?>

    <form action="" method="post">
        <input type="hidden" name="ejercicios" value="email">
        <label for="correo">Introduzca su correo:</label>
        <input type="text" name="correo"><br>
        <?php
        if (isset($email_sanitizado)) {
            echo $email . "<br>" . $email_sanitizado;
        }
        ?>
        <input type="submit" value="ENVIAR">

    </form>

    <!-- FORMULARIO 2-->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["ejercicios"] == "cadena") {
        $cadena = $_POST["cadena"];
        $cadena_sanitizado = filter_var($cadena, FILTER_SANITIZE_ENCODED);
    }
    ?>

    <form action="" method="post">
        <input type="hidden" name="ejercicios" value="cadena">
        <label for="cadena">Introduzca su cadena:</label>
        <input type="text" name="cadena"><br>
        <?php
        if (isset($cadena_sanitizado)) {
            echo $cadena . "<br>" . $cadena_sanitizado;
        }
        ?>
        <input type="submit" value="ENVIAR">
    </form>

    <!-- FORMULARIO 3-->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["ejercicios"] == "numero") {
        $numero = $_POST["numero"];
        $numero_sanitizado = filter_var($numero, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    } // Float para numero decimal, si se encuentra un punto no lo quite, y el allow fraction para quitar cualquier caracter que no sera un numero
    ?>

    <form action="" method="post">
        <input type="hidden" name="ejercicios" value="numero">
        <label for="numero">Introduzca su cadena:</label>
        <input type="text" name="numero"><br>
        <?php
        if (isset($numero_sanitizado)) {
            echo $numero . "<br>" . $numero_sanitizado;
        }
        ?>
        <input type="submit" value="ENVIAR">
    </form>

    <!-- FORMULARIO 4-->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["ejercicios"] == "entero") {
        $entero = $_POST["entero"];
        $entero_sanitizado = filter_var($entero, FILTER_SANITIZE_NUMBER_INT);
    }
    ?>

    <form action="" method="post">
        <input type="hidden" name="ejercicios" value="entero">
        <label for="entero">Introduzca su entero:</label>
        <input type="text" name="entero"><br>
        <?php
        if (isset($entero_sanitizado)) {
            echo $entero . "<br>" . $entero_sanitizado;
        }
        ?>
        <input type="submit" value="ENVIAR">
    </form>

    <!-- FORMULARIO 5-->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["ejercicios"] == "especiales") {
        $especiales = $_POST["especiales"];
        $especiales_sanitizado = filter_var($especiales, FILTER_SANITIZE_SPECIAL_CHARS);
    }  // Te convierte en cadena un script y no te lo interpreta 
    ?>

    <form action="" method="post">
        <input type="hidden" name="ejercicios" value="especiales">
        <label for="especiales">Introduzca una cadena con caracteres especiales:</label>
        <input type="text" name="especiales"><br>
        <?php
        if (isset($especiales_sanitizado)) {
            echo $especiales . "<br>" . $especiales_sanitizado;
        }
        ?>
        <input type="submit" value="ENVIAR">
    </form>
</body>

</html>