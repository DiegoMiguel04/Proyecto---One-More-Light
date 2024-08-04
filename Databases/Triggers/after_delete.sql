CREATE DEFINER = CURRENT_USER TRIGGER `onemorelight`.`after_user_delete`
AFTER DELETE ON `usuarios`
FOR EACH ROW
BEGIN
    INSERT INTO logs (usuario_id, accion, detalles, fecha)
    VALUES (OLD.id, 'Usuario eliminado', 
            CONCAT('Nombre de usuario: ', OLD.nombre_usuario, 
                   ', Correo: ', OLD.correo), 
            NOW());
    DELETE FROM puntos_usuarios
    WHERE usuario_id = OLD.id;
    DELETE FROM donaciones
    WHERE usuario_id = OLD.id;
    DELETE FROM tapitas
    WHERE usuario_id = OLD.id;
    DELETE FROM campañas_usuarios
    WHERE usuario_id = OLD.id;
END;