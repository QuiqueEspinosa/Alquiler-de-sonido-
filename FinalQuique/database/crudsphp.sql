-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-06-2020 a las 17:12:05
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crudphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE usuario (
   ID INT AUTO_INCREMENT PRIMARY KEY,
   nombres varchar(255) NOT NULL,
   contra varchar(255) NOT NULL,
   fecha_registro timestamp NOT NULL DEFAULT current_timestamp()
);

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO usuario (nombres, contra, fecha_registro) VALUES
('David Maurico Ramirez Gutierrez', '1234', '2020-06-06 14:59:59'),
('Nombre Modificado', '1234', '2020-06-06 15:07:50');



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
CREATE TABLE Cliente (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL,
    CorreoElectronico VARCHAR(255),
    Telefono VARCHAR(20),
    Dni VARCHAR(20),
    Direccion TEXT
);
INSERT INTO Cliente (Nombre, CorreoElectronico, Telefono,Dni, Direccion)
VALUES 
    ('Juan Perez', 'juan@example.com','12345','123456789', 'Calle 123, Ciudad'),
    ('Maria Rodriguez', 'maria@example.com','12345','987654321', 'Avenida XYZ, Ciudad');




CREATE TABLE Reserva (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Cliente VARCHAR(255) NOT NULL,
    FechaReserva DATE NOT NULL,
    CorreoElectronico VARCHAR(255) NOT NULL,
    Telefono VARCHAR(20),
    Direccion TEXT,
    Equipos VARCHAR(20),
    Mensaje TEXT
);

INSERT INTO Reserva (Cliente, FechaReserva, CorreoElectronico, Telefono, Direccion, Equipos, Mensaje)
VALUES 
    ('quique', '2023-01-20', 'quiquenri@sss', '026455555', 'bernasconi','Parlante','Enseña que no entiendo'),
    ('ENRI', '2023-01-20', 'enri@sss', '02645552255', 'bernasconi2','Luces','unas hamburgesitas o que');




    CREATE TABLE EquiposSonido (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL,
    Descripcion TEXT,
    Marca VARCHAR(100),
    imagen VARCHAR(100),
    PrecioAlquilerPorDia DECIMAL(10, 2) NOT NULL,
    Stock INT NOT NULL
);
INSERT INTO EquiposSonido (Nombre, Descripcion, Marca, imagen, PrecioAlquilerPorDia, Stock)
VALUES 
    ('Altavoces Activos', 'Altavoces potentes para eventos grandes', 'MarcaX', 'imagen', 50.00, 10),
    ('Microfono Inalambrico', 'Microfono de alta calidad para presentaciones', 'MarcaY', 'imagen', 20.00, 15);
