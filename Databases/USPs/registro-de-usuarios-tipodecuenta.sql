DELIMITER //

CREATE PROCEDURE registrar_usuario(
    IN p_nombre_usuario VARCHAR(50),
    IN p_contraseña VARCHAR(255),
    IN p_correo VARCHAR(100),
    IN p_tipo ENUM('usuario', 'organizacion', 'administrador')
)
BEGIN
    INSERT INTO usuarios (nombre_usuario, contraseña, correo, tipo)
    VALUES (p_nombre_usuario, p_contraseña, p_correo, p_tipo);
END //

DELIMITER ;
