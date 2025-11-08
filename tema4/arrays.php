<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>

<body>
    <?php
    // PRIMERA FORMA ARRAYS (asociativos):
    $frutas = array(
        "clave 1" => "Manzana",
        "clave 2" => "Pera",
        "clave 3" => "Piña",
    );

    $frutas2 = [
        "clave 1" => "Manzana",
        "clave 2" => "Pera"
    ];

    echo $frutas["clave 1"];
    echo $frutas[0]; // No funciona
    echo $frutas["Manzana"]; // No funciona porque no es una clave

    var_dump($frutas);
    echo "<br>";
    print_r($frutas);
    echo "<br>";

    // ARRAYS NO ASOCIATIVOS:
    $numeros1 = [
        1,
        2,
        3,
        4,
        5
    ];

    $numeros2 = ["1", "2", 3, "4", "5"];
    print_r($numeros1);
    echo "<br>";
    print_r($numeros2);
    echo "<br>";
    $mixto = [
        1,
        "uno",
        2,
        "dos",
        3,
        "tres",
        null,
        true
    ];

    print_r($mixto);
    echo "<br>";
    var_dump($mixto);
    echo "<br>";

    //Comparacion de array
    // Compara los valores y el orden
    if ($numeros1 == $numeros2) {
        echo "Los 2 arrays son iguales";
    } else {
        echo "Los 2 arrays no son iguales";
    }
    echo "<br>";


    $verduras = [
        "Pimiento",
        "Lechuga",
        "Cebolla"
    ];

    $verduras1 = [
        "Cebolla",
        "Pimiento",
        "Lechuga"
    ];

    var_dump($verduras);
    echo "<br>";
    var_dump($verduras1);
    echo "<br>";

    if ($verduras == $verduras1) {
        echo "Los arrays son iguales";
    } else {
        echo "<h3>Los arrays NO son iguales</h3>";
    }

    echo "<br>";

    $verduras2 = [
        0 => "Pimiento",
        1 => "Lechuga",
        2 => "Cebolla"
    ];

    $verduras3 = [
        2 => "Cebolla",
        0 => "Pimiento",
        1 => "Lechuga"
    ];

    // Tienen que coincidir la clave y el valor, y da igual el orden // Y tienen la misma longitud
    if ($verduras2 == $verduras3) {
        echo "Los arrays son iguales";
    } else {
        echo "<h3>Los arrays NO son iguales</h3>";
    }


    //Iteracion del array verduras
    ?>

    <h3>MIs verduritas con FOR</h3>
    <ol>
        <?php
        for ($i = 0; $i < count($verduras); $i++) {
        ?>
            <li>
                <?php
                echo $verduras[$i];
                ?>
            </li>
        <?php } ?>
    </ol>

    <?php
    echo "<ol>";
    for ($i = 0; $i < count($verduras); $i++) {
        echo "<li>" . $verduras[$i] . "</li>";
    }
    echo "</ol>";
    ?>


    <h3>Mis verduras con WHILE</h3>

    <ol>
        <?php
        $contador = 0;
        while ($a < count($verduras)) {
        ?>
            <li>
                <?php echo $verduras[$i];
                $contador++;
                ?>
            </li>
        <?php } ?>
    </ol>

    <h3>Mis frutitas con FOREACH</h3>
    <ul>
        <?php
        foreach ($verduras as $verdura) {
        ?>
            <li>
                <?php
                echo $verdura;
                ?>
            </li>
            <?php } ?>;
    </ul>

    <?php
    echo "<ol>";
    foreach ($verduras as $ejemplo) {
        echo "<li>" . $ejemplo . "</li>";
    }
    echo "</ol>";


    $verduras2 = [
        "uno" => "Pimiento",
        "dos" => "Lechuga",
        "tres" => "Cebolla"
    ];


    echo "<ul>";
    foreach ($verduras2 as $clave => $valor) {
        echo "<li> Clave: $clave Valor: $valor </li>";
    }
    echo "</ul>";
    ?>

    <ul>
        <?php
        foreach ($verduras2 as $clave => $valor) {
        ?>
            <li> <?php echo $clave . " " . $valor ?></li>
        <?php } ?>
    </ul>

    <?php
    $verduras = [
        "Pimiento",
        "Lechuga",
        "Cebolla"
    ];

    // Añadir elementos a un array
    // Solo se le puede meter el valor
    array_push($verduras, "Pepino", "Berenjena", "Calabacin");
    print_r($verduras);

    echo "<br>";
    $verduras[7] = "Zanahoria";
    print_r($verduras);
    echo $verduras[6]; // NO EXISTE
    $verduras[] = "Zanahoria"; // Lo pone en la posicion siguiente que seria 8
    $verduras[] = "Puerro";
    $verduras[100] = "NABO";

    array_values($verduras); // Te lo copia en otro array y te lo reordena sacando los huecos vacios
    print_r($verduras);


    $verduras2 = [
        "uno" => "Pimiento",
        "dos" => "Lechuga",
        "tres" => "Cebolla"
    ];
    print_r($verduras2);
    echo "<br>";
    $verduras2["cinco"] = "pepino";
    print_r($verduras2);
    echo "<br>";

    // Transformas un array asoaciativo a uno no asociativo
    // Porque te saca solo los valores y no las claves
    $verduras2 = array_values($verduras2);
    print_r($verduras2);
    echo "<br>";

    // Para eliminar una posicion del array
    // Te puedes cargar cualquier variable
    unset($verduras2[0]);
    print_r($verduras2);
    $verduras2 = array_values($verduras2);
    echo "<br>";

    

    ?>

</body>

</html>