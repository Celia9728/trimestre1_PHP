<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>

<body>
    <?php
    /**
     * Crear un array con una lista de personas donde la clave sea el DNI
     * y el valor el nombre.
     * 
     * Debe haber 5 personas como minimo
     * 
     * Mostrar el array completo con print_r, mostrar alguna persona
     * de manera individual y despues mostrar el array dentro de una
     * lista no ordenada con sus claves.
     * 
     * Añadir elementos con y sin clave.
     * Borrar algun elemento.
     * Probar a resetear claves.
     */
    $br = "<br>";

    $personas = [
        "72646547J" => "Alex",
        "34587655L" => "Noemí",
        "12345678Y" => "Javi",
        "24754355P" => "Annabel",
        "99485723T" => "Cateto"
    ];

    $personas["00135665T"] = "Paquito de la torre";
    $personas["475687348R"] = "Paco fiesta";

    // Funciones de los array
    // Ordena un array por valor reseteando las claves
    sort($personas);

    //Ordena por valor por orden alfabetico pero alreves quitando las claves
    rsort($personas);

    // Ordena alfabeticamente por valor en ascendente pero manteniendo las claves
    asort($personas);


    // Lo mismo que el de arriba pero en orden descendente(alfabeticamente);
    arsort($personas);

    // Orden ascendente por clave
    ksort($personas);

    // Orden descendente por clave
    krsort($personas);


    print_r($personas);
    echo $br;
    print_r($personas["72646547J"]);
    ?>

    <ul>
        <?php foreach ($personas as $clave => $valor) {
        ?>
            <li> <?php echo "Persona: $clave : $valor" ?></li>
        <?php
        } ?>
    </ul>

    <?php

    // Añadir 
    $personas["6756362O"] = "Mario";
    $personas[] = "Pepe";
    print_r($personas);

    // Borrar
    unset($personas["24754355P"]);

    // Resetear
    $personasRset = array_values($personas);

    ?>


    <?php
    /**
     * Crear una table con este formato teniendo en 
     * cuenta que DNI es clave y nombre valor de mi
     * array asociativo
     */
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>DNI</th>
                <th>NOMBRE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($personas as $dni => $nombre) { ?>
                <tr>
                    <td><?php echo $dni ?></td>
                    <td><?php echo $nombre ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>


    <?php
    $profesores = [
        "Servidor" => "Ale",
        "Cliente" => "Mariceli",
        "Interfaces" => "Carmeli",
        "Despliegue" => "Salva",
        "IPE II" => "Ivan",
        "Ingles" => "Cherrys",
        "TFG" => "Mariceli",
        "Ciber" => "Mariceli"
    ]
    ?>
    <br>

    <table border="1">
        <thead>
            <tr>
                <th>ADIGNATURA</th>
                <th>PROFESOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($profesores as $asignatura => $profesor) { ?>
                <tr>
                    <td><?php echo $asignatura ?></td>
                    <td><?php echo $profesor ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php
    $personasOrdenadaAsig = ksort($personas);
    $personasOrdenadasProfes = arsort($personas);
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>ADIGNATURA</th>
                <th>PROFESOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($profesoresOrdenadaAsig as $asignatura => $profesor) { ?>
                <tr>
                    <td><?php echo $asignatura ?></td>
                    <td><?php echo $profesor ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <table border="1">
        <thead>
            <tr>
                <th>ADIGNATURA</th>
                <th>PROFESOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($profesoresOrdenadaProfes as $asignatura => $profesor) { ?>
                <tr>
                    <td><?php echo $asignatura ?></td>
                    <td><?php echo $profesor ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>