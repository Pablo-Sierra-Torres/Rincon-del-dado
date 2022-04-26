CREATE DATABASE ElRinconDelDado;

CREATE TABLE Productos (
  Nombre VARCHAR(500) NOT NULL,
  Descripcion VARCHAR(5000) NULL,
  Imagen VARCHAR(500) NULL,
  Precio INTEGER UNSIGNED NULL,
  Cantidad INTEGER UNSIGNED NULL,
  PRIMARY KEY(Nombre)
);

CREATE TABLE Usuarios (
  IDUsusarios INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Nombre VARCHAR(45) NULL,
  Apellidos VARCHAR(45) NULL,
  Correo VARCHAR(45) NULL,
  Pass VARCHAR(255) NULL,
  CodPos VARCHAR(5) NULL,
  Poblacion VARCHAR(45) NULL,
  Direccion VARCHAR(255) NULL,
  Telefijo VARCHAR(9) NULL,
  Telemovil VARCHAR(9) NULL,
  Notificaciones VARCHAR(1) NULL,
  PRIMARY KEY(IDUsusarios)
);

CREATE TABLE Comentarios (
  IDComentarios INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Usuarios_IDUsusarios INTEGER UNSIGNED NOT NULL,
  Texto VARCHAR(5000) NULL,
  Valoracion INTEGER UNSIGNED NULL,
  Dia DATE NULL,
  Hora DATETIME NULL,
  PRIMARY KEY(IDComentarios, Usuarios_IDUsusarios),
  FOREIGN KEY(Usuarios_IDUsusarios)
    REFERENCES Usuarios(IDUsusarios)
);

CREATE TABLE Reservas (
  IDReservas INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Usuarios_IDUsusarios INTEGER UNSIGNED NOT NULL,
  Dia DATE NULL,
  Hora DATETIME NULL,
  PRIMARY KEY(IDReservas, Usuarios_IDUsusarios),
  FOREIGN KEY(Usuarios_IDUsusarios)
    REFERENCES Usuarios(IDUsusarios)
);

CREATE TABLE Compra (
  Usuarios_IDUsusarios INTEGER UNSIGNED NOT NULL,
  Productos_Nombre VARCHAR(500) NOT NULL,
  IDCompra INTEGER UNSIGNED NOT NULL,
  Dia DATE NULL,
  Hora DATETIME NULL,
  PRIMARY KEY(Usuarios_IDUsusarios, Productos_Nombre),
  FOREIGN KEY(Productos_Nombre)
    REFERENCES Productos(Nombre),
  FOREIGN KEY(Usuarios_IDUsusarios)
    REFERENCES Usuarios(IDUsusarios)
);


