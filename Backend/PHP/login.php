<?php
include '../../Backend/BD_Conection/conection.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $correo = $conn->real_escape_string($_POST['correo']);
    $contrasena = $conn->real_escape_string($_POST['contrasena']);

    $sql = "SELECT * FROM usuarios WHERE correo = '$correo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($contrasena, $row['contrasena'])) {
            $_SESSION['usuario'] = $row['nombre_usuario'];
            header("Location: ../../Frontend/HTML/index.php");
            exit();
        } else {
            $mensaje = "Contraseña incorrecta.";
        }
    } else {
        $mensaje = "No existe una cuenta con este correo.";
    }

    $conn->close();
}
?>