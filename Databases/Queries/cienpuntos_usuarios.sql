SELECT usuario_id, SUM(puntos) AS total_puntos
FROM puntos_usuarios
GROUP BY usuario_id
HAVING total_puntos > 100;
