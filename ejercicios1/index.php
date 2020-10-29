<?php

// tipo de dato ambas variables son string
$pais = 'Mexico';
$continente = 'america';


echo gettype($pais) . "<br>";
echo "Vivo en " . $pais . " y estoy en el continente de " . $continente;

echo "<hr/>";
echo "Ejercicio 2" . "<br>";

for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "Este es un numero par " . $i . "<br>";
    }
}

echo "<hr/>";
echo "Ejercicio 3" . "<br>";
$cont = 0;
$res = 0;
while ($cont <= 10) {

    $res = $cont * $cont;
    echo "El resultado es: " . $res . "<br/>";
    $cont++;
}

echo "<hr/>";
echo "Ejercicio 4" . "<br>";

// if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
//     $numero1 = $_GET['numero1'];
//     $numero2 = $_GET['numero2'];
//     $operador = $_GET['operador'];
//     $res = 0;

//     switch ($operador) {
//         case '+':
//             $res = $numero1 + $numero2;
//             break;
//         case '-':
//             $res = $numero1 - $numero2;
//             break;
//         case '/':
//             $res = $numero1 / $numero2;
//             break;
//         case '*':
//             $res = $numero1 * $numero2;
//             break;

//         default:
//             echo "Hazte pendejo";
//             break;
//     }

//     echo "El resultado es " . $res;
// } else {
//     echo "pon numeros puto";
// }

echo "<hr/>";
echo "Ejercicio 5" . "<br>";
if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    for ($i = $numero1; $i <= $numero2; $i++) {
        echo "Los numeros entre los dos dados son " . $i . "<br/>";
    }
} else {
    echo "pon numeros puto";
}

echo "<hr/>";
echo "Ejercicio 6" . "<br>";

?>
<table border="1">
    <thead>
        <tr>
            <td>Numero base</td>
            <td>Numero multiplicador</td>
            <td>Resultado</td>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 10; $j++) { ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $j; ?></td>
                    <td><?php echo $i * $j; ?></td>

                </tr>

            <?php     } ?>
            <tr>
                <td colspan="3">separador de la tabla del <?php echo $i?></td>
                
            </tr>
        <?php  }     ?>


    </tbody>

</table>