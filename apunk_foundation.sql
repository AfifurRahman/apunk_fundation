-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 24 Mar 2015 pada 06.47
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `apunk_foundation`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `judul_artikel` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `foto_artikel` varchar(200) NOT NULL,
  `tanggal_posting` varchar(20) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  PRIMARY KEY (`id_artikel`),
  KEY `fk_id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `keterangan`, `foto_artikel`, `tanggal_posting`, `id_user`) VALUES
(5, 'Kubu Agung Lengserkan Loyalis Ical di DPR: Bamsoet dan Tantowi', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Setelah mendapat pengakuan dari Kementerian Hukum dan Hak Asasi Manusia, DPP Partai Golongan Karya pimpinan Agung Laksono berniat merombak susunan fraksinya di DPR. Sejumlah loyalis Aburizal Bakrie (Ical) pun digeser. <br /><br />Posisi ketua fraksi yang semula dijabat loyalis Ical, Ade Komaruddin, rencananya akan diganti oleh Agus Gumiwang Kartasasmita. Pendukung Ical lainnya, Bambang Soesatyo juga akan digeser dari posisinya saat ini sebagai Sekretaris Fraksi Golkar di DPR. <br /><br />Selanjutnya kubu Agung akan menempatkan Fayakhun Andriadi sebagai Sekretaris Fraksi Golkar di DPR. Tantowi Yahya yang selama ini dikenal getol membela Ical juga tak luput dari ''target'' kubu Agung. Tantowi yang saat ini menjabat Wakil Ketua Komisi I DPR RI akan diganti oleh Meutya Viada Hafid. <br /><br />"Proyeksinya nih itu Meutya Hafid pimpinan Komisi I, Airlangga Hartarto Ketua Komisi II, BKSAP itu Dave Laksono, kemudian BURT, Baleg, Banggar itu diganti," kata Wakil Ketua Umum Partai Golkar kubu Agung Laksono, Yorrys Raweyai, saat berbincang Jumat (20/3/2015).<br /><br />Yorrys yakin perombakan pimpinan fraksi dan alat kelengkapan dewan akan berjalan lancar tanpa hambatan. Mantan Ketua Angkatan Muda Partai Golkar itu mengklaim 58 dari 91 anggota fraksi Golkar di DPR sudah mendukung Agung sebagai Ketua Umum. (baca juga: Yorrys Klaim Separuh Lebih Anggota FPG di DPR Pindah ke Kubu Agung). <br /><br />"Fraksi DPR yang sudah menyatakan bersama-sama kita itu sampai kemarin sudah ada 58 dari 91 orang. Hari Minggu kita akan rapat lagi dengan mereka untuk penempatan-penempatan komisi dan alat-alat kelengkapan yang lain. Jadi, biar Senin nanti efektif bekerja kan," kata dia.</p>\r\n</body>\r\n</html>', '230154 pt (6) [1600x1200].jpg', '20 March 2015', 'ARH'),
(6, 'Cara Paging Menggunakan PHP', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p style="text-align: justify;"><span style="font-size: 12pt;">Pada tutorial lanjutan PHP di carikode.com ini kita akan belajar dan membahas tentang&nbsp;Tutorial PHP : Membuat paging dengan PHP . apa itu paging ? paging dalam php bisa di katakan sebagai cara untuk menampilkan record data secara per record, perhalaman atau menampilkannya dalam bentuk yang di pisah-pisah menjadi beberapa halaman tergantung pada jumlah record dan berapa jumlah record yang ingin di tampilkan . misal nya kita memiliki record data sebanyak 70 buah , maka akan sedikit terasa semak jika kita menampilkan semua datanya sekaligus . oleh karena itu dengan fungsi paging ini kita bisa menampilkan nya perhalaman atau per record , misal nya dari 70 buah data record tadi kita menampilkan nya per 10 record , maka halaman nya akan menjadi 7 halaman . karena jumlah halaman di ambil dari jumlah record di bagi jumlah record yang ingin di tampilkan .</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 12pt;">&nbsp;</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 12pt;">oke langsung saja kita masuk ke contoh dan algoritma dari paging yang akan kita buat .</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 12pt;">apa saja yang kita butuhkan untuk membuat paging dalam tutorial ini?</span><br /><span style="font-size: 12pt;">1 . index.php</span><br /><span style="font-size: 12pt;">2 . record</span></p>\r\n</body>\r\n</html>', '1.PNG', '22 March 2015', 'RDB'),
(7, 'Akuntansi', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Akuntansi</strong> adalah pengukuran, penjabaran, atau pemberian kepastian mengenai informasi yang akan membantu manajer, investor, otoritas <a title="Pajak" href="http://id.wikipedia.org/wiki/Pajak">pajak</a> dan pembuat keputusan lain untuk membuat alokasi sumber daya keputusan di dalam <a title="Perusahaan" href="http://id.wikipedia.org/wiki/Perusahaan">perusahaan</a>, <a title="Organisasi" href="http://id.wikipedia.org/wiki/Organisasi">organisasi</a>, dan lembaga pemerintah. Akuntansi adalah seni dalam mengukur, berkomunikasi dan menginterpretasikan aktivitas keuangan. Secara luas, akuntansi juga dikenal sebagai "bahasa bisnis".<sup id="cite_ref-Acc_1-0" class="reference"><a href="http://id.wikipedia.org/wiki/Akuntansi#cite_note-Acc-1">[1]</a></sup> Akuntansi bertujuan untuk menyiapkan suatu laporan keuangan yang akurat agar dapat dimanfaatkan oleh para manajer, pengambil kebijakan, dan pihak berkepentingan lainnya, seperti pemegang saham, kreditur, atau pemilik. Pencatatan harian yang terlibat dalam proses ini dikenal dengan istilah pembukuan. Akuntansi keuangan adalah suatu cabang dari akuntansi dimana informasi keuangan pada suatu bisnis dicatat, diklasifikasi, diringkas, diinterpretasikan, dan dikomunikasikan. Auditing, satu disiplin ilmu yang terkait tapi tetap terpisah dari akuntansi, adalah suatu proses dimana pemeriksa independen memeriksa <a title="Laporan keuangan" href="http://id.wikipedia.org/wiki/Laporan_keuangan">laporan keuangan</a> suatu organisasi untuk memberikan suatu pendapat atau opini - yang masuk akal tapi tak dijamin sepenuhnya - mengenai kewajaran dan kesesuaiannya dengan prinsip akuntansi yang berterima umum.</p>\r\n<p>Praktisi akuntansi dikenal sebagai <a title="Akuntan" href="http://id.wikipedia.org/wiki/Akuntan">akuntan</a>. Akuntan bersertifikat resmi memiliki gelar tertentu yang berbeda di tiap negara. Contohnya adalah <em><a class="new" title="Chartered Accountant (halaman belum tersedia)" href="http://id.wikipedia.org/w/index.php?title=Chartered_Accountant&amp;action=edit&amp;redlink=1">Chartered Accountant</a></em> (FCA, CA or ACA), <em><a class="new" title="Chartered Certified Accountant (halaman belum tersedia)" href="http://id.wikipedia.org/w/index.php?title=Chartered_Certified_Accountant&amp;action=edit&amp;redlink=1">Chartered Certified Accountant</a></em> (<a class="new" title="Association of Chartered Certified Accountants (halaman belum tersedia)" href="http://id.wikipedia.org/w/index.php?title=Association_of_Chartered_Certified_Accountants&amp;action=edit&amp;redlink=1">ACCA</a> atau <a class="new" title="FCCA (halaman belum tersedia)" href="http://id.wikipedia.org/w/index.php?title=FCCA&amp;action=edit&amp;redlink=1">FCCA</a>), <em><a class="new" title="Management accounting (halaman belum tersedia)" href="http://id.wikipedia.org/w/index.php?title=Management_accounting&amp;action=edit&amp;redlink=1">Management Accountant</a></em> (ACMA, FCMA atau AICWA), <em><a class="new" title="Certified Public Accountant (halaman belum tersedia)" href="http://id.wikipedia.org/w/index.php?title=Certified_Public_Accountant&amp;action=edit&amp;redlink=1">Certified Public Accountant</a></em> (CPA), dan <em>Certified General Accountant</em> (CGA). Di <a title="Indonesia" href="http://id.wikipedia.org/wiki/Indonesia">Indonesia</a>, akuntan publik yang bersertifikat disebut CPA Indonesia (sebelumnya: BAP atau Bersertifikat Akuntan Publik).</p>\r\n</body>\r\n</html>', 'bli.PNG', '22 March 2015', 'ARS'),
(10, 'Makrab', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Assalamualaikum ..</p>\r\n<p>Pada tutorial lanjutan PHP di carikode.com ini kita akan belajar dan membahas tentang&nbsp;Tutorial PHP : Membuat paging dengan PHP . apa itu paging ? paging dalam php bisa di katakan sebagai cara untuk menampilkan record data secara per record, perhalaman atau menampilkannya dalam bentuk yang di pisah-pisah menjadi beberapa halaman tergantung pada jumlah record dan berapa jumlah record yang ingin di tampilkan . misal nya kita memiliki record data sebanyak 70 buah , maka akan sedikit terasa semak jika kita menampilkan semua datanya sekaligus . oleh karena itu dengan fungsi paging ini kita bisa menampilkan nya perhalaman atau per record , misal nya dari 70 buah data record tadi kita menampilkan nya per 10 record , maka halaman nya akan menjadi 7 halaman . karena jumlah halaman di ambil dari jumlah record di bagi jumlah record yang ingin di tampilkan .</p>\r\n<p>&nbsp;</p>\r\n<p>oke langsung saja kita masuk ke contoh dan algoritma dari paging yang akan kita buat .</p>\r\n<p>apa saja yang kita butuhkan untuk membuat paging dalam tutorial ini?<br />1 . index.php<br />2 . record</p>\r\n</body>\r\n</html>', 'Chrysanthemum.jpg', '22 March 2015', 'ARH'),
(11, 'Membuat Paging dengan PHP dan MySQL', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p style="text-align: justify;">Menampilkan data dalam jumlah banyak dalam satu halaman bukanlah pilihan yang baik. Selain membuat load database menjadi besar, dari sisi user juga tentu tidak nyaman untuk selalu men-<em>scroll</em>halaman hingga ratusan bahkan ribuan baris data. Untuk itu diperlukan pemecahan data menjadi beberapa halaman dengan jumlah data yang terbatas setiap halamannya (misalkan 20 &ndash; 50 data per halaman).</p>\r\n<p style="text-align: justify;">Membuat paging dengan PHP tidaklah sulit. Silahkan ikuti tutorial berikut ini.<br /><span id="more-27"></span></p>\r\n<h2 style="text-align: justify;">Materi Dasar</h2>\r\n<p style="text-align: justify;">Tentu kalian sudah tahu bahwa untuk menampilkan data dari database adalah dengan query <code>SELECT * FROM nama_tabel</code>. Query tersebut akan menampilkan seluruh data dari tabel.</p>\r\n<p style="text-align: justify;">Untuk membatasi jumlah data yang ditampilkan, tambahkan perintah <code>LIMIT offset, row_count</code> sehingga untuk menampilkan data sebanyak 50 row, query menjadi seperti berikut.</p>\r\n</body>\r\n</html>', 'Chrysanthemum.jpg', '22 March 2015', 'ARH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto_gallery`
--

