-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.28-log - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para cursos
CREATE DATABASE IF NOT EXISTS `cursos` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci */;
USE `cursos`;

-- Volcando estructura para tabla cursos.asignaturas
CREATE TABLE IF NOT EXISTS `asignaturas` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Asignatura` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Sigla` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla cursos.asignaturas: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `asignaturas` DISABLE KEYS */;
INSERT INTO `asignaturas` (`Id`, `Asignatura`, `Sigla`) VALUES
	(1, 'Matematica', 'MAT101'),
	(3, 'Matematica Intermedia', 'MAT102'),
	(4, 'Quimica', 'QMC100'),
	(5, 'Fisica', 'FIS100'),
	(6, 'Fisica Cuantica', 'FIS102'),
	(7, 'Calculo', 'CAL100'),
	(8, 'Lenguaje', 'LEN119'),
	(9, 'Lenguaje', 'LEN110'),
	(10, 'Ingles', 'ING981'),
	(11, 'BiologÃ­a', 'BIO178'),
	(12, 'Ingles II', 'ING652'),
	(13, 'Historia', 'HIS65'),
	(14, 'Musica', 'MUS98'),
	(15, 'Matematica', 'MAT101');
/*!40000 ALTER TABLE `asignaturas` ENABLE KEYS */;

-- Volcando estructura para tabla cursos.asignatura_docente
CREATE TABLE IF NOT EXISTS `asignatura_docente` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `IdAsignatura` int(10) NOT NULL DEFAULT '0',
  `IdDocente` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla cursos.asignatura_docente: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `asignatura_docente` DISABLE KEYS */;
/*!40000 ALTER TABLE `asignatura_docente` ENABLE KEYS */;

-- Volcando estructura para tabla cursos.asignatura_horario
CREATE TABLE IF NOT EXISTS `asignatura_horario` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `IdAsignatura` int(10) NOT NULL,
  `IdHorario` int(10) NOT NULL,
  `Estado` varchar(50) COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'INACTIVO',
  PRIMARY KEY (`id`),
  KEY `IdHorario` (`IdHorario`),
  KEY `IdAsignatura` (`IdAsignatura`),
  CONSTRAINT `FK_asignatura_horario_asignaturas` FOREIGN KEY (`IdAsignatura`) REFERENCES `asignaturas` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_asignatura_horario_horarios` FOREIGN KEY (`IdHorario`) REFERENCES `horarios` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla cursos.asignatura_horario: ~33 rows (aproximadamente)
/*!40000 ALTER TABLE `asignatura_horario` DISABLE KEYS */;
INSERT INTO `asignatura_horario` (`id`, `IdAsignatura`, `IdHorario`, `Estado`) VALUES
	(1, 5, 1, 'INACTIVO'),
	(2, 5, 2, 'ACTIVO'),
	(3, 5, 3, 'ACTIVO'),
	(4, 4, 1, 'ACTIVO'),
	(5, 4, 2, 'ACTIVO'),
	(6, 4, 3, 'INACTIVO'),
	(7, 1, 1, 'INACTIVO'),
	(8, 1, 2, 'INACTIVO'),
	(9, 1, 3, 'INACTIVO'),
	(10, 6, 1, 'INACTIVO'),
	(11, 6, 2, 'ACTIVO'),
	(12, 6, 3, 'INACTIVO'),
	(13, 7, 1, 'ACTIVO'),
	(14, 7, 2, 'INACTIVO'),
	(15, 7, 3, 'INACTIVO'),
	(16, 3, 1, 'ACTIVO'),
	(17, 3, 2, 'ACTIVO'),
	(18, 3, 3, 'ACTIVO'),
	(19, 8, 1, 'INACTIVO'),
	(20, 8, 2, 'ACTIVO'),
	(21, 8, 3, 'INACTIVO'),
	(22, 10, 1, 'INACTIVO'),
	(23, 10, 2, 'ACTIVO'),
	(24, 10, 3, 'INACTIVO'),
	(25, 11, 1, 'INACTIVO'),
	(26, 11, 2, 'INACTIVO'),
	(27, 11, 3, 'ACTIVO'),
	(28, 12, 1, 'INACTIVO'),
	(29, 12, 2, 'INACTIVO'),
	(30, 12, 3, 'INACTIVO'),
	(31, 13, 1, 'ACTIVO'),
	(32, 13, 2, 'INACTIVO'),
	(33, 13, 3, 'ACTIVO'),
	(34, 15, 1, 'INACTIVO'),
	(35, 15, 2, 'INACTIVO'),
	(36, 15, 3, 'INACTIVO');
/*!40000 ALTER TABLE `asignatura_horario` ENABLE KEYS */;

-- Volcando estructura para tabla cursos.docentes
CREATE TABLE IF NOT EXISTS `docentes` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `ApDocente` varchar(50) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `NomDocente` varchar(50) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `IdAsignatura` int(10) NOT NULL DEFAULT '0',
  `IdManual` int(10) NOT NULL DEFAULT '0',
  `IdHorario` int(11) NOT NULL DEFAULT '0',
  `FechaRegistro` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla cursos.docentes: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `docentes` DISABLE KEYS */;
INSERT INTO `docentes` (`Id`, `ApDocente`, `NomDocente`, `IdAsignatura`, `IdManual`, `IdHorario`, `FechaRegistro`) VALUES
	(1, 'Heredia Gomez', 'Juan Angel', 1, 0, 3, '2022-01-09'),
	(2, 'Fernandez Perez', 'Hernan Jose', 4, 0, 1, '2022-01-09'),
	(3, 'Flores Perez', 'Jhoana Alejandra', 7, 0, 2, '2022-01-09'),
	(4, 'Prada Linares', 'Julian JosÃ©', 8, 0, 2, '2022-01-10'),
	(5, 'Garcia Arauco', 'Rosalina Gardenia', 10, 0, 3, '2022-01-10'),
	(6, 'Gomez Andrade', 'Julian Boris', 4, 0, 2, '2022-01-10'),
	(7, 'Aranda Perez', 'Sofia Gema', 1, 0, 1, '2022-01-17'),
	(8, 'Nava Aguirre', 'Carla Lorena', 5, 0, 2, '2022-01-18');
/*!40000 ALTER TABLE `docentes` ENABLE KEYS */;

-- Volcando estructura para tabla cursos.docente_manual
CREATE TABLE IF NOT EXISTS `docente_manual` (
  `Id` int(10) NOT NULL,
  `IdManual` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla cursos.docente_manual: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `docente_manual` DISABLE KEYS */;
/*!40000 ALTER TABLE `docente_manual` ENABLE KEYS */;

-- Volcando estructura para tabla cursos.horarios
CREATE TABLE IF NOT EXISTS `horarios` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Horario` time NOT NULL,
  `Turno` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla cursos.horarios: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `horarios` DISABLE KEYS */;
INSERT INTO `horarios` (`Id`, `Horario`, `Turno`) VALUES
	(1, '08:30:00', 'Diurno'),
	(2, '14:00:00', 'Tarde'),
	(3, '19:00:00', 'Noche');
/*!40000 ALTER TABLE `horarios` ENABLE KEYS */;

-- Volcando estructura para tabla cursos.manuales
CREATE TABLE IF NOT EXISTS `manuales` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `TituloManual` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `TipoManual` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla cursos.manuales: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `manuales` DISABLE KEYS */;
INSERT INTO `manuales` (`Id`, `TituloManual`, `TipoManual`) VALUES
	(1, 'Fisica Univesritariia', 'Intermedio');
/*!40000 ALTER TABLE `manuales` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
