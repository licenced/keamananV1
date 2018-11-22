-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2018 at 02:45 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_kamanan`
--
CREATE DATABASE IF NOT EXISTS `tubes_kamanan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tubes_kamanan`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nim` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nim`, `nama`, `username`, `password`) VALUES
(11111111, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(14116084, 'Doni Agus Adila', 'doni', '202cb962ac59075b964b07152d234b70'),
(14116150, 'Muhammad Ragil Trireza Ramadhan', 'mragil', '202cb962ac59075b964b07152d234b70'),
(14116167, 'ivan teddy', 'lewatjalan', 'c44a471bd78cc6c2fea32b9fe028d30a');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `slug` varchar(51) NOT NULL,
  `text` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `category`, `slug`, `text`, `created`, `updated`, `foto`) VALUES
(8, 'Sekretariat AJI Dibobol, HP dan Dompet Raib', 'article', 'sekretariat-aji-dibobol-hp-dan-dompet-raib', '<p>Asrul Septian Malik&nbsp;&nbsp;<em><em>29 Oct 2018 - 18:05</em></em>&nbsp;</p>\r\n\r\n<p>BANDAR LAMPUNG (Lampost.co)--Sekretariat Aliansi Jurnalis Independen (AJI) Bandar Lampung di jalan Hi. Agus Salim, Kelurahan Kelapa Tiga, (Kaliawi) Tanjungkarang Pusat disantroni maling.</p>\r\n\r\n<p>Alhasil, empat buah HP dari tiga jurnalis yakni Andi Apriyadi, dan Zainal Asikin dari wartawan median Online, dan Enang dari wartawan TV Nasional raib.</p>\r\n\r\n<p>Andi Apriyadi menduga pelaku masuk pada Senin (29/10/2018) dini hari, saat ketiganya tertidur pulas. &quot;Ya pas bangun hape udah enggak ada, padahal di cas semua,&quot; ujarnya kepada Lampost.co, Senin (29/10/2018).</p>\r\n\r\n<p>Selain itu, dompet milik Enang yang berisikan uang Rp150 ribu, dan surat-surat juga lenyap tak bersisa. &quot;Dugaan pelaku masuk lewat jendela di dongkel,&quot; katanya.&nbsp;</p>\r\n', '2018-11-01 16:21:35', NULL, '1329d3f4f23f856ddc1bca30f97af6c9.jpg'),
(9, 'Tak Kapok Mencuri, Remaja 15 Tahun Akhirnya Dicidu', 'article', 'tak-kapok-mencuri-remaja-15-tahun-akhirnya-diciduk', '<p><strong><strong>Ferdi Irwanda&nbsp;&nbsp;</strong></strong><strong><em><strong><em>29 Oct 2018 - 16:40</em></strong></em></strong></p>\r\n\r\n<p>MENGGALA (Lampost.co)--Kriminalitas memang tak memandang usia. KH (15), harus beruurusan dengan polisi karena diduga melakukan pencurian di rumah warga. Awalnya pihak korban selalu memaafkan ulahnya dan berakhir damai. Namun, karena berulang melakukan aksi, remaja ini pun terciduk.</p>\r\n\r\n<p>KH warga Kampung Gedungbandar Rahayu, Kecamatan Gedung Meneng harus terhenti dan berakhir didalam dinginnya jeruji besi Mapolsek Dente Teladas.</p>\r\n\r\n<p>Kapolsek Dente Teladas AKP Suharto mengatakan, KH ditangkap, Senin (29/10/2018) sekira pukul 01.30 WIB, usai melancarkan aksinya. Dia berhasil ditangkap tidak jauh dari rumah korbannya.</p>\r\n\r\n<p>&quot;KH berhasil ditangkap setelah mencuri ponsel di salah satu rumah warga Dusun Tulungarus, Kampung Gedungbandar Rahayu,&quot; kata Suharto, kepada lampost.co, Senin (29/10/2018).</p>\r\n\r\n<p>Penangkapan pelaku berdasarkan laporan dari Wahyudi Setianegara (53) warga Dusun Tulung Arus, Kampung Gedungnandar Rahayu. Tertuang dalam Laporan Polisi Nomor : LP / 124 / X / 2018 / Polda Lpg / Res Tuba / Sek Dente Teladas, tanggal 29 Oktober 2018.&nbsp;</p>\r\n\r\n<p>Suharto menjelaskan, KH diam-diam masuk ke dalam rumah korban, saat korban tengah tertidur, kemudian mengambil 2 unit HP milik korban yang berada di ruang televisi. Namun, aksi KH diketahui oleh korban sehingga pelaku langsung kabur melarikan diri.</p>\r\n\r\n<p>&quot;Korban mengalami kerugian Hp Xiaomi A1 dan Xiaomi Redmi yang ditaksir senilai Rp4 juta,&quot; kata dia. Saat ini pelaku sedang dilakukan pemeriksaan lebih lanjut di Mapolsek Dente Teladas dan akan dijerat dengan Pasal 363 ayat 1 ke 3 KUHPidana tentang pencurian. Diancam dengan pidana penjara paling lama 7 tahun.&nbsp;</p>\r\n', '2018-11-01 16:32:54', NULL, '9e4ffed5cd01769a6a97f34ecfd8444b.jpg'),
(10, 'Bella Tewas Dibacok Begal', 'article', 'bella-tewas-dibacok-begal', '<p><strong><strong>Selasa 04 April 2017, 14:39 WIB</strong></strong></p>\r\n\r\n<p>Komplotan begal di Lampung masih berkeliaran, meski 5 pelaku sebelumnya tewas dalam baku tembak dengan polisi. Baru-baru ini, kawanan begal sadis menewaskan seorang remaja putri, Bunga Fikalia alias Bella (17).</p>\r\n\r\n<p>&quot;Pelakunya masih kami kejar, mudah-mudahan segera tertangkap,&quot; ujar Kapolda Lampung Irjen Sudjarno kepada detikcom, Selasa (4/4/2017).&nbsp;Peristiwa itu terjadi pada Senin (3/4) petang kemarin di Kecamatan Natar, Lampung Selatan. Saat itu Bunga pamit kepada ibunya untuk pergi ke rumah temannya.</p>\r\n\r\n<p>&quot;Korban tidak biasanya pergi lama, sampai akhirnya keluarga baru mengetahui ternyata korban tewas dengan sejumlah luka di tubuhnya akibat senjata tajam,&quot; ujar Sudjarno.&nbsp;Korban sudah tidak bersekolah lagi. Sehari-hari, korban membantu ibunya berjualan kue di pasar. Korban juga membantu adik-adiknya yang masih kecil belajar.&nbsp;Polisi menduga kuat korban tewas dibegal. Sebab motor baru korban yang masih kredit, lenyap.</p>\r\n\r\n<p>&quot;Korban pergi naik motor baru, motor kreditan dan diduga kuat dibawa pelaku,&quot; sambungnya.</p>\r\n\r\n<p>Kepergian Bella menimbulkan duka mendalam bagi keluarga. Bella yang dikenal periang itu mengembuskan napas terakhirnya di ruang ICU RS Bhayangkara Polda Lampung.</p>\r\n', '2018-11-01 16:30:38', NULL, '284933966b4683abe739443ac2ce89b9.jpg'),
(11, 'Begal Pembunuh Polisi di Lampung Mengaku Hanya Iku', 'article', 'begal-pembunuh-polisi-di-lampung-mengaku-hanya-ikut', '<p><strong><strong>Helmi Firdaus &amp; Rinaldy Sofwan, CNN Indonesia | Kamis, 03/09/2015 09:56 WIB</strong></strong></p>\r\n\r\n<p>Bandar Lampung, CNN Indonesia -- Seorang tersangka kejahatan pencurian dengan kekerasan atau begal, Abdul Muthalib, diduga bertanggung jawab atas tewasnya anggota Kepolisian Resor Metro Lampung, Brigadir Kepala Samsul Isnanto. Dul--begitu dia dipanggil--mengaku hanya mengikuti ajakan temannya.</p>\r\n\r\n<p>&quot;Saya sehari-hari kerja tani. Saya diajak oleh Andi,&quot; kata Dul ketika ditemui di Markas Kepolisian Daerah Lampung, Bandar Lampung, Selasa (2/9). Andi adalah tersangka lain yang juga telah ditahan oleh petugas kepolisian.&rsquo; Dengan suara gemetaran dari balik topeng kain hitam yang menutupi wajahnya, Dul mengaku telah menembak Bripka Samsul di bagian paha.</p>\r\n\r\n<p>Kelima tersangka, kata dia, masing-masing mempunyai senjata berbeda. Senjata itu didapatkan dari seseorang bernama Jamal. Ketika ditanya siapa itu Jamal, dia hanya menjawab &quot;sudah meninggal.&quot;</p>\r\n\r\n<p>Kepala Bidang Hubungan Masyarakat Polda Lampung Ajun Komisaris Besar Sulistyaningsih mengatakan para tersangka ditangkap pada 19 Agustus lalu. Mereka di antaranya adalah Andi, Iwan, Ridwan, Sopyan dan Dul.</p>\r\n\r\n<p>Kawanan begal itu menembak Samsul saat hendak mencuri satu unit sepeda motor pada 6 Agustus lalu. Satu proyektil menancap di bagian paha kiri dan sebutir lainnya di bagian kiri perut. Sempat membaik setelah dioperasi, kondisi Samsul berangsur kembali memburuk karena infeksi. Dia akhirnya menghembuskan nafas terakhir pada 29 Agustus lalu.</p>\r\n\r\n<p>Direktur Reserse Kriminal Umum Polda Lampung Komisaris Besar Purwo Cahyoko mengungkapkan, jumlah tindak pidana pencurian dengan pemberatan atau curat sejak Januari hingga Juli mencapai angka 1.194 kasus. Dari jumlah itu, polisi berhasil mengungkap 789 kasus. Untuk kasus yang belum terungkap, Purwo mengaku kesulitan oleh pergerakan para pelaku. &quot;Pergerakan orang itu kan cukup tinggi, kita sudah tahu orangnya tapi penangkapan butuh waktu.&quot;</p>\r\n\r\n<p>Karena itu, pihaknya rutin menjalankan operasi pengejaran untuk menangkap para begal. Meski tak merinci, Purwo menyebut tindakan itu berhasil menurunkan jumlah kasus yang terjadi di wilayahnya.</p>\r\n', '2018-11-01 16:31:45', NULL, '517f87d2ce7565e9c39b7677396cf08b.jpg'),
(12, 'Curi Laptop Tetangga, Pelaku Dibekuk Polisi', 'article', 'curi-laptop-tetangga-pelaku-dibekuk-polisi', '<p><strong><strong>Abu Umaraly&nbsp;&nbsp;</strong></strong><strong><em><strong><em>30 Sep 2018 - 17:06</em></strong></em></strong></p>\r\n\r\n<p>KOTA AGUNG (Lampost.co) -- FR (20) warga Pekon Srikaton, Kecamatan Semaka, Kabupaten Tanggamus menggondol 2 unit laptop dan 2 handphone milik tetangganya dengan cara mendongkel jendela rumah korban, Minggu (30/9/2018).</p>\r\n\r\n<p>Tak butuh waktu lama, aparat kepolisian polsek Semaka, Tanggamus berhasil menangkap pelaku seusai beraksi.</p>\r\n\r\n<p>Kapolsek Semaka AKP Muji Harjono mengatakan pelaku telah melakukan aksi pencurian dengan pemberatan (Curat) sejumlah barang berharga milik korban Dyah Arum Widiastuti (27) warga setempat.&nbsp;</p>\r\n\r\n<p>Dari penangkapan tersebut, aparat kepolisian berhasil mengamankan barang bukti 2 laptop dan 2 HP serta sendal pelaku yang tertinggal saat mencuri.</p>\r\n\r\n<p>&quot;Korban mengaku sempat mengejar dan meneriaki pelaku yang berlari tunggang langgang. Pelaku masuk dari jendela bagian depan rumah dan keluar lewat jendela yang sama,&quot; kata Kapolsek.</p>\r\n\r\n<p>Akibat perbuatannya, pelaku dijerat pasal 363 KUHPidana dengan ancaman maksimal 7 tahun penjara.</p>\r\n', '2018-11-01 16:34:04', NULL, '04a8bd14096d009364a88505c763714f.jpg'),
(13, 'Tersangka Pencuri Sapi Berhasil Ditangkap', 'article', 'tersangka-pencuri-sapi-berhasil-ditangkap', '<p><strong><strong>&nbsp;Deni Zulniyadi&nbsp;&nbsp;</strong></strong><strong><em><strong><em>03 Oct 2018 - 11:04</em></strong></em></strong></p>\r\n\r\n<p>Bandar Lampung (Lampost.co) -- Unit Reskrim Polsek Seputih Mataram, Lampung Tengah meringkus dua tersangka&nbsp;pencuri sapi jenis metal yang meresahkan warga setempat. Komarudin (34) dan Sunyono (42) ditangkap ditempat dan waktu berbeda, Rabu (3/10/2018), dini hari.</p>\r\n\r\n<p>Kapolsek Seputih Mataram Iptu Setio Budi Howo yang memimpin penangkapan itu mengalami luka robek di lengan dan telapak tangan kiri. Hal itu disebabkan terkena tunggak kayu saat dirinya berguling di dalam lubang untuk menghentikan tersangka yang hendak kabur.</p>\r\n\r\n<p>Budi menjelaskan penangkapan para tersangka berdasar pada Laporan Polisi Nomor : LP/413-B/X/2018, tanggal 02 Oktober 2018. Korban Wakino (42) warga Banjaragung, Lamteng, melaporkan perkara pencurian sapi sebagaimana dimaksud dalam pasal 363 KUHPidana.</p>\r\n\r\n<p>Pertama kali polisi meringkus tersangka utamanya yakni Komarudin, warga Bumisetia, Kecamatan Seputih Mataran, Lampung Tengah. Dia ditangkap dalam pelarian di Kampung Ono Harjo Kecamatan Terbanggi Besar, Lampung Tengah. &ldquo;Tersangka kami tangkap dan diborgol. Namun ketika hendak dibawa ke mobil, tersangka melarikan diri,&rdquo; kata Budi.</p>\r\n\r\n<p>Tak ingin kehilangan buruan, polisi mengejar tersangka. Komarudin baru bisa dihentikan setelah polisi menjatuhkannya. &ldquo;Tersangka kami sekap dan jatuhkan dilobang. Bahkan kami sempat berguling-guling dengan tersangka yang mengakibatkan saya mengalami luka robek dilengan kiri dan telapak tangan akibat terkena tunggak kayu,&rdquo; kata dia.</p>\r\n\r\n<p>Tersangka lainnya yakni Sunyono, warga Dusun Jatiwaras, Kecamatan .Bandar Mataram, .Lamteng. Sunyono yang ditangkap dikediamannya ini berperan membantu Komarudin mengangkut sapi curian menggunakan mobil truck Nopol BG-4319-ML.</p>\r\n\r\n<p>Sementara itu korban Wakino dalam laporannya kepada polisi mengaku sapi yang dicuri itu diikat di kandang di belakang rumahnya. &ldquo;Kami sempat melakukan pencarian bersama-sama tetangga tapi tidak ketemu,&rdquo; kata korban. Akibat kejadian tersebut korban mengalami kerugian seekor sapi betina jenis metal dengan nilai uang sekitar Rp25 juta.&nbsp;</p>\r\n', '2018-11-01 16:42:52', NULL, 'a1eae74f53b523bf90bf4329c8e00f6a.jpg'),
(14, 'Rumah Guru SD Dibobol Maling', 'article', 'rumah-guru-sd-dibobol-maling', '<p><strong><strong>Aris Susanto&nbsp;&nbsp;</strong></strong><strong><em><strong><em>07 Oct 2018 - 15:57</em></strong></em></strong><strong>&nbsp;</strong></p>\r\n\r\n<p>PESAWARAN (Lampost.co) -- Kawanan pencuri membobol rumah guru SD di Dusun C, &nbsp;RT 002/RW 003, Desa Hanura, Kecamatan Teluk Pandan, Pesawaran, Sabtu (6/10/2018), dini hari.</p>\r\n\r\n<p>Maling menggasak sepeda motor Honda Beat BE-4281-RP, &nbsp;4 buah telepon seluler berbagai merek, serta uang tunai sekitar Rp1,1 juta. Kasus ini telah ditangani Polsek Padangcermin.</p>\r\n\r\n<p>Sugiarsih (50), guru SD itu menuturkan, pencurian di rumahnya diketahui sekitar pukul 04.00 dini hari, setelah anak sulungnya, Edo terjaga, dan berteriak mengatakan rumahnya dimasuki maling dan pintu belakang rumah sudah terbuka. Begitu dengar teriakan Edo, saya langsung bangun dan &nbsp;liat motor sudah gak ada. Pintu belakang sudah &nbsp;kebuka, &quot;ujar guru SD di Teluk Pandan itu.</p>\r\n\r\n<p>Ibu dua putra itu lalu memerintahkan anaknya segera menghubungi keluarganya yang tinggal tak jauh dari rumahnya. Tak lama kemudian kerabatnya datang, lalu bersama sama mereka memeriksa semua ruangan dan ketiga kamar. Rupanya bukan hanya sepeda motor yang hilang, kawanan pencuri juga menyikat 4 buah telepon seluler, yakni merk Samsung warna putih tipe S.5 dan Samsung lipat warna hitam, Nokia warna hitam tipe C.2, telepon seluler merk OPPO tipe A.39 warna keemasan dan &nbsp;uang tunai sekitar Rp1,1 juta.</p>\r\n\r\n<p>Motor Beat yang dicuri itu bernomor rangka: MHIJFZ123HK219035 dan nomor mesin : JFZIE2226637. &quot;Dompet anakku yang ditarok dicelana dan digantung dikamarnya juga diambil maling itu. Dompet itu isinya STNK Yamaha Vixion BE-5609-RI, SIM C ,KTP dan HP Samsung lipat warna hitam , &quot;ujar Sugiarsih. Menurutnya kunci motor Honda bead yang raib itu diambil pencuri dari kamar putra keduanya (Nando). Padahal kunci kontak tersebut ditaruh di bawah bantal yang digunakan kedua anaknya tidur.</p>\r\n\r\n<p>&quot;Pokoknya maling itu masuk ketiga kamar kami dengan leluasa. Padahal biasanya anakku ini tidurnya selalu malam. Malam tadi (malam sabtu) kami sekitar jam sembilan sudah pada ngantuk semua, &quot;ungkapnya.</p>\r\n\r\n<p>Korban mengatakan, sekitar pukul 02.30, dia sempat terjaga dari tidur karena mendengar ada benda yang jatuh. Dugiarsih menduga ulah kucing. Setelah membersihkan pecahan mangkok ia kembali ke kamar melanjutkan tidur. &quot;Gak lama aku tidur, ada lagi mangkok yang pecah. Aku bangun lagi, tapi waktu itu motor masih ada dan pintu masih tutup, katanya.</p>\r\n\r\n<p>Sugiarsih memperkirakan saat itu maling sudah di dalam rumah. Sebab, setengah jam dari aku tidur yang kedua anaknya terjaga dan berteriak jika rumahnya kemasukan maling. Motor tak ada, dan pintu belakang sudah terbuka.</p>\r\n\r\n<p>Kanit Intel Polsek Padangcermin Aipda Mastam bersama Bhabinkamtibmas Desa Hanura, Brigpol Riwan tiba di rumah korban untuk melakukan penyelidikan setelah mendapatkan informasi dari warga. Pagi itu juga sekitar pukul 08.00, kasus ini dilaporkan ke Polsek Padangcermin, sesuai bukti laporan polisi Nomor : TBL/B-343/ X/2018/ RES. PESAWARAN/SEK.PACER tertanggal 06 Oktober 2018.</p>\r\n', '2018-11-01 16:43:50', NULL, '0a0730b4d11bf51f2f2d8c70670a4ec1.jpg'),
(15, 'Kantor PMII Lampura Kembali Disambangi Pencuri', 'article', 'kantor-pmii-lampura-kembali-disambangi-pencuri', '<p><strong><strong>Hari Supriyono&nbsp;&nbsp;</strong></strong><strong><em><strong><em>21 Oct 2018 - 15:04</em></strong></em></strong></p>\r\n\r\n<p>KOTABUMI (Lampost.co) -- Untuk yang kedua kalinya aksi pencurian sepeda motor terjadi di kantor Sekretariat Pengurus Cabang Pergerakan Mahasiswa Islam Indonesia (PC-PMII) Kabupaten Lampung Utara, Minggu (21/10/2018).</p>\r\n\r\n<p>Akibat kejadian itu, dua unit sepeda motor jenis Honda Beat yang terparkir di belakang Kantor Sekretariat PMII berhasil dibawa kabur kawanan pencuri.</p>\r\n\r\n<p>Salah satu mahasiswa yang menjadi korban, Nawan (23) mengatakan sebelum kejadian itu dirinya bersama enam rekan lainnya, sedang asyik berbincang-bincang di dalam kantor sekretariat sekitar pukul 03.00. &quot;Waktu itu, kami tidak melihat ada&nbsp;yang mencurigakan. Pagi harinya saat salah satu rekan kami bangun&nbsp;diketahui dua kendaraan itu hilang,&quot; ujarnya.</p>\r\n\r\n<p>Atas kejadian tersebut pihaknya melaporkan kejadian itu ke aparat polres setempat. Sementara itu, Ketua PMMI Lampung Utara Yudian Fatria mengatakan, ini merupakan kejadian kedua kalinya yang terjadi di kantor sekretariat PC.PMII Lampura. Dua minggu sebelumnya, motor milik salah satu anggota PMII atas nama Yosef juga hilang. &quot;yang menjadi tanda tanya kami mengapa kejadian seperti ini telah terjadi pada tiga OKP dimana sebelumnya telah terjadi di OKP IMM, HMI dan PMII,&quot; kata dia.</p>\r\n\r\n<p>Pihaknya meminta aparat kepolisian serius menangkap pelaku kejahatan yang melakukan aksinya berulang kali ini.&nbsp;&quot;Kami meminta pada pihak kepolisian, Khususnya Polres Lampura, agar dapat mengungkap dalang di baling ini semua, dan menangkap para pelaku,&quot; katanya.</p>\r\n', '2018-11-01 16:44:41', NULL, 'b207099fba7717a44c25bfc421f6de41.jpg'),
(16, 'Alarm Anti Maling', 'tools', 'alarm-anti-maling', '<p>Alarm Anti Maling, berfungsi dengan mengandalkan sensor infrared yang disertai dengan sensor gerak, mempunyai cakupan area 105 derajat dengan jarak sampai dengan 8 meter. Sangat cocok untuk ditempatkan di garasi, kantor, dan ruang utama di rumah.</p>\r\n\r\n<p>Alarm ini sangat berguna bagi Anda untuk menjaga keamanan rumah Anda, memberikan keamanan selagi Anda tidak di rumah. Alarm akan berbunyi dengan tingkat kenyaringan hingga 105dB apabila ada gerakan yang terjadi pada saat alarm ini dinyalakan.</p>\r\n\r\n<p>Alarm ini disertai dengan remote kontrol untuk mengaktifkan atau menonaktifkan alarm. Memudahkan Anda dalam menjaga keamanan seisi rumah Anda.</p>\r\n\r\n<p>Alarm ini sangat mudah untuk diinstalasi, Anda dapat menaruh alarm ini di meja atau memasangnya di tembok.</p>\r\n', '2018-11-01 17:10:31', NULL, '1ea20b1461b6b9661fd5b7e6ebf31fef.jpg'),
(17, 'Gembok Alarm', 'tools', 'gembok-alarm', '<p>Gembok alarm berguna untuk Anda yang memiliki banyak kendaraan di rumah. Baik itu motor atau sepeda, kaitkan gembok anti maling ini pada bagian roda. Ketika disentuh atau dibuka secara paksa, gembok tersebut akan mengeluarkan suara yang memekakkan telinga. Siapapun yang berani macam-macam dengan motor kesayangan Anda pasti akan kaget dan memilih lari lantang luntung.</p>\r\n', '2018-11-01 17:11:47', NULL, '3a31a402577c7fd4b4ccc6db8983b2c3.jpg'),
(18, 'Belt knife', 'tools', 'belt-knife', '<p>Belt knife (ikat pinggang pisau) memiliki spesifikasi :<br />\r\n* Sabuk berbahan Nylon dgn pengikat yg dapat disesuaikan<br />\r\n* Kepala sabuk berbahan kayu<br />\r\n* Tarik kepala sabuk untuk mengeluarkan pisau<br />\r\n* Pisau berbahan stainless steel hitam<br />\r\n* Ikat pinggang cocok untuk semua ukuran pinggang<br />\r\n* Sekilas tampak hanya seperti ikat pinggang biasa dgn kepala sabuk keren<br />\r\n* didesign oleh ahlii pembuat pisau Dan Valois</p>\r\n', '2018-11-01 17:14:38', NULL, '8bcbf6591b9553953319486da8f1f1c1.jpg'),
(19, 'ULO', 'tools', 'ulo', '<p>Ulo Kamera berbentuk burung hantu ini dapat memutar kepalanya sampai 270 derajat, yang memungkinkannya untuk melihat hampir segala sesuatu di sekitar. Seorang desainer Prancis menggunakan imej burung bijak ini untuk menciptakan sistem monitoring rumah yang dapat digunakan di mana pun di seluruh dunia.</p>\r\n\r\n<p>Ulo adalah kamera pengawas berbentuk burung hantu yang imut, yang terhubung ke ponsel dan dapat berkomunikasi dengan ekspresi matanya yang unik.</p>\r\n\r\n<p>&ldquo;Ekspresi mata adalah cara alami, universal, dan efisien untuk berhubungan langsung dengan Ulo. Tidak ada logo atau ikon yang ditampilkan di layar, tapi Anda akan langsung tahu apa yang ada di pikiran Ulo,&rdquo; jelas Vivien Muller, invetor dan desainer Ulo.</p>\r\n', '2018-11-01 17:24:01', NULL, 'b5e569e9536d9ad0ff13e45a3b93cf54.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id_pemesan` int(11) NOT NULL,
  `idproduk` int(5) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `buatapusaja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_order`