CREATE TABLE IF NOT EXISTS `foto_gallery` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `judul_foto` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  PRIMARY KEY (`id_foto`),
  KEY `fk_id_user1` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `foto_gallery`
--

INSERT INTO `foto_gallery` (`id_foto`, `judul_foto`, `foto`, `id_user`) VALUES
(1, 'hahaha', '230154 pt (6) [1600x1200].jpg', 'ARH'),
(2, 'ggggg', 'IMG_0593.jpg', 'ARH'),
(3, 'seruu', '230154 pt (6) [1600x1200].jpg', 'ARH'),
(4, 'bbbb', 'Koala.jpg', 'ARS'),
(5, 'pinguin', 'Penguins.jpg', 'GGS'),
(6, 'vvv', 'Desert.jpg', 'GGS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(10) NOT NULL,
  `nama_user` varchar(60) NOT NULL,
  `alamat_user` varchar(60) NOT NULL,
  `nomor_hp_user` varchar(15) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `moto_hidup` varchar(100) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat_user`, `nomor_hp_user`, `tempat_lahir`, `tanggal_lahir`, `moto_hidup`, `jabatan`, `foto`, `username`, `password`) VALUES
('AAN', 'AA Ngurah Agus Chandra	', 'Denpasar, Bali', '085310854127', '-', '-', '-', 'Divisi IT', '9.jpg', 'bli', '12345'),
('AFS', 'Agung Firdaus Salam', 'Bekasi, Jawa Barat', '0457890967890', 'Bekasi', '11 Maret 1994', '-', 'Wakil Ketua', '2.jpg', 'daus', '12345'),
('ALN', 'Alfitrya Nanda', 'Pariaman, Padang Sumatera Barat', '081382256306', '-', '-', '-', 'Sekretaris', '3.jpg', 'alfi', '12345'),
('ARH', 'Afifur Rahman', 'Demak, jawa tengah', '098765432123', 'Grobogan', '2015-01-13', 'Berusaha', 'divisi IT', 'IMG_0593.jpg', 'afifur', '54321'),
('ARS', 'Adam Robi Saputra', 'DKI Jakarta', '089699777070', '-', '-', '-', 'Divisi Teknik', 'r.jpg', 'robi', '12345'),
('FIA', 'Fadjar Innal Azhar', 'Bekasi, Jawa Barat', '089672351944', '-', '-', '-', 'Divisi Akuntansi', '57.jpg', 'innal', '12345'),
('FJI', 'Fajri Ivananda', 'Padang, Sumatera Barat', '081993398566', '-', '-', '-', 'Divisi Akuntansi', 'hh.jpg', 'fajri', '12345'),
('FRZ', 'Fariz Adlan', 'Surakarta, Jawa Tengah', '083866341433', '-', '-', '-', 'Divisi Desain', '1.jpg', 'fariz', '12345'),
('GGS', 'Gugun Gunari', 'Bogor, Jawa Barat', '089654965284', '-', '-', '-', 'Divisi Desain', '1.jpg', 'gugun', '12345'),
('RDB', 'Ridho Dinda Bakti', 'Pariaman, Padang Sumatera Barat', '082126980380', '-', '-', '-', 'Bendahara', '5.jpg', 'ridho', '12345'),
('SYO', 'Syafi''i Oktavian', 'Surakarta, Jawa Tengah', '0876433245678', 'Surakarta', '30 Mei 1993', '-', 'Ketua', '1.jpg', 'syafii', '12345');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `foto_gallery`
--
ALTER TABLE `foto_gallery`
  ADD CONSTRAINT `fk_id_user1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
