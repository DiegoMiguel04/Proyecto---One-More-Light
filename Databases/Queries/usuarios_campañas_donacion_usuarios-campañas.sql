INSERT INTO usuarios (nombre_usuario, contraseña, correo,fecha_registro)
VALUES ('TEY20', 'tey0911', 'Esther.Gonzalez@gmail.com','2024-08-01 04:53:00');
INSERT INTO campañas (nombre, descripcion, fecha_inicio)
VALUES ('Reanimation', 'Y la esperanza es lo que muere al final', '2024-08-10');
INSERT INTO donaciones (usuario_id, campaña_id, cantidad_tapitas,fecha_donacion)
VALUES (4, 4, 500,'2024-08-04');
INSERT INTO tapitas (color, material, usuario_id)
VALUES ('Verde', 'Pet(Refresco)', 5);
INSERT INTO campañas_usuarios (usuario_id, campaña_id, rol)
VALUES (4, 4, 'Participante');
INSERT INTO campañas_usuarios (usuario_id, campaña_id, rol)
VALUES (5, 5, 'Organizador');



