CREATE DEFINER = CURRENT_USER TRIGGER `onemorelight`.`after_user_update`
AFTER UPDATE ON `usuarios`
FOR EACH ROW
BEGIN
    INSERT INTO logs (usuario_id, accion, detalles, fecha)
    VALUES (NEW.id, 'Usuario actualizado', 
            CONCAT('Nombre de usuario: ', OLD.nombre_usuario, ' -> ', NEW.nombre_usuario, 
                   ', Correo: ', OLD.correo, ' -> ', NEW.correo), 
            NOW());
END;
