CREATE DEFINER=`root`@`localhost` TRIGGER `after_user_insert` AFTER INSERT ON `usuarios` FOR EACH ROW BEGIN
    -- Insertar puntos iniciales en puntos_usuarios
    INSERT INTO puntos_usuarios (usuario_id, campaña_id, puntos, fecha)
    VALUES (NEW.id, NULL, 0, NOW());

    -- Registrar la acción en una tabla de logs
    INSERT INTO logs (usuario_id, accion, fecha)
    VALUES (NEW.id, 'Usuario creado', NOW());
END