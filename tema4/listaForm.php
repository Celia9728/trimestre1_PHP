<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $mensaje = $_GET["mensaje"];
        $veces = $_GET["veces"];
    }
    ?>

    <ol>
    <?php
    for ($i=0; $i < $veces; $i++) { ?>
        <li><?php echo $mensaje ?></li>
    <?php } ?>
    </ol>
</body>

</html>