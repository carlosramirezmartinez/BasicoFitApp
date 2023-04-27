DROP DATABASE IF EXISTS
CREATE DATABASE BasicoFitDB;
CREATE TABLE Usuarios (
	ID int(8) PRIMARY KEY,
	DNI char(8),
    nombre varchar(255),
    primer_apellido varchar(255),
    segundo_apellido varchar(255),
	fecha_nacimiento date,
    ciudad varchar(255)
);
