<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="./css/fichaProyecto.css" />
        <link rel="stylesheet" href="./css/normalize.css" />
        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700;800&display=swap"
            rel="stylesheet"
        />
        <title>Ficha proyecto</title>
    </head>
    <body>
        <header>
            <div class="logo-titulo">
                <img
                    src="./img/icons/Logo-de-SENA-png-verde.png"
                    alt="logo_sena"
                    width="80"
                    height="80"
                />
                <hr />
                <h2>
                    Sistema de gestión de<br />
                    proyectos formativos SENA
                </h2>
            </div>
            <div class="usuario">
                <span>¡Bienvenido Administrador!</span>
                <img src="./img/icons/user.png" alt="user" />
            </div>
        </header>
        <nav>
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
                <h2 class="title-tabla">Datos proyecto</h2>
                <form action="/buscar" method="GET">
                    <input
                        type="search"
                        id="buscar"
                        name="buscar"
                        placeholder="Buscar por nombre o ficha"
                    />
                    <button type="submit">Buscar</button>
                </form>
                <table cellspacing="0">
                    <thead>
                        <tr>
                            <th>Ficha</th>
                            <th>Nombre proyecto</th>
                            <th>Cliente</th>
                            <th>Programa formación</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>19230</td>
                            <td>Jibariando</td>
                            <td>Barrio Antioquia</td>
                            <td>Criminalistica</td>
                            <td>Re-activos</td>
                            <td>
                                <span>editar</span>
                                <span>ver detalle</span>
                                <span>borrar</span>
                            </td>
                        </tr>
                        <tr>
                            <td>19230</td>
                            <td>Jibariando</td>
                            <td>Barrio Antioquia</td>
                            <td>Criminalistica</td>
                            <td>Re-activos</td>
                            <td>
                                <span>editar</span>
                                <span>ver detalle</span>
                                <span>borrar</span>
                            </td>
                        </tr>
                        <tr>
                            <td>19230</td>
                            <td>Jibariando</td>
                            <td>Barrio Antioquia</td>
                            <td>Criminalistica</td>
                            <td>Re-activos</td>
                            <td>
                                <span>editar</span>
                                <span>ver detalle</span>
                                <span>borrar</span>
                            </td>
                        </tr>
                        <tr>
                            <td>19230</td>
                            <td>Jibariando</td>
                            <td>Barrio Antioquia</td>
                            <td>Criminalistica</td>
                            <td>Re-activos</td>
                            <td>
                                <span>editar</span>
                                <span>ver detalle</span>
                                <span>borrar</span>
                            </td>
                        </tr>
                        <tr>
                            <td>19230</td>
                            <td>Jibariando</td>
                            <td>Barrio Antioquia</td>
                            <td>Criminalistica</td>
                            <td>Re-activos</td>
                            <td>
                                <span>editar</span>
                                <span>ver detalle</span>
                                <span>borrar</span>
                            </td>
                        </tr>
                        <tr>
                            <td>19230</td>
                            <td>Jibariando</td>
                            <td>Barrio Antioquia</td>
                            <td>Criminalistica</td>
                            <td>Re-activos</td>
                            <td>
                                <span>editar</span>
                                <span>ver detalle</span>
                                <span>borrar</span>
                            </td>
                        </tr>
                        <tr>
                            <td>19230</td>
                            <td>Jibariando</td>
                            <td>Barrio Antioquia</td>
                            <td>Criminalistica</td>
                            <td>Re-activos</td>
                            <td>
                                <span>editar</span>
                                <span>ver detalle</span>
                                <span>borrar</span>
                            </td>
                        </tr>
                        <tr>
                            <td>19230</td>
                            <td>Jibariando</td>
                            <td>Barrio Antioquia</td>
                            <td>Criminalistica</td>
                            <td>Re-activos</td>
                            <td>
                                <span>editar</span>
                                <span>ver detalle</span>
                                <span>borrar</span>
                            </td>
                        </tr>
                        <tr>
                            <td>19230</td>
                            <td>Jibariando</td>
                            <td>Barrio Antioquia</td>
                            <td>Criminalistica</td>
                            <td>Re-activos</td>
                            <td>
                                <span>editar</span>
                                <span>ver detalle</span>
                                <span>borrar</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-container">
                <h2 class="title-form">Nuevo Proyecto</h2>
                <form action="" class="form-nuevo-proyecto">
                    <label for="nombre">Nombre:</label>
                    <input
                        class="input"
                        type="text"
                        name="nombre"
                        placeholder="Ingrese Nombre"
                        id=""
                    />

                    <label for="titulo">Titulo:</label>
                    <input
                        class="input"
                        type="text"
                        name="titulo"
                        placeholder="Ingrese Titulo"
                        id=""
                    />

                    <label for="cliente">Cliente:</label>
                    <input
                        class="input"
                        type="text"
                        name="cliente"
                        placeholder="Ingrese Cliente"
                        id=""
                    />

                    <label for="pro">Programa formación:</label>
                    <input
                        class="input"
                        type="text"
                        name="pro"
                        placeholder="Ingrese Programa formación"
                        id=""
                    />

                    <label for="plant">Planteamiento proyecto:</label>
                    <input
                        class="input"
                        type="text"
                        name="plant"
                        placeholder="Ingrese el planteamiento del proyecto"
                        id=""
                    />

                    <label for="justificacion">Justificacion:</label>
                    <textarea
                        name="justificacion"
                        id="justificacion"
                        cols="20"
                        rows="3"
                        placeholder="Ingrese la justificacion del proyecto"
                    ></textarea>

                    <label for="obj-general">Objetivo general:</label>
                    <textarea
                        name="obj-general"
                        id="obj-general"
                        cols="20"
                        rows="3"
                        placeholder="Ingrese el objetivo general del proyecto"
                    ></textarea>

                    <label for="funcion">Funcion:</label>
                    <textarea
                        name="funcion"
                        id="funcion"
                        cols="20"
                        rows="3"
                        placeholder="Ingrese la función del proyecto"
                    ></textarea>

                    <label for="Alcance">Alcance del proyecto:</label>
                    <input
                        class="input"
                        type="text"
                        name="alcance"
                        placeholder="Ingrese el alcance del proyecto"
                    />

                    <label for="estado">Estado:</label>
                    <select name="estado" id="estado">
                        <option value="aprobado">Aprobado</option>
                        <option value="reprobado">Reprobado</option>
                        <option value="ajustar">Por ajustar</option>
                    </select>

                    <div class="btns-container">
                        <input
                            class="input-submit-registrar"
                            type="submit"
                            value="Registrar"
                        />
                        <input
                            class="input-submit-limpiar"
                            type="submit"
                            value="Limpiar"
                        />
                    </div>
                </form>
            </div>
        </main>
    </body>
</html>