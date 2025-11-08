<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>

<body>

    <?php
    $array = [];
    ?>
    <form action="" method="get">
        <input type="number" name="numero" id="">


        <?php
        // Crear un array
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $valor = $_GET["numero"];
            for ($i = 0; $i < $valor; $i++) { ?>
                <input type="number" name="valores<?php echo $i ?>">
        <?php
            }
            print_r($array);
        }
        ?>
        <input type="submit" value="ENVIAR">
    </form>

    <?php ;
    echo "$valor";
    if($valor == null){
    for ($i = 0; $i < count($_GET) - 1; $i++) {
        $valorArray = $_GET["valores" . $i];
        array_push($array, $valorArray);
    }
}
    print_r($array);
    print_r($_SERVER);
    ?>

</body>

</html>