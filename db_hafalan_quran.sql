-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 21 Jul 2025 pada 12.15
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hafalan_quran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `id_user`) VALUES
(7, 29);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hafalan`
--

CREATE TABLE `hafalan` (
  `id_hafalan` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `jumlah_ayat` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_guru` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hafalan`
--

INSERT INTO `hafalan` (`id_hafalan`, `id_santri`, `jumlah_ayat`, `tanggal`, `id_guru`, `keterangan`) VALUES
(5, 31, 92, '2025-07-17', 7, 'Voluptatem Et voluptas accusantium est dolor debitis cumque quis neque quas ea quam magni incidunt do aut cupidatat'),
(6, 31, 20, '2025-07-10', 7, ''),
(7, 32, 1, '2025-07-16', 7, 'Lancar'),
(8, 31, 1, '2025-07-21', 7, 'lancar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orang_tua`
--

CREATE TABLE `orang_tua` (
  `id_orang_tua` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `orang_tua`
--

INSERT INTO `orang_tua` (`id_orang_tua`, `id_user`) VALUES
(15, 33),
(16, 36);

-- --------------------------------------------------------

--
-- Struktur dari tabel `progres`
--

CREATE TABLE `progres` (
  `id_progres` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `bulan` tinyint(4) NOT NULL,
  `tahun` year(4) NOT NULL,
  `total_ayat` int(11) NOT NULL,
  `persentase_pencapaian` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `santri`
--

CREATE TABLE `santri` (
  `id_santri` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_orang_tua` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `santri`
--

INSERT INTO `santri` (`id_santri`, `id_user`, `id_orang_tua`) VALUES
(31, 34, 15),
(32, 35, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `target`
--

CREATE TABLE `target` (
  `id_target` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `target_bulanan` int(11) NOT NULL,
  `bulan` tinyint(4) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `target`
--

INSERT INTO `target` (`id_target`, `id_santri`, `target_bulanan`, `bulan`, `tahun`) VALUES
(2, 31, 12, 7, '2025'),
(3, 32, 12, 7, '2025');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` enum('guru','santri','orang tua','admin') NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `login_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `role`, `nama`, `alamat`, `kontak`, `login_at`) VALUES
(3, 'admin321', '$2y$10$12JYlOCj6pf.WYW2.bY/0uS1x9PkMmY8k/oQvMM3SN.2S9lBMLzJy', 'admin321@gmail.com', 'admin', 'Admin', 'Maros', '08123456789', '2025-07-05 04:44:41'),
(29, 'test', '$2y$10$W.94kGauCyX6WlmOksJrvuKyRtNG9q.mSUfs0diiexn.nqfiiJ7hy', 'jalukagaze@mailinator.com', 'guru', 'test', 'Facilis exercitation', 'Porro sit et alias e', '2025-07-21 11:50:22'),
(33, 'sahum', '$2y$10$/TLOx1PYjK39wRPge4c4UOF4CX9EiWBlF2ocRh.mVmK2X.IzD6Sma', 'nabu@mailinator.com', 'orang tua', 'sahum ortu', 'Ut ut qui sunt minim', 'Quibusdam laboris fu', '2025-07-21 04:34:03'),
(34, 'santri1', '$2y$10$756doMewMmipgcig/fyr4.qN876skTEauMKCrWNq5U/eNpme0aGLy', 'santri1@email.com', 'santri', 'santri1', 'a', 'a', '2025-07-17 00:29:42'),
(35, 'santri2', '$2y$10$7f.FEQG5TXopeFQggL480O1onX5NKYGxv2Kb.yRjY255i6HA4kcmW', 'kakuquka@mailinator.com', 'santri', 'Santri2 ', 'Facilis quas animi ', 'Totam vel Nam in vol', '2025-07-17 01:56:59'),
(36, 'lexepoz', '$2y$10$o/ocAqns6GGSpIsnpVQy8evPfgLa80XwTCqqqZx6PZYOQSBRqV3kS', 'bezenopyle@mailinator.com', 'orang tua', 'Quidem vero ex disti', 'Irure dolore placeat', 'Reprehenderit est co', '2025-07-21 04:34:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `hafalan`
--
ALTER TABLE `hafalan`
  ADD PRIMARY KEY (`id_hafalan`);

--
-- Indeks untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`id_orang_tua`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `progres`
--
ALTER TABLE `progres`
  ADD PRIMARY KEY (`id_progres`),
  ADD UNIQUE KEY `id_santri` (`id_santri`);

--
-- Indeks untuk tabel `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id_santri`),
  ADD UNIQUE KEY `id_user` (`id_user`,`id_orang_tua`),
  ADD KEY `id_orang_tua` (`id_orang_tua`);

--
-- Indeks untuk tabel `target`
--
ALTER TABLE `target`
  ADD PRIMARY KEY (`id_target`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `hafalan`
--
ALTER TABLE `hafalan`
  MODIFY `id_hafalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  MODIFY `id_orang_tua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `progres`
--
ALTER TABLE `progres`
  MODIFY `id_progres` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `santri`
--
ALTER TABLE `santri`
  MODIFY `id_santri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `target`
--
ALTER TABLE `target`
  MODIFY `id_target` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hafalan`
--
ALTER TABLE `hafalan`
  ADD CONSTRAINT `hafalan_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hafalan_ibfk_2` FOREIGN KEY (`id_santri`) REFERENCES `santri` (`id_santri`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD CONSTRAINT `orang_tua_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `progres`
--
ALTER TABLE `progres`
  ADD CONSTRAINT `progres_ibfk_1` FOREIGN KEY (`id_santri`) REFERENCES `santri` (`id_santri`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `santri`
--
ALTER TABLE `santri`
  ADD CONSTRAINT `santri_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `santri_ibfk_3` FOREIGN KEY (`id_orang_tua`) REFERENCES `orang_tua` (`id_orang_tua`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `target`
--
ALTER TABLE `target`
  ADD CONSTRAINT `target_ibfk_1` FOREIGN KEY (`id_santri`) REFERENCES `santri` (`id_santri`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
