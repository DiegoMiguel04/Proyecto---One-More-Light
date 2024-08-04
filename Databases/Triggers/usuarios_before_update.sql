CREATE DEFINER=`root`@`localhost` TRIGGER `BEFORE_UPDATE` BEFORE UPDATE ON `usuarios` FOR EACH ROW BEGIN
    SET NEW.nombre_usuario = LOWER(NEW.nombre_usuario);
    SET NEW.correo = LOWER(NEW.correo);
    INSERT INTO logs (usuario_id, accion, fecha)
    VALUES (NEW.id, 'Usuario actualizado', NOW());
    IF NEW.contraseña != OLD.contraseña THEN
        SET NEW.contraseña = SHA2(NEW.contraseña, 256);
    END IF;
END