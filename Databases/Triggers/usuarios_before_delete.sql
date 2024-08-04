CREATE DEFINER = CURRENT_USER TRIGGER `onemorelight`.`before_user_delete`
BEFORE DELETE ON `usuarios`
FOR EACH ROW
BEGIN
    INSERT INTO logs (usuario_id, accion, detalles, fecha)
    VALUES (OLD.id, 'Usuario eliminado', 
            CONCAT('Nombre de usuario: ', OLD.nombre_usuario, 
                   ', Correo: ', OLD.correo), 
            NOW());
END;