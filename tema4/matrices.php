<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrices</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>

    <style>
        .rojo {
            background-color: red;
        }

        .azul {
            background-color: blue;
        }

        .verde {
            background-color: green;
        }

        .morado {
            background-color: purple;
        }

        .amarillo {
            background-color: yellow;
        }
    </style>
</head>

<body>
    <?php
    $videojuegos = [
        ["FIFA 26", "Deporte", 90],
        ["Dark Souls III", "Soulslike", 30],
        ["Hollow Knight", "Plataformas", 20]
    ];

    echo "<h2> Con list </h2>";
    foreach ($videojuegos as $juego) {
        list($nombre, $categoria, $precio) = $juego;
        echo "<p> Nombre: $nombre, Categoria: $categoria, Precio: $precio </p>";
    };

    echo "<h2> Con foreach </h2>";
    foreach ($videojuegos as $juego) {
        echo "<p>";
        for ($i = 0; $i < count($juego); $i++) {
            if ($i == count($juego) - 1) {
                echo " " . $juego[$i];
            } else {
                echo " " . $juego[$i] . " // ";
            }
        }
        echo "</p>";
    }

    array_push($videojuegos, ["Expedition 33", "RGP", 40]);
    $nuevoJuego = ["Silksong", "Plataformas", 30];
    array_push($videojuegos, $nuevoJuego);
    ?>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Precio</th>
        </tr>
        <?php foreach ($videojuegos as $juego) {
            list($nombre, $categoria, $precio) = $juego ?>
            <tr>
                <td> <?php echo $nombre ?> </td>
                <td> <?php echo $categoria ?> </td>
                <td> <?php echo $precio ?> </td>
            </tr>
        <?php }; ?>
    </table>

    <br>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Precio</th>
        </tr>

        <?php
        for ($i = 0; $i < count($videojuegos); $i++) {
            echo "<tr>";
            for ($j = 0; $j < count($videojuegos[$i]); $j++) {
                echo "<td>" . $videojuegos[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <?php

    // Te guarda en una variable las posiciones de las arrays de las matrices
    $_titulo = array_column($videojuegos, 0);

    //echo "<ol>";
    //for ($i = 0; $i < count($_titulo); $i++) {
    //    echo "<li>" . $_titulo . "</li>";
    //}
    //echo "</ol>";

    // Modifica el array original, reordenandolo como le digamos.
    // Ñe pasas el array por donde quieres que ordene
    // Le dices el orden que que queremos que ordene
    // Luego la matriz que contiene el primer array y tambien te la pone
    array_multisort($_titulo, SORT_ASC, $videojuegos);


    // --------- EJERCICIOS ---------
    // Ejercicio 1: Ordenar por el precio de más barato a mas caro
    $_precio = array_column($videojuegos, 2);
    array_multisort($_precio, SORT_ASC, $videojuegos);

    ?>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Precio</th>
        </tr>

        <?php
        for ($i = 0; $i < count($videojuegos); $i++) {
            echo "<tr>";
            for ($j = 0; $j < count($videojuegos[$i]); $j++) {
                echo "<td>" . $videojuegos[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <?php
    // Ejercicio 2: Ordenar por categoria en orden alfabetico inverso
    $_categoria = array_column($videojuegos, 1);
    array_multisort($_categoria, SORT_DESC, $videojuegos);
    ?>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Precio</th>
        </tr>

        <?php
        for ($i = 0; $i < count($videojuegos); $i++) {
            echo "<tr>";
            for ($j = 0; $j < count($videojuegos[$i]); $j++) {
                echo "<td>" . $videojuegos[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <?php
    // Ejercicio 3: Ordenar por categoria y si son iguales,
    //ordenar por precio descendente

    array_multisort(
        $_categoria,
        SORT_ASC,
        $_precio,
        SORT_DESC,
        $videojuegos
    );
    ?>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Precio</th>
        </tr>

        <?php
        for ($i = 0; $i < count($videojuegos); $i++) {
            echo "<tr>";
            for ($j = 0; $j < count($videojuegos[$i]); $j++) {
                echo "<td>" . $videojuegos[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <?php
    /**
     * ULTIMO EJERCICIO:
     * Crear una ultima fila a la tabla en el que se saque el total del
     * precio de todos los juegos iterando la columna de precios.
     * 
     * Si el total es mayor que 100, pintar la columna de los precios
     * de color rojo.
     * Si el total es menor que 100 y mayor que 50 pintar la columna de
     * los precios en azul.
     * Si el total es menor que 50, pintar de verde.
     */

    $precioTotal = 0;
    for ($i = 0; $i < count($_precio); $i++) {
        $precioTotal += $_precio[$i];
    }

    echo $precioTotal;

    $color = match (true) {
        ($precioTotal >= 100) => "rojo",
        ($precioTotal >= 50) => "azul",
        default => "verde"
    };

    ?>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Precio</th>
        </tr>

        <?php
        for ($i = 0; $i < count($videojuegos); $i++) {
        ?>
            <tr>
                <?php for ($j = 0; $j < count($videojuegos[$i]); $j++) { ?>
                    <?php if ($j == 2) { ?>
                        <td class="<?php echo $color; ?>"> <?php echo $videojuegos[$i][$j]; ?> </td>
                    <?php } else { ?>
                        <td> <?php echo $videojuegos[$i][$j]; ?> </td>
                    <?php } ?>
                <?php } ?>
            </tr>
        <?php } ?>

        <tr>
            <td colspan="2">Precio total</td>
            <td class="<?php echo $color; ?>"> <?php echo $precioTotal ?> </td>
        </tr>
    </table>


    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Precio</th>
        </tr>

        <?php
        for ($i = 0; $i < count($videojuegos); $i++) {
        ?>
            <tr>
                <?php for ($j = 0; $j < count($videojuegos[$i]); $j++) { ?>
                    <?php if ($j == 2) {
                        $color2 = match (true) {
                            ($videojuegos[$i][$j] > 50) => "morado",
                            ($videojuegos[$i][$j] > 35) => "verde",
                            ($videojuegos[$i][$j] > 25) => "azul",
                            default => "amarillo"
                        };
                    ?>
                        <td class="<?php echo $color2; ?>"> <?php echo $videojuegos[$i][$j]; ?> </td>
                    <?php } else { ?>
                        <td> <?php echo $videojuegos[$i][$j]; ?> </td>
                    <?php } ?>
                <?php } ?>
            </tr>
        <?php } ?>

        <tr>
            <td colspan="2">Precio total</td>
            <td class="<?php echo $color; ?>"> <?php echo $precioTotal ?> </td>
        </tr>
    </table>



</body>

</html>