--

INSERT INTO `detail_order` (`id_pemesan`, `idproduk`, `jumlah`, `harga`, `buatapusaja`) VALUES
(12, 2, 1, 100000, 1),
(12, 4, 4, 500000, 2),
(13, 2, 1, 100000, 3),
(13, 5, 1, 600000, 4),
(14, 3, 4, 150000, 5),
(14, 1, 3, 75000, 6),
(15, 4, 5, 500000, 7);

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id`, `title`, `slug`, `text`, `created`, `updated`, `foto`) VALUES
(3, 'ITERA', 'itera', '<h1>ITERA</h1>\r\n\r\n<p><strong>Institut Teknologi Sumatera (ITERA)</strong> adalah sebuah perguruan tinggi negeri yang berkedudukan di antara Kabupaten Lampung Selatan dengan Kota Bandar Lampung. ITERA didirikan berdasarkan Peraturan Presiden Nomor 124 Tahun 2014 tentang Pendirian Institut Teknologi Sumatera (Lembaran Negara Republik Indonesia Tahun 2014 Nomor 253) yang ditetapkan Presiden Republik Indonesia Dr. H. Susilo Bambang Yudhoyono pada tanggal 6 Oktober 2014 dan diundangkan tanggal 9 Oktober 2014. Walaupun peresmiannya dilaksanakan pada tahun 2014, namun ITERA sudah memulai kegiatan akademik dengan menerima mahasiswa baru sejak tahun 2012-2013. Selain ITB dan ITS, dengan dibukanya ITERA dan Institut Teknologi Kalimantan, kini pemerintah Indonesia memiliki empat institut teknologi.</p>\r\n', '2018-10-21 14:40:33', NULL, 'f79cd102d32f44498713c26421664edd.jpg'),
(4, 'Taser Gun', 'taser-gun', '<p>kksakdkasdkaskdkaskd</p>\r\n', '2018-10-31 14:38:28', NULL, '82d58f10552a5ee75fd384d913a557f7.jpg'),
(5, 'Coba Foto', 'coba-foto', '<p>asd as dask dkas kdk askdsakdk asd kask dk</p>\r\n', '2018-10-31 14:57:37', NULL, 'd74231077933c88e59116cca14457750.jpg'),
(6, 'Test Post', 'test-post', '<p>&nbsp;askd askd kask dkas kdk askd kasdk askd kasdk askd kas d</p>\r\n\r\n<p>askd askd kaskd askd kaskd kasd kaskd kas dk</p>\r\n', '2018-10-31 14:58:10', NULL, 'd7e481794063277f1e8e3d103e73b064.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE `pemesan` (
  `id` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesan`
