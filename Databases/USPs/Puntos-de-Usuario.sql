CREATE DEFINER=`root`@`localhost` PROCEDURE `puntos_usuarios`(IN p_usuario_id INT ,IN p_campania_id INT,IN p_puntos INT,IN p_fecha TIMESTAMP)
BEGIN
INSERT INTO puntos_usuarios (usuario_id,campania_id,puntos,fecha) VALUES (p_usuario_id,p_campania_id,p_puntos,p_fecha);
END