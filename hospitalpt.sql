-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.24-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para hospitalpt
CREATE DATABASE IF NOT EXISTS `hospitalpt` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `hospitalpt`;

-- Volcando estructura para tabla hospitalpt.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla hospitalpt.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla hospitalpt.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla hospitalpt.migrations: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla hospitalpt.pacientedaltas
CREATE TABLE IF NOT EXISTS `pacientedaltas` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) NOT NULL,
  `edad` int(3) NOT NULL,
  `sexo` char(10) NOT NULL,
  `fechanaci` date NOT NULL,
  `ciudadori` varchar(50) NOT NULL,
  `fechains` date NOT NULL,
  `hospitalori` varchar(50) NOT NULL,
  `nombretut` varchar(50) NOT NULL,
  `telefonotut` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `users_pacientes` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `FK1_pacientes` (`users_pacientes`) USING BTREE,
  CONSTRAINT `pacientedaltas_ibfk_1` FOREIGN KEY (`users_pacientes`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Volcando datos para la tabla hospitalpt.pacientedaltas: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `pacientedaltas` DISABLE KEYS */;
INSERT INTO `pacientedaltas` (`id`, `nombres`, `edad`, `sexo`, `fechanaci`, `ciudadori`, `fechains`, `hospitalori`, `nombretut`, `telefonotut`, `updated_at`, `created_at`, `users_pacientes`) VALUES
	(43, 'Iris Villena Valenciano', 2, 'Femenino', '2019-12-23', 'Buceim', '2022-04-06', 'United Clinic', 'José Manuel Almagro', '9919630308', '2022-08-02 23:11:39', '2022-08-02 23:11:39', 3),
	(44, 'África Barrios', 7, 'Femenino', '2015-06-09', 'Crafago', '2022-05-11', 'Evergreen Community Hospital', 'Heraclio Alberola Arnal', '9902391283', '2022-08-02 23:29:58', '2022-08-02 23:29:58', 3);
/*!40000 ALTER TABLE `pacientedaltas` ENABLE KEYS */;

-- Volcando estructura para tabla hospitalpt.pacientes
CREATE TABLE IF NOT EXISTS `pacientes` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) NOT NULL,
  `edad` int(3) NOT NULL,
  `sexo` char(10) NOT NULL,
  `fechanaci` date NOT NULL,
  `ciudadori` varchar(50) NOT NULL,
  `fechains` date NOT NULL,
  `hospitalori` varchar(50) NOT NULL,
  `nombretut` varchar(50) NOT NULL,
  `telefonotut` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `users_pacientes` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `FK1_pacientes` (`users_pacientes`),
  CONSTRAINT `FK1_pacientes` FOREIGN KEY (`users_pacientes`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla hospitalpt.pacientes: ~18 rows (aproximadamente)
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
INSERT INTO `pacientes` (`id`, `nombres`, `edad`, `sexo`, `fechanaci`, `ciudadori`, `fechains`, `hospitalori`, `nombretut`, `telefonotut`, `updated_at`, `created_at`, `users_pacientes`) VALUES
	(46, 'Vicente Jerez Llabrés', 10, 'Masculino', '2012-05-26', 'Oregon', '2022-08-02', 'Wellness Hospital Center', 'Obdulia Burgos Mate', '99137140675', '2022-08-02 22:29:54', '2022-08-02 22:29:54', 3),
	(47, 'Aristides Vara Grau', 11, 'Femenino', '2011-03-21', 'New Britain', '2022-08-02', 'Flowerhill Medical Clinic', 'Silvia Carreño Verdú', '+52991965875544', '2022-08-02 22:34:43', '2022-08-02 22:34:43', 3),
	(48, 'Ibán Plaza Villegas', 1, 'Masculino', '2020-12-22', 'Muachul', '2022-08-02', 'Paradise Valley General Hospital', 'Cebrián Rivero Gimeno', '+52991217582630', '2022-08-02 22:38:55', '2022-08-02 22:38:55', 3),
	(49, 'Mohamed Castellanos', 12, 'Masculino', '2009-11-12', 'Bozurgh', '2022-04-26', 'Highlands Hospital', 'Artemio Cuesta Ávila', '+52991375302121', '2022-08-02 22:40:39', '2022-08-02 22:40:39', 3),
	(50, 'Ani Natalia Roldan Torrent', 10, 'Femenino', '2012-02-24', 'Chuplita', '2022-07-05', 'Swanlake Hospital', 'Ámbar Ricarda Cañas Vilar', '991018506150', '2022-08-02 22:42:29', '2022-08-02 22:42:29', 3),
	(51, 'Micaela Gras Garmendia', 6, 'Femenino', '2016-05-22', 'Saupares', '2022-01-12', 'Harmony Hospital', 'Cristian Carretero Santamaría', '991437186349', '2022-08-02 22:44:25', '2022-08-02 22:44:25', 3),
	(52, 'Ana Belén Benítez Castellanos', 11, 'Femenino', '2011-01-31', 'Friblord', '2022-03-09', 'Archangel Clinic', 'Juan Carlos Ruano Antúnez', '991231861174', '2022-08-02 22:46:31', '2022-08-02 22:46:31', 3),
	(53, 'Eutropio Azorin Suarez', 10, 'Masculino', '2011-08-29', 'Nocalo', '2022-04-06', 'Harmony Hospital', 'Yéssica Mirta Noguera Esteve', '991045905510', '2022-08-02 22:48:02', '2022-08-02 22:48:02', 3),
	(54, 'León Rovira Rosa', 10, 'Masculino', '2012-06-26', 'Moistesa', '2022-04-06', 'Genesis Hospital', 'Natalio Alegre-Cueto', '991848667202', '2022-08-02 22:49:33', '2022-08-02 22:49:33', 3),
	(55, 'Emma Oliva Ortiz', 11, 'Femenino', '2011-05-25', 'Goaturg', '2022-05-17', 'Clemency Hospital Center', 'Jordi del Vicens', '9901052140', '2022-08-02 22:51:26', '2022-08-02 22:51:26', 3),
	(56, 'Aníbal del Duque', 8, 'Masculino', '2013-11-08', 'Sliphario', '2022-07-28', 'Promise Medical Center', 'Leonor del Dueñas', '9948443819', '2022-08-02 22:52:50', '2022-08-02 22:52:50', 3),
	(57, 'Soraya Vilaplana Rius', 2, 'Femenino', '2019-09-18', 'Clamento', '2022-06-14', 'Southshore Community Hospital', 'Leonor del Dueñas', '9987380477', '2022-08-02 22:54:06', '2022-08-02 22:54:06', 3),
	(58, 'Itziar Castillo Bonilla', 5, 'Femenino', '2017-08-02', 'Feaclila', '2022-07-12', 'New Eden Hospital Center', 'Bruno Baró Goicoechea', '29918258463', '2022-08-02 22:55:45', '2022-08-02 22:55:45', 3),
	(59, 'Azahar Roca Milla', 10, 'Femenino', '2011-12-10', 'Cuozirie', '2022-08-02', 'Twin Lakes Medical Clinic', 'Isidoro Rodriguez Leiva', '9978662507', '2022-08-02 22:58:42', '2022-08-02 22:58:42', 3),
	(60, 'Isa Romero Suárez', 4, 'Femenino', '2018-05-26', 'Jiucento', '2022-05-18', 'Hill Crest Clinic', 'Soledad Varela Patiño', '9988927655', '2022-08-02 23:02:05', '2022-08-02 23:02:05', 3),
	(61, 'Perlita Ibarra Montaña', 11, 'Femenino', '2010-08-28', 'Phedand', '2022-05-18', 'Spring Harbor Hospital', 'Martín Malo Aznar', '9993455381', '2022-08-02 23:03:45', '2022-08-02 23:03:45', 3),
	(62, 'Ofelia Ariza Zamorano', 8, 'Femenino', '2013-08-07', 'Lokeah', '2022-06-14', 'Silver Lake Medical Center', 'Ileana Ferrán', '9927585351', '2022-08-02 23:05:28', '2022-08-02 23:05:28', 3),
	(64, 'Armando Valbuena Monreal', 11, 'Masculino', '2010-10-08', 'Lokeah', '2022-05-12', 'Horizon Community Hospital', 'Aarón Sola Cañellas', '9949518964', '2022-08-02 23:08:33', '2022-08-02 23:08:33', 3);
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;

-- Volcando estructura para tabla hospitalpt.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla hospitalpt.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla hospitalpt.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla hospitalpt.personal_access_tokens: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Volcando estructura para tabla hospitalpt.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla hospitalpt.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(3, 'administrador', 'admin2@gmail.com', NULL, '$2y$10$TFrrbn75AFFacvpnWnFTKOXBbFUwOvovD3ViBj7Cw2xhggIyGpfaa', NULL, '2022-08-03 00:53:20', '2022-08-03 00:53:20');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
