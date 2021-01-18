-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-01-2018 a las 12:20:59
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `blog`
--
CREATE DATABASE blog;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `dept_no` tinyint(2) NOT NULL,
  `dnombre` varchar(15) NOT NULL,
  `loc` varchar(15) NOT NULL,
  PRIMARY KEY (`dept_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`dept_no`, `dnombre`, `loc`) VALUES
(10, 'CONTABILIDAD', 'SEVILLA'),
(15, 'INFORMATICA', 'MADRID'),
(20, 'INVESTIGACION', 'MADRID'),
(25, 'RRHH', 'CUENCA'),
(30, 'VENTAS', 'BARCELONA'),
(35, 'I+D', 'ZAMORA'),
(40, 'PRODUCCION', 'BILBAO'),
(45, 'CALIDAD', 'ALICANTE'),
(50, 'LOGISTICA', 'SALAMANCA'),
(55, 'ADMINISTRACION', 'VALLADOLID'),
(60, 'MARKETING', 'GUADALAJARA'),
(70, 'INGENIERIA', 'ZAMORA'),
(110, 'COMPRAS', 'CACERES'),
(120, 'COMERCIAL', 'BARCELONA'),
(127, 'ALMACEN', 'SALAMANCA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `emp_no` smallint(4) unsigned NOT NULL,
  `apellido` varchar(10) DEFAULT NULL,
  `oficio` varchar(10) DEFAULT NULL,
  `dir` smallint(6) DEFAULT NULL,
  `fecha_alt` date DEFAULT NULL,
  `salario` float(6,2) DEFAULT NULL,
  `comision` float(6,2) DEFAULT NULL,
  `dept_no` tinyint(2) NOT NULL,
  PRIMARY KEY (`emp_no`),
  KEY `dept_no` (`dept_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`emp_no`, `apellido`, `oficio`, `dir`, `fecha_alt`, `salario`, `comision`, `dept_no`) VALUES
(3456, 'COTON', 'FRESADOR', 7698, '2014-05-27', 1000.00, 100.00, 25),
(4455, 'PEPE', 'VENDEDOR', 7499, '2012-11-09', 1500.00, 10.00, 10),
(5432, 'CIRUELO', 'ROMPEDOR', 7839, '2017-12-30', 1287.00, 150.00, 35),
(6655, 'RODRIGUEZ', 'ANALISTA', 7698, '2012-11-15', 3000.00, 10.00, 15),
(7369, 'SANCHEZ', 'EMPLEADO', 7902, '1990-12-17', 1050.00, NULL, 20),
(7499, 'ARROYO', 'VENDEDOR', 7698, '1990-02-20', 1500.00, 390.00, 30),
(7521, 'SALA', 'VENDEDOR', 7698, '1991-02-22', 1625.00, 650.00, 30),
(7566, 'JIMENEZ', 'DIRECTOR', 7839, '1991-04-02', 2910.00, NULL, 20),
(7654, 'MARTIN', 'VENDEDOR', 7698, '1991-09-29', 1600.00, 1020.00, 30),
(7698, 'NEGRO', 'DIRECTOR', 7839, '1991-05-01', 3005.00, NULL, 30),
(7782, 'CEREZO', 'DIRECTOR', 7839, '1991-06-09', 3005.00, NULL, 10),
(7788, 'GIL', 'ANALISTA', 7566, '1991-11-09', 2500.34, NULL, 20),
(7839, 'REY', 'PRESIDENTE', NULL, '1991-11-17', 500.00, 10.00, 25),
(7844, 'TOVAR', 'VENDEDOR', 7698, '1991-09-08', 1350.00, 0.00, 30),
(7876, 'ALONSO', 'EMPLEADO', 7788, '1991-09-23', 1440.00, NULL, 20),
(7900, 'JIMENO', 'EMPLEADO', 7698, '1991-12-03', 1335.00, NULL, 30),
(7902, 'FERNANDEZ', 'ANALISTA', 7566, '1991-12-03', 3010.00, NULL, 20),
(7934, 'MUÑOZ', 'EMPLEADO', 7782, '1992-01-23', 1810.00, NULL, 10),
(8000, 'LOPEZ', 'PESCADOR', 7900, '2012-10-23', 700.00, 200.00, 40),
(9000, 'MARCOS', 'FRESADOR', 7876, '2012-10-23', 700.00, 200.00, 40);

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`dept_no`) REFERENCES `departamentos` (`dept_no`) ON DELETE CASCADE ON UPDATE CASCADE;

COMMIT;
