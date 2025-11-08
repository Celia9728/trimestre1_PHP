<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>

<body>
    <form action="" method="post">
        <label for="salario">Salario bruto:</label>
        <input type="text" name="salario" id="">
        <br>
        <input type="submit" value="CALCULAR SALARIO NETO">
    </form>

    <?php
    /**
     * 0 - 12.450 --> 19%
     * 12.450 - 20200 --> 24%
     * 20200 - 35200 --> 30%
     * 35200 - 60000 --> 37%
     * 60000 - 300000 --> 45%
     * 300000 - INF --> 47%
     * Guardar en una matrices --> tramos
     * [0, 12450, 0.19]
     * calcular neto: (valor - valorMinimo) * porcentaje + 
     */
    $tramos = [
        [0, 12450, 0.19],
        [12450, 20200, 0.24],
        [20200, 35200, 0.3],
        [35200, 60000, 0.37],
        [60000, 300000, 0.45],
        [300000, INF, 0.47]
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $salarioBruto = $_POST["salario"];
        $salarioNeto = 0;
        $salarioQuitar = 0;
        $contador = 0;

        for ($i = 0; $i < count($tramos); $i++) {
            if ($salarioBruto < $tramos[$i][1] && $salarioBruto > $tramos[$i][0]) {
                $salarioQuitar += ($salarioBruto - $tramos[$i][0]) * $tramos[$i][2];
                $contador++;
            } else if ($salarioBruto > $tramos[$i][1]) {
                $salarioQuitar += ($tramos[$i][1] - $tramos[$i][0]) * $tramos[$i][2];
                $contador++;
            }
        };
        $salarioNeto = $salarioBruto - $salarioQuitar;
    }
    ?>
    <h3><?php echo $salarioNeto; ?></h3>


    <table border="1">
        <tr>
            <th>Salario bruto</th>
            <th>Salario neto</th>
            <th>Tramos</th>
            <th>Impuestos</th>
        </tr>
        <tr>
            <td> <?php echo $salarioBruto ?></td>
            <td> <?php echo $salarioNeto ?></td>
            <td> <?php echo $contador ?> </td>
            <td> <?php echo $salarioQuitar ?></td>
        </tr>
    </table>



</body>

</html>