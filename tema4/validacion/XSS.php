<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALIDACIÓN</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="script">
        <input type="submit" value="Jakeo">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sanitizado = htmlspecialchars($_POST["script"]);
        echo $_POST["script"];
    }
    ?>
</body>

</html>