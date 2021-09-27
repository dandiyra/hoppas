-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2021 pada 05.39
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce-hoppas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categori`
--

CREATE TABLE `categori` (
  `id_kategori` int(11) NOT NULL,
  `slug_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `updateAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `categori`
--

INSERT INTO `categori` (`id_kategori`, `slug_kategori`, `nama_kategori`, `gambar`, `urutan`, `updateAt`) VALUES
(1, 'Jacket', 'Jacket', 'item-041.jpg', 1, '2021-09-27 03:13:25'),
(2, 'Jam-Tangan', 'Jam Tangan', 'banner-034.jpg', 2, '2021-09-25 12:40:39'),
(3, 'Kaca-Mata', 'Kaca Mata', 'banner-051.jpg', 3, '2021-09-27 02:48:26'),
(4, 'Sepatu', 'Sepatu', 'banner-072.jpg', 4, '2021-09-25 12:45:36'),
(5, 'Tas', 'Tas', 'banner-10.jpg', 5, '2021-09-25 12:46:27'),
(7, 'Kemeja', 'Kemeja', 'banner-14.jpg', 6, '2021-09-27 02:48:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `configuration`
--

CREATE TABLE `configuration` (
  `id_configuration` int(255) NOT NULL,
  `namaweb` varchar(255) NOT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `metatext` text DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `updateAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `configuration`
--

