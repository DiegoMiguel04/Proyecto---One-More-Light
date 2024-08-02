CREATE TABLE usuarios (
    id INT AUTO_INCREMENT NOT NULL UNIQUE,
    nombre_usuario VARCHAR(50) NOT NULL UNIQUE,
    contraseña VARCHAR(255) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);
CREATE TABLE tapitas (
    id INT AUTO_INCREMENT NOT NULL UNIQUE,
    color VARCHAR(50) NOT NULL,
    material VARCHAR(50) NOT NULL,
    usuario_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);
CREATE TABLE campañas (
    id INT AUTO_INCREMENT NOT NULL UNIQUE,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    fecha_inicio DATE NOT NULL,
    fecha_fin DATE NOT NULL,
    PRIMARY KEY (id)
);
CREATE TABLE donaciones (
    id INT AUTO_INCREMENT NOT NULL UNIQUE,
    usuario_id INT NOT NULL,
    campaña_id INT NOT NULL,
    cantidad_tapitas INT NOT NULL,
    fecha_donacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (campaña_id) REFERENCES campañas(id)
);
CREATE TABLE campañas_usuarios (
    id INT AUTO_INCREMENT NOT NULL UNIQUE,
    usuario_id INT NOT NULL,
    campaña_id INT NOT NULL,
    rol VARCHAR(50), 
    PRIMARY KEY (id),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (campaña_id) REFERENCES campañas(id)
);
CREATE TABLE puntos_usuarios (
    id INT AUTO_INCREMENT NOT NULL UNIQUE,
    usuario_id INT NOT NULL,
    campaña_id INT NOT NULL,
    puntos INT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (campaña_id) REFERENCES campañas(id)
);
CREATE TABLE logs (
    id INT AUTO_INCREMENT NOT NULL UNIQUE,
    usuario_id INT NOT NULL,
    accion VARCHAR(255) NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);
