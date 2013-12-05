-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 05-Dez-2013 às 03:25
-- Versão do servidor: 5.5.32
-- versão do PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `househubtest`
--
CREATE DATABASE IF NOT EXISTS `househubtest` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `househubtest`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups_elements`
--

CREATE TABLE IF NOT EXISTS `groups_elements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `object_id` int(11) NOT NULL,
  `addition_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups_visuals`
--

CREATE TABLE IF NOT EXISTS `groups_visuals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `group_name` varchar(20) DEFAULT NULL,
  `group_image_id` int(11) NOT NULL DEFAULT '0',
  `set_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `iconpacks`
--

CREATE TABLE IF NOT EXISTS `iconpacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `folder` varchar(66) NOT NULL,
  `target` varchar(30) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `resource` varchar(35) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `objects`
--

CREATE TABLE IF NOT EXISTS `objects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `address` varchar(66) NOT NULL,
  `scheme_name` varchar(44) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `parent_index` int(11) NOT NULL DEFAULT '-1',
  `validated` tinyint(4) NOT NULL DEFAULT '0',
  `connected` tinyint(4) NOT NULL DEFAULT '1',
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=95 ;

--
-- Extraindo dados da tabela `objects`
--

INSERT INTO `objects` (`id`, `type`, `address`, `scheme_name`, `parent_id`, `parent_index`, `validated`, `connected`, `registration_date`) VALUES
(1, 'metalamp', '127.0.0.1', '', 0, -1, 1, 1, '2013-12-03 19:56:34'),
(2, 'lamp', '127.0.0.1/objects/0', 'basicLamp', 1, 0, 1, 1, '2013-12-03 19:56:35'),
(3, 'lamp', '127.0.0.1/objects/1', 'basicLamp', 1, 1, 1, 1, '2013-12-03 19:56:35'),
(4, 'lamp', '127.0.0.1/objects/2', 'basicLamp', 1, 2, 1, 1, '2013-12-03 19:56:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `objects_iconpacks`
--

CREATE TABLE IF NOT EXISTS `objects_iconpacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `object_id` int(11) NOT NULL,
  `iconpack_id` int(11) NOT NULL,
  `set_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `objects_intents`
--

CREATE TABLE IF NOT EXISTS `objects_intents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `address` varchar(44) NOT NULL,
  `scheme_name` varchar(66) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `parent_index` int(11) NOT NULL,
  `request_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Extraindo dados da tabela `objects_intents`
--

INSERT INTO `objects_intents` (`id`, `type`, `address`, `scheme_name`, `parent_id`, `parent_index`, `request_date`) VALUES
(34, 'metalamp', '127.0.0.1', '', 0, -1, '2013-12-04 04:12:21'),
(35, 'lamp', '127.0.0.1/objects/0', 'basicLamp', 34, 0, '2013-12-04 04:12:21'),
(36, 'lamp', '127.0.0.1/objects/1', 'basicLamp', 34, 1, '2013-12-04 04:12:21'),
(37, 'lamp', '127.0.0.1/objects/2', 'basicLamp', 34, 2, '2013-12-04 04:12:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `objects_names`
--

CREATE TABLE IF NOT EXISTS `objects_names` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `object_id` int(11) NOT NULL,
  `object_name` varchar(25) NOT NULL,
  `set_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `objects_names`
--

INSERT INTO `objects_names` (`id`, `user_id`, `object_id`, `object_name`, `set_date`) VALUES
(1, 0, 2, 'object', '2013-12-05 02:19:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `objects_services`
--

CREATE TABLE IF NOT EXISTS `objects_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `object_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=127 ;

--
-- Extraindo dados da tabela `objects_services`
--

INSERT INTO `objects_services` (`id`, `object_id`, `name`) VALUES
(1, 2, 'ligar'),
(2, 2, 'desligar'),
(3, 3, 'ligar'),
(4, 3, 'desligar'),
(5, 4, 'ligar'),
(6, 4, 'desligar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `objects_status`
--

CREATE TABLE IF NOT EXISTS `objects_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `object_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=124 ;

--
-- Extraindo dados da tabela `objects_status`
--

INSERT INTO `objects_status` (`id`, `object_id`, `name`, `value`) VALUES
(1, 2, 'ligada', 0),
(2, 3, 'ligada', 0),
(3, 4, 'ligada', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `system_logs`
--

CREATE TABLE IF NOT EXISTS `system_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `method` varchar(30) NOT NULL,
  `message` varchar(50) NOT NULL,
  `log_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=84 ;

--
-- Extraindo dados da tabela `system_logs`
--

INSERT INTO `system_logs` (`id`, `user_id`, `status`, `method`, `message`, `log_date`) VALUES
(1, -1, 0, 'register', '@empty', '2013-12-03 19:52:49'),
(2, -1, 0, 'cougar', '@empty', '2013-12-03 19:52:59'),
(3, -1, 0, 'login', '@login_null_username', '2013-12-03 19:53:06'),
(4, -1, 0, 'login', '@login_wrong', '2013-12-03 19:53:22'),
(5, 0, 1, 'login', '@success', '2013-12-03 19:53:28'),
(6, 0, 1, 'connect', '@success', '2013-12-03 19:54:46'),
(7, 0, 0, 'validate', '@bad_parameters', '2013-12-03 19:55:55'),
(8, 0, 0, 'validate', '@bad_parameters', '2013-12-03 19:56:06'),
(9, 0, 1, 'validate', '@success', '2013-12-03 19:56:35'),
(10, 0, 1, 'list_objects', '@success', '2013-12-03 20:14:11'),
(11, 0, 1, 'list_objects', '@success', '2013-12-03 20:23:48'),
(12, 0, 1, 'list_objects', '@success', '2013-12-03 20:24:22'),
(13, 0, 1, 'list_objects', '@success', '2013-12-03 20:24:31'),
(14, 0, 1, 'list_objects', '@success', '2013-12-03 20:24:54'),
(15, 0, 1, 'list_objects', '@success', '2013-12-03 20:25:21'),
(16, 0, 1, 'list_objects', '@success', '2013-12-03 20:25:30'),
(17, 0, 1, 'connect', '@success', '2013-12-04 04:12:21'),
(18, -1, 0, 'login', '@login_null_username', '2013-12-05 00:57:13'),
(19, -1, 0, 'verify_login', '@user_needs_login', '2013-12-05 00:57:13'),
(20, -1, 0, 'add_user', '@forbidden', '2013-12-05 00:57:13'),
(21, -1, 0, 'grant_view', '@user_needs_login', '2013-12-05 00:57:13'),
(22, -1, 0, 'connect', '@error', '2013-12-05 00:57:13'),
(23, -1, 0, 'call_service', '@user_needs_login', '2013-12-05 00:57:14'),
(24, -1, 0, 'gather_object', '@gather_object_error_1', '2013-12-05 00:57:14'),
(25, -1, 0, 'change_visual', '@bad_parameters', '2013-12-05 00:57:14'),
(26, -1, 0, 'validate', '@user_needs_login', '2013-12-05 00:57:14'),
(27, -1, 0, 'obj_update', '@error', '2013-12-05 00:57:14'),
(28, -1, 0, 'list_objects', '@user_needs_login', '2013-12-05 00:57:14'),
(29, -1, 0, 'gather_group', '@user_needs_login', '2013-12-05 00:57:14'),
(30, -1, 0, 'add_group', '@user_needs_login', '2013-12-05 00:57:14'),
(31, -1, 0, 'drop_group', '@user_needs_login', '2013-12-05 00:57:14'),
(32, -1, 0, 'update_group', '@user_needs_login', '2013-12-05 00:57:15'),
(33, -1, 0, 'list_groups', '@user_needs_login', '2013-12-05 00:57:15'),
(34, -1, 0, 'gather_user_groups', '@user_needs_login', '2013-12-05 00:57:15'),
(35, -1, 0, 'gather_home_groups', '@user_needs_login', '2013-12-05 00:57:15'),
(36, -1, 0, 'gather_intents', '@user_needs_login', '2013-12-05 00:57:15'),
(37, -1, 0, 'upload_image', '@user_needs_login', '2013-12-05 00:57:15'),
(38, -1, 0, 'drop_image', '@user_needs_login', '2013-12-05 00:57:15'),
(39, -1, 0, 'list_images', '@user_needs_login', '2013-12-05 00:57:15'),
(40, -1, 0, 'login', '@login_null_username', '2013-12-05 01:40:46'),
(41, -1, 0, 'verify_login', '@user_needs_login', '2013-12-05 01:40:46'),
(42, -1, 0, 'add_user', '@forbidden', '2013-12-05 01:40:47'),
(43, -1, 0, 'grant_view', '@user_needs_login', '2013-12-05 01:40:47'),
(44, -1, 0, 'connect', '@error', '2013-12-05 01:40:47'),
(45, -1, 0, 'call_service', '@user_needs_login', '2013-12-05 01:40:47'),
(46, -1, 0, 'gather_object', '@gather_object_error_1', '2013-12-05 01:40:47'),
(47, -1, 0, 'change_visual', '@bad_parameters', '2013-12-05 01:40:47'),
(48, -1, 0, 'validate', '@user_needs_login', '2013-12-05 01:40:47'),
(49, -1, 0, 'obj_update', '@error', '2013-12-05 01:40:47'),
(50, -1, 0, 'list_objects', '@user_needs_login', '2013-12-05 01:40:47'),
(51, -1, 0, 'gather_group', '@user_needs_login', '2013-12-05 01:40:47'),
(52, -1, 0, 'add_group', '@user_needs_login', '2013-12-05 01:40:47'),
(53, -1, 0, 'drop_group', '@user_needs_login', '2013-12-05 01:40:47'),
(54, -1, 0, 'update_group', '@user_needs_login', '2013-12-05 01:40:47'),
(55, -1, 0, 'list_groups', '@user_needs_login', '2013-12-05 01:40:47'),
(56, -1, 0, 'gather_user_groups', '@user_needs_login', '2013-12-05 01:40:48'),
(57, -1, 0, 'gather_home_groups', '@user_needs_login', '2013-12-05 01:40:48'),
(58, -1, 0, 'gather_intents', '@user_needs_login', '2013-12-05 01:40:48'),
(59, -1, 0, 'upload_image', '@user_needs_login', '2013-12-05 01:40:48'),
(60, -1, 0, 'drop_image', '@user_needs_login', '2013-12-05 01:40:48'),
(61, -1, 0, 'list_images', '@user_needs_login', '2013-12-05 01:40:48'),
(62, -1, 0, 'login', '@login_null_username', '2013-12-05 01:48:12'),
(63, -1, 0, 'verify_login', '@user_needs_login', '2013-12-05 01:48:13'),
(64, -1, 0, 'add_user', '@forbidden', '2013-12-05 01:48:13'),
(65, -1, 0, 'grant_view', '@user_needs_login', '2013-12-05 01:48:13'),
(66, -1, 0, 'connect', '@error', '2013-12-05 01:48:13'),
(67, -1, 0, 'call_service', '@user_needs_login', '2013-12-05 01:48:13'),
(68, -1, 0, 'gather_object', '@gather_object_error_1', '2013-12-05 01:48:13'),
(69, -1, 0, 'change_visual', '@bad_parameters', '2013-12-05 01:48:13'),
(70, -1, 0, 'validate', '@user_needs_login', '2013-12-05 01:48:13'),
(71, -1, 0, 'obj_update', '@error', '2013-12-05 01:48:13'),
(72, -1, 0, 'list_objects', '@user_needs_login', '2013-12-05 01:48:13'),
(73, -1, 0, 'gather_group', '@user_needs_login', '2013-12-05 01:48:13'),
(74, -1, 0, 'add_group', '@user_needs_login', '2013-12-05 01:48:13'),
(75, -1, 0, 'drop_group', '@user_needs_login', '2013-12-05 01:48:14'),
(76, -1, 0, 'update_group', '@user_needs_login', '2013-12-05 01:48:14'),
(77, -1, 0, 'list_groups', '@user_needs_login', '2013-12-05 01:48:14'),
(78, -1, 0, 'gather_user_groups', '@user_needs_login', '2013-12-05 01:48:14'),
(79, -1, 0, 'gather_home_groups', '@user_needs_login', '2013-12-05 01:48:14'),
(80, -1, 0, 'gather_intents', '@user_needs_login', '2013-12-05 01:48:14'),
(81, -1, 0, 'upload_image', '@user_needs_login', '2013-12-05 01:48:14'),
(82, -1, 0, 'drop_image', '@user_needs_login', '2013-12-05 01:48:14'),
(83, -1, 0, 'list_images', '@user_needs_login', '2013-12-05 01:48:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `nickname` varchar(25) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `username` varchar(22) NOT NULL,
  `password` blob NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `nickname`, `gender`, `username`, `password`, `registration_date`) VALUES
(0, 'Administrator', 'Administrator', 'M', 'adm', 0x37633461386430396361333736326166363165353935323039343364633236343934663839343162, '2013-12-03 19:51:02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_view_permissions`
--

CREATE TABLE IF NOT EXISTS `users_view_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `object_id` int(11) NOT NULL,
  `grant_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_visuals`
--

CREATE TABLE IF NOT EXISTS `users_visuals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) NOT NULL,
  `set_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;