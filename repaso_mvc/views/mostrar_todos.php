<ul>
    <?php while($user = $users->fetch_object()):?>
        <li><?php echo "El nombre es: ".$user->nombre." y el apellido es: ".$user->apellidos;?></li>
    <?php endwhile;?>

</ul>