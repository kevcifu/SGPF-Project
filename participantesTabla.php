<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="./css/participantesTabla.css" />
        <link rel="stylesheet" href="./css/normalize.css" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;1,300;1,700;1,900&display=swap" rel="stylesheet">
        <title>Tabla Participantes</title>
    </head>
    <body>
        <header>
            <div class="logo-titulo">
            <img src="./img/icons/Logo-de-SENA-png-verde.png" alt="logo_sena" width="80" height="80">
            <hr>
            <h2>Sistema de gestión de<br> proyectos formativos SENA</h2>
            </div>
            <div  class="iconoHamburguesa menu" id="menu" >
            <img src="./img/icons/hamburguesa.png" alt="logo_sena" width="30" height="30">
            </div>
        </header>
        <nav id="navega">
            <ul>
                <li><a href="">Aprendiz</a></li>
                <li><a href="">Participantes</a></li>
                <li><a href="">Ficha proyecto</a></li>
                <li><a href="">Fases</a></li>
                <li><a href="">Instructor</a></li>
                <li><a href="">Fases Instructor</a></li>
            </ul>
        </nav>
        <main>
            <div class="container-tabla">
                <h2 class="title-tabla">Datos Participantes</h2>
                <form action="/buscar" method="GET">
                    <input
                    type="search"
                    id="buscar"
                    name="buscar"
                    placeholder="Buscar por aprendiz o proyecto"
                    />
                    <button type="submit">Buscar</button>
                </form>
                <a href="./participantesAgregar.php"><h2>Nuevo Participante</h2></a>
                <table cellspacing="0">
                    <thead>
                        <tr>
                            <th>Aprendiz</th>
                            <th>Proyecto</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bryan Murillo Miessler</td>
                            <td>Coca cola</td>
                            <td class="container-action-btns">
                                <a href="./participantesEditar.php"><button class="btn-editar">Editar</button></a>
                                <button class="btn-detalle">Ver detalle</button>
                                <button class="btn-borrar">Borrar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Bryan Murillo Miessler</td>
                            <td>Coca cola</td>
                            <td class="container-action-btns">
                                <a href="./participantesEditar.php"><button class="btn-editar">Editar</button></a>
                                <button class="btn-detalle">Ver detalle</button>
                                <button class="btn-borrar">Borrar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Bryan Murillo Miessler</td>
                            <td>Coca cola</td>
                            <td class="container-action-btns">
                                <a href="./participantesEditar.php"><button class="btn-editar">Editar</button></a>
                                <button class="btn-detalle">Ver detalle</button>
                                <button class="btn-borrar">Borrar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Bryan Murillo Miessler</td>
                            <td>Coca cola</td>
                            <td class="container-action-btns">
                                <a href="./participantesEditar.php"><button class="btn-editar">Editar</button></a>
                                <button class="btn-detalle">Ver detalle</button>
                                <button class="btn-borrar">Borrar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Bryan Murillo Miessler</td>
                            <td>Coca cola</td>
                            <td class="container-action-btns">
                                <a href="./participantesEditar.php"><button class="btn-editar">Editar</button></a>
                                <button class="btn-detalle">Ver detalle</button>
                                <button class="btn-borrar">Borrar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
        <script src="./js/script.js"></script>
    </body>
</html>