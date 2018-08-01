-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2018 a las 00:36:50
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `taskboard`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `department`
--

CREATE TABLE `department` (
  `id_department` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `department`
--

INSERT INTO `department` (`id_department`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Administration of App', '2018-07-30 14:43:00', '0000-00-00 00:00:00'),
(2, 'Operaciones', '2018-08-01 11:50:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id_employee` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `tbl_employees_id_department` int(11) NOT NULL,
  `dni` text NOT NULL,
  `status` int(11) NOT NULL,
  `gender` text NOT NULL,
  `birth_date` date NOT NULL,
  `insurance_number` text NOT NULL,
  `attached` text NOT NULL,
  `tbl_employees_id_company` int(11) NOT NULL,
  `job` text NOT NULL,
  `file_number` text NOT NULL,
  `picture` text NOT NULL,
  `hiring_at` datetime NOT NULL,
  `civil_status` text NOT NULL,
  `nationality` text NOT NULL,
  `place_birth` text NOT NULL,
  `place_create_dni` text NOT NULL,
  `height_cms` int(11) NOT NULL,
  `blood_type` text NOT NULL,
  `address` text NOT NULL,
  `state` text NOT NULL,
  `cellphone` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `emergency_contact_name` text NOT NULL,
  `emergency_contact_phone` text NOT NULL,
  `emergency_contact_relationship` text NOT NULL,
  `father_firstname` text NOT NULL,
  `father_lastname` text NOT NULL,
  `father_phone` text NOT NULL,
  `father_attached` text NOT NULL,
  `mother_firstname` text NOT NULL,
  `mother_lastname` text NOT NULL,
  `mother_phone` text NOT NULL,
  `mother_attached` text NOT NULL,
  `couple_firstname` text NOT NULL,
  `couple_lastname` text NOT NULL,
  `couple_phone` text NOT NULL,
  `couple_attached` text NOT NULL,
  `scholarship` text NOT NULL,
  `last_place_of_studies` text NOT NULL,
  `profession` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id_employee`, `firstname`, `lastname`, `tbl_employees_id_department`, `dni`, `status`, `gender`, `birth_date`, `insurance_number`, `attached`, `tbl_employees_id_company`, `job`, `file_number`, `picture`, `hiring_at`, `civil_status`, `nationality`, `place_birth`, `place_create_dni`, `height_cms`, `blood_type`, `address`, `state`, `cellphone`, `phone`, `email`, `emergency_contact_name`, `emergency_contact_phone`, `emergency_contact_relationship`, `father_firstname`, `father_lastname`, `father_phone`, `father_attached`, `mother_firstname`, `mother_lastname`, `mother_phone`, `mother_attached`, `couple_firstname`, `couple_lastname`, `couple_phone`, `couple_attached`, `scholarship`, `last_place_of_studies`, `profession`, `created_at`, `updated_at`) VALUES
(1, 'Manuel', 'Garcia Rodriguez', 2, '1968405381604', 1, 'M', '1980-08-15', '000213', '', 0, 'Agente de seguridad', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2018-08-01 17:56:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `user` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `picture` text NOT NULL,
  `rol` int(11) NOT NULL,
  `attempt` int(11) NOT NULL,
  `security_question` text NOT NULL,
  `security_answer` text NOT NULL,
  `tbl_users_id_department` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `firstname`, `lastname`, `user`, `password`, `email`, `picture`, `rol`, `attempt`, `security_question`, `security_answer`, `tbl_users_id_department`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin', 'Mvcpoophp7', 'arielsalvadormejia@gmail.com', '', 0, 0, 'Server', 'Ubuntu', 1, '2018-07-30 13:00:00', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id_department`);

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id_employee`),
  ADD KEY `employees_id_department` (`tbl_employees_id_department`),
  ADD KEY `tbl_employees_id_company` (`tbl_employees_id_company`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `users_id_department` (`tbl_users_id_department`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `department`
--
ALTER TABLE `department`
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `employees`
--
ALTER TABLE `employees`
  MODIFY `id_employee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`tbl_employees_id_department`) REFERENCES `department` (`id_department`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`tbl_users_id_department`) REFERENCES `department` (`id_department`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
