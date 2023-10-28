-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2023 a las 08:17:42
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_27_152918_create_notes_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `notes`
--

INSERT INTO `notes` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Dolor quia est quia labore deleniti reprehenderit iusto maiores.', 'Deleniti porro debitis et soluta quos dicta maxime. Ratione aut illum quae nesciunt corrupti perferendis. Nam assumenda sunt doloribus quaerat beatae. Sit nulla similique molestiae.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(2, '¡Repudiandae! MODIFICADO hic est aut.', 'MODIFICADO Aut sit quam voluptas ut aut aperiam. Dolore magni excepturi beatae omnis cum velit corporis. Consequatur iure facere beatae aliquid sed ipsum facere. Architecto aut autem aut doloremque quia.', '2023-10-28 08:57:16', '2023-10-28 09:06:44'),
(3, 'Magni porro sint maxime officia sit magni.', 'Quis saepe eum ullam. Harum exercitationem quia aut et animi nemo nam. Suscipit neque eligendi sed reiciendis facere veniam dolorem. Ut sequi nulla minus voluptatum et aut nihil corporis.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(4, 'Recusandae fuga dolor molestias.', 'Id et corporis doloremque temporibus aut ipsum. Non qui fugit enim. Quis accusamus odit labore adipisci recusandae. Id dolore omnis voluptatem labore dolores reiciendis.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(5, 'Qui vitae aut dignissimos.', 'Vitae vero id culpa et ea a. Recusandae nemo eveniet eius ut et. Repellat qui eos dicta consectetur qui nihil. Provident aut harum ad cupiditate at.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(6, 'Beatae debitis inventore non beatae.', 'Cum ipsum deleniti repellat. Cupiditate soluta provident ullam repellendus ipsum voluptatem occaecati. Facere mollitia ut qui laboriosam modi sit quaerat architecto. Nihil sit animi non maiores.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(7, 'Corrupti id magni ipsam quibusdam consequuntur.', 'Quis debitis odit qui dicta. Similique inventore nihil repellendus et rerum totam. Qui distinctio dolorem nemo recusandae. Accusantium adipisci illum commodi dolorem.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(8, 'Maiores nisi voluptatem eius consequuntur commodi minima dolor.', 'Accusamus dolor reiciendis doloribus enim deleniti architecto voluptate. Voluptas quae et neque corporis voluptas inventore. Ut veritatis nisi dolorum aut.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(9, 'Dolores illo eum qui facere fuga et accusamus.', 'Sit sint eos sapiente minus dignissimos officiis. Qui ea nostrum fuga expedita magni minima placeat. Nobis labore quidem ullam beatae tempore inventore. Iusto quam quos vel sed aut molestiae.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(10, 'Minima quia soluta culpa laudantium molestias et.', 'Quam et quibusdam officiis error rerum. Dolorem ea ipsum minima exercitationem. Consequatur porro animi qui quia.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(11, 'Cupiditate id esse quo quibusdam autem accusamus.', 'Eligendi numquam repudiandae quibusdam nihil est. Necessitatibus omnis minus ex praesentium ut. Nihil ducimus eum mollitia iusto soluta quis.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(12, 'Totam autem quaerat fugit omnis doloremque.', 'Est dolorum quo molestiae enim consequatur. Eius ut aut suscipit. Laudantium delectus natus fuga consequatur. Sed eum reprehenderit asperiores voluptas qui delectus sit itaque.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(13, 'Aut deleniti sequi earum eligendi voluptas aut dolorum.', 'Voluptatem porro ducimus occaecati suscipit eos fugiat eos voluptatem. Aperiam non non cum dolorum nulla expedita. Voluptatum veniam tenetur vel totam nam aut. Fugiat eligendi omnis non dolor beatae voluptas voluptatibus.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(14, 'Id minus aut accusantium ut.', 'Est quidem suscipit architecto assumenda dolores. Placeat cumque et voluptates provident porro dolorum ad suscipit. Omnis consequatur ea ipsa fugit quibusdam. Dignissimos et perferendis ut nemo.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(15, 'Et eaque beatae porro et dolorem quaerat deleniti repellat.', 'Veniam architecto debitis enim ut nobis dolores. Numquam dolorem perferendis voluptatem est. Ut aut dolor reiciendis ea eos dignissimos eveniet.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(16, 'Cumque ullam et voluptas voluptatem impedit.', 'Possimus minima aperiam beatae et recusandae porro sed. Reiciendis ex quisquam nihil minima quod in. Ut omnis velit dicta architecto.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(17, 'Omnis occaecati officia et et magni.', 'Illo blanditiis autem quos ea. Ut vel et enim. Et consectetur officiis non. Veniam aspernatur sint molestiae est eveniet at tempore.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(18, 'Voluptatem provident sit animi iusto qui sit dignissimos quidem.', 'Ut aliquid deserunt consequatur incidunt at non tempore. Recusandae pariatur ullam aut exercitationem repellat non quia eum. Itaque non fuga et eos numquam dolor vel harum.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(19, 'Sint qui laboriosam sequi velit ut culpa.', 'Sint incidunt voluptatem eum possimus placeat. Omnis aut ipsum voluptatem est rerum. Possimus minus assumenda tenetur illum.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(20, 'Sit ipsam explicabo ab et.', 'Odio tenetur mollitia cumque expedita officia sint. Dolorum autem dolores reiciendis ut qui. Itaque sint voluptatibus aut iure qui dolores.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(21, 'Quidem rerum et ducimus qui.', 'Et iusto qui accusamus commodi id. Sit voluptatem a est. Excepturi perspiciatis iure quia qui impedit. Ea animi quia id non rerum culpa qui.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(22, 'Magni veniam architecto odit magnam quia.', 'Aliquid dolorum consectetur vel quod. Accusantium totam animi ad quod non. Aspernatur laboriosam nisi dolorum non vel hic et. Quia itaque rem corporis facilis eos. Non aut necessitatibus vitae eos.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(23, 'Totam reiciendis quam consequatur occaecati quis repellat.', 'Quo dolorum deleniti nostrum ea vero velit eos explicabo. Sint sit consequatur voluptatem quis aut omnis porro. Nemo dolores iste ea repellat.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(25, 'Placeat magni aliquid consequatur hic.', 'Velit nihil vero cupiditate illo nobis sit eos. Error totam sed animi doloremque nihil. Sit doloremque eaque consequuntur et id consectetur ea sint. Est aut harum voluptatibus adipisci officia consectetur.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(26, 'Eaque sed omnis et modi est cum.', 'Asperiores qui et iure quos odio iste placeat. Molestiae modi assumenda similique praesentium nihil tenetur nulla.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(27, 'Ad molestiae deserunt culpa fuga.', 'Autem qui asperiores sint. Ut et doloribus eligendi animi eum. Ut itaque voluptatibus dolorem sunt enim a. Tenetur excepturi nihil soluta ad. Minima iusto impedit quam et officiis.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(28, 'Consectetur exercitationem voluptatibus quod et unde.', 'Assumenda distinctio error quia recusandae. Nihil quis nostrum in magni aliquam voluptatem commodi.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(29, 'Suscipit minus mollitia sequi voluptas ut et sunt.', 'Corporis non quaerat qui exercitationem. Ad cumque explicabo rerum omnis quod laborum quidem. Facere commodi et consequatur qui dolore id.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(30, 'Velit quasi eveniet delectus.', 'Ut sint repellat amet ut occaecati nobis et. Doloremque quasi reprehenderit quod. Dolores recusandae ad magnam ducimus.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(31, 'Velit voluptas ut quidem cumque eos ducimus.', 'Soluta nulla magnam tenetur voluptatem. Exercitationem distinctio aut sit molestiae et. Qui quos omnis voluptatem numquam et soluta.', '2023-10-28 08:57:16', '2023-10-28 08:57:16'),
(32, 'Numquam tenetur nobis aut accusantium.', 'Neque necessitatibus occaecati placeat ipsa. Ut quis ducimus non deserunt. Rerum itaque sed quas architecto. Quia id nobis eos quia.', '2023-10-28 08:57:17', '2023-10-28 08:57:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
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
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
