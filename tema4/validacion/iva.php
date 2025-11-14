<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IVA</title>
    <style>
        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require("../../funciones.php");
    ?>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //print_r($_POST);
        if (isset($_POST["tipo"])) {
            $tmp_tipo = $_POST["tipo"];
        } else {
            $tmp_tipo = "";
        }

        $tipos = ["general", "reducido", "superreducido"]; //array de los tipos de valores
        if ($tmp_tipo == "") { //se ha escogido un valor de la lista
            $err_tipo = "<span class='error'>ELIGE UN TIPO DE IVA</span>";
        } elseif (!in_array($tmp_tipo, $tipos)) {  //si la variable que metamos es elemento del array, nos devuelve true
            $err_tipo = "<span class='error'>Elige un tipo de iva valido</span>";
        } else {
            $tipo = $tmp_tipo;
        }


        $tmp_precio = $_POST["precio"];
        if (empty($tmp_precio)) {  //es lo mismo que poner if($tmp_precio="")
            $err_precio = "<span class='error'>Inserta un numero válido</span>";
        } else {  //si se ha enviado un dato
            $precio = $tmp_precio;
        }
    }
    ?>
    <form action="" method="post">
        <label for="precio">Precio:</label>
        <input type="text" name="precio">
        <?php if (isset($err_precio)) {
            echo $err_precio;
        }    ?>
        <br><br>
        <select name="tipo">
            <option value="" disabled selected>ELIJA UN TIPO DE IVA</option>
            <option value="general">General</option>
            <option value="reducido">Reducido</option>
            <option value="superreducido">Superreducido</option>
        </select>
        <?php if (isset($err_tipo)) {
            echo $err_tipo;
        }   ?>
        <br>
        <input type="submit" value="CALCULAR IVA">
    </form>

    <h3 class="success">
        <?php
        if (isset($precio, $tipo)) { //en el caso de que exista precio y tipo
            echo "Precio: " . $precio . ". Tipo: " . $tipo . ". Con IVA: " . calcularIVA($precio, $tipo);
        }
        ?>
    </h3>

</body>

</html>