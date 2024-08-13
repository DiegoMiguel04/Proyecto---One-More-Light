SELECT *
FROM estadisticas_usuario
WHERE usuario_id = 1;

SELECT u.nombre_usuario, e.dinero_donado
FROM estadisticas_usuario e
JOIN usuarios u ON e.usuario_id = u.id
WHERE e.dinero_donado > 100;

SELECT u.nombre_usuario, e.puntos_por_apoyo
FROM estadisticas_usuario e
JOIN usuarios u ON e.usuario_id = u.id
ORDER BY e.puntos_por_apoyo DESC
LIMIT 1;

SELECT COUNT(*) AS numero_de_usuarios
FROM estadisticas_usuario
WHERE nivel_usuario = 'Usuario solidario';

SELECT u.nombre_usuario, e.proxima_meta
FROM estadisticas_usuario e
JOIN usuarios u ON e.usuario_id = u.id;
