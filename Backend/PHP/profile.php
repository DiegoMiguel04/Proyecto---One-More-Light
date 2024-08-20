<html lang="en"><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js" id="eppiocemhmnlbhjplcgkofciiegomcon"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Frontend/CSS/estructura_basica.css">
    <link rel="stylesheet" href="/Frontend/CSS/perfil.css?v=1.0">
    <title>Perfil</title>
<script bis_use="true" type="text/javascript" charset="utf-8" data-bis-config="[&quot;facebook.com/&quot;,&quot;twitter.com/&quot;,&quot;youtube-nocookie.com/embed/&quot;,&quot;//vk.com/&quot;,&quot;//www.vk.com/&quot;,&quot;linkedin.com/&quot;,&quot;//www.linkedin.com/&quot;,&quot;//instagram.com/&quot;,&quot;//www.instagram.com/&quot;,&quot;//www.google.com/recaptcha/api2/&quot;,&quot;//hangouts.google.com/webchat/&quot;,&quot;//www.google.com/calendar/&quot;,&quot;//www.google.com/maps/embed&quot;,&quot;spotify.com/&quot;,&quot;soundcloud.com/&quot;,&quot;//player.vimeo.com/&quot;,&quot;//disqus.com/&quot;,&quot;//tgwidget.com/&quot;,&quot;//js.driftt.com/&quot;,&quot;friends2follow.com&quot;,&quot;/widget&quot;,&quot;login&quot;,&quot;//video.bigmir.net/&quot;,&quot;blogger.com&quot;,&quot;//smartlock.google.com/&quot;,&quot;//keep.google.com/&quot;,&quot;/web.tolstoycomments.com/&quot;,&quot;moz-extension://&quot;,&quot;chrome-extension://&quot;,&quot;/auth/&quot;,&quot;//analytics.google.com/&quot;,&quot;adclarity.com&quot;,&quot;paddle.com/checkout&quot;,&quot;hcaptcha.com&quot;,&quot;recaptcha.net&quot;,&quot;2captcha.com&quot;,&quot;accounts.google.com&quot;,&quot;www.google.com/shopping/customerreviews&quot;,&quot;buy.tinypass.com&quot;,&quot;gstatic.com&quot;,&quot;secureir.ebaystatic.com&quot;,&quot;docs.google.com&quot;,&quot;contacts.google.com&quot;,&quot;github.com&quot;,&quot;mail.google.com&quot;,&quot;chat.google.com&quot;,&quot;audio.xpleer.com&quot;,&quot;keepa.com&quot;,&quot;static.xx.fbcdn.net&quot;,&quot;sas.selleramp.com&quot;,&quot;1plus1.video&quot;,&quot;console.googletagservices.com&quot;,&quot;//lnkd.demdex.net/&quot;,&quot;//radar.cedexis.com/&quot;,&quot;//li.protechts.net/&quot;,&quot;challenges.cloudflare.com/&quot;,&quot;ogs.google.com&quot;]" src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/../executers/vi-tr.js"></script></head>
<body __processed_c1f35128-6ca3-4af1-9ae5-bc397c31b5c6__="true" bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQiLCJSRURESVQiOiJkaXNhYmxlZCIsIlBJTlRFUkVTVCI6ImRpc2FibGVkIiwiSU5TVEFHUkFNIjoiZGlzYWJsZWQiLCJMSU5LRURJTiI6ImRpc2FibGVkIiwiQ09ORklHIjoiZGlzYWJsZWQifSwidmVyc2lvbiI6IjIuMC4xNiIsInNjb3JlIjoyMDAxNn1d">
    <header>
        <div id="barra_logo" bis_skin_checked="1">
            <img src="/Frontend/assets/images/logo1.png" alt="logo" width="60px" height="60px">
            <p id="logotipo">ONE MORE LIGHT</p>
        </div>
        <div class="barra_superior" bis_skin_checked="1">
            <a href="/Frontend/HTML/index.php">Inicio</a>
            <a href="/Frontend/HTML/index.php#nosotros">Nosotros</a>
            <a href="/Frontend/HTML/organizaciones.php">Organizaciones</a>
            <a href="/Frontend/HTML/proyecto.php">Proyecto</a>
            <a href="/Frontend/HTML/publicaciones.php">Publicaciones</a>
            <a href="/Frontend/HTML/contacto.php">contacto</a>
        </div>
        <div id="barra_boton_login" bis_skin_checked="1">
            <a href="/Frontend/HTML/index.php#modal_login" id="boton_login">Ingresar</a>
        </div>
    </header>



    <main>



        <div class="fondo_gradiente" style="padding-top: 150px;" bis_skin_checked="1">
            <div class="contenedor_general_perfil" bis_skin_checked="1">
                <div class="contenedor_perfil" bis_skin_checked="1">
                    <h1>Mi perfil</h1>
                    <div id="cont_FotoPerfi" bis_skin_checked="1">
                        <img src="/Frontend/assets/images/doge.jpeg" alt="" class="foto_perfil">
                    </div>
                    <label for="nombre_usuario">Nombre de usuario</label><br>
                    <input type="text" id="nombre_user" value="Nombre de usuario" disabled=""><br><br>
                    <label for="correo_email">Correo electronico</label><br>
                    <input type="email" id="correo_user" value="user@gmail.com" disabled=""><br><br>
                    <label for="descripcion_user">Descripción</label><br>
                    <textarea id="descripcion_user" placeholder="Acerca de ti..." disabled=""></textarea><br><br>
                    <button onclick="EditarPerfil()" id="boton_editar_perfil"><img src="/Frontend/assets/icons/editar_perfil.png" width="100%" height="100%" id="img_editar_perfil"></button>
                </div>
                <div class="contenedor_informacion" bis_skin_checked="1">
                    <div id="titulo_cont_info" bis_skin_checked="1">
                        <h3>Organizaciones:</h3>
                        <div id="titulo_cont_info_botones" bis_skin_checked="1">
                            <div bis_skin_checked="1"><button onclick="mostrarOrgGeneral()" class="botones_org">seguidas</button></div>
                            <div bis_skin_checked="1"><button onclick="mostrarOrgApoyadas()" class="botones_org">apoyadas</button></div>
                        </div>
                    </div>
                    <div id="organizaciones" bis_skin_checked="1" style="display: none;">
                        <div class="org_fila" bis_skin_checked="1">
                            <img src="/Frontend/assets/images/empresa1.png" class="org_img" style="'">
                            <div class="org_fila_info" bis_skin_checked="1">
                                <h4>Coca-Cola</h4><br>
                                <p>The Coca-Cola Company es una corporación multinacional estadounidense de bebidas con sede en Atlanta, Georgia.</p>
                            </div>
                        </div>
                        <div class="org_fila" bis_skin_checked="1">
                            <img src="/Frontend/assets/images/empresa2.jpeg" class="org_img">
                            <div class="org_fila_info" bis_skin_checked="1">
                                <h4>Pepsico</h4><div bis_skin_checked="1"></div>
                                <p>PepsiCo, Inc. es una empresa multinacional estadounidense dedicada a la fabricación, comercialización y distribución de bebidas y aperitivos. </p>
                            </div>
                        </div>
                        <div class="org_fila" bis_skin_checked="1">
                            <img src="/Frontend/assets/images/empresa3.png" class="org_img">
                            <div class="org_fila_info" bis_skin_checked="1">
                                <h4>Nestlé</h4><br>
                                <p>Nestlé es la mayor empresa de alimentos y bebidas del mundo, con presencia en 186 países. </p>
                            </div>
                        </div>
                        <div class="org_fila" bis_skin_checked="1">
                            <img src="/Frontend/assets/images/FotoOrg_Default.png" class="org_img">
                            <div class="org_fila_info" bis_skin_checked="1">
                                <h4>Nombre de la organización</h4>
                                <p>Descripcion de la organización</p>
                            </div>
                        </div>
                    </div>
                    <div id="organizaciones_apoyadas" bis_skin_checked="1" style="display: block;">
                        <div class="org_fila" bis_skin_checked="1">
                           <img src="/Frontend/assets/images/empresa5.png" class="org_img">
                            <div class="org_fila_info" bis_skin_checked="1">
                                <h4>Danone</h4>
                                <p>Grupo Danone, comercializado como Danone, es una multinacional agroalimentaria española que tiene su sede en París.</p>
                            </div></div>
                        <div class="org_fila" bis_skin_checked="1">
                            <img src="/Frontend/assets/images/empresa4.png" class="org_img">
                            <div class="org_fila_info" bis_skin_checked="1">
                                <h4>Unilever</h4>
                                <p>Unilever es una empresa multinacional británica creada en 1929 como resultado de la fusión de Margarine Unie, compañía neerlandesa de margarina, y Lever Brothers, fabricante inglés de jabones.</p>
                            </div>
                        </div>
                    </div>
                    <h3>Estadisticas del usuario:</h3>
                    <div class="mini_contenedor1" bis_skin_checked="1">
                        <a href="#" class="espacio">❔</a><a class="sub_titulos">Puntos por apoyo:</a><a id="puntos_totales">10,125</a> ⭐<br><br>
                        <a href="#" class="espacio">❔</a><a class="sub_titulos">Veces que has ayudado compartiendo:</a><a id="puntos_totales">110</a><br><br>
                        <a href="#" class="espacio">❔</a><a class="sub_titulos">Veces que has apoyado economicamente:</a><a id="puntos_totales">20</a><br><br>
                        <a href="#" class="espacio">❔</a><a class="sub_titulos">Dinero donado:</a><a id="puntos_totales">130</a>
                    </div>
                    <div class="mini_contenedor2" bis_skin_checked="1">
                        <p>Nivel de usuario: <a id="rango_user">Usuario solidario</a></p>
                        <progress id="nivel_user" value="0" max="20"></progress>
                        <p>Proxima meta: <a id="prox_meta">Colaborador activo</a></p>
                        <button onclick="SubirBarraNivel(5)">subir puntos (pruebas)</button> <!--  eliminar boton -->
                    </div>
                </div>
            </div>
        </div>
    </main>



    <footer>
        <div class="elementos_desplazados" bis_skin_checked="1">
            <div class="sub_elementos_footer" bis_skin_checked="1">
                <h3>Mas información</h3><br>
                <a href="/Frontend/HTML/index.html#nosotros" class="footer_anclas">Quienes somos</a><br>
                <a href="/Frontend/HTML/organizaciones.html" class="footer_anclas">Organizaciones</a><br>
                <a href="/Frontend/HTML/publicaciones.html" class="footer_anclas">Publicaciones</a><br>
                <a href="/Frontend/HTML/proyecto.html" class="footer_anclas">Proyecto</a><br>
                <a href="/Frontend/HTML/index.html" class="footer_anclas">Inicio</a>
            </div>
            <div class="sub_elementos_footer" bis_skin_checked="1">
                <h3>Acerca de</h3><br>
                <p>Texto...</p>
            </div>
            <div class="sub_elementos_footer" bis_skin_checked="1">
                <h3>Contacto</h3><br>
                <div class="elementos_desplazados" bis_skin_checked="1">
                    <a href="https://www.facebook.com/" class="items_footer"><img src="/Frontend/assets/icons/icon_facebook.png" alt="icon" width="25px" height="25px"></a>
                    <a href="https://www.instagram.com/" class="items_footer"><img src="/Frontend/assets/icons/icon_instagram.png" alt="icon" width="25px" height="25px"></a>
                    <a href="https://www.twitter.com/"><img src="/Frontend/assets/icons/icon_x.png" alt="icon" width="25px" height="25px"></a>
                </div><br>
                <div class="elementos_desplazados" bis_skin_checked="1">
                    <img src="/Frontend/assets/icons/icon_telefono.png" alt="icon" width="25px" height="25px" class="items_footer">
                    +52 764 115 2106
                </div><br>
                <div class="elementos_desplazados" bis_skin_checked="1">
                    <img src="/Frontend/assets/icons/icon_correo-electronico.png" alt="icon" width="25px" height="25px" class="items_footer">
                    onemorelight@gmail.com
                </div>
            </div>
            <div style="min-width: 50px;" bis_skin_checked="1"></div>
            <div class="sub_elementos_footer" bis_skin_checked="1">
                <h3>Responsabilidad</h3><br>
                <p>La presente plataforma busca serle util a los usuarios</p>
            </div>
        </div>
    </footer>
    <div class="footer_bajo" bis_skin_checked="1">
        <img src="/Frontend/assets/images/logo1_contraste.png" alt="logo" width="75px" height="75px" draggable="false">
    </div>
    <script src="/Frontend/JS/perfil.js"></script>

</body></html>