--

INSERT INTO `pemesan` (`id`, `nama`, `email`, `alamat`, `tanggal`) VALUES
(12, 'Muhammad Ragil', 'mragill98@gmail.com', 'asd', '2018-11-21'),
(13, 'Doni Agus Adila', 'asd@gmail.com', 'Teluk', '2018-11-21'),
(14, 'Adminstrator', 'admin@konveksi.com', 'Cloud', '2018-11-21'),
(15, 'ADS', 'asdsa@sds.com', 'asdasdasdsa', '2018-11-21');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `foto`) VALUES
(1, 'Alarm Anti Maling', 75000, '3.Alarm.jpg'),
(2, 'Gembok Alarm', 100000, '4.GA.jpg'),
(3, 'Pisau Gesper', 150000, '5.PG.jpg'),
(4, 'ULO', 500000, '1.ulo.jpg'),
(5, 'Taser Gun', 600000, '2.TG.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`buatapusaja`),
  ADD KEY `customer` (`id_pemesan`),
  ADD KEY `produk` (`idproduk`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `buatapusaja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pemesan`
--
ALTER TABLE `pemesan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `customer` FOREIGN KEY (`id_pemesan`) REFERENCES `pemesan` (`id`),
  ADD CONSTRAINT `produk` FOREIGN KEY (`idproduk`) REFERENCES `produk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
