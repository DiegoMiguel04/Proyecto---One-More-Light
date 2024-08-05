CREATE DEFINER=`root`@`localhost` TRIGGER `before_user_insert` BEFORE INSERT ON `usuarios` FOR EACH ROW BEGIN
    SET NEW.nombre_usuario = LOWER(NEW.nombre_usuario);
    SET NEW.correo = LOWER(NEW.correo);
    SET NEW.contraseña = SHA2(NEW.contraseña, 256);
END