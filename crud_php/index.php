<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud de todas las tecnologias ahora con token</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">
        <header class="header">
            <h1 class="title">Crud con todo junto (html,css,js,php y mysql)</h1>
        </header>

        <main class="main">
            <section class="section">
                <div class="btn-crud">
                    <div class="msj"></div>

                    <input type="button" value="Añadir usuario" id="open_form_add" class="get_datos">
                </div>


                <div class="tabla">
                    <table border="1" class="table_user">
                        <thead>
                            <tr>
                                <th>Ih:</th>
                                <th>Nombre:</th>
                                <th>Apellidos:</th>
                                <th>Acciones:</th>
                            </tr>
                        </thead>
                        <tbody class="user_body">
                        </tbody>
                    </table>
                </div>

            </section>
            <aside class="aside">
                <div class="div_aside">
                    <h2 class="title-aside">La tabla del lado izquierdo</h2>

                </div>

                <form id="form_user_add" class="form_user">
                    <h3>Añadir usuarios</h3>
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" id="name" class="name">

                    <label for="">Apellidos</label>
                    <input type="text" name="apellidos" id="last_name" class="last_name">

                    <input type="submit" id="save_user" class="save_user" value="guardar" />
                    <input type="button" class="save_user close_form" value="cerrar" />
                </form>

                <form id="form_user_edit" class="form_user">
                    <h3>Editar usuarios</h3>
                    <input type="hidden" name="id_update_user" id="id_update_user" value="">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre_edit" id="name_edit" class="name">

                    <label for="">Apellidos</label>
                    <input type="text" name="apellidos_edit" id="last_name_edit" class="last_name">

                    <input type="submit" id="edit_user" class="save_user" value="Update" />
                    <input type="button" class="save_user close_form_edit" value="cerrar" />
                </form>
            </aside>

        </main>

        <footer class="footer">
            <span>Derechos reservados Dracosoftware-zen.com</span>
        </footer>

    </div>

    <script src="js/app.js"></script>
</body>

</html>
