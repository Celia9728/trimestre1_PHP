<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios2</title>

    <style>
        .suspenso {
            background-color: red;
        }

        .aprobado {
            background-color: orange;
        }

        .bien {
            background-color: yellow;
        }

        .notable {
            background-color: green;
        }

        .sobresaliente {
            background-color: blue;
        }
    </style>
</head>

<body>
    <?php

    $alumnos = [
        "Antonio" => 6,
        "Héctor" => 8,
        "Samu" => 3,
        "Annabel" => 1,
        "Adri" => 5,
        "Mario" => 10
    ];
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>ALUMNO</th>
                <th>NOTA</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($alumnos as $alumno => $nota) {
                [$color, $notaCadena] = match (true) {
                    ($nota < 5) => ["suspenso", " $nota (SUSPENSO)"],
                    ($nota >= 5 && $nota < 6) => ["aprobado", "$nota (SUFICIENTE)"],
                    ($nota >= 6 && $nota < 7) => ["bien", " $nota (BIEN)"],
                    ($nota >= 7 && $nota < 9) => ["notable", "$nota (NOTABLE)"],
                    ($nota >= 9 && $nota <= 10) => ["sobresaliente", "$nota (SOBRESALIENTE)"],
                };
            ?>

                <tr class="<?= $color ?>">
                    <td><?php echo $alumno ?></td>
                    <td>
                        <?php echo $notaCadena ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>