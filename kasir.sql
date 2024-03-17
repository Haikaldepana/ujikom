-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Mar 2024 pada 10.06
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailpenjualan`
--

CREATE TABLE `detailpenjualan` (
  `DetailID` int(11) NOT NULL,
  `PenjualanID` int(11) NOT NULL,
  `ProdukID` int(11) NOT NULL,
  `JumlahProduk` int(11) NOT NULL,
  `Subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detailpenjualan`
--

INSERT INTO `detailpenjualan` (`DetailID`, `PenjualanID`, `ProdukID`, `JumlahProduk`, `Subtotal`) VALUES
(2, 2, 10, 4, 16000.00),
(3, 3, 14, 2, 10000.00),
(4, 5, 9, 2, 20000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasirs`
--

CREATE TABLE `kasirs` (
  `id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE `migration` (
  `id` int(10) NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `PelangganID` int(11) NOT NULL,
  `NamaPelanggan` varchar(255) NOT NULL,
  `Alamat` text NOT NULL,
  `NomorTelpon` varchar(15) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`PelangganID`, `NamaPelanggan`, `Alamat`, `NomorTelpon`, `status`) VALUES
(3, 'haikal', 'imh', '123', ''),
(5, 'pam pam', 'madsim', '0867653245462', 'dihapus'),
(7, 'arya', 'karazan', '086765', 'dihapus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `PenjualanID` int(11) NOT NULL,
  `TanggalPenjualan` date NOT NULL,
  `TotalHarga` decimal(10,2) NOT NULL,
  `PelangganID` int(11) NOT NULL,
  `status` enum('selesai','pending') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`PenjualanID`, `TanggalPenjualan`, `TotalHarga`, `PelangganID`, `status`, `created_at`) VALUES
(1, '2024-02-16', 0.00, 3, 'selesai', '2024-02-16 08:21:28'),
(2, '2024-02-16', 16000.00, 5, 'selesai', '2024-02-16 08:23:17'),
(3, '2024-02-17', 10000.00, 7, 'selesai', '2024-02-17 00:22:55'),
(4, '2024-03-04', 0.00, 3, 'selesai', '2024-03-04 06:56:04'),
(5, '2024-03-17', 20000.00, 3, 'selesai', '2024-03-17 09:03:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_acces_tokens`
--

CREATE TABLE `personal_acces_tokens` (
  `id` bigint(20) NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `ProdukID` int(11) NOT NULL,
  `NamaProduk` varchar(255) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Stok` int(11) NOT NULL,
  `status` enum('dihapus','tersedia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`ProdukID`, `NamaProduk`, `Harga`, `Stok`, `status`) VALUES
(7, 'sate', 5000, 3, 'dihapus'),
(8, 'ayam', 333, 11, 'dihapus'),
(9, 'kambing', 10000, 9, 'tersedia'),
(10, 'ayam', 4000, 2, 'dihapus'),
(11, 'lakase', 10000, 12, 'dihapus'),
(12, 'ayam', 4000, 2, 'dihapus'),
(13, 'sapi', 8000, 20, 'dihapus'),
(14, 'burit gantung', 5000, 0, 'dihapus'),
(15, 'p', 1000, 2, 'dihapus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'tampan', 'ekal@gmail.com', NULL, '$2y$12$V04WQWoWZEJYborTav6taejbqRrgH8e/8r7KI6Rxn17yLSGqEtsQa', NULL, '2024-02-12 17:23:02', '2024-02-12 17:23:02'),
(9, 'dafa', 'dafa@gmail.com', NULL, '$2y$12$ndJq2Uu6oBgcOkWXGU3AVeifHCxvhDJDSdvcKITz1E7Bdbcm.csbe', NULL, '2024-02-12 17:36:31', '2024-02-12 17:36:31'),
(10, 'haikalganteng', 'haikalganteng@gmail.com', NULL, '$2y$12$yq/cXD/vOaUuY5tMDmvxIOFIbBs4YyKLmqsvgmn/sGOA3tQxhsRte', NULL, '2024-02-15 23:50:23', '2024-02-15 23:50:23'),
(11, 'pram', 'pram@gmail.com', NULL, '$2y$12$FRRUz74TMqrdwWmIOUEAl.7HoeH7xagMWXW7oSXpH7kZ7DkPxKqye', NULL, '2024-02-15 23:51:59', '2024-02-15 23:51:59'),
(12, 'a', 'a@gmail.com', NULL, '$2y$12$0TiawdKoFjJBYwmvs88Bj..Rb93vKOGPBncpM8r.C26KKLh3EZO/C', NULL, '2024-02-16 00:03:52', '2024-02-16 00:03:52'),
(13, 'p', 'p@gmail.com', NULL, '$2y$12$pnmef9guX9Q81Cmqoq7JJ.Q6R3xKRVkbQChXvAm0rQyBKdPZA0nFC', NULL, '2024-02-16 00:27:24', '2024-02-16 00:27:24'),
(14, 'arya', 'arya@gmail.com', NULL, '$2y$12$9.A5qWBe/EryoIPpxZkQEOGxIe8uCaWcqkshnqh9tDnnFQoU7LFSu', NULL, '2024-02-16 00:35:59', '2024-02-16 00:35:59'),
(15, 'agus amer', 'gus@gmail.com', NULL, '$2y$12$HggaBhU6X2.SCOzj3wca1e6TbtAMHpa8f6iU2PmScf6fvSLz//i8u', NULL, '2024-02-16 17:18:43', '2024-02-16 17:18:43'),
(17, 'suparna arak', 'suparna_arak@gmail.com', NULL, '$2y$12$YpdCYh2JaSWu5VzG2ntete.oJRryunP2AoRWXd145/almZtjnqNNq', NULL, '2024-02-17 00:25:59', '2024-02-17 00:25:59'),
(18, 'ekal', 'ekal@gmail.com', NULL, '$2y$12$0LbF9iZpP6gOdwL90WSzf.fyTZI6NwjbLxoVVTAq1tKAax6AeZ5rS', NULL, '2024-02-23 17:42:25', '2024-02-23 17:42:25'),
(19, 'ekal', 'ekal@gmail.com', NULL, '$2y$12$saavraWGU7aC23vr.RHN/ereoZw6ZTKsf6xfjwcjakGSZefhq.Vxe', NULL, '2024-02-23 17:43:22', '2024-02-23 17:43:22'),
(20, 'suprak', 'kajo@gmail.com', NULL, '$2y$12$ED.9jUgRCN.no3km0Wdn0ekDQhKpnn.WzTszmdHS.I396.C5ejSH6', NULL, '2024-02-23 17:54:09', '2024-02-23 17:54:09'),
(21, 'HAI', 'haii@gmail.com', NULL, '$2y$12$EWH44Xw6c6tcrPb1xV06vOugoGb9lPACS2kF6O4792aw10gpd4gNO', NULL, '2024-03-03 23:42:15', '2024-03-03 23:42:15'),
(22, 'depana', 'depana@gmail.com', NULL, '$2y$12$g6OelFkB6oKgAqgoEO/V3ujeeGGYxs.KgyRKpSsmDUK96r/miiIj6', NULL, '2024-03-16 23:51:22', '2024-03-16 23:51:22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  ADD PRIMARY KEY (`DetailID`),
  ADD KEY `PenjualanID` (`PenjualanID`),
  ADD KEY `ProdukID` (`ProdukID`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uuid` (`uuid`);

--
-- Indeks untuk tabel `kasirs`
--
ALTER TABLE `kasirs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`PelangganID`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`PenjualanID`),
  ADD KEY `PelangganID` (`PelangganID`),
  ADD KEY `PelangganID_2` (`PelangganID`);

--
-- Indeks untuk tabel `personal_acces_tokens`
--
ALTER TABLE `personal_acces_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tokenable_type` (`tokenable_type`),
  ADD KEY `tokenable_id` (`tokenable_id`),
  ADD KEY `token` (`token`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ProdukID`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  MODIFY `DetailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kasirs`
--
ALTER TABLE `kasirs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migration`
--
ALTER TABLE `migration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `PelangganID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `PenjualanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_acces_tokens`
--
ALTER TABLE `personal_acces_tokens`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `ProdukID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  ADD CONSTRAINT `detailpenjualan_ibfk_1` FOREIGN KEY (`ProdukID`) REFERENCES `produk` (`ProdukID`),
  ADD CONSTRAINT `detailpenjualan_ibfk_2` FOREIGN KEY (`PenjualanID`) REFERENCES `penjualan` (`penjualanID`);

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`PelangganID`) REFERENCES `pelanggan` (`PelangganID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
