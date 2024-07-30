CREATE DEFINER=`root`@`localhost` PROCEDURE `campañas`(IN p_nombre VARCHAR(100),IN p_descripcion TEXT,IN p_fecha_inicio DATE)
BEGIN
INSERT INTO campañas(nombre,descripcion,fecha_inicio) VALUES (p_nombre,p_descripcion,p_fecha_inicio);
END