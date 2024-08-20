<?php 
 session_start();
$usuario_autenticado = isset($_SESSION['usuario']);
include('../../Backend/BD_Conection/conection.php');
include('../../Backend/PHP/register.php');
include('../../Backend/PHP/login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/inicio.css">
    <link rel="stylesheet" href="../CSS/estructura_basica.css?v=2.0">
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

    
    <!-- Estructura principal -->
    <main>
        <div class="banner_principal">
            <div id="container_img">
                <img src="/Frontend/assets/images/logo1.png" id="imagen_logo">
            </div>
            <div id="container_titulo">
                <p id="titulo" class="sin_seleccion">One More Light</p>
                <p style="font-weight: bold; font-family: 'lemonmilk';" class="sin_seleccion">Iluminando vidas, creando cambios</p>
            </div>
        </div>

        <div class="carrusel_container">
            <div class="carrusel">
                <div class="h_titulo">
                    <h1><b>Organizaciones</b></h1>
                </div>
                <div class="slide">
                    <div class="item" style="background-image: linear-gradient(270deg, #ffffff, transparent, transparent), url(/Frontend/assets/images/banner2.jpg);">
                        <div class="contenido">
                            <div class="nombre"><p style="color: white;">Pronatura Mexico</p></div>
                            <div class="descripcion"><p class="c_texto">Pronatura México es una organización ambiental con larga trayectoria en nuestro país. Desde su creación en 1981 
                                ha impulsado cambios de comportamiento en la sociedad para lograr mejores modelos de uso y manejo de recursos naturales</p></div>
                            <a href="#" class="enlaces">Leer mas</a>
                        </div>
                    </div>
                    <div class="item" style="background-image: linear-gradient(270deg, #ffffff, transparent, transparent), url(/Frontend/assets/images/banner7.jpg);">
                        <div class="contenido">
                            <div class="nombre"><p style="color: white;">Banco de Tapitas</p></div>
                            <div class="descripcion"><p class="c_texto">Somos una organización no gubernamental sin fines de lucro, donataria autorizada, reconocida por el Centro Mexicano de la Filantropía (CEMEFI), CAF 
                                America y Benevity a nivel internacional. Nos encargamos de recolectar, almacenar y reciclar todo tipo de tapas de plástico con la finalidad de generar recursos económicos para apoyar diferentes 
                                programas de atención a menores de 21 años con diagnóstico de cáncer.</p></div>
                            <a href="#" class="enlaces">Leer mas</a>
                        </div>
                    </div>
                    <div class="item" style="background-image: linear-gradient(270deg, #ffffff, transparent, transparent), url(/Frontend/assets/images/banner1.jpg);">
                        <div class="contenido">
                            <div class="nombre"><p style="color: white;">Centro Mexicano de Derecho Ambiental</p></div>
                            <div class="descripcion"><p class="c_texto">Contribuye a la aplicación efectiva de la legislación, la mejora de las políticas públicas, el fortalecimiento 
                                de la legalidad y el estado de derecho; a favor del desarrollo que genere bienestar social en armonía con la naturaleza, bajo los principios 
                                de justicia; dignidad de la persona, desarrollo sustentable, honestidad y excelencia profesional.</p></div>
                            <a href="#" class="enlaces">Leer mas</a>
                        </div>
                    </div>
                    <div class="item" style="background-image: linear-gradient(270deg, #ffffff, transparent, transparent), url(/Frontend/assets/images/banner3.jpg);">
                        <div class="contenido">
                            <div class="nombre"><p style="color: black;">Centro de derechos Humanos Vitoria</p></div>
                            <div class="descripcion"><p class="c_texto" style="color: black;">El Centro de Derechos Humanos “Fray Francisco de Vitoria, OP”, AC tiene una trayectoria de 30 años en la defensa, 
                                promoción y protección de los derechos humanos, se ha dedica a acompañar procesos de exigibilidad de derechos humanos.</p></div>
                            <a href="#" class="enlaces">Leer mas</a>
                        </div>
                    </div>
                    <div class="item" style="background-image: linear-gradient(270deg, #ffffff, transparent, transparent), url(/Frontend/assets/images/banner4.jpg);">
                        <div class="contenido">
                            <div class="nombre"><p style="color: white;">Fundación Quinta Carmelita</p></div>
                            <div class="descripcion"><p class="c_texto">Fundación Quinta Carmelita, IAP es una casa hogar con 30 años de trayectoria comprometiéndose con los derechos de los niños y niñas, 
                                especialmente aquellos que carecen de cuidados parentales, a través de la promoción de su derecho a vivir en familia.</p></div>
                            <a href="#" class="enlaces">Leer mas</a>
                        </div>
                    </div>
                    <div class="item" style="background-image: linear-gradient(270deg, #ffffff, transparent, transparent), url(/Frontend/assets/images/banner5.jpg);">
                        <div class="contenido">
                            <div class="nombre"><p style="color: white;">Fundación Ser Humano</p></div>
                            <div class="descripcion"><p class="c_texto">Hemos atendido a más de 3,000 personas que viven con VIH Actualmente brindamos un hogar a niñas, niños y adolescentes y jóvenes huérfanos 
                                que viven con el virus del VIH y discapacidad en estado de vulnerabilidad social por orfandad, les brindamos de atención médica, psicológica y social, así como hospedaje, alimentación, 
                                vestido, crianza, educación, recreación, arte y cultura.</p></div>
                            <a href="#" class="enlaces">Leer mas</a>
                        </div>
                    </div>
                    <div class="item" style="background-image: linear-gradient(270deg, #ffffff, transparent, transparent), url(/Frontend/assets/images/banner6.jpg);">
                        <div class="contenido">
                            <div class="nombre"><p style="color: white;">SERAJ, Servicios a la Juventud</p></div>
                            <div class="descripcion"><p class="c_texto">Es una organización civil de expertos en programas de juventud creada en octubre de 1985 en el marco del primer Año Internacional de la Juventud.</p></div>
                            <a href="#" class="enlaces">Leer mas</a>
                        </div>
                    </div>
                </div>
                <div class="botones_carrusel">
                    <button class="anterior">◀</button>
                    <button class="siguiente">▶</button>
                </div>
            </div>
        </div>


        <div class="fondo_gradiente">
            <div class="texto" id="nosotros">
                <h1><b>¿Que es One More Light?</b></h1><br>
                <p class="p_texto">One More Light es una plataforma web diseñada para proporcionar a las personas un 
                    acceso simplificado a una variedad de campañas de apoyo. Nuestra misión es conectar a usuarios 
                    con organizaciones benéficas y proyectos comunitarios de manera eficiente y efectiva. 
                </p>
            </div>
            <div class="texto">
                <h1><b>¿Quienes somos?</b></h1><br>
                <p class="p_texto">
                    Somos un equipo de alumnos de la <a href="https://utxicotepec.edu.mx/" target="_blank" style="color: rgb(179, 245, 255);">
                    Universidad Tecnologica de Xicotepec de Juarez</a> con la intención de aportar un bien a la 
                    sostenibilidad y al impacto social mediante una plataforma web que promueve el apoyo a diversas 
                    organizaciones (OMS).
                </p>
                <div style="min-height: 100px;"></div><br><br>
                <img src="/Frontend/assets/Organigrama_Equipo.jpg" height="450px">
            </div>
            <div class="texto">
                <h1><b>Problematica</b></h1><br>
                <p class="p_texto">
                    Las personas a menudo enfrentan desafíos al intentar encontrar organizaciones a las cuales apoyar. 
                    La búsqueda puede resultar frustrante ya que no siempre se encuentran las opciones deseadas. One 
                    More Light se propone resolver esta problemática facilitando el proceso de búsqueda y conectando a 
                    los usuarios con las organizaciones que mejor se alineen con sus intereses y capacidades de apoyo.
                </p>
            </div>
            <div class="texto">
                <h1><b>Propuesta de solución</b></h1><br>
                <p class="p_texto">
                    Nuestro proyecto ofrece una plataforma intuitiva y facil de usar donde los usuarios pueden descubrir 
                    campañas de apoyo registradas por diversas organizaciones. One More Light actúa como un puente, 
                    simplificando el acceso y promoviendo una mayor participación en iniciativas benéficas.
                </p>
            </div>
            <div class="texto">
                <h1><b>Objetivo general</b></h1><br>
                <p class="p_texto">
                    Facilitar el acceso a campañas de apoyo, aumentando su visibilidad y accesibilidad para el público en 
                    general, es crucial para el éxito de iniciativas ambientales. TapiTec se dedica a la recolección de 
                    botellas de PET, organizando eventos y programas de recolección en diversas comunidades. A través de 
                    una mayor promoción y una presencia destacada en plataformas digitales y físicas, buscamos involucrar 
                    a más personas en la causa. Al hacer las campañas más visibles y accesibles, esperamos educar al público 
                    sobre la importancia del reciclaje y fomentar una mayor participación en la recolección de PET, 
                    contribuyendo así a la sostenibilidad ambiental y a la reducción de residuos plásticos.
                </p>
            </div>
        </div>
    </main>

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


    <!-- JavaScript -->
    <script src="/Frontend/JS/carrusel.js"></script>
    <script src="/Frontend/JS/login.js"></script>
</body>
</html>