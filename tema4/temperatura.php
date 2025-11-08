<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="temperatura">
        <br>
        <select name="unidadInicial" id="">
            <option value="" selected>ELIJA UNA OPCION</option>
            <option value="C">CELSIUS</option>
            <option value="K">KELVIN</option>
            <option value="F">FARHENHEIT</option>
        </select>
        <select name="unidadFinal" id="">
            <option value="" selected>ELIJA UNA OPCION</option>
            <option value="C">CELSIUS</option>
            <option value="K">KELVIN</option>
            <option value="F">FARHENHEIT</option>
        </select>
        <br>
        <input type="submit" value="HACER CONVERSION">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperaturaI = $_POST["temperatura"];
        $unidadI = $_POST["unidadInicial"];
        $unidadF = $_POST["unidadFinal"];
        $temperaturaF = $temperaturaI;

        if ($unidadI == "C") {
            if ($unidadF == "K") {
                $temperaturaF = $temperaturaI + 273.15;
            } else if ($unidadF == "F") {
                $temperaturaF = $temperaturaI * 9 / 5 + 32;
            }
        }

        if ($unidadI == "K") {
            if ($unidadF == "F") {
                $temperaturaF = ($temperaturaI - 273.15) * 9 / 5 + 32;
            } else if ($unidadF == "C") {
                $temperaturaF = $temperaturaI - 273.15;
            }
        }

        if ($unidadI == "F") {
            if ($unidadF == "K") {
                $temperaturaF = ($temperaturaI - 32) * 5 / 9 + 273.15;
            } else if ($unidadF == "C") {
                $temperaturaF = ($temperaturaI - 32) * 5 / 9;
            }
        }
        echo "<p style='background-color:yellowgreen;'> $unidadI : $temperaturaI -- $unidadF : $temperaturaF </p>";
    }

    ?>

</body>

</html>