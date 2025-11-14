
<?php
// GENERAL 21% REDUCIDO 10% SUPERREDUCIDO 4%
// CREAR 3 CONSTANTES, UNA PARA CADA TIPO DE IVA
function calcularIVA(FLOAT $precio, string $tipo): float
{
    define("general", 0.21);
    define("reducido", 0.10);
    define("superreducido", 0.04);

    $resultado = Match ($tipo) {
        "general" => $precio + ($precio * general),
        "reducido" => $precio + ($precio * reducido),
        "superreducido" => $precio + ($precio * superreducido),
    };

    return $resultado;
}
?>