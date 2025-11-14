<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALIDACION</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>

<body>
    <?php
    require("require.php");
    ?>
    <form action="" method="post">
        <input type="text" name="texto">
        <select name="opciones" id="">
            <option disabled selected>Elija una opcion</option>
            <option value="ejemplo">Ejemplo</option>
        </select>
        <input type="submit" value="Enviar">
    </form>

    <?php
    //con input text si lo dejan vacio sale la clave con el string vacio
    //con el select, si lo dejan vacio, ni siquiera se ve la clave en el  print_r($_POST);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        print_r($_POST); //si no me envian nada, se ve la clave pero sin el valor, el string está vacío
    }

    echo "<br><br><br>";
    echo "<p>isset(): verifica si una variables está creada/definida y no es NULL </p>";
    echo "<p>empty(): devuelve true si la variable no está definida, tiene el valor 0,
    es una cadena vacía, null o es un array vacío</p>";
    echo "<p>require(): llamamos a un fichero con esa funcion, por ejemplo x.php, se ejecuta el 
    codigo entero del fichero x.php </p>";
    //$hola = 0;
    //empty($hola);

    echo "<h3>Caso 0.1: VALOR= 0</h3>";
    $valor = 0;
    if (isset($valor)) {
        echo "<p>La variable \$valor está definida</p>";
    } else {
        echo "<p>La variable \$valor NO está definida</p>";
    }

    if (empty($valor)) {
        echo "<p>La variable \$valor está vacía</p>";
    } else {
        echo "<p>La variable \$valor NO está vacía</p>";
    }




    echo "<h3>Caso 0.2: VALOR= UNDEFINED</h3>";
    unset($valor);
    if (isset($valor)) {
        echo "<p>La variable \$valor está definida</p>";
    } else {
        echo "<p>La variable \$valor NO está definida</p>";
    }

    if (empty($valor)) {
        echo "<p>La variable \$valor está vacía</p>";
    } else {
        echo "<p>La variable \$valor NO está vacía</p>";
    }




    echo "<h3>Caso 1: VALOR= JUANILLO</h3>";
    $nombre = "Juanillo";
    if (isset($nombre)) {
        echo "<p>La variable \$nombre está definida</p>";
    } else {
        echo "<p>La variable \$nombre NO está definida</p>";
    }

    if (empty($nombre)) {
        echo "<p>La variable \$nombre está vacía</p>";
    } else {
        echo "<p>La variable \$nombre NO está vacía</p>";
    }




    echo "<h3>Caso 2: VALOR= NULL</h3>";
    $nombre = null;
    if (isset($nombre)) {
        echo "<p>La variable \$nombre está definida</p>";
    } else {
        echo "<p>La variable \$nombre NO está definida</p>";
    }

    if (empty($nombre)) {
        echo "<p>La variable \$nombre está vacía</p>";
    } else {
        echo "<p>La variable \$nombre NO está vacía</p>";
    }
    ?>
</body>

</html>