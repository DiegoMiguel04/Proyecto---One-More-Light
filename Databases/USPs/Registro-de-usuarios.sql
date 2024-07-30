CREATE DEFINER=`root`@`localhost` PROCEDURE `Agregar_Usuarios`( 
	IN p_id INT,
    IN p_nombre_usuario VARCHAR(50),
    IN p_contraseña VARCHAR(255),
    IN p_correo VARCHAR(100),
    IN p_fecha_registro TIMESTAMP	
)
BEGIN
    INSERT INTO usuarios (id,nombre_usuario, contraseña, correo,fecha_registro)
    VALUES (p_id,p_nombre_usuario, p_contraseña,p_correo,p_fecha_registro);
END