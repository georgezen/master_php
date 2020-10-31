<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud de todas las tecnologias</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php 
        require_once 'conexion.php';
    
        $usuarios = "select * from crud_php.usuarios";
        $datos = mysqli_query($conn,$usuarios);
        
        
    ?>

    <div class="container">
        <header class="header">
            <h1 class="title">Crud con todo junto (html,css,js,php y mysql)</h1>
        </header>

        <main class="main">
            <section class="section">
                <div class="btn-crud">
                    <input type="button" value="Consultar crud" id="get_datos" class="get_datos">
                </div>


                <div class="tabla">
                    <table border="1" class="table_user">
                        <thead>
                            <tr>
                                <td>ID:</td>
                                <td>Nombre:</td>
                                <td>Apellidos:</td>
                            </tr>
                        </thead>
                        <tbody class="user_body">
                            <?php
                                // foreach($datos as $dato):
                            ?>
                            <!-- <tr>
                                <td><?php echo $dato['id_usuario'];?></td>
                                <td><?php echo $dato['nombre'];?></td>
                                <td><?php echo $dato['apellidos'];?></td>
                            </tr> -->
                                <?php //endforeach;
                                //mysqli_close($conn);
                                ?>



                        </tbody>
                    </table>
                </div>

            </section>
            <aside class="aside">
                <h2 class="title-aside">La tabla del lado izquierdo</h2>
            </aside>

        </main>

        <footer class="footer">
            
            <span>Derechos reservados Dracosoftware-zen.com</span>
                
            

        </footer>

    </div>

<script src="js/app.js"></script>
</body>

</html>