INSERT INTO usuarios (nombre_usuario, contraseña, correo, fecha_registro)
VALUES ('nuevo_usuario', 'contrasena_segura', 'nuevo_usuario@gmail.com.com', CURRENT_TIMESTAMP);

INSERT INTO usuarios (nombre_usuario, contraseña, correo, fecha_registro)
VALUES ('JuanPerez', 'Contraseña123', 'juan.perez@gmail.com.com', CURRENT_TIMESTAMP);

INSERT INTO usuarios (nombre_usuario, contraseña, correo, fecha_registro)
VALUES ('JuanPerez', SHA2('Contraseña123', 256), 'juan.perez@example.com', CURRENT_TIMESTAMP);