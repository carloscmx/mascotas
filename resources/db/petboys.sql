-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 04:11 AM
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
  `fecharegistro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `activacion`
--

INSERT INTO `activacion` (`idregistro`, `correoregistro`, `token`, `activo`, `fecharegistro`) VALUES
(13, 'hajeso6653@u461.com', 'AKwi7B7xmHrEVBueJTmmtpZWHsvs86aJn1Uqb2J6vpyO7kjIa95b9c191dcd4311ad854f79f7026488', 0, '2021-09-20 21:11:57'),
(14, 'lukas01u_h652y@gexik.com', '5XP1IFXbCADfxqnQwPIkIJOIr1MIXETNis6w2cv9O9xtm6Npd1783d3348fd5ba875b8ff87a33d8fa60', 0, '2021-09-21 14:42:30'),
(15, 'jbwtnge284@popcornfarm7.com', '13w4LtO1NJgwLmd3EFXcnraDv8eKPJnnEtYuA6mhCyhzG9xvu4dd2431278b4b7f0ca9483948cdd7d25', 0, '2021-09-21 16:54:44'),
(16, 'alan52v_g715o@gexik.com', 'Jg2UK5R4yWejA5iWwU7na9yTMJkmrZ5TcMOrxFqjKlsqE4Gqyp93519e697dc3fddb7837a632f4a49f4a', 0, '2021-09-21 16:59:15'),
(17, 'mpricet_b951t@gexik.com', 'TMEghJ1fWZAkyP8g4maVziei1NMCzv7YLKCxO72cYGepvPj6e3953be5727ebddd21faf3a9526a3ed', 0, '2021-09-21 17:05:10'),
(18, 'merle49b_a209u@gexik.com', 'ZYo9rhm1ShBnAmhmrEWn0MHCcvfzsEjD4x6tI3VHMJoXStvBto2971cf7746673143b39b79fa41cdba9d', 1, '2021-09-21 17:58:34'),
(19, 'drogahnk_b545u@gexik.com', 'zNjVWyeS97xDKczwUOOx5LICrjaiJi3LO5WMhRAfT8Di5upz9Baa1f5ece110adb1478817039a5993bbb', 1, '2021-09-21 18:05:17'),
(31, 'akuhicf_u130g@gexik.com', 'tO6vYacgdMdqkOEwSUfYpHaz5Rfben6BTiLbvyHlmWIZlzlSWd4c1d64f0f95bd649921ff697765d49e', 1, '2021-09-23 18:37:05'),
(32, 'cancalderonedwin@gmail.com', 'Ez478fvHH1niWfhTkMbVBKdTqvy4beMpF8JG8uoFEcO35gdb64ab1b3ba47a33f1f0032f561253c3', 1, '2021-09-23 18:47:24'),
(33, 'joxesos230@tmednews.com', 'HqMLWy6v3x7AM6EwVd0Pzv8kWka3rLzKuOR3Hdm6wm2YniTM6711db9d6295aacd63684dfce12b0bf3', 1, '2021-09-23 20:46:04'),
(34, 'ywesta_v514p@gexik.com', 'DIIHVWjUomA3keC9aTdQBmTHZBUWEcqd4WQ1ePiDXLkKpmJ28a8d8dc6bc2a2e586ea701fa4064bfa', 1, '2021-09-23 23:47:21'),
(35, 'adriel68e_w432a@gexik.com', 'B7MWZTBk6GsRXFZdjLwX40QCNMIQDI4niTcoz2jd8gWS372mS3e66569beeef8055fd4127c5a3851edb', 1, '2021-09-24 23:07:54'),
(36, 'rvalencia@blazar.com.mx', 'myp1Q1nU3ACLxLolXm4dzbBTr85NzA0nVTVxyvun0coPXzD6526d933c51466be2b0b627c270633d2', 1, '2021-09-24 23:10:39'),
(37, 'meta58g_c803c@gexik.com', 'jFUZHJuS6k2nVVuevEbYR9aa253NHWjdFyfqKEuY8yjzwFLyehcaeb9cdd7df0f37f57268b41c71169ac', 1, '2021-09-27 14:11:17'),
(38, 'carloscmx@outlook.es', 'pBhpHIxqCHy2OedozRVXQWFIESRgVToUGm37TLcZurQKBa8r521de1bc6bcdf9483e4b18f361b56ae3', 1, '2021-09-27 18:02:35');

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
(34, 'Perri', '2019-09-12', 'Cafe', '1', 'resources/uploads/img/115741logo2.png', 36, '2021-09-27 23:38:07', 1, 2),
(35, 'eqeqwe', '2021-09-28', 'negro', '1', 'resources/uploads/img/390467461334.jpg', 29, '2021-09-29 00:23:20', 1, 1);

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
  `fechanan` timestamp NULL DEFAULT NULL,
  `login_reset` int(11) NOT NULL DEFAULT 0 COMMENT '0 = NO NESEITA RESTABLERCER',
  `login_token_reset` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contrasena`, `activo`, `tipousarioid`, `apellidopat`, `apellidomat`, `fecharegistro`, `fechanan`, `login_reset`, `login_token_reset`) VALUES
