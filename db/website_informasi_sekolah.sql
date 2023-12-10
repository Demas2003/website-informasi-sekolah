-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2023 pada 06.21
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
-- Database: `website_informasi_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_informasi` text NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `isi_informasi`, `tanggal_terbit`, `kategori`) VALUES
(4, 'Pendaftaran Siswa Baru SMK Wakanda 2023', 'Selamat datang calon siswa baru! SMK Wakanda membuka pendaftaran untuk tahun ajaran 2023. Dengan bangga, kami menyediakan berbagai program unggulan dan fasilitas modern untuk mendukung perkembangan siswa. Persiapkan diri Anda untuk bergabung dengan komunitas pendidikan yang inovatif dan berkualitas di SMK Wakanda.\r\n\r\nInformasi Pendaftaran:\r\n\r\n1. Persyaratan Pendaftaran:(Detail persyaratan bisa diisi di sini)\r\n2.Jadwal Tes Masuk: (Jadwal tes dapat dilihat di situs web resmi kami)\r\n3.Proses Seleksi: Kami melakukan seleksi berdasarkan prestasi akademis dan non-akademis.\r\n\r\nJangan lewatkan kesempatan untuk menjadi bagian dari SMK Wakanda! Segera daftarkan diri Anda dan raih masa depan gemilang bersama kami', '2023-12-10', 'Pendaftaran Siswa Baru'),
(5, 'Jadwal Tes Masuk Siswa Baru SMK Wakanda 2023', 'Penting untuk diperhatikan bahwa tes masuk siswa baru SMK Wakanda akan diselenggarakan sesuai dengan jadwal yang telah ditetapkan. Berikut adalah rincian jadwal tes masuk:\r\n\r\n1. Pendaftaran Tes:\r\n\r\n   Dimulai: 15 Februari 2023\r\n   Berakhir: 28 Februari 2023\r\n   Tempat pendaftaran: Aula Utama SMK Wakanda atau melalui situs web resmi kami.\r\n\r\n2. Tes Tulis:\r\n\r\n   Tanggal: 5 Maret 2023\r\n   Waktu: 08.00 - 12.00\r\n   Tempat: Ruang Kelas Utama\r\n\r\n3. Tes Wawancara:\r\n\r\n   Tanggal: 10 Maret 2023\r\n   Waktu: 09.00 - 15.00\r\n   Tempat: Kantor Kepala Sekolah\r\n\r\n4. Pengumuman Hasil Tes:\r\n Akan diumumkan pada: 15 Maret 2023\r\n\r\n Pengumuman dapat diakses di papan pengumuman sekolah dan situs web resmi. \r\nHarap pastikan untuk mempersiapkan diri dengan baik untuk mengikuti semua tahapan tes. Untuk \r\n informasi lebih lanjut, silakan hubungi panitia penerimaan siswa baru SMK Wakanda.', '2023-12-10', 'Pendaftaran Siswa Baru'),
(6, 'Wakanda Sportfest', 'SMK Wakanda dengan bangga mengumumkan pelaksanaan \"Wakanda Sportfest\", sebuah turnamen olahraga yang bertujuan untuk mempromosikan semangat kompetisi, kebersamaan, dan kesehatan di kalangan siswa. Turnamen ini akan melibatkan berbagai cabang olahraga dan diikuti oleh siswa dari seluruh tingkat.\r\n\r\nJadwal Acara:\r\n\r\nPembukaan Resmi:\r\n\r\nTanggal: 10 April 2023\r\nWaktu: 08.00 - 09.00\r\nTempat: Lapangan Olahraga Utama\r\n\r\nCabang Olahraga:\r\n\r\nSepak Bola, Bola Basket, Bulu Tangkis, Renang, Atletik, dan lainnya.\r\n\r\nTanggal Kompetisi:\r\n\r\n12 - 20 April 2023\r\nSesuai dengan jadwal yang akan diumumkan lebih lanjut.\r\n\r\nPuncak Acara dan Penyerahan Hadiah:\r\n\r\nTanggal: 25 April 2023\r\nWaktu: 15.00 - 17.00\r\nTempat: Aula Utama\r\n\r\nCatatan Penting:\r\n\r\nSetiap kelas diharapkan untuk memiliki perwakilan dalam setiap cabang olahraga.\r\nPeserta diwajibkan mengenakan seragam olahraga sekolah.\r\nSuporter dan orang tua siswa sangat diperbolehkan untuk hadir dan memberikan dukungan.', '2023-12-10', 'Lainya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `ID` int(12) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`ID`, `prodi`, `isi`) VALUES
(12, 'Teknik Mesin', 'Teknik mesin adalah jurusan yang mempelajari tentang perancangan, analisis, manufaktur, dan pemeliharaan sistem mekanik. Jurusan ini mempelajari tentang prinsip-prinsip fisika dan matematika untuk diterapkan pada mesin dan peralatan.'),
(13, 'Rekayasa Perangkat Lunak', 'Jurusan Rekayasa Perangkat Lunak (RPL) adalah jurusan yang mempelajari dan mendalami semua cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.'),
(15, 'Teknik Komputer dan Jaringan', 'Teknik Komputer dan Jaringan (TKJ) adalah jurusan yang mempelajari tentang komputer dan jaringan komputer. Jurusan ini mempelajari tentang cara merakit komputer, instalasi jaringan, troubleshooting, dan keamanan komputer dan jaringan.'),
(16, 'Teknik Konstruksi dan Perumahan', 'Program Keahlian Teknik Konstruksi dan Perumahan merupakan jurusan yang mempelajari tentang konstruksi bangunan dan furniture perkayuan, pengukuran tanah, rancangan anggaran biaya (RAB) konstruksi bangunan, laporan pelaksanaan konstruksi bangunan, perencanaan bisnis konstruksi dan properti, pelaksanaan dan pengawasan konstruksi, dan sebagainya.'),
(17, 'Teknik Ketenagalistrikan', 'Merupakan sebuah kompetensi keahlian yang mempelajari tentang instalasi tenaga listrik dan perbaikan perangkat elektronik.\r\nAdapun yang dipelajari di Teknik Instalasi Tenaga Listrik antara lain, Rangkaian Listrik, Instalasi Listrik, Instalasi Motor Listrik, Perawatan Pendingin ruangan, Perawatan Refigerator.\r\nFasilitas yang ada di Teknik Instalasi Tenaga Listrik antara lain, Bengkel Pengendali, Bengkel dasar listrik, Bengkel instalasi listrik dasar, bengkel pendingin, bengkel tenaga, bengkel kerja dasar.\r\nProduk dari Teknik Instalasi Tenaga Listrik antara lain, Service AC, Pompa air, Instalasi Listrik.'),
(18, 'Teknik dan Bisnis Sepeda Motor', 'Sebuah Kompetensi keahlian yang mempelajari tentang perakitan dan perawatan sepeda motor.\r\n\r\nAdapun yang dipelajari di Teknik Sepeda Motor antara lain, Sistem Mesin, Sistem Transmisi, Sistem Kelistrikan, Sistem Rangka / Chasis.\r\nFasilitas yang ada di TSM, Bengkel Sepeda Motor, Bengkel Teknologi Dasar Otomotif, Pengetahuan Teknik Otomotif, Bengkel Motor.\r\nProduk dari TSM antara lain, service motor.'),
(19, 'Teknik Elektronika Industri', 'Merupakan sebuah kompetensi keahlianyang mempelajari bidang teknik yang fokus mempelajari semua tentang komponen listrik serta berbagai macam peralatan semi konduktor.\r\nAdapun yang dipelakari di Teknik Elektronika Industri antara lain, PLC, Elektronika Terapan, Mikrokontroler, Perakitan Komponen Elektronika.\r\nFasilitas Teknik Elektronika Industri antara lain (bengkel2 di powerpoint elektronika)\r\nProduk dari Teknik Elektronika antara lain, Trainer Mikrokontrol, Trainer PLC, Running LED (Dot Matrix), Jam Digital, Pengisi Botol Otomatis, Penyiram Tanaman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `sejarah` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sejarah`
--

INSERT INTO `sejarah` (`id`, `judul`, `sejarah`) VALUES
(1, 'Sejarah SMK WAKANDA', 'SMK Wakanda adalah sebuah sekolah menengah kejuruan yang terletak di kota futuristik bernama Teknopolis. Dibangun pada tahun 2050, SMK Wakanda didirikan oleh sekelompok ilmuwan, insinyur, dan pengusaha visiwan yang bersatu untuk menciptakan pusat pendidikan unggulan yang mendorong inovasi teknologi dan kecerdasan buatan.'),
(5, 'Era Pendirian (2050-2055)', 'Pendirian SMK Wakanda dipicu oleh kebutuhan mendesak untuk melatih generasi baru yang mampu mengatasi tantangan teknologi masa depan. Dengan dukungan finansial dari perusahaan-perusahaan terkemuka di Teknopolis, sekolah ini dibangun dengan fasilitas canggih dan teknologi terkini.'),
(6, 'Perkembangan Awal (2055-2070)', 'SMK Wakanda segera menjadi pusat keunggulan dalam pendidikan teknologi, robotika, kecerdasan buatan, dan ilmu komputer. Para siswa tidak hanya mendapatkan pendidikan akademis yang kuat tetapi juga terlibat dalam proyek-proyek penelitian dan pengembangan inovatif. Alumni SMK Wakanda mulai menciptakan gebrakan di berbagai industri teknologi.'),
(7, 'Era Ekspansi (2070-2100)', 'SMK Wakanda terus tumbuh dan berkembang, menarik perhatian siswa berbakat dari seluruh Teknopolis. Sekolah ini mengembangkan program-program khusus dalam eksplorasi luar angkasa, nanoteknologi, dan energi terbarukan. Kemitraan dengan perusahaan-perusahaan terkemuka memastikan bahwa siswa memiliki kesempatan untuk berpartisipasi dalam magang dan proyek kolaboratif dengan profesional industri.'),
(8, 'Tantangan dan Kejayaan (2100-2120)', 'Meskipun dihadapkan pada tantangan dan perubahan cepat dalam teknologi, SMK Wakanda terus beradaptasi dan memimpin inovasi. Beberapa penemuan dan proyek yang berasal dari sekolah ini menjadi penanda penting dalam sejarah Teknopolis. Para alumni SMK Wakanda berhasil mendirikan perusahaan teknologi global dan memenangkan penghargaan bergengsi di tingkat internasional.'),
(11, 'Abad ke-22 dan Warisan (2120-sekarang)', 'Sekarang, SMK Wakanda telah menjadi lembaga pendidikan yang dikenal di seluruh dunia. Warisan sekolah ini mencakup kontribusi besar terhadap ilmu pengetahuan dan teknologi, serta mencetak generasi pemimpin yang mengubah wajah Teknopolis dan dunia. SMK Wakanda terus berkomitmen untuk mencetak inovator masa depan yang akan membawa perubahan positif dalam masyarakat global');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `Id_VisiMisi` int(11) NOT NULL,
  `Jenis` enum('Visi','Misi') NOT NULL,
  `Bidang` varchar(50) NOT NULL,
  `Teks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`Id_VisiMisi`, `Jenis`, `Bidang`, `Teks`) VALUES
(2, 'Visi', '-', 'Mewujudkan Generasi Inovator Berkarakter untuk Masa Depan Teknologi.'),
(3, 'Misi', 'Inovasi Tanpa Batas', 'SMK Wakanda bertujuan memberikan pendidikan yang merangsang kreativitas dan inovasi tanpa batas. Kami mendukung siswa dalam mengeksplorasi ide-ide baru, mengembangkan solusi canggih, dan menjadi pionir di berbagai bidang teknologi.'),
(4, 'Misi', 'Pendidikan Berkualitas', 'Memberikan pendidikan berstandar tinggi yang mendorong pembelajaran aktif, inovasi, dan penerapan teknologi.'),
(5, 'Misi', 'Pengembangan Karakter', 'Membentuk siswa-siswa menjadi individu yang berintegritas, tangguh, dan bertanggung jawab dalam masyarakat.'),
(6, 'Misi', 'Keterampilan Praktis', 'Menyediakan program pelatihan praktis dan relevan yang mempersiapkan siswa untuk sukses dalam dunia kerja.'),
(7, 'Misi', 'Kreativitas dan Inovasi', 'Mendorong siswa untuk berpikir kreatif, inovatif, dan berkontribusi pada perkembangan teknologi dan industri.'),
(8, 'Misi', ' Prestasi Unggul', 'Mendorong siswa untuk mencapai prestasi unggul dalam bidang akademik, seni, olahraga, dan berbagai kompetisi.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`Id_VisiMisi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `Id_VisiMisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
