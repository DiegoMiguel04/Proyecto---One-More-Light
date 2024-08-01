CREATE DEFINER = CURRENT_USER TRIGGER `onemorelight`.`after_user_delete`
AFTER DELETE ON `usuarios`
FOR EACH ROW
BEGIN
    -- Registrar la eliminación en una tabla de logs
    INSERT INTO logs (usuario_id, accion, detalles, fecha)
    VALUES (OLD.id, 'Usuario eliminado', 
            CONCAT('Nombre de usuario: ', OLD.nombre_usuario, 
                   ', Correo: ', OLD.correo), 
            NOW());

    -- Eliminar datos relacionados en la tabla puntos_usuarios
    DELETE FROM puntos_usuarios
    WHERE usuario_id = OLD.id;

    -- Eliminar donaciones del usuario
    DELETE FROM donaciones
    WHERE usuario_id = OLD.id;
    
    -- Opcional: Eliminar tapitas donadas por el usuario
    DELETE FROM tapitas
    WHERE usuario_id = OLD.id;
    
    -- Opcional: Eliminar registros en campañas_usuarios
    DELETE FROM campañas_usuarios
    WHERE usuario_id = OLD.id;
END;