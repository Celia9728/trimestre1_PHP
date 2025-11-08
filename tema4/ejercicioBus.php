<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio bus</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>

<body>
    <?php
    //Origen, Destino, Duracion(min), Precio(€)
    $autobuses = [
        ["Málaga", "Ronda", 90, 10],
        ["Churriana", "Málaga", 20, 3],
        ["Málaga", "Ganada", 30, 15],
        ["Torrole", "Málaga", 20, 3]
    ];

    /**
     * Ejercicio 1: Añadir 2 lineas de bus
     * a
     */


    /**
     * Ejercico 2: Ordenar por duración de más a menos
     */

    /**
     * Ejercicio 3: Mostrar las líneas en una tabla
     * ordenando por duración.
     * Si la duración es la mis, ordenar por precio de más
     * barato a más caro.
     */

    /**
     * Ejercicio 4: Inserta otrar 3 lineas
     */

    /**
     * Ejercicio 5: Ordenar primero por origen, luego por destino
     */

    /**
     * Ejercicio 6: Ordenar primero por duración luego por precio
     */

    /**
     * Ejercicio 7: Crear una columna llamada TIPO que contenga
     * un string.
     * Si duración menor o igual a 30 minutos => corta distancia
     * Si duración es mayor que 30 pero menor o igual a 120 => media distancia
     * Si duracion es mayor a 120 => larga distancia
     */

    /**
     * Ejercicio 8: Una vez pintada la segunda tabla (con el tipo), pinta de
     * nuevo pero con un orden diferente:
     * primero por origen (A-Z), despues por duración (menor a mayor)
     * y por ultimo por precio (menor a mayor).
     */

    /**
     * Ejercicio 9: Hacer lo mismo que los tipos de viaje
     * (corta, media y larga distancia)
     * pero con el precio, la columna nueva se llamará calidad
     * 
     * Si precio <= 10 entonces calidad = estandar
     * Si precio mayor que 10 y menor que 20, entonces calidad = premium
     * Si precio es mayor que 20, entonces calidad = luxury
     */

    ?>
</body>

</html>