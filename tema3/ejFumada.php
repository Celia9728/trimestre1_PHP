<?php
$sumaNotas = 0;
$alumnos = rand(15, 25);
$alumnosValidos = 0;

echo "<table border = '1'>";
echo "<tr><th>Alumnos</th><th>Notas</th></tr>";
for ($i = 1; $i <= $alumnos; $i++) {
    $nota = rand(1, 25);
    echo "<tr>";
    echo "<td> Alumno $i </td>";
    if ($nota <= 10) {
        echo match (true) {
            ($nota < 5) => "<td> $nota (SUSPENSO) </td>",
            ($nota >= 5 && $nota < 6) => "<td> $nota (SUFICIENTE) </td>",
            ($nota >= 6 && $nota < 7) => "<td> $nota (BIEN) </td>",
            ($nota >= 7 && $nota < 9) => "<td> $nota (NOTABLE) </td>",
            ($nota >= 9 && $nota <= 10) => "<td> $nota (SOBRESALIENTE) </td>",
        };
        $sumaNotas += $nota;
        $alumnosValidos++;
    } else {
        echo "<td> Nota no valida </td>";
    }
    echo "</tr>";
}
$media = $sumaNotas / $alumnosValidos;
echo "<tr> <td colspan = '2'> Media clase $media </td> </tr>";
echo "</table>";
