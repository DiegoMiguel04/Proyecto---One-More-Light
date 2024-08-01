CREATE DEFINER = CURRENT_USER TRIGGER `onemorelight`.`after_user_update`
AFTER UPDATE ON `usuarios`
FOR EACH ROW
BEGIN
    -- Registrar la acción en una tabla de logs
    INSERT INTO logs (usuario_id, accion, detalles, fecha)
    VALUES (NEW.id, 'Usuario actualizado', 
            CONCAT('Nombre de usuario: ', OLD.nombre_usuario, ' -> ', NEW.nombre_usuario, 
                   ', Correo: ', OLD.correo, ' -> ', NEW.correo), 
            NOW());
    
    -- Si el correo ha cambiado, puedes agregar una acción aquí
    IF NEW.correo != OLD.correo THEN
        -- Lógica para notificar el cambio de correo, por ejemplo:
        -- INSERT INTO notificaciones (usuario_id, mensaje, fecha)
        -- VALUES (NEW.id, 'Tu correo ha sido actualizado.', NOW());
    END IF;
    END;