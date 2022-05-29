DROP DATABASE ElRinconDelDado;

CREATE DATABASE ElRinconDelDado;

CREATE TABLE Productos (
  Nombre VARCHAR(500) NOT NULL,
  Descripcion VARCHAR(5000) NULL,
  Imagen VARCHAR(500) NULL,
  Precio VARCHAR(10) NOT NULL,
  Cantidad INTEGER  NULL,
  Categoria VARCHAR(45) NULL,
  PRIMARY KEY(Nombre)
);

CREATE TABLE Usuarios (
  IDUsuarios INTEGER  NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY(IDUsuarios)
);

CREATE TABLE Comentarios (
  IDComentarios INTEGER  NOT NULL AUTO_INCREMENT,
  Usuarios_IDUsuarios INTEGER  NOT NULL,
  Texto VARCHAR(5000) NULL,
  Valoracion INTEGER  NULL,
  Dia DATE NULL,
  Hora DATETIME NULL,
  PRIMARY KEY(IDComentarios, Usuarios_IDUsuarios),
  FOREIGN KEY(Usuarios_IDUsuarios)
    REFERENCES Usuarios(IDUsuarios)
);

CREATE TABLE Reservas (
  IDReservas INTEGER  NOT NULL AUTO_INCREMENT,
  Usuarios_IDUsuarios INTEGER  NOT NULL,
  Dia DATE NULL,
  Hora DATETIME NULL,
  Titular VARCHAR(45) NULL,
  Participantes VARCHAR(45) NULL,
  PRIMARY KEY(IDReservas, Usuarios_IDUsuarios),
  FOREIGN KEY(Usuarios_IDUsuarios)
    REFERENCES Usuarios(IDUsuarios)
);

CREATE TABLE Compra (
	IDCompra INTEGER  NOT NULL AUTO_INCREMENT,
  Usuarios_IDUsuarios INTEGER  NOT NULL,
  Productos_Nombre VARCHAR(500) NOT NULL,
  Dia DATE NULL,
  Hora DATETIME NULL,
  Precio INTEGER NULL,
  PRIMARY KEY(IDCompra, Usuarios_IDUsuarios, Productos_Nombre),
  FOREIGN KEY(Productos_Nombre)
    REFERENCES Productos(Nombre),
  FOREIGN KEY(Usuarios_IDUsuarios)
    REFERENCES Usuarios(IDUsuarios)
);
