-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2024 at 01:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbp`
--

-- --------------------------------------------------------

--
-- Table structure for table `basispengetahuan`
--

DELIMITER //

CREATE PROCEDURE UpdatePenyakitNew(
    IN p_idpenyakit VARCHAR(10),
    IN p_namapenyakit VARCHAR(255),
    IN p_jenistanaman VARCHAR(20),
    IN p_kulturteknis TEXT,
    IN p_fisikmekanis TEXT,
    IN p_kimiawi TEXT,
    IN p_hayati TEXT
)
BEGIN
    UPDATE penyakit
    SET namapenyakit = p_namapenyakit,
        jenistanaman = p_jenistanaman,
        kulturteknis = p_kulturteknis,
        fisikmekanis = p_fisikmekanis,
        kimiawi = p_kimiawi,
        hayati = p_hayati
    WHERE idpenyakit = p_idpenyakit;
END //

DELIMITER ;

CREATE TABLE `basispengetahuan` (
  `namapenyakit` varchar(100) NOT NULL,
  `gejala` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `basispengetahuan`
--

INSERT INTO `basispengetahuan` (`namapenyakit`, `gejala`) VALUES
('Thrips', 'pertumbuhan tanaman terganggu'),
('Thrips', 'Daun menjadi keriting'),
('Thrips', 'bercak keperakan'),
('Antraknosa', 'batang membusuk dan berair,'),
('Antraknosa', 'Bercak coklat atau hitam'),
('Antraknosa', 'buah membusuk dan berair,'),
('Kutu Daun (Aphids)', 'tanaman kerdil'),
('Kutu Daun (Aphids)', 'cairan lengket (madu) pada batang'),
('Kutu Daun (Aphids)', 'Daun menggulung'),
('Kutu Daun (Aphids)', 'cairan lengket (madu) pada daun'),
('Layu Bakteri', 'batang menjadi lunak'),
('Layu Bakteri', 'tanaman mati dalam waktu singkat.'),
('Layu Bakteri', 'Daun menguning'),
('Busuk Pangkal Batang', 'Bagian pangkal batang membusuk'),
('Busuk Pangkal Batang', 'tanaman tampak layu meski disiram'),
('Ulat Grayak (Spodoptera)', 'Daun berlubang akibat gigitan ulat'),
('Ulat Grayak (Spodoptera)', 'ulat sering ditemukan di daun'),
('Embun Tepung (Powdery mildew)', 'Lapisan putih seperti tepung pada batang'),
('Embun Tepung (Powdery mildew)', 'Daun menguning'),
('Embun Tepung (Powdery mildew)', 'Lapisan putih seperti tepung pada daun'),
('Embun Tepung (Powdery mildew)', 'daun kering dan rontok'),
('Embun Tepung (Powdery mildew)', 'daun menjadi rapuh'),
('Hama / Penyakit', 'Bercak kuning pada daun'),
('Hama / Penyakit', 'Jaring halus pada daun'),
('Hama / Penyakit', 'daun kering dan rontok'),
('Layu Fusarium', 'tanaman mati secara tiba-tiba'),
('Layu Fusarium', 'Daun menguning'),
('Layu Fusarium', 'tanaman tampak layu meski disiram'),
('Layu Fusarium', 'Bercak coklat hingga merah muda'),
('Bercak Daun Cercospora', 'tanaman tampak tidak sehat secara keseluruhan'),
('Bercak Daun Cercospora', 'Daun menguning'),
('Bercak Daun Cercospora', 'Bercak coklat dengan lingkaran konsentris'),
('Bercak Daun Cercospora', 'Daun menguning mulai dari pinggir'),
('Bercak Daun Cercospora', 'Bercak hitam pada daun yang menua'),
('Hama / Penyakit', 'Buah berlubang dan rusak'),
('Hama / Penyakit', 'terdapat larva di dalam buah'),
('Hama / Penyakit', 'buah membusuk dan jatuh sebelum matang'),
('Busuk Akar (Root rot)', 'bagian akar membusuk'),
('Busuk Akar (Root rot)', 'tanaman mati dalam waktu singkat.'),
('Busuk Akar (Root rot)', 'tanaman tampak tidak sehat secara keseluruhan'),
('Busuk Akar (Root rot)', 'Daun layu'),
('Busuk Akar (Root rot)', 'Daun menguning'),
('Virus Mosaik (Tobacco mosaic virus)', 'pertumbuhan tanaman terganggu'),
('Virus Mosaik (Tobacco mosaic virus)', 'Daun menjadi keriting'),
('Virus Mosaik (Tobacco mosaic virus)', 'Daun menguning berbentuk mozaik'),
('Virus Mosaik (Tobacco mosaic virus)', 'tanaman mengalami penurunan produktivitas'),
('Hama / Penyakit', 'tanaman tampak tidak sehat secara keseluruhan'),
('Hama / Penyakit', 'tanaman tampak kekurangan nutrisi'),
('Hama / Penyakit', 'daun kering dan rontok'),
('Hama / Penyakit', 'Bercak coklat dengan lingkaran konsentris'),
('Hama / Penyakit', 'tanaman mengalami penurunan produktivitas'),
('Busuk Buah (Anthracnose)', 'batang menjadi lunak'),
('Busuk Buah (Anthracnose)', 'Bagian pangkal batang membusuk'),
('Busuk Buah (Anthracnose)', 'Daun layu'),
('Busuk Buah (Anthracnose)', 'Bercak coklat hingga merah muda'),
('Busuk Buah (Anthracnose)', 'Bercak hitam pada daun yang menua'),
('Busuk Buah (Anthracnose)', 'tanaman mengalami penurunan produktivitas'),
('Hama / Penyakit', 'Bagian pangkal batang membusuk'),
('Hama / Penyakit', 'tanaman tampak tidak sehat secara keseluruhan'),
('Hama / Penyakit', 'pembusukan batang'),
('Hama / Penyakit', 'Bercak kuning pada daun'),
('Hama / Penyakit', 'Bercak coklat dengan lingkaran konsentris'),
('Hama / Penyakit', 'Bercak hitam pada daun yang menua'),
('Hama / Penyakit', 'Bercak coklat atau hitam'),
('Hama / Penyakit', 'tanaman mengalami penurunan produktivitas'),
('Busuk Buah (Anthracnose)', 'batang membusuk dan berair,'),
('Busuk Buah (Anthracnose)', 'batang menjadi lunak'),
('Busuk Buah (Anthracnose)', 'Bagian pangkal batang membusuk'),
('Busuk Buah (Anthracnose)', 'tanaman tampak tidak sehat secara keseluruhan'),
('Busuk Buah (Anthracnose)', 'tanaman tampak layu meski disiram'),
('Busuk Buah (Anthracnose)', 'daun menguning dan rontok'),
('Busuk Buah (Anthracnose)', 'buah membusuk dan berair,'),
('Busuk Buah (Anthracnose)', 'buah membusuk dan jatuh sebelum matang'),
('Busuk Buah (Anthracnose)', 'tanaman mengalami penurunan produktivitas'),
('Lalat Akar (Fungus gnat)', 'akar menjadi coklat dan busuk'),
('Lalat Akar (Fungus gnat)', 'bagian akar membusuk'),
('Lalat Akar (Fungus gnat)', 'tidak mampu menyerap air'),
('Lalat Akar (Fungus gnat)', 'tanaman kerdil'),
('Lalat Akar (Fungus gnat)', 'Daun menguning'),
('Lalat Akar (Fungus gnat)', 'daun kering dan rontok'),
('Karat Daun (Rust)', 'daun kering dan rontok'),
('Karat Daun (Rust)', 'Bercak coklat hingga merah muda'),
('Karat Daun (Rust)', 'daun menjadi rapuh'),
('Karat Daun (Rust)', 'tanaman mengalami penurunan produktivitas'),
('Penyakit Layu Bakteri', 'batang membusuk dan berair,'),
('Penyakit Layu Bakteri', 'batang menjadi lunak'),
('Penyakit Layu Bakteri', 'tanaman tampak tidak sehat secara keseluruhan'),
('Penyakit Layu Bakteri', 'Daun layu'),
('Penyakit Layu Bakteri', 'tanaman tampak layu meski disiram'),
('Penyakit Layu Bakteri', 'tanaman tampak kekurangan nutrisi'),
('Penyakit Layu Bakteri', 'layu meski tanaman disiram'),
('Penyakit Layu Bakteri', 'tanaman mengalami penurunan produktivitas'),
('Penyakit Kuning Daun Virus', 'Daun layu'),
('Penyakit Kuning Daun Virus', 'Daun menguning'),
('Penyakit Kuning Daun Virus', 'daun menguning dan rontok'),
('Penyakit Kuning Daun Virus', 'produksi buah menurun'),
('Penyakit Kuning Daun Virus', 'Daun menguning mulai dari pinggir'),
('Penyakit Kuning Daun Virus', 'Bercak hitam pada daun yang menua'),
('Penyakit Kuning Daun Virus', 'Buah berlubang dan rusak'),
('Penyakit Kuning Daun Virus', 'buah kecil'),
('Penyakit Kuning Daun Virus', 'tanaman mengalami penurunan produktivitas'),
('Belalang (Grasshopper)', 'tanaman kerdil'),
('Belalang (Grasshopper)', 'Daun menguning'),
('Belalang (Grasshopper)', 'Daun dan batang digerogoti oleh belalang'),
('Penyakit Daun Bercak Hitam', 'tanaman tampak tidak sehat secara keseluruhan'),
('Penyakit Daun Bercak Hitam', 'Daun layu'),
('Penyakit Daun Bercak Hitam', 'produksi buah menurun'),
('Penyakit Daun Bercak Hitam', 'Bercak hitam pada daun yang menua'),
('Penyakit Daun Bercak Hitam', 'tanaman mengalami penurunan produktivitas');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `idgejala` varchar(10) NOT NULL,
  `gejala` varchar(1000) NOT NULL,
  `daerah` varchar(10) NOT NULL,
  `jenistanaman` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`idgejala`, `gejala`, `daerah`, `jenistanaman`) VALUES
('G001', 'Daun menjadi keriting', 'Daun', 'Paprika'),
('G002', 'bercak keperakan', 'Daun', 'Paprika'),
('G003', 'pertumbuhan tanaman terganggu', 'Batang', 'Paprika'),
('G004', 'Bercak coklat atau hitam', 'Buah', 'Paprika'),
('G005', 'buah membusuk dan berair,', 'Buah', 'Paprika'),
('G006', 'membusuk dan berair,', 'Daun', 'Paprika'),
('G007', 'batang membusuk dan berair,', 'Batang', 'Paprika'),
('G008', 'Daun menggulung', 'Daun', 'Paprika'),
('G009', 'tanaman kerdil', 'Batang', 'Paprika'),
('G010', 'cairan lengket (madu) pada daun', 'Daun', 'Paprika'),
('G011', 'cairan lengket (madu) pada batang', 'Batang', 'Paprika'),
('G012', 'Daun layu', 'Daun', 'Paprika'),
('G013', 'Daun menguning', 'Daun', 'Paprika'),
('G014', 'batang menjadi lunak', 'Batang', 'Paprika'),
('G015', 'tanaman mati dalam waktu singkat.', 'Batang', 'Paprika'),
('G016', 'Bagian pangkal batang membusuk', 'Batang', 'Paprika'),
('G017', 'tanaman tampak layu meski disiram', 'Daun', 'Paprika'),
('G018', 'Daun berlubang akibat gigitan ulat', 'Daun', 'Paprika'),
('G019', 'ulat sering ditemukan di daun', 'Daun', 'Paprika'),
('G020', 'Lapisan putih seperti tepung pada daun', 'Daun', 'Paprika'),
('G021', 'Lapisan putih seperti tepung pada batang', 'Batang', 'Paprika'),
('G022', 'tanaman tampak kekurangan nutrisi', 'Daun', 'Paprika'),
('G023', 'daun menguning dan rontok', 'Daun', 'Paprika'),
('G024', 'Bercak kuning pada daun', 'Daun', 'Paprika'),
('G025', 'Jaring halus pada daun', 'Daun', 'Paprika'),
('G026', 'daun kering dan rontok', 'Daun', 'Paprika'),
('G027', 'layu meski tanaman disiram', 'Daun', 'Paprika'),
('G028', 'akar menjadi coklat dan busuk', 'Akar', 'Paprika'),
('G029', 'tanaman mati secara tiba-tiba', 'Batang', 'Paprika'),
('G030', 'tanaman tampak tidak sehat secara keseluruhan', 'Batang', 'Paprika'),
('G031', 'Buah berlubang dan rusak', 'Buah', 'Paprika'),
('G032', 'terdapat larva di dalam buah', 'Buah', 'Paprika'),
('G033', 'buah membusuk dan jatuh sebelum matang', 'Buah', 'Paprika'),
('G034', 'bagian akar membusuk', 'Akar', 'Paprika'),
('G035', 'Daun menguning berbentuk mozaik', 'Daun', 'Paprika'),
('G036', 'produksi buah menurun', 'Daun', 'Paprika'),
('G037', 'Daun membesar seiring waktu', 'Daun', 'Paprika'),
('G038', 'Bercak coklat dengan lingkaran konsentris', 'Daun', 'Paprika'),
('G039', 'tanaman kerdil', 'Batang', 'Paprika'),
('G040', 'tidak mampu menyerap air', 'Akar', 'Paprika'),
('G041', 'Bercak coklat hingga merah muda', 'Daun', 'Paprika'),
('G042', 'daun menjadi rapuh', 'Daun', 'Paprika'),
('G043', 'pembusukan batang', 'Batang', 'Paprika'),
('G044', 'Ulat menyerang pangkal batang', 'Batang', 'Paprika'),
('G045', 'patah pada pangkal', 'Batang', 'Paprika'),
('G046', 'Daun menguning mulai dari pinggir', 'Daun', 'Paprika'),
('G047', 'buah kecil', 'Buah', 'Paprika'),
('G048', 'tanaman mengalami penurunan produktivitas', 'Buah', 'Paprika'),
('G049', 'Daun dan batang digerogoti oleh belalang', 'Daun', 'Paprika'),
('G050', 'Bercak hitam pada daun yang menua', 'Daun', 'Paprika');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `idpenyakit` varchar(20) NOT NULL,
  `namapenyakit` varchar(1000) NOT NULL,
  `jenistanaman` varchar(20) NOT NULL,
  `kulturteknis` varchar(1000) NOT NULL,
  `fisikmekanis` varchar(1000) NOT NULL,
  `kimiawi` varchar(1000) NOT NULL,
  `hayati` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`idpenyakit`, `namapenyakit`, `jenistanaman`, `kulturteknis`, `fisikmekanis`, `kimiawi`, `hayati`) VALUES
('P001', 'Thrips', 'Paprika', 'Menanam varietas tahan, pengaturan jarak tanam yang cukup, dan rotasi tanaman.', 'Penggunaan perangkap kuning dan sanitasi lingkungan.', 'Penggunaan insektisida berbahan aktif abamektin atau spinosad.', 'Pengendalian dengan predator alami seperti Orius spp..'),
('P002', 'Antraknosa', 'Paprika', 'Penggunaan bibit bebas penyakit, rotasi tanaman, dan pengaturan drainase yang baik.', 'Sanitasi lahan, pemangkasan bagian tanaman yang terserang.', 'Fungisida berbahan aktif mankozeb atau klorotalonil.', 'Penggunaan agen hayati seperti Trichoderma spp. untuk pengendalian jamur.'),
('P003', 'Kutu Daun (Aphids)', 'Paprika', 'Penanaman secara rotasi, tanaman pendamping yang tidak disukai hama.', 'Penggunaan air untuk menyemprot kutu, serta pemasangan jaring pelindung.', 'Insektisida berbahan aktif imidakloprid atau pirimikarb.', 'Penggunaan predator alami seperti Coccinella septempunctata (kumbang kepik).'),
('P004', 'Layu Bakteri', 'Paprika', 'Penggunaan benih tahan penyakit, rotasi tanaman dengan jenis yang berbeda, sanitasi lingkungan.', 'Pengeringan lahan secara berkala dan pemotongan bagian yang terinfeksi.', 'Fungisida berbahan tembaga untuk mengurangi infeksi bakteri.', 'Penggunaan agen hayati seperti Pseudomonas fluorescens untuk melawan patogen.'),
('P005', 'Busuk Pangkal Batang', 'Paprika', 'Meningkatkan drainase dan menghindari kelembapan yang berlebih di sekitar akar.', 'Sanitasi lahan dan pengaturan jarak tanam.', 'Penggunaan fungisida berbahan aktif metalaksil atau karbendazim', 'Penggunaan Trichoderma spp. sebagai agen pengendalian jamur pada akar.'),
('P006', 'Ulat Grayak (Spodoptera)', 'Paprika', 'Penanaman jarak yang cukup dan rotasi tanaman dengan tanaman yang tidak disukai hama.', 'Pengumpulan ulat secara manual pada pagi atau sore hari.', 'Insektisida berbahan aktif klorantraniliprol atau emamektin benzoat.', 'Penggunaan parasitoid Trichogramma spp. atau predator alami seperti burung kecil pemangsa ulat.'),
('P007', 'Embun Tepung (Powdery mildew)', 'Paprika', 'Mengurangi kelembapan dengan jarak tanam yang cukup, pemangkasan rutin, dan rotasi tanaman.', 'Penghilangan daun yang terinfeksi dan pengaturan ventilasi untuk sirkulasi udara.', 'Fungisida berbahan aktif sulfur atau miklobutanil.', 'Penggunaan agen hayati seperti Bacillus subtilis untuk menekan perkembangan jamur.'),
('P008', 'Tungau (Spider mites)', 'Paprika', 'Penanaman dengan tanaman pendamping yang mengusir tungau, rotasi tanaman.', 'Penggunaan semprotan air secara rutin untuk mengusir tungau dari daun.\r\n', 'Akarisida berbahan aktif abamektin atau spiromesifen.', 'Pemanfaatan predator alami seperti Phytoseiulus persimilis untuk mengendalikan populasi tungau.'),
('P009', 'Layu Fusarium', 'Paprika', 'Rotasi tanaman dan pemilihan bibit tahan fusarium, pengaturan drainase yang baik.', 'Membuang tanaman yang terinfeksi dan menjaga kebersihan area tanam.', 'Fungisida berbahan aktif tiofanat-metil atau karbendazim.', 'Agen hayati Trichoderma spp. dapat digunakan untuk mencegah infeksi pada akar.'),
('P010', 'Bercak Daun Cercospora', 'Paprika', 'Menggunakan bibit yang bebas dari penyakit, rotasi tanaman dan pemangkasan daun yang terinfeksi.', 'Sanitasi kebun dan pemangkasan bagian tanaman yang menunjukkan gejala infeksi.', 'Fungisida berbahan aktif mankozeb atau propineb.', 'Penggunaan Bacillus subtilis untuk mencegah infeksi jamur.'),
('P011', 'Lalat Buah (Fruit fly)', 'Paprika', 'Penanaman varietas tahan dan rotasi tanaman, serta pemanenan buah tepat waktu.', 'Penggunaan perangkap lalat buah dan sanitasi buah yang jatuh di tanah.', 'Insektisida berbahan aktif spinosad atau deltametrin untuk pengendalian lalat buah.', 'Penggunaan agen hayati Beauveria bassiana untuk menekan populasi larva.'),
('P012', 'Busuk Akar (Root rot)', 'Paprika', 'Mengatur drainase yang baik, tidak membiarkan tanah terlalu lembab, dan rotasi tanaman.', 'Mengganti tanah di sekitar tanaman yang terinfeksi dan memastikan kondisi tanah tetap kering.', 'Fungisida berbahan aktif metalaksil untuk pengendalian busuk akar.', 'Aplikasi Trichoderma spp. di sekitar akar untuk mencegah infeksi jamur penyebab busuk akar.'),
('P013', 'Virus Mosaik (Tobacco mosaic virus)', 'Paprika', 'Penggunaan benih bebas virus, rotasi tanaman dengan varietas tahan penyakit.', 'Sanitasi peralatan berkebun, menghindari kontak langsung dengan tanaman yang terinfeksi.', 'Tidak ada pengendalian kimiawi yang efektif, lebih pada pencegahan.', 'Penggunaan agen hayati seperti Pseudomonas fluorescens untuk mengurangi risiko infeksi.'),
('P014', 'Bercak Daun Alternaria', 'Paprika', 'Menjaga kebersihan lahan, rotasi tanaman, dan menggunakan varietas tahan penyakit.', 'Penghilangan bagian tanaman yang terinfeksi dan pengaturan kelembapan lahan.', 'Fungisida berbahan aktif klorotalonil atau difenokonazol untuk mengurangi infeksi.', 'Aplikasi Bacillus subtilis untuk mencegah penyebaran jamur.'),
('P015', 'Busuk Buah (Anthracnose)', 'Paprika', 'Penanaman varietas tahan, rotasi tanaman, dan drainase yang baik.', 'Sanitasi lahan, pemangkasan bagian tanaman yang terinfeksi.', 'Fungisida berbahan aktif mankozeb atau klorotalonil.', 'Agen hayati Trichoderma spp. dan Gliocladium spp. untuk mencegah infeksi jamur.'),
('P016', 'Bercak Daun Septoria', 'Paprika', 'Menjaga jarak tanam dan rotasi tanaman serta sanitasi lahan.', 'Pemangkasan daun yang terinfeksi dan penataan ventilasi yang baik.', 'Fungisida berbahan aktif mankozeb atau klorotalonil.', 'Penggunaan Bacillus subtilis untuk menekan infeksi.'),
('P017', 'Busuk Batang Phytophthora', 'Paprika', 'Drainase lahan yang baik, rotasi tanaman, dan pemilihan bibit yang sehat.', 'Memangkas bagian tanaman yang terkena dan menjaga kelembapan lahan tetap rendah.', 'Fungisida berbahan aktif metalaksil atau fosetil-aluminium.', 'Agen hayati Trichoderma spp. di sekitar akar untuk menekan perkembangan jamur.'),
('P018', 'Lalat Akar (Fungus gnat)', 'Paprika', 'Penggunaan media tanam steril dan rotasi tanaman untuk mencegah infestasi.', 'Penggantian tanah yang terinfeksi larva lalat akar.', 'Penggunaan insektisida berbahan aktif piretrin atau spinosad untuk larva.', 'Penggunaan nematoda entomopatogen seperti Steinernema feltiae.'),
('P019', 'Karat Daun (Rust)', 'Paprika', 'Menjaga kelembapan tanah dan jarak tanam, serta sanitasi berkala.', 'Penghilangan daun yang terinfeksi dan pengaturan ventilasi untuk mengurangi kelembapan.', 'Fungisida berbahan aktif mankozeb atau miklobutanil.', 'Aplikasi agen hayati seperti Bacillus subtilis dan Pseudomonas fluorescens untuk pencegahan.'),
('P020', 'Penyakit Layu Bakteri', 'Paprika', 'Penanaman bibit tahan penyakit, pengaturan drainase, dan rotasi tanaman', 'Sanitasi kebun dan pemangkasan bagian tanaman yang menunjukkan gejala infeksi.', 'Fungisida berbahan tembaga untuk pengendalian penyakit bakteri.', 'Penggunaan Pseudomonas fluorescens untuk menekan perkembangan bakteri patogen.'),
('P021', 'Ulat Tanah (Agrotis spp.)', 'Paprika', 'Sanitasi lahan, pengolahan tanah yang baik, dan penanaman varietas tahan ulat tanah.', 'Pengumpulan ulat secara manual atau menggunakan perangkap.', 'Penggunaan insektisida berbahan aktif klorpirifos atau karbofuran di sekitar pangkal tanaman.', 'Pemanfaatan agen hayati seperti Steinernema carpocapsae untuk pengendalian ulat tanah.'),
('P022', 'Penyakit Kuning Daun Virus', 'Paprika', 'Menanam varietas tahan virus, rotasi tanaman, dan sanitasi area sekitar tanaman.', 'Menghindari kontak dengan tanaman terinfeksi dan menjaga peralatan tetap bersih.', 'Tidak ada pengendalian kimiawi, pengendalian lebih pada pencegahan dan pemilihan bibit tahan virus.', 'Penggunaan Pseudomonas fluorescens untuk memperkuat ketahanan tanaman terhadap infeksi.'),
('P023', 'Belalang (Grasshopper)', 'Paprika', 'Penanaman tanaman pendamping yang dapat menghalangi belalang atau tanaman yang tidak disukai belalang.', 'Pengumpulan manual dan pemasangan jaring pelindung pada tanaman muda.', 'Penggunaan insektisida berbahan aktif malathion atau deltametrin.', 'Pemanfaatan predator alami seperti burung kecil atau ular untuk mengendalikan populasi belalang.'),
('P024', 'Penyakit Daun Bercak Hitam', 'Paprika', 'Rotasi tanaman, jarak tanam yang cukup, dan penggunaan bibit yang sehat.', 'Pemangkasan daun yang terinfeksi untuk mengurangi penyebaran patogen.', 'Fungisida berbahan aktif mankozeb atau propineb untuk menekan infeksi jamur.', 'Aplikasi Trichoderma spp. atau Bacillus subtilis untuk mencegah penyebaran jamur pada daun.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `nama`) VALUES
('U001', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`idgejala`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`idpenyakit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
