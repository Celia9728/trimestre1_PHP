<?php
$diaSemana = "viernes";
$clases = match ($diaSemana) {
    "lunes" => "NO hay servidor",
    "martes" => "HAY servidor",
    "miercoles" => "NO hay servidor",
    "jueves" => "HAY servidor",
    "viernes" => "HAY servidor",
    default => "FINDEE"
};

echo $clases . "<br>";

$numero = rand(1, 10);
$condicion = ($numero % 2 == 0) ? 0 : 1;

echo match ($condicion) {
    1 => "El numero $n es par <br>",
    0 => "El numero $n es impar <br>"
};
