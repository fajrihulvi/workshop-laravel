-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 07 Sep 2023 pada 03.13
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshop_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `full_name`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Jedidiah Howe', '+1 (415) 923-1373', '374 Laurine Crescent Apt. 702\nWest Dortha, SC 32679-2350', '2023-09-05 02:12:54', '2023-09-05 02:12:54'),
(2, 'Rosanna Littel', '+13037580982', '71993 Jaunita Flat Suite 647\nLake Van, FL 79584-2523', '2023-09-05 02:12:54', '2023-09-05 02:12:54'),
(3, 'Mr. Quinten Gottlieb', '+1 (336) 959-8082', '8449 Marquardt Drive\nAnkundinghaven, IL 81196', '2023-09-05 02:12:54', '2023-09-05 02:12:54'),
(4, 'Kayla Keebler', '(747) 981-0063', '21996 Murazik Shore Suite 865\nSteviechester, FL 23383-9869', '2023-09-05 02:12:54', '2023-09-05 02:12:54'),
(5, 'Henderson Conn', '(270) 682-0301', '738 Madelynn Brooks Apt. 835\nNorth Norbertotown, OK 75711', '2023-09-05 02:12:54', '2023-09-05 02:12:54'),
(6, 'Maye Graham', '1-580-922-9847', '60651 Hermann Pass\nHauckchester, PA 10541', '2023-09-05 02:12:54', '2023-09-05 02:12:54'),
(7, 'Aurore Gerhold DDS', '1-682-426-4828', '175 Skiles Ferry\nSouth Adalbertoberg, IN 56561', '2023-09-05 02:12:54', '2023-09-05 02:12:54'),
(8, 'Jany Ryan', '817.798.3880', '100 Braun Dam Suite 651\nNew Broderickmouth, CO 36684-9505', '2023-09-05 02:12:54', '2023-09-05 02:12:54'),
(9, 'Willard Von', '828.271.4314', '8265 Jewell Rest Suite 196\nSanfordburgh, FL 90142', '2023-09-05 02:12:54', '2023-09-05 02:12:54'),
(10, 'Jerrell Moen', '321.844.8449', '3889 Ward Stream\nLetitiamouth, DC 38147-8916', '2023-09-05 02:12:54', '2023-09-05 02:12:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_31_030755_create_product_table', 1),
(6, '2023_09_05_020106_create_customer_table', 2),
(7, '2023_09_05_030626_create_order_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `date` date NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id`, `id_customer`, `id_product`, `date`, `qty`, `created_at`, `updated_at`) VALUES
(2, 2, 4, '2023-09-05', 2, '2023-09-05 03:49:15', '2023-09-05 03:49:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `name`, `stock`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Mann, Schulist and Olson', 1, 238924, 'Officia cupiditate possimus totam incidunt. Sed numquam et explicabo in soluta. Est et voluptatem quo qui non. Soluta et ut numquam esse fuga ea. Cumque dolor ratione quidem illum.', '2023-09-03 14:37:46', '2023-09-03 14:37:46'),
(2, 'Hackett Group', 0, 102402, 'Deleniti mollitia praesentium id est odit. Eaque non illo saepe unde consectetur. Quia explicabo occaecati cum.', '2023-09-03 14:37:46', '2023-09-03 14:37:46'),
(3, 'Hyatt Group', 7, 253381, 'Rerum corporis qui doloremque eligendi harum molestiae. Sunt rerum aut accusantium eveniet.', '2023-09-03 14:37:46', '2023-09-03 14:37:46'),
(4, 'Von-Anderson', 9, 830023, 'Nobis amet laudantium hic ad vero. Dignissimos facere ullam est libero repellendus aliquam doloribus. Repudiandae quaerat labore harum voluptatem tenetur. Aliquid tenetur rerum nostrum delectus qui.', '2023-09-03 14:37:46', '2023-09-03 14:37:46'),
(5, 'Cummings Inc', 5, 771863, 'Modi et odit minus. Eius ea quam repellendus aut consequuntur. Esse itaque eum beatae autem voluptate.', '2023-09-03 14:37:46', '2023-09-03 14:37:46'),
(6, 'Altenwerth-Predovic', 5, 156007, 'Aut consequatur dolorum nostrum dolor. Eum omnis velit voluptatem est nemo inventore. Quaerat aperiam consequatur perferendis accusamus. Sequi voluptates atque iusto autem.', '2023-09-03 14:37:46', '2023-09-03 14:37:46'),
(7, 'Dare, Moen and Zboncak', 4, 218876, 'Ut vel dolor voluptas. In laudantium voluptatum a quo. Dolorum numquam facilis ut cum ipsam. Voluptatibus quas quas commodi. Consectetur sunt omnis illo non.', '2023-09-03 14:37:46', '2023-09-03 14:37:46'),
(8, 'Reinger and Sons', 6, 759214, 'Voluptatem rerum minima eos cumque laborum voluptas. Et repellendus praesentium quae dignissimos. Sed mollitia sapiente hic ipsa. Illum velit neque quam quasi est.', '2023-09-03 14:37:46', '2023-09-03 14:37:46'),
(9, 'Schaden-Schowalter', 0, 446919, 'Quidem voluptatibus amet atque modi et mollitia velit. Sed incidunt laboriosam et autem. Nemo nobis omnis aut omnis et.', '2023-09-03 14:37:46', '2023-09-03 14:37:46'),
(10, 'Pollich-Lueilwitz', 5, 472713, 'Optio et non qui reprehenderit molestias at id. Soluta assumenda voluptatem necessitatibus cum perferendis blanditiis. Consequuntur consequuntur et ratione excepturi.', '2023-09-03 14:37:46', '2023-09-03 14:37:46'),
(11, 'Kohler-Beahan', 0, 453745, 'Occaecati temporibus autem sit et ipsum dignissimos id. Molestias neque ut corrupti error. Facere et aut consequuntur rerum reprehenderit voluptates. Aut aut reiciendis sit vel cupiditate.', '2023-09-03 14:37:46', '2023-09-03 14:37:46'),
(12, 'Will, O\'Kon and Farrell', 6, 634749, 'Consequatur fugit et neque ipsa labore in. Reiciendis sit molestiae nesciunt velit. Nostrum dignissimos ut expedita saepe impedit officia.', '2023-09-03 14:37:46', '2023-09-03 14:37:46'),
(13, 'Fritsch-Kris', 3, 678273, 'Et nisi et eum est et et. Et et accusamus maiores sed earum et. Recusandae aut labore recusandae beatae et alias harum minima. Pariatur deleniti impedit voluptatem dolores.', '2023-09-03 14:37:46', '2023-09-03 14:37:46'),
(14, 'Koepp, Ebert and Barrows', 4, 750302, 'Aliquam aut commodi maxime quod aut. Illo voluptas officiis aperiam est sint est. Officia molestias id quam corporis dolor atque consequuntur. Quibusdam velit excepturi omnis sit ut qui numquam.', '2023-09-03 14:37:46', '2023-09-03 14:37:46'),
(15, 'Grant-Baumbach', 8, 649049, 'Ut et voluptatum repellat aut saepe fugiat animi enim. Quo repellendus et accusantium reiciendis quas et reprehenderit. Ullam sunt dolore ea sit reiciendis hic est.', '2023-09-03 14:37:46', '2023-09-03 14:37:46'),
(16, 'Moore-Hill', 3, 501356, 'Rerum unde sed sit amet nisi. Ab recusandae corporis sit non. Tenetur rerum qui omnis. Perferendis dignissimos cupiditate temporibus occaecati quam aut esse omnis.', '2023-09-03 14:37:46', '2023-09-03 14:37:46'),
(17, 'Kshlerin, Parisian and Schoen', 7, 503953, 'In odit quo ut rerum. Facere voluptas sunt ut molestias ut. Et est necessitatibus qui aut omnis. Dolores est suscipit quod nulla.', '2023-09-03 14:37:46', '2023-09-03 14:37:46'),
(18, 'Corwin, Willms and Vandervort', 3, 312944, 'Vero alias voluptatem eaque non cum dolorum suscipit. Consequatur qui pariatur doloribus dolor repellendus corporis. Qui qui numquam expedita maiores. Id qui non et ducimus.', '2023-09-03 14:37:46', '2023-09-03 14:37:46'),
(19, 'Wintheiser-Brekke', 4, 263340, 'Est sunt quis itaque odio aut. Dolore praesentium vel ea recusandae quasi nostrum.', '2023-09-03 14:37:46', '2023-09-03 14:37:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'fajri', 'fajri@gmail.com', NULL, '$2y$10$F1IwoYkzNx8UcVGbLEwUx.BA/0HlmyFtMVMRaforkeb3LcqJVGQiS', NULL, '2023-09-05 06:45:34', '2023-09-05 06:45:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
