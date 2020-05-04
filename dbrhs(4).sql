-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2020 pada 08.11
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrhs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_artikel`
--

CREATE TABLE `db_artikel` (
  `id_artikel` int(11) NOT NULL,
  `n_kategori` varchar(50) NOT NULL,
  `k_kategori` int(11) NOT NULL,
  `judul` text NOT NULL,
  `caption` text NOT NULL,
  `isi` text NOT NULL,
  `n_author` varchar(50) NOT NULL,
  `k_author` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `n_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_artikel`
--

INSERT INTO `db_artikel` (`id_artikel`, `n_kategori`, `k_kategori`, `judul`, `caption`, `isi`, `n_author`, `k_author`, `gambar`, `n_date`) VALUES
(4, 'Parenting', 6, 'Tetap Provaksin di Tengah Munculnya Kelompok Antivaksin, Ini Alasannya\r\n', 'Perdebatan mengenai pemberian vaksin telah berlangsung sejak dulu hingga menghasilkan kubu antivaksin dan provaksin. Namun, banyak pendapat kelompok antivaksin yang sebenarnya justru dapat membahayakan kesehatan anak.', 'Berbicara mengenai pro kontra vaksinasi memang tak ada habisnya. Kelompok provaksin dan antivaksin saling beradu argumen baik mengenai efektivitas, keselamatan, maupun faktor lainnya yang berkaitan dengan vaksin.\r\n\r\nOrang yang antivaksin menolak untuk memvaksin anaknya karena berbagai alasan, termasuk isu religius maupun konspirasi. Padahal bagi dunia kesehatan, vaksin menjadi temuan yang penting karena dapat mencegah berbagai penyakit.\r\n\r\n\r\nBaca Juga\r\nWaspadai Benjolan di Kelopak Mata Anak Sebagai Tanda Bintitan\r\nPengembangan Vaksin Corona Sudah Sampai Mana? Ini Data Terbaru\r\n6 Jenis Vaksin yang Direkomendasikan untuk Orang Dewasa\r\nArgumen kelompok antivaksin\r\nOrang-orang antivaskin terbagi ke dalam beberapa argumen yang membuatnya menolak pemberian vaksin, antara lain:\r\n\r\nVaksin memberi efek samping negatif\r\nKelompok antivaksin menyatakan bahwa terdapat efek samping negatif yang dapat ditimbulkan oleh vaksin. Setiap vaksin dibuat dengan komponen yang berbeda-beda, sehingga masing-masing dapat memengaruhi tubuh secara berbeda pula. Menurut CDC, semua vaksin membawa risiko reaksi alergi yang mengancam jiwa, seperti kejang, penurunan kesadaran, koma bahkan kerusakan otak. Namun, kasus ini amat jarang terjadi yaitu hanya 1 kasus per sejuta anak.\r\n\r\nVaksin haram untuk digunakan\r\n\r\nAda bahan vaksin yang disebut-sebut mengandung lemak babi sehingga haram menggunakannya. Pada tahun 2018, MUI mengeluarkan fatwa tidak halal terhadap vaksin MR karena menggunakan enzim babi dalam proses pembuatannya. Namun, vaksin ini tetap boleh diberikan pada kondisi tertentu, seperti dampak bahaya tidak vaksin lebih besar. Meski begitu, sebagian orang tetap menolak untuk memberi vaksin pada anaknya.\r\n\r\nVaksin hanya alat meraup keuntungan\r\nKelompok antivaksin memandang vaksin sebagai alat meraup keuntungan bagi perusahaan farmasi. Terdapat pula anggapan yang menyatakan bahwa industri vaksin disetir untuk mendapat laba yang berlimpah dengan dalih guna melindungi nyawa manusia. Teori konspirasi lainnya melibatkan pemerintah di mana imunisasi digunakan untuk mengendalikan atau mengurangi populasi dunia.\r\n\r\nVaksin tidak memberi pengaruh yang efektif\r\nMeski sudah divaksinasi, namun anak masih bisa sakit. Hal inilah yang membuat orang-orang antivaksin tidak mempercayai keefektifan yang dimiliki vaksin. Selain itu, kekebalan tubuh yang alami juga dianggap lebih efektif dalam melawan penyakit dan melindungi tubuh daripada vaksin buatan. \r\n\r\nArgumen kelompok provaksin\r\nSementara, menurut kelompok provaksin orangtua harus melakukan berbagai cara untuk memastikan anak-anaknya sehat dan terlindungi dari berbagai penyakit. Vaksin pun menjadi cara terbaik dalam mewujudkan hal ini. Vaksin digunakan untuk menghasilkan kekebalan aktif pada tubuh terhadap suatu penyakit tertentu. Berikut alasan pentingnya pemberian vaksin:\r\n\r\nVaksin membantu mencegah anak terkena berbagai penyakit\r\nVaksinasi dapat melindungi anak dari penyakit serius dan komplikasi penyakit yang dapat dicegah dengan vaksin, seperti amputasi lengan atau kaki, kelumpuhan anggota badan, gangguan pendengaran, dan lainnya. Selain itu, anak yang mendapat vaksin juga tidak akan mudah tertular penyakit tertentu dari orang lain.\r\n\r\nVaksin aman digunakan\r\nPara ilmuwan, dokter, dan pemerintah menyelidiki setiap vaksin secara menyeluruh dalam proses yang panjang dan sangat hati-hati. Mayoritas penelitian pun menunjukkan bahwa vaksin aman digunakan. Perlu diketahui juga bahwa vaksin sangat jarang memberi efek samping yang parah.\r\n\r\nVaksin mencegah anak menularkan penyakit\r\nVaksin tak hanya melindungi anak, namun juga orang-orang di sekitarnya. Jika anak tidak divaksinasi, maka ia dapat menyebarkan penyakit pada anak-anak lain atau orang yang sistem kekebalan tubuhnya lemah. Hal ini dapat mengakibatkan komplikasi jangka panjang atau bahkan kematian pada orang-orang yang rentan tersebut. Selain itu, wabah penyakit pun bisa terjadi.\r\n\r\nPenghematan biaya dalam jangka panjang\r\nPemberian vaksinasi pada anak memungkinkan penghematan biaya bagi orang tua dalam jangka panjang. Sebab jika tidak mendapat vaksin, anak lebih mungkin terkena penyakit tertentu yang dapat berakibat fatal hingga orang tua harus lebih banyak mengeluarkan biaya untuk pengobatan anak.', 'Dina Rahmawati', 3, 'https://cms.sehatq.com/cdn-cgi/image/f=auto,width=345,height=273,fit=cover,background=white,quality=100/public/img/article_img/tetap-provaksin-di-tengah-munculnya-kelompok-antivaksin-ini-alasannya-1587349791.jpg', 'Mon, 20 Apr 2020'),
(5, 'Hidup Sehat', 3, 'Bolehkah Ziarah Kubur Saat Pandemi Corona? Ini Penjelasan Kementerian Agama', 'Menjelang bulan puasa, biasanya umat Islam melakukan ziarah ke makam keluarga atau kerabat. Akan tetapi, bolehkah melakukan ziarah kubur saat pandemi corona berlangsung?', 'Memang sudah menjadi tradisi bagi umat muslim di Indonesia untuk melakukan ziarah kubur menjelang bulan puasa. Meski dapat dilakukan setiap saat, namun ziarah kubur menjelang bulan puasa mempunyai makna yang sangat istimewa karena bulan Sya’ban ini memiliki nilai keutamaan dibanding bulan lainnya. Kini, muncul berbagai pertanyaan mengenai ziarah kubur saat pandemi corona.\r\n\r\nBolehkah ziarah kubur saat pandemi corona?\r\nDilansir dari Radio Republik Indonesia (RRI), Kementerian Agama mengimbau seluruh masyarakat untuk tidak melakukan ziarah kubur menjelang bulan Ramadhan dan Idul Fitri tahun 1441 Hijriyah karena masih mewabahnya Covid-19 di Indonesia. Dikhawatirkan ketika berziarah, risiko penularan penyakit tersebut bisa terjadi.\r\n\r\nSeperti yang telah diketahui, penyebaran virus corona baru (SARS-CoV-2) terjadi sangat cepat. Penyakit ini dapat menular dari orang ke orang melalui droplet dari hidung atau mulut orang yang terinfeksi ketika batuk, bersin atau, membuang napas. Saat Anda menghirupnya, maka Anda bisa terinfeksi. \r\n\r\nSelain itu, Anda juga dapat tertular melalui benda atau permukaan yang telah terkontaminasi droplet orang terinfeksi. Ketika Anda menyentuh benda atau permukaan tersebut, kemudian menyentuh mata, hidung atau mulut, maka Anda pun dapat terinfeksi Covid-19.\r\n\r\nOleh sebab itu, Kemenag pun meminta agar ziarah kubur diganti dengan berdoa di rumah masing-masing saja. “Insyaallah nilai pahalanya tidak berkurang sedikit pun,” ujar Wakil Kementerian Agama, Zainut Tauhit Sa’adi. Mengingat bahwa inti dari berziarah, yaitu mendoakan yang telah wafat sembari mengingat akhirat. \r\n\r\n\r\nJadi, penting untuk tetap melakukan physical distancing di tengah pandemi ini agar penyebaran tak terus berlanjut. Bahkan Kemenag juga mengimbau untuk tidak bersilaturahmi secara langsung ke rumah keluarga maupun kerabat. Masyarakat pun masih dapat menggunakan media sosial dan media daring untuk silaturahmi dan bermaaf-maafan.\r\n\r\nZiarah kubur jenazah positif corona\r\nSempat tersiar kabar jika tanah kuburan jenazah positif Covid-19 juga dapat menularkan virus, sehingga pernah terjadi beberapa kasus penolakan penguburan jenazah korban corona di beberapa daerah. Akan tetapi, ini merupakan hal yang keliru. Pasalnya jenazah yang telah dikelola sesuai protokol telah masuk ke dalam peti sehingga kemungkinannya kecil bila terdapat virus di dalam tanah.\r\n\r\nMeski tak dapat menularkan virus bukan berarti Anda dapat berziarah. Imbauan dari Kemenag untuk tidak berziarah tetap harus diindahkan. \r\n\r\n\r\n\r\nPanduan Membayar Zakat Fitrah Agar Tetap Aman di Tengah Pandemi Corona\r\nTips Mempersiapkan Puasa Ramadan Hari Pertama Agar Lancar Maksimal\r\nMemahami Manfaat Puasa untuk Kesehatan\r\nMelayat kerabat yang meninggal akibat corona \r\nTubuh pasien Covid-19 yang baru meninggal kemungkinan dapat menularkan virus setidaknya selama berjam-jam atau berhari-hari. Sebab virus masih berada di sekresi pernapasan dan berpotensi masih bereproduksi pada sel-sel yang belum mati di paru-paru. \r\n\r\nPermukaan tubuh pasien, seperti tangan, pakaian, dan tempat lain di mana virus bersembunyi pun dapat menjadi sumber infeksi karena virus tetap aktif di permukaan mati untuk beberapa waktu. Menurut WHO, biasanya patogen yang membunuh orang tidak akan bertahan cukup lama untuk menyebar ke orang lain setelah kematian orang tersebut.\r\n\r\nAkan tetapi, belum diketahui secara pasti berapa lama virus tersebut dapat bertahan. Oleh sebab itu, jenazah positif corona disarankan untuk segera dikuburkan.\r\n\r\nMayat pun tidak boleh dibiarkan terbuka. Jika ada penundaan penguburan, maka perlu diisolasi dan disimpan dalam suhu -10? atau lebih. Mengikuti perilaku virus sebelumnya, suhu dingin atau panas yang ekstrem setidaknya dapat mengubah sifat virus. Jika tidak membunuhnya, maka bisa membuatnya tidak aktif. Penanganan jenazah positif corona pun harus dilakukan dengan sangat hati-hati menggunakan APD.\r\n\r\nJika ada orang yang dikenal meninggal akibat Covid-19 maka Anda juga sebaiknya tidak datang melayat karena dikhawatirkan keluarga dari jenazah tersebut juga telah terinfeksi Covid-19. Untuk saat ini, tetaplah melakukan physical distancing dan #dirumahaja agar penyebaran penyakit ini segera usai.', 'Dina Rahmawati', 3, 'https://cms.sehatq.com/cdn-cgi/image/f=auto,width=545,height=373,fit=cover,background=white,quality=100/public/img/article_img/bolehkah-ziarah-kubur-saat-pandemi-corona-ini-penjelasan-kementerian-agama-1587378352.jpg', 'Mon, 20 Apr 2020'),
(6, 'Kesehatan Mental', 2, 'Manfaat Percaya Diri dan Cara Melatihnya', 'Manfaat percaya diri adalah membentuk pribadi yang tidak gampang takut hingga memperbaiki hubungan personal maupun sosial. Bagaimana cara melatihnya agar menjadi orang yang percaya diri?', 'Banyak orang bilang manfaat percaya diri yang utama adalah meraih kesuksesan di masa kini maupun masa depan. Percaya diri adalah cara pandang Anda mengenai skill atau kemampuan diri sendiri. Ketika Anda menerima diri apa adanya, maka level kepercayaan diri akan naik sehingga Anda bisa menetapkan ekspektasi yang realistis serta menerima kritik dengan jiwa yang lapang.\r\n\r\nDi sisi lain, kepercayaan diri rendah membuat Anda selalu merasa ragu, pasif, bahkan kesulitan memercayai orang lain. Akibatnya, Anda kerap merasa minder, sensitif terhadap kritik, dan merasa tidak dicintai.\r\n\r\nMerupakan hal yang lumrah jika Anda mengalami krisis kepercayaan diri di area-area tertentu saja. Misalnya, Anda percaya diri dalam hal akademis ataupun olahraga, tapi tidak percaya diri saat menjalin hubungan personal atau sosial.\r\n\r\nManfaat percaya diri\r\nAda banyak hal yang akan Anda rasakan dan alami ketika memiliki kepercayaan diri tinggi. Menurut para psikolog, manfaat percaya diri itu adalah:\r\n\r\nTidak gampang takut dan cemas\r\nSemakin Anda merasa percaya diri, semakin keras suara di dalam kepala yang meneriakkan ‘saya bisa!’ atau semacamnya. Dengan demikian, Anda pun tidak ragu lagi untuk melangkah menuju kesuksesan.\r\n\r\n\r\nSebaliknya, rasa percaya diri rendah dapat menghambat seseorang untuk maju. Ia akan terbebani dengan ketakutan akan kegagalan bahkan sebelum mencobanya.\r\n\r\nMeningkatkan motivasi\r\nManfaat percaya diri ini sangat penting ketika Anda mengalami masalah yang menghambat jalan menuju sukses. Dengan kepercayaan diri tinggi, Anda akan merasa tertantang untuk memecahkan masalah tersebut bukan dengan jalan pintas.\r\n\r\nLebih tangguh\r\nMemulai sesuatu dengan kepercayaan diri bukan berarti Anda tidak akan gagal. Namun, bedanya dengan orang yang tidak percaya diri, Anda tidak akan menyerah begitu saja dan berjuang mencari jalan keluar karena Anda tahu apa yang Anda kerjakan.\r\n\r\nHal yang tidak membunuh Anda akan membuat Anda lebih kuat, begitu pula dengan orang yang memiliki kepercayaan diri tinggi. Semakin sering ia bangkit dari kegagalan, semakin besar peluangnya untuk meraih kesuksesan.\r\n\r\nMemperbaiki hubungan personal dan sosial\r\nManfaat percaya diri akan sangat terlihat ketika Anda berhubungan dengan orang lain, baik secara personal maupun sosial. Anda akan menjadi diri sendiri, merasa bebas bertindak apa pun tanpa takut tidak disukai oleh orang lain, serta tidak suka membanding-bandingan diri sendiri dengan orang lain.\r\n\r\nKepercayaan diri juga akan membangun empati. Ketika pikiran Anda tidak berkutat pada ketakutan, Anda akan lebih peka pada hal-hal yang terjadi pada orang lain.\r\n\r\nEmpati inilah yang kerap membedakan orang dengan kepercayaan diri tinggi dengan orang yang sombong alias arogan. Percaya diri akan membuat Anda pandai membaca situasi, sedangkan arogansi akan membuat Anda suka membanggakan kelebihan diri sendiri tak peduli kondisi orang yang menjadi lawan bicara.\r\n\r\nBaca Juga\r\n5 Cara Mengendalikan Emosi agar Tetap Tenang\r\nTips Melatih Sikap Pantang Menyerah\r\nCemburu Tanda Sayang? Ini Cara Menghilangkan Cemburu\r\nBagaimana cara meningkatkan percaya diri?\r\nUntuk mendapatkan manfaat percaya diri di atas, Anda mungkin harus bekerja lebih keras dari orang lain. Bagi Anda yang ingin meningkatkan level kepercayaan diri, berikut tips yang dapat Anda lakukan:\r\n\r\nBerhenti membandingkan diri sendiri dengan orang lain\r\nSemakin sering Anda membanding-bandingkan diri sendiri dengan orang lain, semakin rendah tingkat kepercayaan diri Anda. Ingat, rumput tetangga selalu lebih hijau dibanding halaman sendiri sehingga selalu melihat ke sebelah hanya akan menggerus level percaya diri sekaligus membuat Anda tidak produktif.\r\n\r\nJangan sering menyalahkan diri sendiri\r\nMelakukan kesalahan, mengalami kegagalan, atau terjatuh berkali-kali dalam hidup adalah hal yang lumrah dan dialami oleh semua orang. Ingat, tidak ada satupun manusia yang sempurna.\r\n\r\nKetika Anda mengalaminya, langkah pertama yang harus Anda lakukan adalah tidak menyalahkan diri sendiri. Bila perlu, tumpahkan perasaan Anda pada orang terdekat atau cari kegiatan yang membuat Anda tertawa.\r\n\r\nPerbanyak aktivitas fisik\r\nPenelitian menunjukkan orang yang banyak melakukan aktivitas fisik memiliki tingkat percaya diri tinggi. Hal ini dikarenakan aktivitas fisik seperti berolahraga membuat tubuh lebih fit sehingga Anda tidak rentan terkena penyakit atau merasa lemah dan tidak berdaya.\r\n\r\nSalurkan keraguan menjadi hal yang positif\r\nOrang yang percaya diri bukannya tidak pernah meragukan diri sendiri. Hanya saja, mereka bisa menepis dan menyalurkan rasa ragu tersebut menjadi motivasi untuk melakukan hal-hal poisitif.\r\n\r\nKeluar dari kebiasaan\r\nJika Anda sering merasa minder untuk mengutarakan pendapat dalam rapat, cobalah sekali-sekali mengeluarkan ide Anda. Dengan begitu, Anda akan belajar bahwa melakukan hal-hal yang sebelumnya terlihat mustahil sebetulnya tidak terlalu sulit dan tidak jarang akan menghadirkan manfaat percaya diri bagi kesehatan mental Anda.\r\n\r\nDengan melatih beberapa aspek di atas secara rutin, niscaya akan membuat Anda menjadi pribadi yang lebih percaya diri. Jadi, tunggu apa lagi? segera latih percaya diri Anda.', 'Asni Harismi', 1, 'https://cms.sehatq.com/cdn-cgi/image/f=auto,width=545,height=373,fit=cover,background=white,quality=100/public/img/article_img/manfaat-percaya-diri-dan-cara-melatihnya-1586177994.jpg', 'Mon, 20 Apr 2020'),
(10, 'Hidup Sehat', 3, 'Cara Makan Ikan', 'Ikan yang baik adalah ikan yang tidak tersakiti', '$data[\'dnone\'] = \'\';\r\n        $data[\'info\'] = \'Data telah dihapus\';\r\n        $data[\'artikel\'] = $this->model_artikel->terbaru()->result();\r\n        $this->load->view(\'templates-admin/header\');\r\n        $this->load->view(\'templates-admin/sidebar\');\r\n        $this->load->view(\'admin/data_artikel\',$data);\r\n        $this->load->view(\'templates-admin/footer\');', 'rizkiamanullah', 12, 'https://cms.sehatq.com/cdn-cgi/image/f=auto,width=545,height=373,fit=cover,background=white,quality=100/public/img/article_img/cara-mengolah-ikan-yang-tanpa-harus-membuang-nutrisinya-1586258403.jpg', 'Tue, 21 Apr 2020'),
(11, 'Penyakit', 1, 'Corona', 'covid22', 'Koronavirus[1] atau coronavirus (istilah populernya: virus korona, virus corona, atau virus Corona) adalah sekumpulan virus dari subfamili Orthocoronavirinae dalam keluarga Coronaviridae dan ordo Nidovirales.[2][3] Kelompok virus ini yang dapat menyebabkan penyakit pada burung dan mamalia (termasuk manusia).[4] Pada manusia, koronavirus menyebabkan infeksi saluran pernapasan yang umumnya ringan, seperti pilek, meskipun beberapa bentuk penyakit seperti SARS, MERS, dan COVID-19 sifatnya lebih mematikan. Manifestasi klinis yang muncul cukup beragam pada spesies lain: pada ayam, koronavirus menyebabkan penyakit saluran pernapasan atas, sedangkan pada sapi dan babi menyebabkan diare. Belum ada vaksin atau obat antivirus untuk mencegah atau mengobati infeksi koronavirus pada manusia.\r\n\r\nKoronavirus merupakan virus beramplop dengan genom RNA utas tunggal plus dan nukleokapsid berbentuk heliks simetris. Jumlah genom koronavirus berkisar antara 27–34 kilo pasangan basa, terbesar di antara virus RNA yang diketahui.[5] Nama koronavirus berasal dari bahasa Latin corona yang artinya mahkota, yang mengacu pada tampilan partikel virus (virion): mereka memiliki pinggiran yang mengingatkan pada mahkota atau korona matahari. \r\n', 'admin', 13, 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Coronaviruses_004_lores.jpg/1200px-Coronaviruses_004_lores.jpg', 'Tue, 21 Apr 2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(15) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Entrostop 1 box', 'Obat untuk mengatasi sering buang air besar', 'Obat', 13500, 47, 'Entrostop.jpg'),
(2, 'Panadol biru 1 Strip', 'Panadol Biru 1 Strip isi 10 Kaplet\r\nMeredakan sakit kepala', 'Obat', 9000, 200, 'Panadolbiru.jpg'),
(3, 'Paramex 1 box', 'PARAMEX (1 box isi 50 strip @ 4 tablet ) untuk meredakan sakit kepala', 'Obat', 100000, 49, 'Paramex.jpg'),
(4, 'Actifed hijau', 'Obat untuk membantu meredakan batuk berdahak', 'Obat', 50000, 60, 'Actifed.jpg'),
(7, 'Kratingdaeng botol', 'minuman berenergi', 'Minuman', 5000, 80, 'Kratingdaeng2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id_invoice` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id_invoice`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(7, 'ff', 'aa', '2020-04-14 21:36:12', '2020-04-15 21:36:12'),
(8, 'Reihan', 'Sukajadi', '2020-04-14 21:38:50', '2020-04-15 21:38:50'),
(9, 'hakim', 'semarang', '2020-04-14 21:40:14', '2020-04-15 21:40:14'),
(10, '', '', '2020-04-15 20:23:00', '2020-04-16 20:23:00'),
(11, 'Agus Narestha', 'Bali', '2020-04-18 08:18:27', '2020-04-19 08:18:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komen` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `n_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komen`, `id_user`, `id_artikel`, `nama`, `isi`, `n_date`) VALUES
(18, 2, 1, 'Condro Agung', 'kochenk gan', 'Sun, 12 Apr 2020'),
(19, 2, 3, 'Condro Agung', 'sabar gan', 'Thu, 17 Apr 2020'),
(20, 3, 10, 'Hafiz indriyanto', 'Mantap Slur', 'Tue, 21 Apr 2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` int(11) NOT NULL,
  `id_praktik` int(11) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `tlp_pasien` varchar(20) NOT NULL,
  `keluhan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `id_praktik`, `nama_pasien`, `tlp_pasien`, `keluhan`) VALUES
(1, 1, 'Roni', '09888', 'Sakit perut'),
(2, 1, 'Aceng Fikri', '0822', 'Sakit kepala'),
(3, 3, 'Cecep', '0899', 'Tidak Bisa bernafas'),
(4, 2, 'Andi', '012', 'Salatri'),
(5, 1, 'Condro Agung Putro', '087', 'Kram Bokong'),
(6, 3, 'Agus Narestha', '083', 'Nyeri dan pegal Otak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `id_invoice`, `id_barang`, `nama_barang`, `jumlah`, `harga`, `pilihan`) VALUES
(8, 7, 2, 'Panadol biru 1 Strip', 1, 9000, ''),
(9, 8, 1, 'Entrostop 1 box', 1, 13500, ''),
(10, 8, 2, 'Panadol biru 1 Strip', 1, 9000, ''),
(11, 8, 3, 'Paramex 1 box', 1, 100000, ''),
(12, 8, 4, 'Actifed hijau', 1, 50000, ''),
(13, 9, 7, 'Kratingdaeng botol', 1, 5000, ''),
(14, 9, 1, 'Entrostop 1 box', 1, 13500, ''),
(15, 10, 1, 'Entrostop 1 box', 2, 13500, ''),
(16, 11, 1, 'Entrostop 1 box', 1, 13500, ''),
(17, 11, 3, 'Paramex 1 box', 1, 100000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_praktik`
--

CREATE TABLE `tb_praktik` (
  `id_praktik` int(11) NOT NULL,
  `nama_dokter` varchar(80) NOT NULL,
  `jenis_dokter` varchar(50) NOT NULL,
  `tgl_praktik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_praktik`
--

INSERT INTO `tb_praktik` (`id_praktik`, `nama_dokter`, `jenis_dokter`, `tgl_praktik`) VALUES
(1, 'Dr Ramdan', 'Umum', '15:00 - 21:00'),
(2, 'Hafiz', 'Specialis Ginjal', '19:00 - 22:00'),
(3, 'Prof Arique', 'Specialis Otak', '10:00 - 15:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL,
  `gambar_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `role_id`, `gambar_user`) VALUES
(1, 'admin', 'admin', '123', 1, ''),
(2, 'Reihan', 'xray', '2144', 2, ''),
(3, 'Hafiz indriyanto', 'hafiz', 'idy', 2, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_artikel`
--
ALTER TABLE `db_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indeks untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komen`);

--
-- Indeks untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `tb_praktik`
--
ALTER TABLE `tb_praktik`
  ADD PRIMARY KEY (`id_praktik`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_artikel`
--
ALTER TABLE `db_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_praktik`
--
ALTER TABLE `tb_praktik`
  MODIFY `id_praktik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
