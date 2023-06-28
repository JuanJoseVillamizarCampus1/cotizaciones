CREATE DATABASE alquilartemis;
use alquilartemis;

CREATE TABLE empleado(
    id_empleado INT PRIMARY KEY AUTO_INCREMENT,
    nombre_empleado VARCHAR(50) NOT NULL,
    usuario VARCHAR(50) NOT NULL,
    correo VARCHAR(80) NOT NULL
);
drop TABLE empleado;
CREATE TABLE cliente(
    id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nombre_cliente VARCHAR(80) NOT NULL,
    direccion_cliente VARCHAR(30) NOT NULL,
    numero_cliente INT NOT NULL,
    correo_cliente VARCHAR(80) NOT NULL
);
drop table cliente;
drop table cotizacion;
drop table detalleCotizacion;
CREATE TABLE producto(
    id_producto INT PRIMARY KEY AUTO_INCREMENT,
    nombre_producto VARCHAR(30) NOT NULL,
    descripcion_producto VARCHAR(30) NOT NULL,
    precio_dia INT NOT NULL
);
CREATE TABLE cotizacion(
    id_cotizacion INT PRIMARY KEY AUTO_INCREMENT,
    id_empleado INT NOT NULL,
    id_cliente INT NOT NULL,
    fecha DATE NOT NULL,
    FOREIGN KEY (id_empleado) REFERENCES empleado(id_empleado),
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente)
);

CREATE TABLE detalleCotizacion(
    id_cotizacion INT,
    id_producto INT,
    fecha_hora_alquiler DATETIME NOT NULL,
    duracion_alquiler INT,
    FOREIGN KEY (id_cotizacion) REFERENCES cotizacion(id_cotizacion),
    FOREIGN KEY (id_producto) REFERENCES producto(id_producto)
);
