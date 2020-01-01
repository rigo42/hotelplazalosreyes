CREATE TABLE usuario(
	id_usuario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	usuario VARCHAR(100) NOT NULL,
	password VARCHAR(100) NOT NULL,
	fecha_nuevo DATETIME NULL,
	fecha_editar DATETIME NULL,
	fecha_eliminar DATETIME NULL
);

CREATE TABLE habitacion(
	id_habitacion INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	habitacion VARCHAR(50) NOT NULL,
	precio FLOAT NOT NULL,
	cantidad_estrella INT NOT NULL,
	cantidad_persona INT NOT NULL,
	metro_cuadrado INT NOT NULL,
	descripcion TEXT NOT NULL,
	imagen VARCHAR(100) NOT NULL,
	fecha_nuevo DATETIME NULL,
	fecha_editar DATETIME NULL,
	fecha_eliminar DATETIME NULL
);

CREATE TABLE habitacion_imagen(
	id_habitacion_imagen INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	id_habitacion INT NOT NULL,
	imagen VARCHAR(100) NOT NULL,
	fecha_nuevo DATETIME NULL,
	fecha_editar DATETIME NULL,
	fecha_eliminar DATETIME NULL,
	FOREIGN KEY (id_habitacion) REFERENCES habitacion (id_habitacion)
);

CREATE TABLE habitacion_mas_pedida(
	id_habitacion_mas_pedida INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	id_habitacion INT NOT NULL,
	puesto INT NOT NULL,
	fecha_nuevo DATETIME NULL,
	fecha_editar DATETIME NULL,
	fecha_eliminar DATETIME NULL,
	FOREIGN KEY (id_habitacion) REFERENCES habitacion (id_habitacion)
);

CREATE TABLE galeria(
	id_galeria INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	imagen VARCHAR(100) NOT NULL,
	titulo VARCHAR(50) NOT NULL,
	sub_titulo VARCHAR(50) NOT NULL,
	fecha_nuevo DATETIME NULL,
	fecha_editar DATETIME NULL,
	fecha_eliminar DATETIME NULL
);

CREATE TABLE servicio(
	id_servicio INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	titulo VARCHAR(50) NOT NULL,
	sub_titulo VARCHAR(50) NOT NULL,
	descripcion TEXT NOT NULL,
	imagen VARCHAR(100) NOT NULL,
	fecha_nuevo DATETIME NULL,
	fecha_editar DATETIME NULL,
	fecha_eliminar DATETIME NULL
);

CREATE TABLE informacion(
	id_informacion INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	telefono VARCHAR(15) NOT NULL,
	lugar VARCHAR(50) NOT NULL,
	calle VARCHAR(60) NOT NULL,
	colonia VARCHAR(60) NOT NULL,
	observacion VARCHAR(100) NOT NULL,
	fecha_nuevo DATETIME NULL,
	fecha_editar DATETIME NULL,
	fecha_eliminar DATETIME NULL
);