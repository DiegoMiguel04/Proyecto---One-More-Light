ALTER TABLE usuarios
ADD COLUMN tipo ENUM('usuario', 'organizacion', 'administrador') NOT NULL DEFAULT 'usuario';

INSERT INTO usuarios (nombre_usuario, contrasena, correo, fecha_registro, tipo)
VALUES ('usuario_normal', 'usuario_1234', 'normal_usuario@gmail.com', '2024-08-17 10:00:00', 'usuario');