(29, 'edwin', 'cancalderonedwin@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 2, 'can', 'calderon', '2021-09-29 01:37:38', '2018-07-22 05:00:00', 0, ''),
(30, 'susan', 'akuhicf_u130g@gexik.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 1, 2, 'lara', 'gomez', '2021-09-23 18:56:47', '2018-07-04 05:00:00', 0, ''),
(31, '[removed]alert&#40;\"PENDEJO\"&#41;[removed]', 'joxesos230@tmednews.com', 'f954eacd8e91b0b2e08800b30745da79510d5977', 1, 2, '[removed]alert&#40;\"PENDEJO\"&#41;[removed]', '[removed]alert&#40;\"PENDEJO\"&#41;[removed]', '2021-09-23 20:51:57', '2008-02-15 06:00:00', 0, ''),
(32, 'Carlos', 'ywesta_v514p@gexik.com', 'd07aa21918f40bebfe39865f74e1d1c2bfac173b', 1, 2, 'Cauich', 'calderon', '2021-09-24 15:28:17', '1996-11-20 06:00:00', 0, ''),
(33, 'Bryan', 'adriel68e_w432a@gexik.com', '8c2bf89a7f72acea6618796dcac15f15eb3323b3', 1, 2, 'Pool', 'Mercado', '2021-09-24 23:08:37', '1990-08-22 06:00:00', 0, ''),
(34, 'Roberto', 'rvalencia@blazar.com.mx', 'fb64d3e0d52be621c20b05312f9c52f042b1adc4', 1, 2, 'Valencia', 'Cetina', '2021-09-24 23:11:42', '1984-09-07 06:00:00', 0, ''),
(35, 'Manuel Andrés', 'meta58g_c803c@gexik.com', 'b5c7c2f3d67da4337bdbd90b55fa1c165ad6f04c', 1, 2, 'Raz', 'Barrientos', '2021-09-27 14:15:09', '1997-11-04 06:00:00', 0, ''),
(36, 'Carlos', 'carloscmx@outlook.es', '3cc2fd4ac685d7d5615e9d1362f4caf372d9aab7', 1, 2, 'Cauich', 'Alvarez', '2021-09-27 18:03:49', '1997-07-20 05:00:00', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activacion`
--
ALTER TABLE `activacion`
  ADD PRIMARY KEY (`idregistro`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activacion`
--
ALTER TABLE `activacion`
  MODIFY `idregistro` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `especies`
--
ALTER TABLE `especies`
  MODIFY `idespecie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mascota`
--
ALTER TABLE `mascota`
  MODIFY `idmascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
