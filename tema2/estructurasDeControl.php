<?php
//FORMAS DE HACER UNA ESTRUCTURA DE CONTROL IF
$a = -3;


//Primera forma
if ($a > 0) {
    echo "<p>El numero es positivo</p>";
}

//Segunda forma
if ($a > 0) echo "<p>El numero es positivo</p>";  //con este if solo una linea de código

//Tercera forma
if ($a > 0):
    echo "<p>El numero es positivo</p>";
endif;


//FORMAS DE HACER UNA ESTRUCTURA DE CONTROL IF-ELSE
$b = -2;

//primera forma
if ($b < 0) {
    echo "<p>El numero $b es negativo</p>";
} else {
    echo "<p>El numero $b es 0 o positivo</p>";
}

//segunda forma
if ($b > 0) echo "<p>El numero $b es negativo</p>";
else echo "<p>El numero $b es positivo o 0</p>";

//tercera forma
if ($b < 0):
    echo "<p>El numero $b es negativo</p>";
else:
    echo "<p>El numero $b es positivo o 0</p>";
endif;



//FORMA DE HACER UN IF ELSEIF
$x = 90;
//primera forma
if ($x < 0) {
    echo "<p>El numero $x es negativo</p>";
} elseif ($x > 0) {
    echo "<p>El numero $x es positivo</p>";
} else {
    echo "<p>El numero es 0</p>";
}


//tercera forma
if ($x < 0):
    "<p>El numero $x es negativo</p>";
elseif ($x > 0):
    "<p>El numero $x es positivo</p>";
else:
    echo "<p>El numero es 0</p>";
endif;




?>




SWITCHESSSSS
<hr>
<h1>SWITCHES!!!!!! :D</h1>
<?php


$entero = rand(1, 10);
switch ($entero) {
    case 1:
        echo "<p>La operación elegida es la suma: $entero</p>";
        break;
    case 2:
        echo "<p>La operación elegida es la multiplicacion: $entero</p>";
        break;
    case 3:
        echo "<p>La operación elegida es la resta: $entero</p>";
        break;
    case 4:
        echo "<p>La operación elegida es la división: $entero</p>";
        break;
    case 5:
        echo "<p>La operación elegida es el módulo: $entero</p>";
        break;
    case 6:
        echo "<p>La operación elegida es el and: $entero</p>";
        break;
    case 7:
        echo "<p>La operación elegida es el or: $entero</p>";
        break;
    default:
        echo "<p>No se ha escogido ninguna</p>";
}






$user = "cliente";
switch ($user) {
    case "cliente":
        echo "<p>Bienvenido $user, puede ver nuestro contenido</p>";
        break;
    case "admin":
        echo "<p>Bienvenido $user, tiene acceso a toda nuestra pagina web</p>";
        break;
    case "editor":
        echo "<p>Bienvenido $user, puede modificar el contenido que desee</p>";
        break; //en el ultimo no hay que ponerlo
}






$num1 = rand(1, 150);
$num2 = rand(50, 150);
switch (true) {
    case ($num1 > $num2):
        echo "<p>El primer numero es mayor que el segundo ($num1>$num2)</p>";
        break;
    case ($num1 >= 10 && $num2 >= 10):
        echo "<p>Ambos numeros son mayores o iguales a 10 ($num1,$num2)</p>";
        break;
    case ($num1 > 100 || $num2 > 100):
        echo "<p>Al menos uno de los dos numeros es mayor que 100 ($num1, $num2)</p>";
        break;
    default:
        echo "<p>No se cumple ninguna condicion</p>";
}






?>