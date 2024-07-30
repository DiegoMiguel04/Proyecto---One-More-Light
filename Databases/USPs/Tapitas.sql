CREATE DEFINER=`root`@`localhost` PROCEDURE `tapitas`(IN p_color VARCHAR(50),IN p_material VARCHAR(50),IN p_usuario_id INT)
BEGIN
INSERT INTO tapitas (color,material,usuario_id) VALUES (p_color,p_material,p_usuario_id);
END