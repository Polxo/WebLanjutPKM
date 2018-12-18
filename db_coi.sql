-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 02:16 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coi`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `nama`, `alamat`, `email`, `user`, `pass`) VALUES
(1, 'paijo', 'jogja', 'paijoganteng@gmail.com', 'pai', 'jo'),
(2, 'lambang', 'kbm', '@gmail.com', 'lam', 'bang'),
(3, 'admin', 'surabaya', 'admin', 'admin', 'admin'),
(7, 'ahsani', '', '@gmail', 'ahsani', 'ah'),
(17, 'asfsa', 'asgsa', 'asgsa', 'sagsa', 'asgsa');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wis` int(10) NOT NULL,
  `nm_wis` varchar(50) NOT NULL,
  `kordinat` varchar(30) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `jenis_wis` varchar(30) NOT NULL,
  `penjelasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wis`, `nm_wis`, `kordinat`, `lokasi`, `jenis_wis`, `penjelasan`) VALUES
(13, 'Taman Sari Keraton Yogyakarta', '7.810151Â°S 110.358946Â°E', 'Jalan Taman, Yogyakarta', 'Peninggalan Bersejarah', 'Taman Sari ngayogyakarta) adalah situs bekas taman atau kebun istana Keraton Ngayogyakarta Hadiningrat, yang dapat dibandingkan dengan Kebun Raya Bogor sebagai kebun Istana Bogor. Kebun ini dibangun pada zaman Sultan Hamengku Buwono I (HB I) pada tahun 1758-1765/9. Awalnya, taman yang mendapat sebutan "The Fragrant Garden" ini memiliki luas lebih dari 10 hektare dengan sekitar 57 bangunan baik berupa gedung, kolam pemandian, jembatan gantung, kanal air, maupun danau buatan beserta pulau buatan dan lorong bawah air. Kebun yang digunakan secara efektif antara 1765-1812 ini pada mulanya membentang dari barat daya kompleks Kedhaton sampai tenggara kompleks Magangan. Namun saat ini, sisa-sisa bagian Taman Sari yang dapat dilihat hanyalah yang berada di barat daya kompleks Kedhaton saja. Konon, Taman Sari dibangun di bekas keraton lama, Pesanggrahan Garjitawati, yang didirikan oleh Susuhunan Paku Buwono II sebagai tempat istirahat kereta kuda yang akan pergi ke Imogiri. Sebagai pimpinan proyek pembangunan Taman Sari ditunjuklah Tumenggung Mangundipuro. Seluruh biaya pembangunan ditanggung oleh Bupati Madiun, Tumenggung Prawirosentiko, besrta seluruh rakyatnya. Oleh karena itu daerah Madiun dibebaskan dari pungutan pajak. Di tengah pembangunan pimpinan proyek diambil alih oleh Pangeran Notokusumo, setelah Mangundipuro mengundurkan diri. Walaupun secara resmi sebagai kebun kerajaan, namun bebrapa bangunan yang ada mengindikasikan Taman Sari berfungsi sebagai benteng pertahanan terakhir jika istana diserang oleh musuh. Konon salah seorang arsitek kebun kerajaan ini adalah seorang Portugis yang lebih dikenal dengan Demang Tegis. Kompleks Taman Sari setidaknya dapat dibagi menjadi 4 bagian. Bagian pertama adalah danau buatan yang terletak di sebelah barat. Bagian selanjutnya adalah bangunan yang berada di sebelah selatan danau buatan antara lain Pemandian Umbul Binangun. Bagian ketiga adalah Pasarean Ledok Sari dan Kolam Garjitawati yang terletak di selatan bagian kedua. Bagian terakhir adalah bagian sebelah timur bagian pertama dan kedua dan meluas ke arah timur sampai tenggara kompleks Magangan. Dan Terdapat "Umbul Pasiraman" atau ada yang menyebut dengan "Umbul Binangun" (pengucapan dalam bahasa Jawa "Umbul Winangun") merupakan kolam pemandian bagi Sultan, permaisuri, para istri (garwo ampil), serta para putri-putri raja. Kompleks ini dikelilingi oleh tembok yang tinggi. Untuk sampai ke dalam tempat ini disediakan dua buah gerbang, satu di sisi timur dan satunya di sisi barat. Di dalam gerbang ini terdapat jenjang yang menurun. Di kompleks Umbul Pasiraman terdapat tiga buah kolam yang dihiasi dengan mata air yang berbentuk jamur. Di sekeliling kolam terdapat pot bunga raksasa. Selain kolam juga terdapat bangunan di sisi utara dan di tengah sebelah selatan. Bangunan di sisi paling utara merupakan tempat istirahat dan berganti pakaian bagi para puteri dan istri (selir). Di sebelah selatannya terdapat sebuah kolam yang disebut dengan nama "Umbul Muncar". Sebuah jalan mirip dermaga menjadi batas antara kolam ini dengan sebuah kolam di selatannya yang disebut dengan "Blumbang Kuras". Di selatan Blumbang Kuras terdapat bangunan dengan menara di bagian tengahnya. Bangunan sayap barat merupakan tempat berganti pakaian dan sayap timur untuk istirahat Sultan. Menara di bagian tengah, konon digunakan Sultan untuk melihat istri dan puterinya yang sedang mandi kemudian yang tubuh telanjangnya paling mengesankan sultan akan di panggil ke menara. Di selatan bangunan tersebut terdapat sebuah kolam yang disebut dengan "Umbul Binangun", sebuah kolam pemandian yang dikhususkan untuk Sultan dan Permaisurinya saja. Pada zamannya, selain Sultan, hanyalah para perempuan yang diizinkan untuk masuk ke kompleks ini. Ini di mungkinkan karena semua perempuan (permaisuri, istri ( selir ) dan para putri sultan) yang masuk ke dalam taman sari ini harus lepas baju (telanjang), sehingga selain perempuan di larang keras oleh sultan untuk masuk ke Taman Sari.'),
(14, 'Air Terjun Sri Gethuk', '7.943368Â°S 110.4892901Â°E', 'Desa Bleberan, Kecamatan Playen, Kabupaten Gunungk', 'Air Terjun dan Sungai', 'Air Terjun Sri Gethuk merupakan salah satu objek wisata alam yang terletak di Kecamatan Playen, Kabupaten Gunungkidul, Yogyakarta. Air terjun ini berada di tepi Sungai Oyo sehingga untuk menikmatinya harus menyelusuri sungai dengan rakit. Sepanjang perjalanan akan disuguhi pemandangan berupa tebing tebing kapur dikanan-kiri dan rimbunnya pepohonan. Jika di musim kemarau, air sungai akan sangat jernih berwana kehijauan dan tenang. Air terjun Sri Gethuk ini memiliki 3 sumber mata air yaitu mata air Ngandong, Dong Poh, dan Ngumbul. Ketiga mata air ini berkumpul dan mengalir melalui tebing tinggi hingga membentuk air terjun Sri Gethuk. Air Terjun Sri Gethuk memiliki tinggi sekira 25 meter dengan 3-5 terjunan air terjun tergantung musim. Air yang tak pernah kering itu jatuh tak membuat kolam namun langsung merayapi bebatuan kapur yang rapi ditepi sungai. Air terjun ini sedang dalam tahap pengembangan untuk menjadi destinasi wisata andalan Kabupaten Gunungkidul selain dari pantai dan pegunungan karst. Air Terjun Sri Gethuk juga disebut sebagai Air Terjun Slempret. Nama Slempret sendiri berasal dari legenda yang ada di Desa Bleberan. Menurut cerita yang beredar di masyarakat, air tejun ini merupakan pusatnya para jin dengan pimpinan Jin Anggo Menduro. Air terjun ini bermula dari tiga sumber mata air yaitu Kedungpoh, Ngandong, dan Ngumbul. Ketiga sumber mata air tersebut mengalir menjadi satu dan membentuk butiran-butiran air yang jatuh dari tebing bebatuan karst yang tandus  Mitos: Keberadaan air Terjun Sri Gethuk ini tidak terlepas dari cerita yang berkembang di masyarakat. Legenda yang berasal dari Desa Bleberan menceritakan bahwa air terjun Sri Gethuk merupakan lokasi berkumpulnya jin. Salah satu jin yang memimpin adalah Anggo Meduro. Jin-jin ini sangat menyukai musik yang dihasilkan oleh gamelan. Banyak wisatawan atau warga sekitar yang mendengar suara gamelan ditabuh tetapi jika didekati tidak akan ada bukti seseorang memainkannya. Masyarakat sekitar percaya bahwa suara gamelan adalah hasil tabuhan dari Anggo Meduro. Namun Anda ndak usah khawatir, selama menjaga dan tidak mengganggu di lokasi ini Anda bisa berwisata dengan nyaman. Aksesbilitas Air Terjun Sri Gethuk dapat dituju dari Kota Yogyakarta menggunakan kendaraan pribadi melalui dua rute yaitu Jl. Majapahit (sebelumnya Jl. Ring Road Timur Yogyakarta) mengikuti jalan nasisonal menuju arah Wonosari hingga menemukan Pertigaan Gading (Playen) belok kanan melewati pusat kecamatan Playen hingga terdapat pertiggaan jalan menuju Bleberan. Petunjuk jalan menuju Air Terjun Sri Gethuk terpampang jelas disetiap pertigaan jalan. Atau bisa melalui rute alternatif Jl. Imogiri Barat-Panggang-Paliyan-Playen-Bleberan.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
