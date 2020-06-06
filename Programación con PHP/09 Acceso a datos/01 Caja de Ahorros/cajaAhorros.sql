DROP DATABASE IF EXISTS cajaAhorros;

CREATE DATABASE cajaAhorros CHARACTER SET utf8mb4;

use cajaAhorros;

CREATE TABLE cuentas 
  (
	idcuenta INT PRIMARY KEY AUTO_INCREMENT, 	
	nombre VARCHAR(40) NOT NULL, 
	correo VARCHAR(30) DEFAULT 'desconocido@sindominio.net',
	fechaNacimiento DATE NOT NULL,	
	fechaRegistro DATETIME DEFAULT NOW(),
	genero CHAR DEFAULT 'M',	
	saldo DECIMAL DEFAULT 0,
	foto BLOB
   ) ENGINE=INNODB; 

CREATE TABLE movimientos 
  (
	idmov INT PRIMARY KEY AUTO_INCREMENT,     
	idcuenta INT,   
	fechamov DATETIME DEFAULT NOW(),   
	tipo CHAR DEFAULT 'D',
	cantidad FLOAT DEFAULT 0,
	FOREIGN KEY(idcuenta) REFERENCES cuentas(idcuenta) 
	   ON UPDATE CASCADE      
	   ON DELETE CASCADE 
   ) ENGINE=INNODB;

