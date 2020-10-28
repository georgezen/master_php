<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios bloque 2</title>
</head>

<body>
    <h1>Continuar con ejercicios</h1>

    <?php

    $numeritos = array(3, 5, 33, 55, 4, 1, 77, 5);

    foreach ($numeritos as $numero) {
        echo $numero . "<br>";
    }


    sort($numeritos);
    var_dump($numeritos). "<br>";

    $largo = count($numeritos);
    echo $largo. "<br>";

    echo "Separando busquedas de array";

    $buscado = array_search(-1,$numeritos);
    echo $buscado. "<br>";

    echo "<hr>";
    echo "Ejercicio 2". "<br>";

    $larguito =  array(2,4,2,35);

    array_push($larguito,44);

    if (count($larguito) > 4) {
        echo "El array es algo largo". "<br>";
    }else {
        array_push($larguito,3);
    }

    var_dump($larguito);

    echo "<hr>";
    echo "Ejercicio 3". "<br>";

    $texto_rell = "";

    if ($texto_rell == "") {
        $texto_rell = "hola putita";
    } else {
        echo $texto_rell;
    }

    echo "<h1>".strtoupper($texto_rell)."</h1>";

    echo "<hr>";
    echo "Ejercicio 4". "<br>";

    $arra = array();
    $entero = 3;
    $cadenin = "hola perra";
    $boli = true;


    function imprime($variable){
        echo "El tipo de la variable es ".gettype($variable)." y su valor es ".$variable;
    }

    imprime($cadenin);

    

    ?>



</body>

</html>
