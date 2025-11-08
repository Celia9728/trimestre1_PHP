<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>

<body>
    <form action="" method="get">
        <label for="columnas">Columnas</label>
        <input type="number" name="columnas">
        <label for="elementos">Elementos</label>
        <input type="number" name="elementos">
        <input type="submit" value="ENVIAR">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $columnas = $_GET["columnas"];
        $elementos = $_GET["elementos"];
        $numeroFilas = 0;

        if ($elementos % $columnas == 0) {
            $numeroFilas = intval($elementos / $columnas);
        } else if ($elementos % $columnas != 0) {
            $numeroFilas = intval(($elementos / $columnas) + 1);
        }
    }
    echo $numeroFilas;
    $contador = 1;

    ?>

    <table border="">
        <?php
        for ($i = 0; $i < $numeroFilas; $i++) { ?>
            <tr>
                <?php
                for ($j = 0; $j < $columnas; $j++) {
                    if ($contador <= $elementos) { ?>
                        <td> <?php echo $contador ?> </td>
                    <?php
                        $contador++;
                    } else { ?>
                        <td></td>
                    <?php }
                    ?>
                <?php }
                ?>
            </tr>
        <?php } ?>
    </table>


    <?php
    $meses2025 = [
        "enero" => 31,
        "febrero" => 28,
        "marzo" => 31,
        "abril" => 30,
        "mayo" => 31,
        "junio" => 30,
        "julio" => 31,
        "agosto" => 31,
        "septiembre" => 30,
        "octubre" => 31,
        "noviembre" => 30,
        "diciembre" => 31
    ];

    $dias = 7;
    $numeroSemanas = 0;

    

    

    ?>



</body>

</html>