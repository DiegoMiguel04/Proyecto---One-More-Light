UPDATE usuarios
SET correo = 'nuevo.correo@ejemplo.com'
WHERE id = 1;
UPDATE donaciones
SET cantidad_tapitas = 150
WHERE id = 1;
DELETE FROM usuarios
WHERE id = 1;
DELETE FROM campañas
WHERE id = 1;
DELETE FROM donaciones
WHERE id = 1;