<h1><?php echo $imprimir_nota;?></h1>

<ul>
    <?php while($nota = $notas->fetch_object()):?>
        <li><?php echo "La materia es: ".$nota->nombre." la calif es: ".$nota->calificacion;?></li>
    <?php endwhile;?>

</ul>