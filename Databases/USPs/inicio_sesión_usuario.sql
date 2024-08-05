CREATE PROCEDURE `login_usuario` ( IN p_nombre_usuario VARCHAR(50),IN p_contraseña VARCHAR (255))
BEGIN
INSERT INTO usuarios (nombre_usuario,contraseña) VALUES (p_nombre_usuario,p_contraseña);
END
