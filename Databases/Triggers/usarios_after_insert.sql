CREATE DEFINER=`root`@`localhost` TRIGGER `after_user_insert` AFTER INSERT ON `usuarios` FOR EACH ROW BEGIN
    INSERT INTO puntos_usuarios (usuario_id, campaña_id, puntos, fecha)
    VALUES (NEW.id, NULL, 0, NOW());

    INSERT INTO logs (usuario_id, accion, fecha)
    VALUES (NEW.id, 'Usuario creado', NOW());
END