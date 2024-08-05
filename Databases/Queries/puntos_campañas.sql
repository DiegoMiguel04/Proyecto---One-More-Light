SELECT campania_id, SUM(puntos) AS total_puntos
FROM puntos_usuarios
GROUP BY campania_id;