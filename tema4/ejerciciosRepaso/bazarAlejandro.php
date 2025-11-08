<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bazar</title>
</head>

<body>
    <?php
    /**
     * Manzana --> 1,5 - kg
     * Leche --> 0,9 - litro
     * Cerveza --> 2.5  - pack
     * Refresco --> 1,8 - pack
     * Raton --> 2.5 - unid
     * Pan --> 1,2 - unid
     * 
     * Para cada producto un input numerico en kg, l, pack
     * Boton comprar
     * Si compramos mas de 5 de un solo producto solamente esa unidad se hace un descuento 10%.
     * Si compramos mas de 10 de un solo producto solamente esa unidad se hace un descuento 20%.
     * IVA --> Alimentacion 4% del iva despues del descuento.
     * Bebidas 10%
     * electronica 21%
     */
    $cesta = [
        "manzana" => ["precio" => "kg", "tipo" => "alimentacion", "cantidad" => null],
        "leche" => ["precio" => "litro", "tipo" => "alimentacion", "cantidad" => null],
        "cerveza" => ["precio" => "pack", "tipo" => "bebidas", "cantidad" => null],
        "refresco" => ["precio" => "pack", "tipo" => "bebidas", "cantidad" => null],
        "raton" => ["precio" => "unid", "tipo" => "electronica", "cantidad" => null],
        "pan" => ["precio" => "unid", "tipo" => "alimentacion", "cantidad" => null],
    ];

    ?>
    <form action="" method="get">
        <!-- FOR-->
        <?php
        foreach ($cesta as $producto => $valores) { ?>
            <label for="<?php echo $producto ?>"><?php echo $producto ?></label>
            <br>
            <input type="number" name="<?php echo $producto ?>" min="0">
            <br>
        <?php } ?>
        <input type="submit" value="ENVIAR">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($cesta as $producto) {
            foreach ($producto as $caracteristicas) {
                // Donde sea igual el nombre a la clave del array cesta inyecto la cantidad. Pero para ello tengo que iterar el $_post porque no 
            }
        }
    }
    print_r($_SERVER);
    ?>
</body>

</html>