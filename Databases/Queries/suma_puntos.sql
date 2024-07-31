SELECT usuario_id, SUM(puntos) AS total_puntos
FROM puntos_usuarios
WHERE usuario_id = 1
GROUP BY usuario_id;
SELECT usuario_id, SUM(puntos) AS total_puntos
FROM puntos_usuarios
WHERE usuario_id = 2
GROUP BY usuario_id;
SELECT usuario_id, SUM(puntos) AS total_puntos
FROM puntos_usuarios
WHERE usuario_id = 3
GROUP BY usuario_id;

