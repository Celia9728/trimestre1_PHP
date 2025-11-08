<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primitiva</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>

<body>
    <!--6 combinaciones con numeros entre 1-20
    NO SE PUEDEN REPETIR NUMEROS SIEMPRE ESTÁN LOS NUMEROS EN ORDEN DE MENOR A MAYOR FORMULARIO CON 6 CASILLAS (NUM1, NUM2...
    BOTON DE ENVIAR
    GUARDAR CADA UNO DE LOS NUMEROS EN UN ARRAY "miApuesta"
    Generar arrays aleatorios con seis elementos con num random del 1 al 20 
    hasta que coincidan todos
    1º Comprobar repes (con funcion). Si repite numeros me salgo
    2º Ordenar el array --- sort
    3º Generar de manera random hasta dar con el ganador
    Print nuestra apuesta, el array ganador, numero de intentos, posibilidad de ganar 1/intentos -->


    <form action="" method="post">
        <label for="num1"> Numero 1:</label>
        <input type="number" name="num1" min="1" max="20">
        <br>
        <label for="num2"> Numero 2:</label>
        <input type="number" name="num2" min="1" max="20">
        <br>
        <label for="num3"> Numero 3:</label>
        <input type="number" name="num3" min="1" max="20">
        <br>
        <label for="num4"> Numero 4:</label>
        <input type="number" name="num4" min="1" max="20">
        <br>
        <label for="num5"> Numero 5:</label>
        <input type="number" name="num5" min="1" max="20">
        <br>
        <label for="num6"> Numero 6:</label>
        <input type="number" name="num6" min="1" max="20">
        <input type="submit" value="ENVIAR">
    </form>

    <?php
    // Hacer un formulario con 6 numeros.
    // Guardar en el array miApuesta
    // Ordenar el array mi Apuesta
    // Generar un array de random del (1 al 20) para comparar con mi apuesta

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $miApuesta = [];
        // Rellenar el array con los numeros del formulario
        for ($i = 0; $i < 6; $i++) {
            array_push($miApuesta, $_POST["num" . ($i + 1)]);
        }
        print_r($miApuesta);
        
    
        
    }

    ?>
</body>

</html>