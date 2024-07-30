CREATE DEFINER=`root`@`localhost` PROCEDURE `campañas_usuario`(IN p_usuario_id INT,IN p_campaña_id INT ,IN p_rol VARCHAR(50))
BEGIN
INSERT INTO campañas_usuarios (usuario_id,campaña_id,rol) VALUES (p_usuario_id,p_campaña_id,p_rol);
END