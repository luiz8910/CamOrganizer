-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 22/02/2026 às 01:20
-- Versão do servidor: 5.7.23-23
-- Versão do PHP: 8.1.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `juliof78_xamps_dev`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `access_equip`
--

CREATE TABLE `access_equip` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equip_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `access_equip`
--

INSERT INTO `access_equip` (`id`, `username`, `password`, `group`, `equip_id`, `customer_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Usuario DVR', 'dvr123', 'DVR', 1, 1, '2025-06-08 17:39:47', '2025-06-08 17:39:47', NULL),
(2, 'User camera', 'camera123', 'Camera', 2, 1, '2025-06-08 17:43:36', '2025-06-08 17:43:36', NULL),
(3, 'User teste', 'camera1234', 'Admin', 2, 1, '2025-06-08 17:43:36', '2025-06-08 17:43:36', NULL),
(4, NULL, NULL, NULL, 3, 1, '2025-08-31 21:36:06', '2025-08-31 21:36:06', NULL),
(5, 'Admin', 'jsjsjjeijsnnd', 'Jsjbsbsbbs', 3, 1, '2025-08-31 21:36:06', '2025-08-31 21:36:06', NULL),
(6, 'admin', 'JF@tec200', 'admin', 4, 2, '2025-09-27 01:54:52', '2025-09-27 01:54:52', NULL),
(7, 'ronaldo', 'ronaldo@cagão', 'user', 4, 2, '2025-09-27 01:54:52', '2025-09-27 01:54:52', NULL),
(8, 'qwe', 'qwe', 'qwe', 4, 2, '2025-09-27 01:54:52', '2025-09-27 01:54:52', NULL),
(9, 'joao do mato', 'qweqwe', 'qweqweqe', 4, 2, '2025-09-27 01:54:52', '2025-09-27 01:54:52', NULL),
(10, 'admin', 'julio@**258', 'admin', 5, 2, '2025-09-27 01:58:06', '2025-09-27 01:58:06', NULL),
(11, 'teste', '651654616', 'user', 5, 2, '2025-09-27 01:59:42', '2025-09-27 01:59:42', NULL),
(12, 'Admin', 'juka@tatu', 'Admin', 6, 4, '2025-09-27 02:08:10', '2025-09-27 02:08:10', NULL),
(13, 'Admin', 'julio', 'Uwhbzbs', 7, 4, '2025-09-27 02:09:04', '2025-09-27 02:09:04', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `external_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cnpj` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `customers`
--

INSERT INTO `customers` (`id`, `external_id`, `company_name`, `phone`, `email`, `cnpj`, `zip_code`, `address`, `number`, `city`, `state`, `logo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12345', 'Xamps Tech', '(15) 99745-4531', 'test@test.com', '12.513.212/0001-14', '18113400', 'Rua Odete Gori Bicudo', '601', 'Votorantim', 'SP', 'https://jftec.s3.sa-east-1.amazonaws.com/68269dc6b8719.png', '2025-05-16 05:07:03', '2025-05-16 05:07:03', NULL),
(2, '2822', 'TAGUI BRASIL CEREAIS LTDA.', '(15) 32731-912', 'faturamento@rt166cervejaria.com.br', '23.499.753/0003-50', '18207-330', 'Rua Diácono Antônio Nunes Sobrinho', '2599', 'Itapetininga', 'SP', 'https://jftec.s3.sa-east-1.amazonaws.com/68d718177f2c2.webp', '2025-09-27 01:47:52', '2025-09-27 01:51:37', NULL),
(3, '282', 'TAGUI CERVEJARIA', '(15) 32731-912', 'faturamento@rt166cervejaria.com.br', '23.499.753/0003-50', '18207-330', 'Rua Diácono Antônio Nunes Sobrinho', '2599', 'Itapetininga', 'SP', 'https://jftec.s3.sa-east-1.amazonaws.com/68d7186e80383.webp', '2025-09-27 01:49:18', '2025-09-27 01:49:22', '2025-09-27 01:49:22'),
(4, '8373', 'Julios tec', '(15) 99100-7713', 'aaljuda@o.paicom.br', '92.837.748/0001-94', '18206635', 'Rua Darci Coelho de Oliveira', '361', 'Itapetininga', 'SP', 'https://jftec.s3.sa-east-1.amazonaws.com/68d71c6654180.jpg', '2025-09-27 02:06:16', '2025-09-27 02:06:16', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `devices`
--

CREATE TABLE `devices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `devices`
--

INSERT INTO `devices` (`id`, `name`, `created_at`, `updated_at`, `icon`) VALUES
(1, 'DVR', '2025-02-02 04:58:21', '2025-02-02 04:58:21', 'ki-router'),
(2, 'Camera', '2025-02-02 04:58:21', '2025-02-02 04:58:21', 'ki-technology-4'),
(3, 'Roteador', '2025-02-02 04:58:21', '2025-02-02 04:58:21', 'ki-wlan');

-- --------------------------------------------------------

--
-- Estrutura para tabela `equipments`
--

CREATE TABLE `equipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `device_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `port` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ddns` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hd_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storage_capacity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `installation_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `equipments`
--

INSERT INTO `equipments` (`id`, `device_id`, `customer_id`, `brand`, `model`, `serial`, `status`, `port`, `email`, `phone`, `ddns`, `access_ip`, `hd_brand`, `storage_capacity`, `installation_location`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Intelbras', 'VIP 5220D', 'IN4567XCV78901', 'active', '9090', 'test@fazendinha.com', '(11) 91234-5678', 'dvr01.myddns.com', '203.0.113.101', 'Hitachi', '1TB', 'Sala de Controle, Bloco B', 'Teste intelbras DVR', NULL, '2025-06-08 17:39:47', '2025-06-08 17:40:23'),
(2, 2, 1, 'Hikvision', 'DS-2CD2143G0-I', 'HKV8832PL0', 'active', NULL, 'xamps@tech.tk', '(11) 03322-4567', NULL, '198.51.100.102', NULL, NULL, 'Unidade Jaguariúna - Portaria Lateral', 'Agendada manutenção preventiva para o dia 15/06.', NULL, '2025-06-08 17:43:36', '2025-06-08 17:44:00'),
(3, 1, 1, 'Intelbras', 'Mhdx3450', 'Jsnsbhu44nbd', 'active', '37777', 'contato@jf.tec.br', '(15) 99100-7713', NULL, NULL, 'Seagate', '6tb', 'Rack 01', NULL, NULL, '2025-08-31 21:36:06', '2025-08-31 21:36:06'),
(4, 1, 2, 'Intelbras', 'mhdx 3202', '225998q4w94e', 'active', '37777', 'contato@jf.tec.br', '(15) 99100-7713', NULL, '192.168.10.36', 'WD', '6TB', 'Rack 01', 'dvr sem fonte original', NULL, '2025-09-27 01:54:52', '2025-09-27 01:54:52'),
(5, 2, 2, 'Intelbras', 'VIP 1230 B', '1235858qçdlhnq1', 'active', NULL, 'contato@jf.tec.br', '(15) 99100-7713', NULL, '192.168.0.12', NULL, NULL, 'porta club', 'camera faltando parafusos lateral', NULL, '2025-09-27 01:58:06', '2025-09-27 01:59:42'),
(6, 1, 4, 'Intelbras', '92873893', 'Iwunsbbbehh', 'active', '37777', 'contato@jf.tec.br', '(15) 99100-7713', NULL, '192.168.0.34', 'WD', '6tb', 'Rack01', 'Um dispositivo usado', NULL, '2025-09-27 02:08:10', '2025-09-27 02:08:10'),
(7, 2, 4, 'Jsjsjs', 'Jsnsbsb', 'Jahvwvvee', 'active', NULL, 'contato@jf.tec.br', '(15) 99100-7713', NULL, 'Iwjsbbd', NULL, NULL, 'Rack', NULL, NULL, '2025-09-27 02:09:04', '2025-09-27 02:09:04');

-- --------------------------------------------------------

--
-- Estrutura para tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_08_100000_create_telescope_entries_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_10_10_232555_create_customer_table', 1),
(7, '2025_01_12_232214_create_equipments_table', 1),
(8, '2025_01_16_182145_add_equip_fields_table', 1),
(9, '2025_01_16_224130_add_wifi_table', 1),
(10, '2025_01_16_224358_add_device_table', 1),
(11, '2025_01_26_203000_add_icon_field_devices_table', 1),
(12, '2025_01_29_034242_create_access_equip_table', 1),
(13, '2025_02_20_233951_add_deleted_at_access_equip_table', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `multiple_fields_equips`
--

CREATE TABLE `multiple_fields_equips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `equip_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `device_id` bigint(20) UNSIGNED NOT NULL,
  `mac` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mask` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gateway` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `multiple_fields_equips`
--

INSERT INTO `multiple_fields_equips` (`id`, `equip_id`, `customer_id`, `device_id`, `mac`, `ip`, `mask`, `gateway`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 1, '05:5E:7F:9G:1H:2J', '10.0.0.101', '255.255.255.0', '129.168.10.1', '2025-06-08 17:40:23', '2025-06-08 17:40:23'),
(4, 1, 1, 1, NULL, NULL, NULL, NULL, '2025-06-08 17:40:23', '2025-06-08 17:40:23'),
(7, 2, 1, 2, 'AA:BB:CC:DD:EE:FF', '10.0.0.12', '255.255.255.0', '10.0.0.1', '2025-06-08 17:44:00', '2025-06-08 17:44:00'),
(8, 2, 1, 2, NULL, NULL, NULL, NULL, '2025-06-08 17:44:00', '2025-06-08 17:44:00'),
(9, 3, 1, 1, NULL, NULL, NULL, NULL, '2025-08-31 21:36:06', '2025-08-31 21:36:06'),
(10, 3, 1, 1, 'Jgcvnoiygvcc', '192.168.902.34', '255.268.677.98', '192.168.902.34', '2025-08-31 21:36:06', '2025-08-31 21:36:06'),
(15, 5, 2, 2, '192.168.0.12', '192.168.0.25', '255.255.255.0', '192.168.0.10', '2025-09-27 01:59:42', '2025-09-27 01:59:42'),
(16, 5, 2, 2, '192.168.0.12', '192.168.0.25', '255.255.255.0', '192.168.0.10', '2025-09-27 01:59:42', '2025-09-27 01:59:42'),
(17, 4, 2, 1, '62026020651951', '192.168.10.25', '255.255.255.0', '192.168.10.1', '2025-09-27 01:59:52', '2025-09-27 01:59:52'),
(18, 4, 2, 1, NULL, NULL, NULL, NULL, '2025-09-27 01:59:52', '2025-09-27 01:59:52'),
(19, 6, 4, 1, NULL, NULL, NULL, NULL, '2025-09-27 02:08:10', '2025-09-27 02:08:10'),
(20, 6, 4, 1, '82737474', NULL, NULL, NULL, '2025-09-27 02:08:10', '2025-09-27 02:08:10'),
(21, 7, 4, 2, 'Jsjsjs', 'Jsbsbsb', 'Nanabs', NULL, '2025-09-27 02:09:04', '2025-09-27 02:09:04'),
(22, 7, 4, 2, 'Nanahs', 'Nansbs', 'Nanabs', NULL, '2025-09-27 02:09:04', '2025-09-27 02:09:04');

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `telescope_entries`
--

CREATE TABLE `telescope_entries` (
  `sequence` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `family_hash` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `should_display_on_index` tinyint(1) NOT NULL DEFAULT '1',
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `telescope_entries_tags`
--

CREATE TABLE `telescope_entries_tags` (
  `entry_uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `telescope_monitoring`
--

CREATE TABLE `telescope_monitoring` (
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `wifi`
--

CREATE TABLE `wifi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `equip_id` bigint(20) UNSIGNED NOT NULL,
  `ssid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `access_equip`
--
ALTER TABLE `access_equip`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `multiple_fields_equips`
--
ALTER TABLE `multiple_fields_equips`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices de tabela `telescope_entries`
--
ALTER TABLE `telescope_entries`
  ADD PRIMARY KEY (`sequence`),
  ADD UNIQUE KEY `telescope_entries_uuid_unique` (`uuid`),
  ADD KEY `telescope_entries_batch_id_index` (`batch_id`),
  ADD KEY `telescope_entries_family_hash_index` (`family_hash`),
  ADD KEY `telescope_entries_created_at_index` (`created_at`),
  ADD KEY `telescope_entries_type_should_display_on_index_index` (`type`,`should_display_on_index`);

--
-- Índices de tabela `telescope_entries_tags`
--
ALTER TABLE `telescope_entries_tags`
  ADD PRIMARY KEY (`entry_uuid`,`tag`),
  ADD KEY `telescope_entries_tags_tag_index` (`tag`);

--
-- Índices de tabela `telescope_monitoring`
--
ALTER TABLE `telescope_monitoring`
  ADD PRIMARY KEY (`tag`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices de tabela `wifi`
--
ALTER TABLE `wifi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `access_equip`
--
ALTER TABLE `access_equip`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `devices`
--
ALTER TABLE `devices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `multiple_fields_equips`
--
ALTER TABLE `multiple_fields_equips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `telescope_entries`
--
ALTER TABLE `telescope_entries`
  MODIFY `sequence` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `wifi`
--
ALTER TABLE `wifi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `telescope_entries_tags`
--
ALTER TABLE `telescope_entries_tags`
  ADD CONSTRAINT `telescope_entries_tags_entry_uuid_foreign` FOREIGN KEY (`entry_uuid`) REFERENCES `telescope_entries` (`uuid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
