<?php
require_once 'header.php';
?>

<section>
    <h1>hola</h1>

    <?php
    $pokemons = array('pikachu', 'bolbasour', 2);

    $poke_api = array(
        array(
            'nombre' => 'pikachu',
            'num' => '3'
        ),
        array(
            'nombre' => 'bolbasour',
            'num' => 23
        )
    );

    echo "impreso con for normal";
    echo "<ul>";
    for ($i = 0; $i < count($pokemons); $i++) {
        echo "<li>" . $pokemons[$i] . "</li>";
    }
    echo "</ul>";

    echo "impreso con foreach";
    echo "<ul>";
    foreach ($pokemons as  $pokemon) {


        echo "<li>" . $pokemon . "</li>";
    }
    echo "</ul>";

    echo "impreso con foreach la pokeapi";
    echo "<ul>";
    foreach ($poke_api as  $poke_api1) {

        echo "<li>" . "el pokemon se llama " . $poke_api1['nombre'] . " y el numero es " . $poke_api1['num'] . "</li>";
    }
    echo "</ul>";

    ?>

</section>

<?php
require_once 'footer.php';
?>