<?php
session_start();
$usuario_autenticado = isset($_SESSION['usuario']);
include('../../Backend/BD_Conection/conection.php');
include('../../Backend/PHP/register.php');
include('../../Backend/PHP/login.php');
$sql = "SELECT * FROM publicaciones ORDER BY fecha_publicacion DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estructura_basica.css?v=3.0">
    <link rel="stylesheet" href="../CSS/publicaciones.css">
    <link rel="stylesheet" href="../CSS/publi.css">
    <link rel="stylesheet" href="../CSS/inicio.css">
    <title>Publicaciones</title>
</head>
<body>
    <header>
        <div id="barra_logo">
            <img src="/Frontend/assets/images/logo1.png" alt="logo" width="60px" height="60px">
            <p id="logotipo">ONE MORE LIGHT</p>
        </div>
        <div class="barra_superior">
            <a href="/Frontend/HTML/index.php">Inicio</a>
            <a href="/Frontend/HTML/index.php#nosotros">Nosotros</a>
            <a href="/Frontend/HTML/organizaciones.php">Organizaciones</a>
            <a href="/Frontend/HTML/proyecto.php">Proyecto</a>
            <a href="#">Publicaciones</a>
            <a href="/Frontend/HTML/contacto.php">Contacto</a>
        </div>
        <div id="barra_boton_login">        
        <?php if ($usuario_autenticado): ?>
    <div class="user-menu">
        <button class="user-menu-button">Hola, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</button>
        <div class="user-menu-content">
            <a href="perfil.php">Ver perfil</a>
            <a href="/Frontend/HTML/publicacion.php">Crear publicación</a>
            <a href="/Backend/PHP/logout.php">Cerrar sesión</a>
        </div>
    </div>
<?php else: ?>
    <a href="#modal_login" id="boton_login">Ingresar</a>
