CREATE DEFINER=`root`@`localhost` TRIGGER `BEFORE_UPDATE` BEFORE UPDATE ON `usuarios` FOR EACH ROW BEGIN
    -- Asegurar que el nombre de usuario se almacene en minúsculas
    SET NEW.nombre_usuario = LOWER(NEW.nombre_usuario);

    -- Asegurar que el correo se almacene en minúsculas
    SET NEW.correo = LOWER(NEW.correo);
    
    -- Registrar la acción en una tabla de logs
    INSERT INTO logs (usuario_id, accion, fecha)
    VALUES (NEW.id, 'Usuario actualizado', NOW());
    
    -- Si la contraseña está siendo cambiada, cifrarla
    IF NEW.contraseña != OLD.contraseña THEN
        SET NEW.contraseña = SHA2(NEW.contraseña, 256);
    END IF;
END