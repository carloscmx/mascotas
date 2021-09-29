-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 29, 2021 at 11:29 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petboys`
--

-- --------------------------------------------------------

--
-- Table structure for table `activacion`
--

CREATE TABLE `activacion` (
  `idregistro` int(250) NOT NULL,
  `correoregistro` text COLLATE utf8_spanish_ci NOT NULL,
  `token` text COLLATE utf8_spanish_ci NOT NULL,
  `activo` int(11) NOT NULL,
  `idtipousuario` int(50) NOT NULL,
  `fecharegistro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `activacion`
--

INSERT INTO `activacion` (`idregistro`, `correoregistro`, `token`, `activo`, `idtipousuario`, `fecharegistro`) VALUES
(52, 'cancalderonedwin@gmail.com', 'HwsXRNFfXnrsWLHQpYz3Z53X6qnOXDLoGYxoBdaFN5isMJVc4uc74fffae3dab35b35d42da0d58f65182', 0, 3, '2021-09-29 21:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `cita`
--

CREATE TABLE `cita` (
  `idcita` int(50) NOT NULL,
  `idmascota` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `idveterinario` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `especies`
--

CREATE TABLE `especies` (
  `idespecie` int(11) NOT NULL,
  `nombreespecie` varchar(250) NOT NULL,
  `activo` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `especies`
--

INSERT INTO `especies` (`idespecie`, `nombreespecie`, `activo`) VALUES
(1, 'Felino', 1),
(2, 'Canino', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mascota`
--

CREATE TABLE `mascota` (
  `idmascota` int(11) NOT NULL,
  `nombremascota` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `fechanan` date NOT NULL,
  `color` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `ubicacionimagen` text COLLATE utf8_spanish_ci NOT NULL,
  `iduser` int(11) NOT NULL,
  `fecharegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `activo` int(11) NOT NULL DEFAULT 1,
  `idespecie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `mascota`
--

INSERT INTO `mascota` (`idmascota`, `nombremascota`, `fechanan`, `color`, `genero`, `ubicacionimagen`, `iduser`, `fecharegistro`, `activo`, `idespecie`) VALUES
(27, 'quexo', '0000-00-00', 'sdasd', '2', 'resources/uploads/img/811182screenshot from 2021-09-23 12-50-02.png', 32, '2021-09-24 16:10:05', 0, 1),
(28, 'eqweq', '2021-09-06', 'sdasd', '2', 'resources/uploads/img/132125screenshot from 2021-09-23 12-50-02.png', 32, '2021-09-24 16:10:05', 1, 1),
(29, 'this', '2021-09-06', 'sdasd', '2', 'resources/uploads/img/986438screenshot from 2021-09-23 12-50-02.png', 32, '2021-09-24 16:10:13', 0, 1),
(30, 'Pinole', '2021-08-31', 'Verde', '2', 'resources/uploads/img/416466screenshot from 2021-09-23 12-50-02.png', 32, '2021-09-24 16:29:59', 0, 1),
(31, 'PINIL', '2021-09-09', 'CACA', '2', 'resources/uploads/img/116968screenshot from 2021-09-23 12-50-02.png', 32, '2021-09-24 16:42:25', 0, 1),
(32, 'fsdfsdf', '2021-09-23', 'sfsfs', '2', 'resources/uploads/img/178504screenshot from 2021-09-23 12-50-02.png', 32, '2021-09-24 17:43:04', 1, 1),
(33, 'qewqe', '2021-09-24', 'qweqweqw', '2', 'resources/uploads/img/315911screenshot from 2021-09-23 12-50-02.png', 32, '2021-09-24 20:25:29', 1, 1),
(34, 'Perri', '2019-09-12', 'Cafe', '1', 'resources/uploads/img/115741logo2.png', 36, '2021-09-27 23:38:07', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `raza`
--

CREATE TABLE `raza` (
  `idraza` int(11) NOT NULL,
  `raza` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipousuario`
--

CREATE TABLE `tipousuario` (
  `idtiposuario` int(11) NOT NULL,
  `nombretipousario` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tipousuario`
--

INSERT INTO `tipousuario` (`idtiposuario`, `nombretipousario`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'CLIENTE'),
(3, 'MEDICO');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` text COLLATE utf8_spanish_ci NOT NULL,
  `activo` int(11) NOT NULL COMMENT '0= REGISTRADO PERO NO ACTIVADO 1=REGISTRADO, 2 BLOQUEADO, 3 ELIMINADO',
  `tipousarioid` int(11) NOT NULL,
  `apellidopat` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidomat` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecharegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fechanan` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contrasena`, `activo`, `tipousarioid`, `apellidopat`, `apellidomat`, `fecharegistro`, `fechanan`) VALUES
(29, 'edwin', 'cancalderonedwin@gmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 1, 3, 'can', 'calderon', '2021-09-29 17:27:27', '2018-07-22 05:00:00'),
(32, 'Carlos', 'ywesta_v514p@gexik.com', 'd07aa21918f40bebfe39865f74e1d1c2bfac173b', 1, 2, 'Cauich', 'calderon', '2021-09-24 15:28:17', '1996-11-20 06:00:00'),
(33, 'Bryan', 'adriel68e_w432a@gexik.com', '8c2bf89a7f72acea6618796dcac15f15eb3323b3', 1, 2, 'Pool', 'Mercado', '2021-09-24 23:08:37', '1990-08-22 06:00:00'),
(34, 'Roberto', 'rvalencia@blazar.com.mx', 'fb64d3e0d52be621c20b05312f9c52f042b1adc4', 1, 2, 'Valencia', 'Cetina', '2021-09-24 23:11:42', '1984-09-07 06:00:00'),
(35, 'Manuel Andrés', 'meta58g_c803c@gexik.com', 'b5c7c2f3d67da4337bdbd90b55fa1c165ad6f04c', 1, 2, 'Raz', 'Barrientos', '2021-09-27 14:15:09', '1997-11-04 06:00:00'),
(36, 'Carlos', 'carloscmx@outlook.es', '3cc2fd4ac685d7d5615e9d1362f4caf372d9aab7', 1, 2, 'Cauich', 'Alvarez', '2021-09-27 18:03:49', '1997-07-20 05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `veterinario`
--

CREATE TABLE `veterinario` (
  `idveterinario` int(50) NOT NULL,
  `idusuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activacion`
--
ALTER TABLE `activacion`
  ADD PRIMARY KEY (`idregistro`),
  ADD KEY `idtipousuario` (`idtipousuario`);

--
-- Indexes for table `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`idcita`);

--
-- Indexes for table `especies`
--
ALTER TABLE `especies`
  ADD PRIMARY KEY (`idespecie`);

--
-- Indexes for table `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`idmascota`),
  ADD KEY `fk_userid` (`iduser`),
  ADD KEY `fk_idespecie_mascota` (`idespecie`);

--
-- Indexes for table `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`idraza`);

--
-- Indexes for table `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`idtiposuario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipousarioid` (`tipousarioid`);

--
-- Indexes for table `veterinario`
--
ALTER TABLE `veterinario`
  ADD PRIMARY KEY (`idveterinario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activacion`
--
ALTER TABLE `activacion`
  MODIFY `idregistro` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `cita`
--
ALTER TABLE `cita`
  MODIFY `idcita` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `especies`
--
ALTER TABLE `especies`
  MODIFY `idespecie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mascota`
--
ALTER TABLE `mascota`
  MODIFY `idmascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `raza`
--
ALTER TABLE `raza`
  MODIFY `idraza` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `idtiposuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `veterinario`
--
ALTER TABLE `veterinario`
  MODIFY `idveterinario` int(50) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `fk_idespecie_mascota` FOREIGN KEY (`idespecie`) REFERENCES `especies` (`idespecie`),
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`iduser`) REFERENCES `usuarios` (`id`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`tipousarioid`) REFERENCES `tipousuario` (`idtiposuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
