-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 03:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `fname`, `lname`, `mname`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Sarina', 'Tremblay', 'Lemke', 'Sapiente dolores eum et dolor dolores laborum tempore. Architecto blanditiis illo dolorem illum. Praesentium nihil corrupti possimus et impedit. Totam laudantium omnis voluptas sit et in. Maiores impedit veritatis optio quos. Excepturi dolores numquam dolore reprehenderit.\"asdasdasd', '2022-08-24 12:31:21', '2022-08-24 17:13:17'),
(2, 'Cameron', 'Stamm', 'Kling', 'Molestiae deserunt quia sint cumque autem fugiat. Labore explicabo expedita eaque in. Et voluptatibus omnis ut consequatur consequatur. Quaerat minima magnam dolores iure maiores doloremque. In ad sapiente necessitatibus ut sit voluptatem commodi.', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(3, 'Jennie', 'Pollich', 'Smith', 'Ab omnis dolor et iure quidem. Fugiat et ipsum non. Voluptatum ut veritatis ipsa enim sit rem. Et tenetur voluptas quia ad expedita voluptatum aut. Debitis voluptatem iste et.', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(4, 'Fern', 'Koss', 'Harris', 'Dolorum qui libero voluptatem nihil minima esse voluptate. Accusantium minima ea itaque dignissimos omnis saepe et. Ut doloremque praesentium similique quis deleniti sint labore quos. Atque facilis aliquid similique aut qui maxime. Voluptate at dolores quis porro cum quis.', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(5, 'Allie', 'Kessler', 'Kassulke', 'Quia labore possimus blanditiis quidem dolor. Saepe id veniam dignissimos distinctio et quod magni molestiae. Asperiores et sit magnam alias sequi velit nostrum. Rerum vel aut ea amet asperiores dolorem. Consequuntur quod quae molestias et explicabo iste consequatur. Aut qui vel tenetur tenetur. Dolore aut recusandae cumque ullam et.', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(6, 'Christine', 'Shanahan', 'Dooley', 'Iste aut dignissimos voluptatem. Iure omnis officia ea quo ipsam provident dolorem. Aliquid libero enim aspernatur rerum. Velit laborum reiciendis eos doloremque ut. Quos voluptatem et harum quia nemo. Modi ut nihil unde debitis rem ratione consequatur earum.', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(7, 'Rhett', 'Kshlerin', 'Batz', 'Similique autem nostrum saepe. Dolorem amet dolorum id rerum corrupti neque. Voluptas nihil voluptatem ut quae voluptatem repellendus consequatur. Distinctio nihil voluptas illum ipsam. Enim pariatur ut quaerat sit necessitatibus. Tempora doloribus sed veritatis exercitationem aut quos beatae. Qui non velit reiciendis consequatur. Sit voluptatem illum odio officia dolores quo eum. Nisi quos tenetur maxime mollitia. Eaque quas a sint quidem quos.', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(8, 'Carrie', 'Morissette', 'Kautzer', 'Dolorem maxime veritatis praesentium. Consectetur vero magnam ut quia. Tempora modi at quae dolore et. Voluptates illo et dolorem nulla saepe velit. Sit aut modi est quia voluptate iure. Velit consequuntur reiciendis eos repellat id. Voluptatem voluptas vel laborum quis porro dolores.', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(9, 'Reilly', 'Greenfelder', 'Thiel', 'Enim sapiente neque vel quia dicta. Dolorem enim cupiditate iure delectus quasi aspernatur vel nulla. Doloribus voluptatem nihil et sint voluptatem minus. Numquam consequatur blanditiis aut eveniet et. Vel ut eaque repudiandae sunt animi. Maiores optio consequuntur maxime fugit dicta. Exercitationem distinctio hic quam sint. Sit repudiandae aut id voluptas exercitationem aut.', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(11, 'setsuna', 'seiei', 'F', 'setsunasetsunasetsunasetsunasetsunasetsunasetsunasetsunasetsunasetsunasetsuna', '2022-08-24 17:00:55', '2022-08-24 17:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_date_n_time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `author`, `description`, `publication_date_n_time`, `created_at`, `updated_at`) VALUES
(1, 'Necessitatibus nihil et dolorem rerum explicabo hic.asdasda', 'Sarina Lemke Tremblay', 'Sit corporis cumque nam accusamus sapiente. Porro aperiam rem tempore quo quasi nobis. Ipsum alias veniam commodi repudiandae consequatur neque. Ut harum sit aperiam sit reprehenderit. Velit repudiandae minima iure tenetur earum repudiandae fugiat. Harum sit labore voluptatem similique nam. Minima voluptas sed sunt quaerat iusto harum sit. Aut consequatur expedita rerum incidunt. Voluptate aspernatur iste rerum repellendus.', '2022-08-24 12:31:21', '2022-08-24 12:31:21', '2022-08-24 16:19:13'),
(2, 'Iste modi veniam ipsum sunt enim.', 'Salma Harvey', 'Quaerat explicabo voluptatum nemo velit consequatur. Rerum in amet nisi ut omnis. Molestiae temporibus omnis asperiores suscipit libero excepturi pariatur. Blanditiis et assumenda dicta corrupti. Laboriosam repellat culpa non enim. Similique magnam et saepe accusantium et. Delectus velit harum aut reiciendis enim.', '2022-08-24 12:31:21', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(3, 'Perferendis corrupti rerum vitae facere.', 'Denis Hegmann', 'Dolorem eveniet et rem aut quas. Eum perferendis dolores soluta natus repellat. Explicabo quidem eius omnis hic. Consequatur excepturi aliquam sed facere corporis neque. Reprehenderit necessitatibus quia ut.', '2022-08-24 12:31:21', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(4, 'Rerum eum esse doloremque quibusdam neque.', 'Jamarcus Hackett DVM', 'Iste natus omnis et sapiente ut est omnis ducimus. Quas error enim cupiditate incidunt. Accusamus asperiores adipisci aperiam ratione. Suscipit omnis at amet cupiditate. Labore et aut ipsam.', '2022-08-24 12:31:21', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(5, 'Magnam ea quia nobis eveniet.', 'Dr. Rafael Schultz', 'Iusto mollitia nobis delectus. Est non culpa est nemo autem. Ut similique numquam quis deleniti. Tempore et porro omnis ea. Sequi maxime voluptatibus repellat quo provident magnam. Error qui ut quis alias corporis qui occaecati est. Quaerat aspernatur incidunt voluptas est iste et voluptates consequatur. Rerum consequuntur et harum nisi sed natus. Et ab ea harum quia eum est. Quia aut a asperiores voluptatibus eos eaque.', '2022-08-24 12:31:21', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(6, 'Cum qui voluptatibus minus non enim impedit est beatae.', 'Dr. Kody Barrows', 'Provident commodi quia qui. Quas atque facilis cumque beatae dolorem. Repudiandae rerum reiciendis est facilis. Sint dolor animi cum laboriosam. Tenetur fuga et corporis laboriosam.', '2022-08-24 12:31:21', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(7, 'Expedita occaecati ducimus tempora et voluptatibus maiores deleniti.', 'Oda Denesik', 'In voluptates expedita aspernatur non a. Fuga omnis aut nihil sequi quia maxime adipisci. Eum quae neque voluptas sunt nemo consectetur laborum et. Facere assumenda dolorem molestiae quia qui. Facilis eius aliquid incidunt. Possimus quisquam non similique unde. Maxime voluptatum itaque eos. Qui veritatis ab enim facere minus quia deserunt.', '2022-08-24 12:31:21', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(8, 'Sint in ut omnis ut qui.', 'Connor Braun', 'Accusantium reprehenderit voluptas repudiandae sapiente. Est maxime rerum fugiat id aut sint numquam. Et sint repellendus iusto numquam aspernatur. Quo pariatur nesciunt perferendis laudantium distinctio nesciunt nihil. Quia reiciendis eos excepturi aut est rerum eos. Ipsam omnis in saepe iste esse ab.', '2022-08-24 12:31:21', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(9, 'Consequatur perferendis ea necessitatibus id.', 'Madonna Crooks IV', 'Eveniet qui aut ducimus officia eum vero. Aperiam sed odio qui voluptatibus. Architecto ut occaecati quod odio optio temporibus enim. Voluptas nam aut consequatur ut. Autem pariatur esse quia dolores voluptas porro.', '2022-08-24 12:31:21', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(10, 'Sunt officiis et provident placeat.', 'Marquis Reynolds', 'Consequatur molestiae ab explicabo iure unde iste consectetur. Officiis recusandae sunt est eum sit doloremque rerum corporis. Fugit accusamus et aut reiciendis rerum numquam delectus. Quas est aut quidem. Molestiae et omnis eaque eius distinctio aut odio enim. Libero voluptas error laudantium inventore laudantium et natus possimus. Quo qui modi eum. Ducimus blanditiis accusamus rerum quae esse ut. Repellendus id sed qui ea dolores. Debitis dolorem id vero nihil impedit sit hic.', '2022-08-24 12:31:21', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(11, 'gundam', 'Sarina Lemke Tremblay', 'gundam', '2022-08-24 23:04:00', '2022-08-24 15:04:27', '2022-08-24 15:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2022_08_24_092610_create_book_table', 1),
(12, '2022_08_24_092624_create_author_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Chesley Hettinger DVM', 'schulist.eduardo@example.org', 'thompson.laurie', '2022-08-24 12:31:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LsuTOTKCyz', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(2, 'Dr. Melyna Howell', 'dorris00@example.org', 'nader.mateo', '2022-08-24 12:31:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lI7sLefPLc', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(3, 'Miss Katheryn Schuster', 'leila02@example.net', 'schaden.janae', '2022-08-24 12:31:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CVcZB0iynt', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(4, 'Cornell Hickle', 'uhodkiewicz@example.org', 'buddy73', '2022-08-24 12:31:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eDSgL1lG8M', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(5, 'Jeffery Marks', 'baumbach.trenton@example.net', 'pmann', '2022-08-24 12:31:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zcB8crn3yW', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(6, 'Mr. Emiliano Smitham V', 'green.krystina@example.net', 'francesco16', '2022-08-24 12:31:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'sAgAg87lbA', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(7, 'Megane Mraz IV', 'conroy.elnora@example.com', 'ocremin', '2022-08-24 12:31:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 're8u2Nlzy6', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(8, 'Mr. Edgar Roob Jr.', 'gbahringer@example.com', 'volkman.neha', '2022-08-24 12:31:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CPQMLal2o3', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(9, 'Clementine Kemmer', 'kurt58@example.net', 'lebsack.astrid', '2022-08-24 12:31:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dyQDcFZHCC', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(10, 'Mortimer Stanton', 'bernhard.israel@example.org', 'ismitham', '2022-08-24 12:31:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nDQUfhMX3O', '2022-08-24 12:31:21', '2022-08-24 12:31:21'),
(11, 'book_keeper', 'book@keeper.com', 'book_keepers', NULL, '$2y$10$.wq73ECgZG/hVY3Xe2snreZMUxo6dQ1Beekjg62mJb3kSpGoPp.Ne', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
