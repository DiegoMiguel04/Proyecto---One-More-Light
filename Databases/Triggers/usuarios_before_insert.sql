CREATE DEFINER=`root`@`localhost` TRIGGER `before_user_insert` BEFORE INSERT ON `usuarios` FOR EACH ROW BEGIN
    -- Asegurar que el nombre de usuario se almacene en minúsculas
    SET NEW.nombre_usuario = LOWER(NEW.nombre_usuario);
    
    -- Asegurar que el correo se almacene en minúsculas
    SET NEW.correo = LOWER(NEW.correo);
    
    -- Cifrar la contraseña (aquí se utiliza una función ficticia de cifrado, ajústala según tu método de cifrado)
    SET NEW.contraseña = SHA2(NEW.contraseña, 256);
END