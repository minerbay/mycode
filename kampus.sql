SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus`
--
CREATE DATABASE IF NOT EXISTS `kampus` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `kampus`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `jurusan`, `alamat`) VALUES
(1, '123456', 'SYAMSUL ALAM                            ', 'Jurusan', 'Jl. Jalan'),
(2, '202611001', 'Aris Munandar', 'Teknik Informatika', 'Jl. Perintis Kemerdekaan KM 10, Makassar'),
(3, '202611002', 'Dewi Lestari', 'Sistem Informasi', 'Jl. Sultan Alauddin No. 45, Rappocini'),
(4, '202611003', 'Fikri Haikal', 'Teknik Informatika', 'Perumahan Dosen UNHAS, Tamalanrea'),
(5, '202611004', 'Siti Rahmawati', 'Sistem Informasi', 'Jl. AP Pettarani Ruko No. 12, Makassar'),
(6, '202611005', 'Rian Hidayat', 'Teknik Komputer', 'Jl. Kakatua No. 8B, Mariso'),
(7, '202611006', 'Andi Muhammad Yusuf', 'Teknik Informatika', 'Jl. Hertasning Baru, Buakana'),
(8, '202611007', 'Putri Ayu Wandira', 'Sistem Informasi', 'Jl. Boulevard No. 21, Panakkukang'),
(9, '202611008', 'Bambang Triatmojo', 'Teknik Komputer', 'Jl. Sunu No. 104, Tallo'),
(10, '202611009', 'Eka Nurjanah', 'Teknik Informatika', 'Perumahan Bumi Tamalanrea Permai (BTP) Blok M'),
(11, '202611010', 'Rizky Amalia', 'Sistem Informasi', 'Jl. Cendrawasih No. 54, Mamajang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
