CREATE DEFINER=`root`@`localhost` PROCEDURE `donaciones`(IN p_usuario_id INT,IN p_campaña_id INT,IN p_cantidad_tapitas INT,IN p_fecha_donacion TIMESTAMP)
BEGIN
INSERT INTO donaciones (usuario_id,campaña_id,cantidad_tapitas,fecha_donacion) VALUES (
p_usuario_id,p_campaña_id,p_cantidad_tapitas,p_fecha_donacion);
END