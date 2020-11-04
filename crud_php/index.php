<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud de todas las tecnologias</title>
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
                    <input type="button" value="Consultar crud" id="get_datos" class="get_datos">
                    <input type="button" value="Añadir usuario" id="open_form_add" class="get_datos">
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
                        </tbody>
                    </table>
                </div>

            </section>
            <aside class="aside">
                <div class="div_aside">
                    <h2 class="title-aside">La tabla del lado izquierdo</h2>

                </div>

                <form id="form_user">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" id="name" class="name">

                    <label for="">Apellidos</label>
                    <input type="text" name="apellidos" id="last_name" class="last_name">

                    <button type="submit" id="save_user" class="save_user">guardar</button>
                    <button type="button" id="close_form" class="save_user">cerrar</button>
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