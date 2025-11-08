<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <form action="" method="post">
        <label for="inicio"> Inicio:</label>
        <input type="number" name="inicio" required>
        <label for="final"> Final:</label>
        <input type="number" name="final" required>
        <select name="tipo">
            <option value="*">*</option>
            <option value="x">x</option>
        </select>
        <input type="submit" value="ENVIAR">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inicio = $_POST["inicio"];
        $final = $_POST["final"];
        $tipo = $_POST["tipo"];

        if ($inicio > $final) { ?>
            <h3 style="color: red;">NO SE PUEDE HACER</h3>
            <?php } else {
            for ($i = $inicio; $i <= $final; $i++) { ?>
                <h3> Tabla del <?php echo $i ?></h3>
                <?php for ($j = 1; $j <= 10; $j++) {
                    $resultado = $i * $j;
                ?>
                    <p> <?php echo $i . $tipo . $j . "=" . $resultado ?> </p>
                <?php } ?>
                <br>
            <?php } ?>
    <?php }
    }
    ?>
</body>

</html>