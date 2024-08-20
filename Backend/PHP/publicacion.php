<?php
session_start();
$usuario_autenticado = isset($_SESSION['usuario']);
include('../../Backend/BD_Conection/conection.php');
include('../../Backend/PHP/register.php');
include('../../Backend/PHP/login.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['titulo']) && isset($_POST['texto_publicacion']) && isset($_POST['fecha_publicacion'])) {
    $titulo = $_POST['titulo'];
    $texto_publicacion = $_POST['texto_publicacion'];
    $fecha_publicacion = $_POST['fecha_publicacion'];

    // Insertar la publicación en la base de datos
    if ($conn) {
        $query = "INSERT INTO publicaciones ( titulo, texto_publicacion, fecha_publicacion) VALUES ( '$titulo', '$texto_publicacion', '$fecha_publicacion')";
        if (!$conn->query($query)) {
            echo "Error al crear publicación: " . $conn->error;
        } else {
            // Redirigir a la página de publicaciones
            header("Location: ../../Frontend/HTML/publicaciones.php");
            exit;
        }
    } else {
        echo "Error en la conexión a la base de datos.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/inicio.css">
    <link rel="stylesheet" href="../CSS/estructura_basica.css?v=2.0">
    <link rel="stylesheet" href="../CSS/posting.css?v=2.0">
    <title>One More Light</title>
</head>

<body>
<header>
        <div id="barra_logo">
            <img src="/Frontend/assets/images/logo1.png" alt="logo" width="60px" height="60px">
            <p id="logotipo">ONE MORE LIGHT</p>
        </div>
        <div class="barra_superior">
            <a href="/Frontend/HTML/index.php#nosotros">Nosotros</a>
            <a href="/Frontend/HTML/organizaciones.php">Organizaciones</a>
            <a href="/Frontend/HTML/proyecto.php">Proyecto</a>
            <a href="/Frontend/HTML/publicaciones.php">Publicaciones</a>
            <a href="/Frontend/HTML/contacto.php">contacto</a>
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
    <br><br><br>
    <h1>Crear Publicación</h1>
<div>
    <form class="post-form" action="publicacion.php" method="post">
        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo" required><br>
        <label for="texto_publicacion">Texto:</label><br>
        <textarea id="texto_publicacion" name="texto_publicacion" rows="4" cols="50" required></textarea><br>
        <label for="fecha_publicacion">Fecha de Publicación:</label><br>
        <input type="datetime-local" id="fecha_publicacion" name="fecha_publicacion" required><br><br>
        <input type="submit" value="Publicar">
    </form>
</div>
    <footer>
        <div class="elementos_desplazados">
            <div class="sub_elementos_footer">
                <h3>Mas información</h3><br>
                <a href="/Frontend/HTML/index.php#nosotros" class="footer_anclas">Quienes somos</a><br>
                <a href="/Frontend/HTML/organizaciones.php" class="footer_anclas">Organizaciones</a><br>
                <a href="/Frontend/HTML/publicaciones.php" class="footer_anclas">Publicaciones</a><br>
                <a href="/Frontend/HTML/proyecto.php" class="footer_anclas">Proyecto</a><br>
                <a href="/Frontend/HTML/index.php" class="footer_anclas">Inicio</a>
            </div>
            <div class="sub_elementos_footer">
                <h3>Acerca de</h3><br>
                <p>Texto...</p>
            </div>
            <div class="sub_elementos_footer">
                <h3>Contacto</h3><br>
                <div class="elementos_desplazados">
                    <a href="https://www.facebook.com/" class="items_footer"><img src="/Frontend/assets/icons/icon_facebook.png" alt="icon" width="25px" height="25px"></a>
                    <a href="https://www.instagram.com/" class="items_footer"><img src="/Frontend/assets/icons/icon_instagram.png" alt="icon" width="25px" height="25px"></a>
                    <a href="https://www.twitter.com/"><img src="/Frontend/assets/icons/icon_x.png" alt="icon" width="25px" height="25px" ></a>
                </div><br>
                <div class="elementos_desplazados">
                    <img src="/Frontend/assets/icons/icon_telefono.png" alt="icon" width="25px" height="25px" class="items_footer">
                    +52 764 115 2106
                </div><br>
                <div class="elementos_desplazados">
                    <img src="/Frontend/assets/icons/icon_correo-electronico.png" alt="icon" width="25px" height="25px" class="items_footer">
                    onemorelight@gmail.com
                </div>
            </div>
            <div style="min-width: 50px;"></div>
            <div class="sub_elementos_footer">
                <h3>Responsabilidad</h3><br>
                <p>La presente plataforma busca serle util a los usuarios</p>
            </div>
        </div>
    </footer>
    <div class="footer_bajo">
        <img src="/Frontend/assets/images/logo1_contraste.png" alt="logo" width="75px" height="75px">
    </div>    
</body>
</html>