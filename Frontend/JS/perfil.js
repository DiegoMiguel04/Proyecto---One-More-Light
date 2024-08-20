//Editar perfil
var img_editar_perfil = document.getElementById('img_editar_perfil');
var boton_editar_perfil = document.getElementById('boton_editar_perfil');
var switch_editar_perfil = false;
var input_nombre = document.getElementById('nombre_user');
var input_correo = document.getElementById('correo_user');
var input_descripcion = document.getElementById('descripcion_user');
function EditarPerfil() {
    if (!switch_editar_perfil) {
        input_nombre.disabled = false;
        input_nombre.style.color = "#fff";
        input_nombre.style.fontWeight = "lighter";
        input_correo.disabled = false;
        input_correo.style.color = "#fff";
        input_correo.style.fontWeight = "lighter";
        input_descripcion.disabled = false;
        input_descripcion.placeholder = "...";
        input_descripcion.style.color = "#fff";
        input_descripcion.style.fontWeight = "lighter";
        img_editar_perfil.src = "/Frontend/assets/icons/guardar_perfil.png";
        boton_editar_perfil.style.backgroundColor = "#60a2ff";
    } else {
        input_nombre.disabled = true;
        input_nombre.style.color = "#8a8a8a";
        input_nombre.style.fontWeight = "bold";
        input_correo.disabled = true;
        input_correo.style.color = "#8a8a8a";
        input_correo.style.fontWeight = "bold";
        input_descripcion.disabled = true;
        input_descripcion.placeholder = "Acerca de ti...";
        input_descripcion.style.color = "#8a8a8a";
        input_descripcion.style.fontWeight = "bold";
        img_editar_perfil.src = "/Frontend/assets/icons/editar_perfil.png";
        boton_editar_perfil.style.backgroundColor = "#2e4c77";
    }
    switch_editar_perfil = !switch_editar_perfil;
}
//Apartado de organizaciones
function mostrarOrgGeneral() {
    document.getElementById('organizaciones').style.display = 'block';
    document.getElementById('organizaciones_apoyadas').style.display = 'none';
}
function mostrarOrgApoyadas() {
    document.getElementById('organizaciones').style.display = 'none';
    document.getElementById('organizaciones_apoyadas').style.display = 'block';
}
//Funciones de Administrador
function MostrarAdministracion() {
    document.getElementById('estadisticas_user').style.display = 'none';
    document.getElementById('estadisticas_admin').style.display = 'block';
    document.getElementById('boton_puntos_admin').style.display = 'block';
    document.getElementById('boton_admistrar1').style.display = 'none';
    document.getElementById('boton_admistrar2').style.display = 'block';
    boton_editar_perfil.disabled = true;
    EditarPerfil();
}
function NoMostrarAdministracion() {
    document.getElementById('estadisticas_user').style.display = 'block';
    document.getElementById('estadisticas_admin').style.display = 'none';
    document.getElementById('boton_puntos_admin').style.display = 'none';
    document.getElementById('boton_admistrar1').style.display = 'block';
    document.getElementById('boton_admistrar2').style.display = 'none';
    document.getElementById('puntos_totales').innerText = document.getElementById('puntos_totales_admin').value;
    document.getElementById('tapitas_donadas').innerText = document.getElementById('tapitas_donadas_admin').value;
    document.getElementById('veces_compartidos').innerText = document.getElementById('veces_compartidos_admin').value;
    document.getElementById('veces_apoyado').innerText = document.getElementById('veces_apoyado_admin').value;
    document.getElementById('dinero_donado').innerText = document.getElementById('dinero_donado_admin').value;
    boton_editar_perfil.disabled = false;
    EditarPerfil();
}
//Barra de nivel del usuario
const nivel_user = document.getElementById("nivel_user");
function SubirBarraNivel(value) {
    nivel_user.value += value;
    actualizarRango_Usuario();
}
//Rangos de usuario
var prox_meta = document.getElementById("prox_meta");
var rango = document.getElementById("rango_user");
var condicional_r = 0;
function actualizarRango_Usuario() {
    if (condicional_r === 0 && nivel_user.value === 20) {
        rango.innerText = "Colaborador activo";
        rango.style.color = "#7ea9ff";
        nivel_user.value = 0;
        nivel_user.max = 30;
        prox_meta.innerText = "Aliado comprometido";
        prox_meta.style.color = "#a3dfff"
        condicional_r ++;
    } else if (condicional_r === 1 && nivel_user.value === 30) {
        rango.innerText = "Aliado comprometido";
        rango.style.color = "#a3dfff"
        nivel_user.value = 0;
        nivel_user.max = 40;
        prox_meta.innerText = "Patrocinador dedicado";
        prox_meta.style.color = "#fffda3"
        condicional_r ++;
    } else if (condicional_r === 2 && nivel_user.value === 40) {
        rango.innerText = "Patrocinador dedicado";
        rango.style.color = "#fffda3"
        nivel_user.value = 0;
        nivel_user.max = 50;
        prox_meta.innerText = "Benefactor generoso";
        prox_meta.style.color = "#fab783"
        condicional_r ++;
    } else if (condicional_r === 3 && nivel_user.value === 50) {
        rango.innerText = "Benefactor generoso";
        rango.style.color = "#fab783"
        nivel_user.value = 0;
        nivel_user.max = 60;
        prox_meta.innerText = "Mecenas ilustre";
        prox_meta.style.color = "#fa83ec"
        condicional_r ++;
    }
    else if (condicional_r === 4 && nivel_user.value === 60) {
        rango.innerText = "Mecenas ilustre";
        rango.style.color = "#fa83ec"
        prox_meta.innerText = "Ninguna";
        prox_meta.style.color = "#fff"
    }
}