INSERT INTO `configuration` (`id_configuration`, `namaweb`, `tagline`, `email`, `website`, `keywords`, `metatext`, `telephone`, `alamat`, `facebook`, `instagram`, `deskripsi`, `logo`, `icon`, `updateAt`) VALUES
(1, 'All Bout Steal', 'Catalog', 'allboutsteal@gmail.com', 'https://allboutsteal.com', 'ecommerce', 'OK', '0895336420201', 'Tangerang', '', 'https://instagram.com/allboutsteal', 'OK', 'logo-removebg-preview.png', 'logo-removebg-preview2.png', '2021-09-27 02:05:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `judul_gambar` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `updateAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_produk`, `judul_gambar`, `gambar`, `updateAt`) VALUES
(1, 7, '2324', '83.png', '2021-09-25 08:54:33'),
(2, 7, '323', '711.png', '2021-09-25 09:05:01'),
(3, 0, '323', '713.png', '2021-09-25 08:58:52'),
(4, 8, 'dandi ga bisa php', '32.png', '2021-09-25 09:13:51'),
(5, 8, 'dandi ga bisa bikin form', '84.png', '2021-09-25 09:15:00'),
(6, 6, 'Test', '821.png', '2021-09-25 10:04:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `namaweb` varchar(255) NOT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `metatext` text DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `updateAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis_news` varchar(20) NOT NULL,
  `judul_news` varchar(255) NOT NULL,
  `slug_news` varchar(255) NOT NULL,
  `keywords` text DEFAULT NULL,
  `status_news` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `createAt` datetime NOT NULL,
  `updateAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `slug_produk` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `keywords` text DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `gambar2` varchar(255) DEFAULT NULL,
  `berat` float DEFAULT NULL,
  `ukuran` varchar(255) DEFAULT NULL,
  `status_produk` varchar(20) NOT NULL,
  `createAt` datetime NOT NULL,
  `updateAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `uid`, `id_user`, `id_kategori`, `kode_produk`, `slug_produk`, `nama_produk`, `keterangan`, `keywords`, `harga`, `stock`, `gambar`, `gambar2`, `berat`, `ukuran`, `status_produk`, `createAt`, `updateAt`) VALUES
(2, '', 1, 3, 'T101', 'Tas-Cewek', 'Tas Cewek', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'tas cewek', 250000, 21, '61.png', NULL, 0, NULL, 'Active', '2021-09-25 08:20:57', '2021-09-25 06:20:57'),
(3, '', 1, 2, '123123', 'Jam-Tangan-Hitam', 'Jam Tangan Hitam', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'jamtangan', 25000, 20, '82.png', NULL, 0, NULL, 'Active', '2021-09-25 08:24:47', '2021-09-25 06:24:47'),
(4, '', 1, 5, '123123123', 'Hoodie', 'Hoodie', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'hoodie', 25000, 110, '31.png', NULL, 0, NULL, 'Active', '2021-09-25 08:22:23', '2021-09-25 06:22:23'),
(5, '', 1, 3, '12sdsd', 'Tas', 'Tas', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'tas', 25000, 10, '41.png', NULL, 0, NULL, 'Active', '2021-09-25 08:19:43', '2021-09-25 06:19:43'),
(6, '', 1, 2, '123123123123123', 'Jam-Tangan-Fosil', 'Jam Tangan Fosil', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'fosil', 25000, 10, '51.png', NULL, 0, NULL, 'Active', '2021-09-25 08:17:48', '2021-09-25 06:17:48'),
(7, '', 1, 5, 'wdaf23r2', 'Sepatu', 'Sepatu', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'sepatu', 25000, 21, '21.png', NULL, 0, NULL, 'Active', '2021-09-25 08:31:59', '2021-09-25 06:31:59'),
(8, '', 1, 1, 'wefwf', 'Jacket', 'Jacket', '<p>lorem ipsum</p>\r\n', 'okk', 641919, 234, '311.png', NULL, 0, NULL, 'Active', '2021-09-25 11:05:53', '2021-09-25 09:05:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `telephone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cookies` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `telephone`, `role_id`, `name`, `image`, `password`, `cookies`, `is_active`) VALUES
(1, 'admin.web@basic.com', '0895336420202', 0, 'admin', '1611661681710.jpg', '$2y$10$vMZTdBazADQsokNX32Mhre7DA0duplR/3lKEySDAQngfHgjxII6QK', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_access_menu`
--

CREATE TABLE `users_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users_access_menu`
--

INSERT INTO `users_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 0, 0),
(3, 1, 1),
(17, 0, 1),
(19, 0, 2),
(21, 1, 7),
(22, 0, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_menu`
--

CREATE TABLE `users_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users_menu`
--

INSERT INTO `users_menu` (`id`, `menu`) VALUES
(0, 'Admin'),
(1, 'Users'),
(2, 'Menu'),
(7, 'Staff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_role`
--

CREATE TABLE `users_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users_role`
--

INSERT INTO `users_role` (`id`, `role`) VALUES
(0, 'adminWeb'),
(1, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_sub_menu`
--

CREATE TABLE `users_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) CHARACTER SET utf8 NOT NULL,
  `url` varchar(128) CHARACTER SET utf8 NOT NULL,
  `icon` varchar(128) CHARACTER SET utf8 NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users_sub_menu`
--

INSERT INTO `users_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 0, 'Dashboard', 'Admin/', 'fas fa-tachometer-alt', 1),
(2, 1, 'My Profile', 'Users/', 'fas fa-user', 1),
(3, 1, 'Edit Profile', 'Users/edit', 'fas fa-edit', 1),
(4, 2, 'Menu Management', 'Menu/', 'fas fa-bars', 1),
(5, 2, 'Submenu Management', 'Menu/submenu', 'fas fa-folder', 1),
(6, 0, 'Register', 'Admin/register', 'fas fa-users', 0),
(7, 0, 'Role', 'Admin/role', 'fas fa-fw fa-ban', 0),
(8, 1, 'Change Password', 'Users/changepassword', 'fas fa-fw fa-key', 0),
(10, 0, 'Plans', 'Admin/plan', 'fas fa-fw fa-map-marker', 0),
(12, 1, 'Request Job', 'Users/requestjob', 'fas fa-fw fa-bolt', 0),
(13, 0, 'Division', 'Admin/division', 'fas fa-fw fa-cubes', 0),
(15, 0, 'Change Password Users', 'Admin/changepassusers', 'fas fa-fw fa-key', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categori`
--
ALTER TABLE `categori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`id_configuration`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `kode_produk` (`kode_produk`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users_access_menu`
--
ALTER TABLE `users_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users_menu`
--
ALTER TABLE `users_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users_role`
--
ALTER TABLE `users_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users_sub_menu`
--
ALTER TABLE `users_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categori`
--
ALTER TABLE `categori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `configuration`
--
ALTER TABLE `configuration`
  MODIFY `id_configuration` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users_access_menu`
--
ALTER TABLE `users_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `users_menu`
--
ALTER TABLE `users_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users_role`
--
ALTER TABLE `users_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users_sub_menu`
--
ALTER TABLE `users_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
