<?php
// Backend/PHP/perfil.php
include '/Backend/BD_Conection/conection.php';

session_start();
$id_usuario = $_SESSION['id']; // ID del usuario logueado

$query = "SELECT u.nombre_usuario, u.correo, p.descripcion_user, p.puntos_apoyo, p.veces_compartido, 
          p.veces_apoyo_eco, p.dinero_donado, p.nivel_usuario 
          FROM usuarios u 
          LEFT JOIN perfil_usuario p ON u.id = p.id_usuario 
          WHERE u.id = $id_usuario";
$result = mysqli_query($conexion, $query);

if ($row = mysqli_fetch_assoc($result)) {
    echo json_encode($row);
} else {
    echo json_encode(['error' => 'No se encontró el perfil.']);
}
