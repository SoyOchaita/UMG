-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2025 at 04:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umg`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clases`
--

CREATE TABLE `clases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clases`
--

INSERT INTO `clases` (`id`, `title`, `description`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'Introducción a Bases de Datos', 'Conceptos básicos de BBDD', 'carousel/slide1.jpg', '2025-05-24 17:28:00', '2025-05-24 17:28:00'),
(2, 'Modelado Entidad-Relación', 'Diagramas y normalización', 'carousel/slide2.jpg', '2025-05-24 17:28:00', '2025-05-24 17:28:00'),
(3, 'SQL Avanzado', 'Subconsultas, joins y transacciones', 'carousel/slide3.jpg', '2025-05-24 17:28:00', '2025-05-24 17:28:00'),
(4, 'Optimización de Consultas', 'Índices y planes de ejecución', 'carousel/slide4.jpg', '2025-05-24 17:28:00', '2025-05-24 17:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `contactos`
--

CREATE TABLE `contactos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `horario` text NOT NULL,
  `fondo_color` varchar(7) NOT NULL DEFAULT '#3e1e86',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactos`
--

INSERT INTO `contactos` (`id`, `email`, `telefono`, `horario`, `fondo_color`, `created_at`, `updated_at`) VALUES
(1, 'servicioalcliente@gruporuby.gt', '+502 0000-0000', 'Lunes a viernes: 9:00 – 16:00  \nSábados: 9:00 – 12:00  \nDomingos: Cerrado', '#3e1e86', '2025-05-24 18:02:18', '2025-05-24 18:02:18'),
(2, 'servicioalcliente@gruporuby.gt', '+502 0000-0000', 'Lunes a viernes: 9:00 – 16:00  \nSábados: 9:00 – 12:00  \nDomingos: Cerrado', '#3e1e86', '2025-05-24 18:22:26', '2025-05-24 18:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `ejercicios`
--

CREATE TABLE `ejercicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ejercicios`
--

INSERT INTO `ejercicios` (`id`, `titulo`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'COMPONENTES DE COMPUTADORAS', 'Imagina y diseña la computadora ideal que siempre has soñado, considerando cuidadosamente las siguientes características: características deseables, precios accesibles y tamaño conveniente.\n\nEsta actividad te desafía a explorar tus preferencias y necesidades en cuanto a tecnología, al mismo tiempo que te brinda la oportunidad de reflexionar sobre cómo diseñarías tu herramienta informática perfecta para adaptarse a tu estilo de vida y a tus actividades académicas y personales.', '2025-05-24 17:28:00', '2025-05-24 17:28:00'),
(2, 'SISTEMAS OPERATIVOS 1', 'Realiza los siguientes ejercicios en cuadros sinópticos:\na. Top 5 de sistemas operativos para PC o laptops.\nb. Top 5 de sistemas operativos para móviles.\nd. 7 términos de Sistema operativo.', '2025-05-24 17:28:00', '2025-05-24 17:28:00'),
(3, 'SISTEMAS OPERATIVOS 2', 'A continuación, se listan diferentes niveles funcionales de un sistema operativo. Tu tarea es ordenar los siguientes componentes desde el nivel más bajo (cercano al hardware) hasta el más alto (más cercano al usuario). Luego, deberás describir brevemente la función de cada uno en una oración clara.\n\nComponentes a ordenar:\n• Shell de comandos (CLI o GUI)\n• Aplicaciones de usuario\n• Interfaz de bajo nivel\n• Traducción de memoria\n• Protocolos de red\n• Controladores de dispositivos (drivers)\n• Abstracción de alto nivel\n• Dispositivos de Entrada/Salida y Red (I/O)\n• Interconexión del sistema (bus)\n• Gestión de procesos y archivos', '2025-05-24 17:28:00', '2025-05-24 17:28:00'),
(4, 'BASE DE DATOS', 'Elaborar en Lucidchart el Diagrama de Entidad-Relación de Control de una biblioteca.', '2025-05-24 17:28:00', '2025-05-24 17:28:00'),
(5, 'REDES PARA PRINCIPIANTES', 'Utilice la siguiente herramienta:\nhttps://www.mycompiler.io/es/new/sql\n\nSe dará cuenta que ya incluye un ejemplo de creación de tabla, INSERT y SELECT.\nCree una tabla con los siguientes campos: Id, Nombre, Apellido, Genero, Edad, Salario, FechaIngreso.\nInserte 06 registros.\nLuego aplique cada comando del 1 al 21 en ella.', '2025-05-24 17:28:00', '2025-05-24 17:28:00'),
(6, 'BASES NÚMERICAS', 'IPv4 Consultando IA Generativa:\n• Usando una herramienta de IA generativa, y en tu rol de estudiante, pide un resumen de la IPv4.\n• Redacta la respuesta incluyendo la referencia APA para IA.\n• Comenta tus hallazgos con otros compañeros.', '2025-05-24 17:28:00', '2025-05-24 17:28:00'),
(7, 'CISCO PACKET TRACER', 'En Cisco Packet Tracer crea una topología simple que contenga:\n• Un router, un switch y dos PCs.\n• Asigna direcciones IP estáticas a cada PC (por ejemplo, 192.168.1.10 y 192.168.1.11 con máscara /24).\n• Configura el router para enrutar el tráfico entre ambas PCs.\n• Realiza pruebas de conectividad usando el comando ping desde cada PC.\n• Añade una VLAN extra en el switch y mueve una PC a esa VLAN; demuestra que sin un subinterfaz en el router no hay comunicación, y luego habilita la subinterfaz VLAN y verifica la conectividad.', '2025-05-24 17:28:00', '2025-05-24 17:28:00'),
(8, 'SUBNETING', 'Elaborar ensayo académico de subnetting en formato PDF.', '2025-05-24 17:28:00', '2025-05-24 17:28:00'),
(9, 'INICIO EN LA PROGRAMACIÓN', 'Crear una mini página web con estructura básica en HTML, estilo visual con CSS y una pequeña interacción con JavaScript.', '2025-05-24 17:28:00', '2025-05-24 17:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `equipos`
--

CREATE TABLE `equipos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `foto_path` varchar(255) NOT NULL,
  `fondo_color` varchar(7) NOT NULL DEFAULT '#0297a7',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipos`
--

INSERT INTO `equipos` (`id`, `nombre`, `rol`, `foto_path`, `fondo_color`, `created_at`, `updated_at`) VALUES
(1, 'MSc. M.A. Lic. Aldo Ernesto Alí Barrera Donis', 'MSc. M.A. Lic. Aldo Ernesto Alí Barrera Donis', 'images/lbases.jpg', '#0297a7', '2025-05-24 18:22:26', '2025-05-24 18:22:26'),
(2, '', 'Ing. Telecomunicaciones', 'images/douglas.jpeg', '#0297a7', '2025-05-24 18:22:26', '2025-05-24 18:22:26'),
(3, 'Nicolas Ochaita', 'Ing. Sistemas', 'images/nochaita.jpg', '#0297a7', '2025-05-24 18:22:26', '2025-05-24 18:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_05_24_033916_create_clases_table', 1),
(5, '2025_05_24_034136_create_ejercicios_table', 1),
(6, '2025_05_24_044116_create_settings_table', 1),
(7, '2025_05_24_055936_create_temas_table', 1),
(8, '2025_05_24_112727_recreate_ejercicios_table', 1),
(9, '2025_05_24_114838_create_nosotros_table', 2),
(10, '2025_05_24_120122_create_contactos_table', 3),
(11, '2025_05_24_121932_create_equipos_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `nosotros`
--

CREATE TABLE `nosotros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `contenido` text NOT NULL,
  `fondo_color` varchar(7) NOT NULL DEFAULT '#a8bfd9',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nosotros`
--

INSERT INTO `nosotros` (`id`, `titulo`, `contenido`, `fondo_color`, `created_at`, `updated_at`) VALUES
(1, 'Nuestra Historia', 'Nos unimos como grupo sin conocernos, sin saber los nombres ni las habilidades de cada uno. A pesar de eso, desde el primer día asumimos con responsabilidad y compromiso el reto de aprender juntos en cada clase. Con entusiasmo y disposición, trabajamos en equipo para aplicar lo aprendido y construir bases sólidas que nos preparen para enfrentar el mundo de la ingeniería en sistemas.', '#a8bfd9', '2025-05-24 17:50:19', '2025-05-24 17:50:19'),
(2, 'Nuestra Historia', 'Nos unimos como grupo sin conocernos, sin saber los nombres ni las habilidades de cada uno. A pesar de eso, desde el primer día asumimos con responsabilidad y compromiso el reto de aprender juntos en cada clase. Con entusiasmo y disposición, trabajamos en equipo para aplicar lo aprendido y construir bases sólidas que nos preparen para enfrentar el mundo de la ingeniería en sistemas.', '#a8bfd9', '2025-05-24 18:02:18', '2025-05-24 18:02:18'),
(3, 'Nuestra Historia', 'Nos unimos como grupo sin conocernos, sin saber los nombres ni las habilidades de cada uno. A pesar de eso, desde el primer día asumimos con responsabilidad y compromiso el reto de aprender juntos en cada clase. Con entusiasmo y disposición, trabajamos en equipo para aplicar lo aprendido y construir bases sólidas que nos preparen para enfrentar el mundo de la ingeniería en sistemas.', '#a8bfd9', '2025-05-24 18:22:26', '2025-05-24 18:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('mGKkQyBf7XUbBjUPsXyGnkdvgYT9q0MlEd8B8oeC', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZjZKRzhBRFdyUkpJeEhOZHlaUGh4NHNJbVAydDlmVnFqemRETThvaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1748118837);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'logo_path', 'icono.svg', '2025-05-24 17:28:00', '2025-05-24 17:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `temas`
--

CREATE TABLE `temas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `temas`
--

INSERT INTO `temas` (`id`, `titulo`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'COMPONENTES DE COMPUTADORAS', 'Hardware\n• Descripción: Es la parte física de un sistema de cómputo, que incluye componentes como el monitor, teclado, mouse, CPU, memoria y disco duro. Todo lo que se puede ver y tocar.\n\nSoftware\n• Descripción: Es la parte intangible, compuesta por programas e instrucciones que indican al hardware qué hacer. Ejemplo: sistema operativo, aplicaciones y programación.\n\nTipos de Software más comunes\n• Sistema operativo: controla el hardware y ofrece una interfaz para la interacción con el usuario.\n• Aplicaciones: programas que realizan tareas específicas, como edición de texto, presentaciones, videojuegos, etc.\n• Programación: el proceso de crear software mediante lenguajes de programación.\n\nUnidades de Medida\n• Bit: unidad básica de información, puede ser 0 o 1.\n• Byte: 8 bits; almacena un solo carácter de texto.\n• Kilobyte (KB), Megabyte (MB), Gigabyte (GB), Terabyte (TB): unidades mayores para medir almacenamiento de datos.\n\nCiclo de procesamiento\n1. Entrada: el sistema recibe datos desde dispositivos de entrada (teclado, mouse).\n2. Procesamiento: la CPU procesa los datos con las instrucciones del software.\n3. Salida: el sistema envía los resultados a dispositivos de salida (monitor, impresora).\n\nClasificación de las Computadoras\n• Supercomputadoras: potencia extremadamente alta, uso en cálculos científicos. Ejemplos: IBM Summit, Fugaku.\n• Macrocomputadoras: potencia alta, uso en procesamiento intensivo. Ejemplos: IBM zSeries, Unisys.\n• Minicomputadoras: potencia moderada, uso en tareas empresariales y control. Ejemplos: VAX de DEC, IBM AS/400.\n• Microcomputadoras: baja potencia, uso general como PCs, laptops, smartphones. Ejemplos: Raspberry Pi, Arduino, ESP8266.\n\nAWS (Amazon Web Services)\n• Descripción: infraestructura global que utiliza servidores físicos de marcas como Dell, HP y Supermicro distribuidos en centros de datos en varias regiones geográficas.', '2025-05-24 17:28:00', '2025-05-24 17:28:00'),
(2, 'SISTEMAS OPERATIVOS 1', '¿Qué es un Sistema Operativo (SO)?\nEs el programa que gestiona el hardware y permite ejecutar el resto de los programas en una computadora. Sin un sistema operativo, el equipo no puede funcionar.\n\nArquitectura básica de un SO\n\nObjetivo principal: Facilitar el uso del sistema y ejecutar programas eficientemente.\nObjetivos secundarios: Uso eficiente de CPU, memoria y periféricos, detección y corrección de errores, facilidad para actualizarse, bajo consumo y protección del sistema.\n\nTareas del Sistema Operativo\n• Gestión de memoria  \n• Control de procesos  \n• Manejo de archivos  \n• Gestión de dispositivos de entrada y salida  \n• Protección de recursos del sistema  \n\nProtección en el Sistema Operativo\nModo Kernel y Modo Usuario para separar tareas críticas y de usuario.\nEvita que un programa afecte a otros o acceda directamente a recursos no autorizados.\nEl procesador realiza interrupciones periódicas para repartir el uso.\nLa memoria impide acceso no autorizado entre programas.\nEl hardware bloquea accesos directos a periféricos.\n\nTipos de Sistemas Operativos\n• Sistemas Abiertos: permiten modificar el código (ej: Linux, Unix).\n• Sistemas Cerrados: el código no está disponible (ej: Windows, macOS).\n\nSoftware de Aplicación\nProgramas diseñados para realizar tareas específicas.\n\nCategorías comunes:\n• Aplicaciones de negocio\n• Aplicaciones de utilería\n• Aplicaciones personales\n• Aplicaciones de entretenimiento\n\nLenguajes de Programación\n• Son formas estructuradas para comunicar instrucciones a una máquina.\n• Se usan para crear programas, expresar algoritmos o controlar sistemas físicos y lógicos.\n• Incluyen símbolos y reglas (sintaxis y semántica).\n• El proceso completo de escribir, probar y mantener código se llama programación.', '2025-05-24 17:28:00', '2025-05-24 17:28:00'),
(3, 'SISTEMAS OPERATIVOS 2', '¿Qué es un Sistema Operativo?\nEs un software fundamental que actúa como intermediario entre el hardware y los programas. Coordina y controla los recursos del sistema para que los programas se ejecuten y el usuario pueda interactuar con la computadora.\n\nGestión de Dispositivos de Entrada/Salida  \nEl sistema operativo administra los dispositivos conectados como teclados, ratones, pantallas e impresoras. Detecta, inicializa y coordina el acceso a estos dispositivos para que se comuniquen eficientemente con el sistema.\n\nInterfaz de Usuario  \nPermite la interacción con la computadora. Puede ser:  \n• GUI (interfaz gráfica): ventanas, íconos, menús.  \n• CLI (línea de comandos): comandos escritos.  \n• Facilita la ejecución de programas y la gestión de archivos.\n\nFunciones Principales del Sistema Operativo  \n1. Gestión de seguridad: protege datos y recursos del sistema. Control de accesos, autenticación, encriptación, detección de amenazas.  \n2. Gestión de procesos: crea, ejecuta y finaliza procesos. Asigna recursos como CPU y memoria.  \n3. Gestión de memoria: asigna y libera espacio en memoria (RAM y disco). Utiliza técnicas como paginación, segmentación y memoria virtual.  \n4. Gestión de archivos: organiza archivos y directorios en dispositivos como discos duros y USB. Permite crear, leer, modificar y borrar archivos.\n\nArquitectura Básica de un Sistema Operativo  \n• Núcleo (Kernel): controla el hardware y coordina la ejecución de los programas.  \n• Gestor de procesos: administra la ejecución y planificación de procesos.  \n• Gestor de memoria: maneja el uso de RAM y memoria secundaria.  \n• Sistema de archivos: organiza y permite el acceso a los archivos.  \n• Gestor de dispositivos: administra el acceso a periféricos de entrada/salida.  \n• Interfaz de usuario: permite al usuario comunicarse con el sistema, por medio de GUI o CLI.', '2025-05-24 17:28:00', '2025-05-24 17:28:00'),
(4, 'BASE DE DATOS', 'Introducción a las Bases de Datos  \nInicialmente, se usaban archivos planos que dificultaban la administración de datos. Las bases de datos surgieron para organizar información de forma eficiente y accesible.\n\n¿Qué es una base de datos?  \nConjunto de datos relacionados, almacenados sistemáticamente para su uso posterior.  \nEjemplo: una biblioteca puede ser vista como una base de datos de libros indexados.\n\nSistema de Base de Datos  \nSistema computarizado para almacenar, recuperar y actualizar información importante para personas o instituciones.\n\nSistema de Gestión de Bases de Datos (SGBD o DBMS)  \nSoftware que actúa como interfaz entre la base de datos, el usuario y las aplicaciones.\n\nFunciones principales:  \n• Crear y estructurar bases de datos (DDL)  \n• Manipular datos (insertar, eliminar, modificar, consultar) usando DML  \n• Almacenar grandes volúmenes de datos de forma segura  \n• Controlar acceso simultáneo y mantener coherencia  \n\nVentajas de usar una base de datos  \n• Evita la redundancia de datos  \n• Asegura la consistencia  \n• Permite compartir información  \n• Mejora la integridad de los datos  \n\nRoles clave: Administrador de Base de Datos (DBA)  \nResponsable de:  \n• Seguridad y rendimiento  \n• Mantenimiento y respaldo  \n• Control de acceso de usuarios  \n\nModelo Entidad-Relación (E-R)  \nBase del diseño de bases de datos relacionales.  \n\nConceptos clave:  \n• Entidad: objeto o concepto real (ej. Libro, Estudiante)  \n• Atributo: característica de la entidad (ej. nombre, código)  \n• Llave primaria (PK): identifica de forma única cada registro  \n• Llave foránea (FK): conecta una entidad con otra  \n• Relación: vínculo entre entidades  \n\nTipos de Relaciones  \n• Relación 1 a 1: un registro se asocia con uno solo  \n• Relación 1 a muchos (1 a *): un registro se relaciona con varios  \n• Relación muchos a muchos (* a *): varios registros en ambas tablas se relacionan entre sí', '2025-05-24 17:28:00', '2025-05-24 17:28:00'),
(5, 'REDES PARA PRINCIPIANTES', '¿Qué es una red de computadoras?  \nUna red de computadoras es un conjunto de equipos (computadoras, servidores, impresoras, dispositivos móviles, etc.) conectados entre sí para compartir recursos, intercambiar datos y comunicarse.\n\nTipos de redes  \n1. LAN (Local Area Network):  \n   • Red local, como la de una casa, oficina o escuela. Tiene cobertura limitada.  \n2. WAN (Wide Area Network):  \n   • Conecta redes que están en distintas ubicaciones geográficas (ej. el internet).  \n3. MAN (Metropolitan Area Network):  \n   • Cubre una ciudad o un campus grande.  \n4. PAN (Personal Area Network):  \n   • Red de corto alcance, como la conexión entre tu celular y audífonos Bluetooth.\n\nComponentes básicos de una red  \n• Nodo: cada dispositivo conectado a una red.  \n• Router: encaminador que conecta distintas redes (ej. tu casa con internet).  \n• Switch: dispositivo que conecta varios equipos dentro de una LAN.  \n• Servidor: equipo que ofrece servicios o recursos a otros equipos (clientes).  \n• Cliente: dispositivo que accede a recursos del servidor.\n\nTipos de conexión  \n• Alámbrica (por cable): usa cables Ethernet. Es estable y rápida.  \n• Inalámbrica (Wi-Fi): usa señales de radio. Más práctica, pero menos estable.\n\nBeneficios de usar redes  \n• Compartir archivos y recursos (como impresoras).  \n• Acceso remoto a información.  \n• Mejor comunicación interna.\n\nProtocolos de red  \nSon reglas que definen cómo se comunican los dispositivos. Los más comunes son:  \n• TCP/IP: protocolo base de internet.  \n• HTTP/HTTPS: para acceder a sitios web.  \n• FTP: para transferencia de archivos.  \n• SMTP/IMAP/POP3: para correo electrónico.  \n• DNS: traduce nombres de dominio a direcciones IP.\n\nDirección IP  \nEs el número que identifica a un dispositivo en una red.  \nEjemplo: 192.168.1.1  \n• IPv4: tiene 4 bloques numéricos.  \n• IPv6: más largo, creado para soportar más dispositivos.\n\nModelo OSI (Open Systems Interconnection)  \nGuía que divide la comunicación en redes en 7 capas, de abajo hacia arriba:  \n1. Física (hardware, cables)  \n2. Enlace de datos (conexión directa)  \n3. Red (rutear, IP)  \n4. Transporte (TCP, UDP)  \n5. Sesión (mantiene activa la comunicación)  \n6. Presentación (traducción de datos)  \n7. Aplicación (programas como navegadores)', '2025-05-24 17:28:00', '2025-05-24 17:28:00'),
(6, 'BASES NÚMERICAS', '¿Qué es una base numérica?  \nEs el sistema en que se representa un número; dependiendo de cuántos símbolos (dígitos) diferentes se pueden usar. Cada posición del número representa una potencia de la base.\n\nBases más comunes:  \n1. Base Decimal (Base 10):  \n   • Es el sistema que usamos a diario. Usa 10 dígitos: del 0 al 9.  \n   • Ejemplo: 473 = 4×10² + 7×10¹ + 3×10⁰  \n2. Base Binaria (Base 2):  \n   • Usada por las computadoras. Solo usa 2 dígitos: 0 y 1.  \n   • Ejemplo: 1011 = 1×2³ + 0×2² + 1×2¹ + 1×2⁰ = 11 en decimal.  \n3. Base Octal (Base 8):  \n   • Usa 8 dígitos: del 0 al 7.  \n   • Ejemplo: 157₈ = 1×8² + 5×8¹ + 7×8⁰ = 111 en decimal.  \n4. Base Hexadecimal (Base 16):  \n   • Usa 16 símbolos: del 0 al 9 y las letras A a F (donde A=10, B=11, …, F=15).  \n   • Ejemplo: 1F₁₆ = 1×16¹ + 15×16⁰ = 31 en decimal.\n\nConversión entre bases:  \n• De Binario a Decimal: multiplica cada dígito binario por 2 elevado a su posición (de derecha a izquierda) y suma.  \n  – Ejemplo: 1101 → 1×2³ + 1×2² + 0×2¹ + 1×2⁰ = 13.  \n• De Decimal a Binario: divide el número entre 2 y guarda los residuos. El resultado se lee de abajo hacia arriba.  \n  – Ejemplo: 13 → 1101.  \n• De Decimal a Octal o Hexadecimal: mismo método que con binario, pero dividiendo entre 8 o 16 respectivamente.  \n• De Binario a Hexadecimal: agrupa los bits de 4 en 4 desde la derecha y reemplaza con el valor hexadecimal.  \n  – Ejemplo: 10101110 → AE₁₆.\n\nImportancia en informática:  \nLas computadoras trabajan internamente con base binaria. Las bases octal y hexadecimal se usan como forma más compacta de representar binarios en programación, redes, electrónica, etc.', '2025-05-24 17:28:00', '2025-05-24 17:28:00'),
(7, 'CISCO PACKET TRACER', '¿Qué es Cisco Packet Tracer?  \nEs un simulador de redes desarrollado por Cisco que permite a estudiantes y profesionales diseñar, configurar y probar redes sin necesidad de hardware físico.\n\n¿Por qué se usa Packet Tracer?  \n• Crear topologías de red (conexiones entre routers, switches, PCs, etc.)  \n• Simular tráfico de red para ver cómo se comportan los paquetes de datos  \n• Practicar comandos en línea de comandos (CLI) de routers y switches  \n• Aprender conceptos de redes como direccionamiento IP, protocolos, VLANs, etc.  \n• Prepararse para certificaciones como Cisco CCNA\n\nVentajas del simulador:  \n• Gratuito para estudiantes de Cisco Networking Academy  \n• Permite experimentar con configuraciones sin dañar equipos reales  \n• Compatible con sistemas Windows, Linux y macOS  \n• Incluye dispositivos virtuales con interfaces reales y funcionales  \n• Modo en tiempo real y modo de simulación para observar paso a paso el flujo de datos\n\nComponentes básicos del entorno de Packet Tracer:  \n• Área de trabajo: espacio donde se colocan los dispositivos  \n• Barra de dispositivos: incluye routers, switches, PCs, cables, etc.  \n• Ventana de configuración: permite cambiar nombres, direcciones IP, etc.  \n• Pestañas de simulación: para ver cómo viajan los paquetes  \n• CLI (Command Line Interface): para ejecutar comandos en routers y switches\n\nPrimeros pasos recomendados:  \n• Colocar dos PCs y conectarlas con un cable cruzado  \n• Asignar direcciones IP a cada PC  \n• Probar conectividad con el comando ping  \n• Explorar cómo añadir routers y switches para formar una red más compleja', '2025-05-24 17:28:00', '2025-05-24 17:28:00'),
(8, 'SUBNETING', '¿Qué es una dirección IP?  \nUna dirección IP (Internet Protocol) es un número único que identifica a un dispositivo dentro de una red. Funciona como la \"dirección postal\" del equipo para enviar y recibir datos.\n\nFormato de IPv4:  \nConsta de 4 bloques de números separados por puntos, cada uno de 0 a 255.  \nEjemplo: 192.168.1.1\n\nEstructura de una IP:  \n• Parte de red: identifica la red a la que pertenece el dispositivo.  \n• Parte de host: identifica al dispositivo dentro de esa red.\n\n¿Qué es una máscara de subred?  \nLa máscara de subred define cuántos bits de la dirección IP corresponden a la red y cuántos al host.  \nEjemplo: 255.255.255.0 indica que los primeros 24 bits son red y los últimos 8 son host.\n\nCIDR (Classless Inter-Domain Routing):  \nForma de expresar la máscara de subred con un “/” seguido del número de bits para red.  \nEjemplo: /24 equivale a 255.255.255.0\n\nSubnetting (subredes):  \nEs el proceso de dividir una red grande en subredes más pequeñas.\n\nVentajas:  \n• Mejora la organización y seguridad.  \n• Reduce el tráfico local.  \n• Permite asignar rangos IP más eficientes.\n\nCálculos comunes en subnetting:  \n• Número de subredes posibles  \n  – Fórmula: 2ⁿ donde n es el número de bits tomados del host para subred.  \n• Número de hosts por subred  \n  – Fórmula: 2ᵏ - 2 donde k es el número de bits restantes para host.  \n\nEjemplo práctico:  \nIP: 192.168.1.0/26  \n• 26 bits para red → 6 bits para host  \n• Hosts por subred: 2⁶ - 2 = 62  \n• Subredes posibles desde /24 a /26: 2⁽²⁶⁻²⁴⁾ = 4 subredes\n\nClases de direcciones IP (clásico):  \n• Clase A: 1.0.0.0 a 126.255.255.255 → redes grandes  \n• Clase B: 128.0.0.0 a 191.255.255.255 → redes medianas  \n• Clase C: 192.0.0.0 a 223.255.255.255 → redes pequeñas  \n• Clase D: 224.0.0.0 a 239.255.255.255 → multicast  \n• Clase E: 240.0.0.0 a 255.255.255.255 → reservado\n\nDirecciones especiales:  \n• 127.0.0.1 → localhost (autocomunicación)  \n• 0.0.0.0 → dirección no asignada  \n• 255.255.255.255 → broadcast a todos los dispositivos', '2025-05-24 17:28:00', '2025-05-24 17:28:00'),
(9, 'INICIO EN LA PROGRAMACIÓN', 'Lenguajes de programación web – Guía básica para principiantes  \nEl desarrollo web se divide en dos grandes áreas:  \n• Front-end: lo que el usuario ve e interactúa en el navegador.  \n• Back-end: lo que ocurre “detrás” del sitio: lógica, bases de datos, servidor.\n\n1. HTML (HyperText Markup Language)  \n• No es un lenguaje de programación, sino de marcado.  \n• Define la estructura y contenido de las páginas web.  \n• Usa etiquetas como <h1>, <p>, <img>, <a>, etc.  \n• Todos los sitios web lo usan como base.\n\n2. CSS (Cascading Style Sheets)  \n• Define la apariencia visual del HTML (colores, fuentes, distribución).  \n• Usa selectores y propiedades.  \n• Permite hacer sitios responsivos y visualmente atractivos.\n\n3. JavaScript (JS)  \n• Lenguaje de programación del lado del cliente.  \n• Permite añadir interactividad a los sitios web (formularios dinámicos, sliders, etc.).  \n• Funciona en todos los navegadores modernos.  \n• También puede usarse en el back-end con Node.js.\n\n4. PHP (Hypertext Preprocessor)  \n• Lenguaje del lado del servidor.  \n• Muy usado para generar contenido dinámico.  \n• Compatible con bases de datos (como MySQL).  \n• Usado por plataformas como WordPress, Joomla o Drupal.\n\n5. Python  \n• Lenguaje versátil, usado también en desarrollo web (principalmente con Django o Flask).  \n• Sintaxis limpia y fácil de aprender.  \n• Ideal para desarrollo rápido y proyectos con inteligencia artificial o análisis de datos.\n\n6. Java  \n• Usado para aplicaciones web complejas y de alto rendimiento.  \n• Muy seguro y robusto.  \n• Utiliza frameworks como Spring para web empresarial.\n\n7. Ruby  \n• Lenguaje simple y elegante.  \n• Ruby on Rails es su framework más conocido para desarrollo web.  \n• Permite crear aplicaciones de manera rápida con menos código.\n\n8. TypeScript  \n• Superset de JavaScript que añade tipado estático.  \n• Mejora la escalabilidad y mantenibilidad de aplicaciones grandes.  \n• Usado en conjunto con frameworks como Angular.\n\n9. SQL (Structured Query Language)  \n• Lenguaje para interactuar con bases de datos relacionales.  \n• Permite consultar, insertar, actualizar y eliminar datos.  \n• Es usado por prácticamente todos los lenguajes del lado del servidor.', '2025-05-24 17:28:00', '2025-05-24 17:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', NULL, '$2y$12$M.DHY4AAmhZSmEnlGpmSn.3PU6mLG5wJT1fRnQhZQi8jSSZ7fq1m6', NULL, '2025-05-24 17:28:00', '2025-05-24 18:22:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ejercicios`
--
ALTER TABLE `ejercicios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nosotros`
--
ALTER TABLE `nosotros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clases`
--
ALTER TABLE `clases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ejercicios`
--
ALTER TABLE `ejercicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nosotros`
--
ALTER TABLE `nosotros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temas`
--
ALTER TABLE `temas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
