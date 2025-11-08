<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>

<body>
    <!-- Si dejamos el fichero de action vacio se envia al mismo fichero -->
    <form method="get" action="">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <br>
        <label for="edad">Edad</label>
        <input type="number" name="edad">
        <br>
        <label for="genero">Femenino:</label>
        <input type="radio" name="genero" value="F">
        <br>
        <label for="genero">Masculino:</label>
        <input type="radio" name="genero" value="M">
        <br>
        <input type="submit" value="ENVIAR">
    </form>

    <?php

    //echo $_SERVER["REQUEST_METHOD"] . "<br>";

    // Arrays super globales
    // print_r($_SERVER);

    // Acedemos al valor de method get o post
    //if ($_SERVER["REQUEST_METHOD"] == "GET") {
    //  echo "Sale un GET";
    // echo "<br>";
    //"Bienvenido // Bienvenida [el nombre] joven[1-20] // madurita / madurita [21-50] // viejo / vieja [50 - palante]";

    /**$edad = "";
        if ($_GET["edad"] <= 20) {
            $edad = "joven";
        } else if ($_GET["edad"] > 20 && $_GET["edad"] < 50) {
            $edad = "madurita";
        } else if ($_GET["edad"] >= 50) {
            $edad = "vieja";
        }
        echo "Bienvenida " . $_GET["nombre"] . "eres " . $edad; */

    //$nombre = $_GET["nombre"];
    //  $edad1 = $_GET["edad"];
    //    $genero = $_GET["genero"];
    //      $edadStr;

    //        $edadStr = match (true) {
    //  ($edad1 < 21) && ($genero == "F") => "jovencita",
    //   ($edad1 < 21) && ($genero == "M") => "jovencito",
    // ($edad1 < 51) && ($genero == "F") => "madurita",
    //   ($edad1 < 51) && ($genero == "M") => "madurito",
    //     ($edad1 > 50) && ($genero == "F") => "viejita",
    //  ($edad1 > 50) && ($genero == "M") => "viejito",
    //};
    // if ($genero == "F") {
    //       echo "<p> Bienvenida, $nombre eres $edadStr </p>";
    //     } else if ($genero == "M") {
    //     echo "<p> Bienvenida, $nombre eres $edadStr </p>";
    //  };
    //} else if ($_SERVER["REQUEST_METHOD"] == "POST") { // Me aseguro que se ha enviado el formulario con el metodo POST
    // echo "Sale un POST";
    //  print_r($_POST); // Recojo los datos de mi formulario a traves de las claves
    // echo "<br>";
    //   echo "<p> Bienvenid@, su nombre es " . $_POST["nombre"] . " y su edad es: " . $edad;
    // }
    ?>


    <form action="listaForm.php" method="get">
        <label for="mensjae">Mensaje:</label>
        <input type="text" name="mensaje">
        <br>
        <label for="veces">Veces que se repite el mensaje</label>
        <input type="number" name="veces">
        <br>
        <input type="submit" value="ENVIAR">

    </form>
</body>

</html>