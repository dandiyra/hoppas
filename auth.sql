-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Agu 2021 pada 05.11
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
-- Database: `auth`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `division`
--

CREATE TABLE `division` (
  `id` int(11) NOT NULL,
  `division` varchar(255) CHARACTER SET utf8 NOT NULL,
  `plan` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `division`
--

INSERT INTO `division` (`id`, `division`, `plan`) VALUES
(1, 'IT', 'Bojong'),
(2, 'Tekhnisi', 'Jakarta'),
(3, 'Keuangan', 'Jakarta'),
(4, 'IT', 'Jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `plans` varchar(128) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `plans`
--

INSERT INTO `plans` (`id`, `plans`) VALUES
(1, 'Bojong'),
(2, 'Jakarta'),
(3, 'Tangerang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `requestjob`
--

CREATE TABLE `requestjob` (
  `id` int(11) NOT NULL,
  `nameRequester` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `requestType` varchar(128) NOT NULL,
  `status` int(11) NOT NULL,
  `createAt` date NOT NULL,
  `reqTo` varchar(128) NOT NULL,
  `location` varchar(255) NOT NULL,
  `device` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `requestjob`
--

INSERT INTO `requestjob` (`id`, `nameRequester`, `division`, `problem`, `requestType`, `status`, `createAt`, `reqTo`, `location`, `device`, `plan`) VALUES
(4, 'Ira Yunita', 'IT', 'Jaringan', 'Contoh2', 0, '0000-00-00', 'Divisi IT', 'Tangerang', '', 'Jakarta'),
(5, 'Dandy Ganteng', '', 'weferf', 'Contoh2', 0, '0000-00-00', 'Divisi IT', 'Tangerang', '', 'Bojong'),
(12, 'Ira Yunita', 'IT', 'A problem is a situation preventing something from being achieved. The word comes from a Greek word meaning an \"obstacle\" (something that is in your way). Someone who has a problem must find a way of solving it. The means of solving a problem is called a', 'Contoh3', 1, '2021-08-02', 'Divisi IT', 'Tangerang', '', 'Jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `requesttype`
--

CREATE TABLE `requesttype` (
  `id` int(11) NOT NULL,
  `requestType` varchar(255) NOT NULL,
  `plan` varchar(128) NOT NULL,
  `division` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `requesttype`
--

INSERT INTO `requesttype` (`id`, `requestType`, `plan`, `division`) VALUES
(6, 'Contoh3', 'Jakarta', 'IT'),
(7, 'Contoh4', 'Jakarta', 'IT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subdivision`
--

CREATE TABLE `subdivision` (
  `id` int(11) NOT NULL,
  `subDivision` varchar(255) NOT NULL,
  `plan` varchar(128) NOT NULL,
  `idDivision` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subdivision`
--

INSERT INTO `subdivision` (`id`, `subDivision`, `plan`, `idDivision`) VALUES
(1, 'Back-End', 'Bojong', 1),
(2, 'Front-End', 'Jakarta', 1),
(3, 'Maintenance', '', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `telephone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `division` varchar(50) CHARACTER SET utf8 NOT NULL,
  `role_id` int(11) NOT NULL,
  `subDivision` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cookies` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `plan` varchar(255) CHARACTER SET utf8 NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `telephone`, `division`, `role_id`, `subDivision`, `name`, `image`, `password`, `cookies`, `plan`, `is_active`) VALUES
(1, 'admin.web@spectrumcn.com', '0895336420202', 'IT', 0, 'Back-end', 'Dandy Yudistira', '1611661681710.jpg', '$2y$10$vMZTdBazADQsokNX32Mhre7DA0duplR/3lKEySDAQngfHgjxII6QK', NULL, 'Tangerang', 1),
(5, 'irayunita79@gmail.com', '0895336420201', 'IT', 1, 'Back-End', 'Ira Yunita', '', '$2y$10$crSIlMSE2JOEHiMN5L3i6uqxKQIRcYP2RTthH3DwC5fcXj4IRY3CW', NULL, 'Jakarta', 1);

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
(1, 'staff'),
(2, 'kabag'),
(3, 'direktur');

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
-- Indeks untuk tabel `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `requestjob`
--
ALTER TABLE `requestjob`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `requesttype`
--
ALTER TABLE `requesttype`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subdivision`
--
ALTER TABLE `subdivision`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subdivision_ibfk_1` (`idDivision`);

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
-- AUTO_INCREMENT untuk tabel `division`
--
ALTER TABLE `division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `requestjob`
--
ALTER TABLE `requestjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `requesttype`
--
ALTER TABLE `requesttype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `subdivision`
--
ALTER TABLE `subdivision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `subdivision`
--
ALTER TABLE `subdivision`
  ADD CONSTRAINT `subdivision_ibfk_1` FOREIGN KEY (`idDivision`) REFERENCES `division` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
