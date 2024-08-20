<?php
include '../../Backend/BD_Conection/conection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nombre_usuario']) && isset($_POST['correo']) && isset($_POST['contrasena'])) {
        $nombre_usuario = $conn->real_escape_string($_POST['nombre_usuario']);
        $correo = $conn->real_escape_string($_POST['correo']);
        $contrasena = password_hash($conn->real_escape_string($_POST['contrasena']), PASSWORD_BCRYPT);
        
        $check_sql = "SELECT * FROM usuarios WHERE correo = '$correo'";
        $check_result = $conn->query($check_sql);
        
        if ($check_result->num_rows > 0) {
            $mensaje = "El correo ya está registrado.";
        } else {
            $sql = "INSERT INTO usuarios (nombre_usuario, correo, contrasena) VALUES ('$nombre_usuario', '$correo', '$contrasena')";
            
            if ($conn->query($sql) === TRUE) {
                $mensaje = "Registro exitoso.";
                header("Location: ../../Frontend/HTML/index.php");
            } else {
                $mensaje = "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    } else {
        $mensaje = "Faltan datos en el formulario.";
    }

    $conn->close();
}
?>