<?php endif; ?>
        </div>
    </header>

    <!-- Formulario de Registro -->
    <div id="modal_register" class="modalmask">
        <div class="modalbox movedown">
            <a href="#close" title="Cerrar" class="close">🗙</a>
            <img src="/Frontend/assets/images/logo1.png" alt="logo" class="logo1">
            <h2 style="margin-left: 10%; margin-top: 5%; font-size: 30px;">Registrarse</h2>
            <div style="min-height: 50px;"></div>
            <form method="post" action="../../Backend/PHP/register.php">
                <div class="filas_form">
                    <div class="parrafo">
                        <h4 class="r_h4">Nombre</h4>
                        <input type="text" name="nombre_usuario" class="input2" placeholder="Nombre de usuario" required>
                    </div>
                </div>
                <div class="filas_form">
                    <div class="parrafo">
                        <h4 class="r_h4">Email</h4>
                        <input type="email" name="correo" class="input2" placeholder="user@gmail.com" required>
                    </div>
                </div>
                <div class="filas_form">
                    <div class="parrafo">
                        <h4 class="r_h4">Contraseña</h4>
                        <input type="password" name="contrasena" class="input2" placeholder="********" required>
                    </div>
                </div>
                <div style="min-height: 30px;"></div>
                <div class="filas_form">
                    <div class="parrafo">
                        <input type="submit" id="boton1" value="Registrarse">
                    </div>
                </div>
            </form>
            <div class="modalbox_der">
                <div id="log_title">
                    <h2 style="font-size: 30px;">Iniciar sesión</h2>
                </div>
                <div id="log_conte">
                    <p>¿Ya tienes una cuenta registrada? ¡Inicia sesión!</p>
                    <div style="height: 30px;"></div>
                    <a href="#modal_login" title="Iniciar sesión" id="boton3">Iniciar sesión</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulario de Inicio de Sesión -->
    <div id="modal_login" class="modalmask">
        <div class="modalbox movedown">
            <a href="#close" title="Cerrar" class="close">🗙</a>
            <img src="/Frontend/assets/images/logo1.png" alt="logo" class="logo1">
            <h2 style="margin-left: 10%; margin-top: 5%; font-size: 30px;">Iniciar sesión</h2>
            <div style="min-height: 50px;"></div>
            <form method="post" action="../../Backend/PHP/login.php">
                <div class="filas_form">
                    <div class="parrafo">
                        <h4 class="r_h4">Email</h4>
                        <input type="email" name="correo" class="input2" placeholder="user@gmail.com" required>
                    </div>
                </div>
                <div class="filas_form">
                    <div class="parrafo">
                        <h4 class="r_h4">Contraseña</h4>
                        <input type="password" name="contrasena" class="input2" placeholder="********" required>
                    </div>
                </div>
                <div style="min-height: 100px;"></div>
                <div class="filas_form">
                    <div class="parrafo">
                    <input type="submit" id="boton1" value="Iniciar sesión" name="login">
                    </div>
                </div>
            </form>
            <div class="modalbox_der">
                <div id="log_title">
                    <h2 style="font-size: 30px; margin-left: 18px;">Registrarse</h2>
                </div>
                <div id="log_conte" style="margin-top: -20px;">
                    <p>¿No tienes una cuenta? ¡Regístrate!</p>
                    <div style="height: 30px;"></div>
                    <a href="#modal_register" title="Registrarse" id="boton3">Registrarse</a>
                </div>
            </div>
        </div>
    </div> 

    <main>
    <h2>Publicaciones</h2>
    <?php
    if ($result->num_rows > 0) {
        // Itera sobre cada fila de resultados para mostrar cada publicación
        while ($row = $result->fetch_assoc()) {
    ?>
        <div class="publicacion">
            <div class="fondo_gradiente">
                <div style="padding-top: 100px;"></div>
                <div style="padding-top: 50px;"></div>
                <div class="cont_publicacion">
                    <div class="publicacion">
                        <div class="publicacion_barra_superior">
                            <div class="subcont_publi">
                                <img id="foto_org_publicacion" src="/Frontend/assets/images/FotoOrg_Default.png" width="40px" height="40px">
                                <div style="width: 20px;"></div>
                                <div>
                                    <strong><?php echo htmlspecialchars($_SESSION['usuario']); ?></strong>
                                </div>
                            </div>
                            <a href="#"><img src="/Frontend/assets/icons/menu_opciones.png" width="25px" height="25px" style="opacity: 0.7;"></a>
                        </div>
                        <img src="/Frontend/assets/images/banner1.jpg" class="img_publicacion">
                        <div class="contenido_publicacion">
                            <p><?php echo htmlspecialchars($row['titulo']); ?></p>
                            <p><?php echo htmlspecialchars($row['texto_publicacion']); ?></p>
                            <p class="fecha-publicacion"><small>Fecha: <?php echo htmlspecialchars($row['fecha_publicacion']); ?></small></p>
                            <div class="comentarios_publicacion">
                                <?php
                                $id_publicacion = $row['id_publicacion'];
                                $sql_comentarios = "SELECT c.comentario, c.fecha_comentario, u.nombre_usuario
                                                    FROM comentarios c, usuarios u
                                                    WHERE c.id_publicacion = '$id_publicacion' AND c.id_usuario = u.id
                                                    ORDER BY c.fecha_comentario DESC";
                                $result_comentarios = $conn->query($sql_comentarios);

                                if ($result_comentarios && $result_comentarios->num_rows > 0):
                                    while ($comentario = $result_comentarios->fetch_assoc()):
                                ?>
                                    <p style="font-weight: bold;">Comentarios</p><br>
                                    <div id="contenedor_comentarios">
                                        <p class="nombre-usuario-comentario"><strong><?php echo htmlspecialchars($comentario['nombre_usuario']); ?> dijo:</strong></p>
                                        <p class="texto-comentario"><?php echo htmlspecialchars($comentario['comentario']); ?></p>
                                        <p class="fecha-comentario"><?php echo htmlspecialchars($comentario['fecha_comentario']); ?></p>
                                    </div>
                                <?php
                                    endwhile;
                                else:
                                ?>
                                    <p>Aún no hay comentarios.</p>
                                <?php
                                endif;
                                ?>
                            </div>
                            <?php if ($usuario_autenticado): ?>
                            <form method="post" action="../../Frontend/HTML/publicaciones.php">
                                <input type="hidden" name="id_publicacion" value="<?php echo htmlspecialchars($row['id_publicacion']); ?>">
                                <textarea name="comentario" placeholder="Escribe un comentario..." required></textarea>
                                <input type="submit" value="Comentar">
                            </form>
                            <?php else: ?>
                                <p>Debes iniciar sesión para comentar.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
        }
    } else {
        echo "<p>No hay publicaciones disponibles.</p>";
    }
    ?>
</main>
</body>
</html>
