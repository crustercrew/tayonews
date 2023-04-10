-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2019 pada 14.55
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
-- Database: `wpu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `cat_image`, `created_at`) VALUES
(1, 'game', 'game.jpg', '2019-10-09 07:07:07'),
(2, 'technology', 'tecnology.jpg', '2019-10-09 07:07:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'Resmi-EA-Kembali-ke-Steam', 'kuntul', 'kuntulkuda@gmail.com', 'great post ', '2019-11-06 06:34:11'),
(5, 'Resmi-EA-Kembali-ke-Steam', 'tayo', 'tayo123@gmail.com', 'nice posts ', '2019-11-08 03:39:55'),
(6, 'Preview-Atelier-Ryza-Ever-Darkness-the-Secret-Hideout-JRPG-yang-THICC', 'Vibbu', 'vibbu@outlook.com', 'S O.. T H I C C ', '2019-11-08 12:56:50'),
(7, 'Preview-Atelier-Ryza-Ever-Darkness-the-Secret-Hideout-JRPG-yang-THICC', 'andreas', 'azure@yahoo.com', 'What a nice Game for all who love Thicc waifus <3 ', '2019-11-08 12:58:22'),
(8, 'Resmi-EA-Kembali-ke-Steam', 'coba', 'coba@gmail.com', 'coba ', '2019-11-08 13:04:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `slug`, `body`, `post_image`, `created_at`) VALUES
(18, 1, 'Resmi, Death Stranding Tuju PC di 2020!', 'Resmi-Death-Stranding-Tuju-PC-di-2020', '<p>Berapa banyak dari Anda yang saat ini tengah menantikan Death Stranding? Dengan ide gila Hideo Kojima yang sejauh ini, berhasil menelurkan ragam screenshot dan trailer yang tidak menjelaskan garis plot apapun, ia memang berpotensi untuk jadi sebuah game yang menarik dan misterius di saat yang sama. Sejak pertama kali ia diperkenalkan, Kojima Productions &ndash; studio indie yang bertanggung jawab untuk game ini memang sempat membicarakan versi PC, namun tenggelam begitu saja. Sejak itu, semua trailer dan screenshot hanya menyebut nama Playstation 4 saja, mengesankan bahwa ia memang produk eksklusif selamanya. Apalagi Death Stranding menggunakan Decima Engine &ndash; engine proprietary eksklusif milik Guerrila Games, developer di bawah bendera Sony Interactive Entertainment.</p>\r\n\r\n<p>Namun ternyata tidak demikian. Mengamini rumor dan spekulasi yang sempat tersebar sebelumnya, Kojima Productions akhirnya secara resmi mengumumkan bahwa Death Stranding akan tiba di PC setelah versi Playstation 4 keluar. Versi PC ini akan dirilis pada awal musim panas tahun 2020 mendatang, yang akan berjalan sekitar bulan Juni &ndash; September 2020. Sayangnya, tidak ada informasi lebih mendetail soal kira-kira perbedaan apa yang akan diusung versi PC ini, mengingat posisinya sebagai platform yang dari sisi performa, memang lebih kuat.</p>\r\n\r\n<p>Ini tentu saja berita mengejutkan dan juga membahagiakan untuk gamer-gamer PC yang tidak sabar lagi menjajal produk racikan Hideo Kojima ini. Belum ada informasi via platform digital mana, Death Stranding versi PC ini akan dilepas. Bagaimana dengan Anda? Tertarik dengan game yang satu ini?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"font-style: italic;\">Source : <a href=\"http://jagatplay.com/2019/10/news/resmi-death-stranding-tuju-pc-di-2020/\">jagatplay</a></p>\r\n', 'deathstranding.jpg', '2019-10-30 06:53:22'),
(20, 1, 'Battlefield V Rilis Trailer Perang Pasifik', 'Battlefield-V-Rilis-Trailer-Perang-Pasifik', '<p>Games as a Service memang menjadi salah satu strategi yang tengah digalakkan di industri game. Kesempatan untuk menikmati sebuah game berusia panjang lewat dukungan dukungan konten berkala setiap beberapa bulan sekali tentu saja terdengar menggiurkan. Sementara bagi sang developer dan publisher, ekstra uang bisa didulang lewat skema microtransactions item kosmetik yang tentu saja berasosiasi positif dengan popularitas game itu sendiri. Salah satu yang masih berjuang melakukan hal ini adalah Battlefield V yang setelah pengumuman beberapa waktu yang lalu, akhirnya secara resmi memperlihatkan tema Perang Pasifik miliknya.</p>\r\n\r\n<p>Terlihat brutal sembari memperlihatkan konten baru yang bisa diantisipasi di konten teranyar ini, DICE menghadirkan trailer dengan sudut pandang sinematik yang tidak menahan diri untuk urusan memotret perang yang brutal dan korban berjatuhan. Perang besar-besaran antara tentara Sekutu (Amerika Serikat) melawan Jepang di lautan Pasifik ini diisi dengan pedang katana, stick anti-tank, tank dengan flamethrower, hingga dentuman meriam raksasa di pesisir pantai yang siap untuk menelan banyak korban jiwa. Seperti yang bisa diprediksi, dengan pendekatan trailer yang cukup klasik, ia disambut positif oleh gamer yang masih rutin mencicipi Battlefield V hingga saat ini.</p>\r\n\r\n<p><img alt=\"\" src=\"http://jagatplay.com/wp-content/uploads/2019/10/War-in-Pacific-BF-V-600x338.jpg\" style=\"height:338px; width:600px\" /></p>\r\n\r\n<p>Battlefield V akan melepas DLC Perang Pasifik ini tanggal 31 Oktober 2019 mendatang secara cuma-cuma.</p>\r\n\r\n<p>Konten &ldquo;War in the Pacific&rdquo; ini sendiri rencananya akan dirilis secara cuma-cuma untuk Battlefield V pada tanggal 31 Oktober 2019 mendatang, tentu saja di semua platform rilis &ndash; Playstation 4, Xbox One, dan PC. Terlihat menarik di mata Anda?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>source : <a href=\"http://jagatplay.com/2019/10/news/battlefield-v-rilis-trailer-perang-pasifik/\">Jagatplay</a></p>\r\n', 'battlefieldv.jpg', '2019-10-30 07:00:19'),
(21, 1, 'Destiny 2 Free to Play Kini Tersedia di Steam, Dukung Pre-Load', 'Destiny-2-Free-to-Play-Kini-Tersedia-di-Steam-Dukung-Pre-Load', '<p>Keputusan Bungie Studios untuk melepas hubungan dengan Activision memang terhitung mengejutkan. Setelah dua seri Destiny yang lahir dengan hype tinggi terlepas dari kritik pedas yang sempat mengemuka, terutama dari sisi konten, banyak yang memprediksi bahwa kerjasama keduanya akan senantiasa erat dan hangat. Lepasnya hubungan ini juga mau tidak mau mempengaruhi posisi Destiny 2 yang untuk versi PC-nya memang sempat tersedia eksklusif untuk platform milik Activision &ndash; Battle.net. Untuk gamer yang mengandalkan Steam, inilah momen yang sudah lama Anda nantikan!</p>\r\n\r\n<p>Untuk menarik basis gamer baru ke game mereka, Bungie memang menempuh strategi yang lumayan radikal untuk &ldquo;identitas baru&rdquo; Destiny 2 selepas Activision. Benar sekali, mereka memutuskan untuk membuat seri dasarnya sebagai game Free to Play, dimana gamer bisa menempuh banyak misi dan mode campaign yang ada secara cuma-cuma. Yang mereka jual sekarang adalah konsep expansion pack berisikan lebih banyak misi dan porsi cerita baru, seperti konten Shadowkeep yang akan meluncur beberapa hari ke depan. Berita baiknya? Kedua konten ini, berbayar dan <strong><a href=\"https://store.steampowered.com/app/1085660/Destiny_2/\" target=\"_blank\">Free to Play sudah tersedia di Steam</a></strong>!</p>\r\n\r\n<p><img alt=\"\" src=\"http://jagatplay.com/wp-content/uploads/2019/09/destiny-21-600x337.jpg\" style=\"height:337px; width:600px\" /></p>\r\n\r\n<p>Destiny 2 versi Free to Play kini sudah tersedia di Steam. Anda bahkan bisa melakukan pre-load dengannya!</p>\r\n\r\n<p>Bungie bahkan sudah membuka masa pre-load untuk gamer yang memiliki koneksi internet terbatas, namun tergoda untuk mencicipi Destiny 2. Sebuah langkah yang rasional mengingat catatan spesifikasi resmi menuliskan kebutuhan ruang data hingga 105 GB. Bagaimana dengan Anda sendiri? Tertarik?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>source : Jagatplay</p>\r\n', 'destiny2.jpg', '2019-10-30 07:04:23'),
(25, 2, 'Xiaomi Mi CC9 Pro akan Hadir di Luar Tiongkok sebagai Mi Note 10', 'Xiaomi-Mi-CC9-Pro-akan-Hadir-di-Luar-Tiongkok-sebagai-Mi-Note-10', '<p>Tidak lama ini, rumor tentang Xiaomi yang akan meriils produk terbarunya, Mi CC9 Pro, sempat beredar. Dan Xiaomi telah resmi mengkonfirmasikan perilisan dari produk tersebut, yakni pada 5 November 2019 mendatang, di mana perangkat ini akan menjadi perangkat dengan lima buah sensor kamera utama dengan sensor utama beresolusi 108MP.</p>\r\n\r\n<p>Dari kabar terbaru, nama Mi CC9 Pro nampaknya akan eksklusif digunakan untuk pasar Tiongkok saja. Untuk pasar di luar Tiongkok, perangkat ini sepertinya akan diberi nama sebagai Mi Note 10.</p>\r\n\r\n<p>Konfirmasi ini terlihat dari halaman Facebook resmi dari Xiaomi, di mana pihaknya mengumumkan keberadaan tentang Mi Note 10 yang akan menjadi perangkat pertama di dunia yang mengusung lima buah kamera dengan sensor utama beresolusi 108MP. Bisa dikatakan, Mi CC9 Pro dan Mi Note 10 yang dimaksudkan ini adalah perangkat yang sama, hanya berbeda nama saja.</p>\r\n\r\n<p>Mi CC9 Pro/Mi Note 10 ini sendiri akan mengusung chipset Snapdragon 730G dengan clock speed 2.2GHz, di mana chipset ini terdiri dari dua inti Kyro 470 Gold dengan clock 2.2GHz dan enam into Kyro 470 Silver dengan clock 1.8GHz. Chipset ini akan dipadukan bersama dengan opsi RAM mulai dari 6GB/8GB/12GB, ditambah dengan konfigurasi storage internal terdiri dari 64GB/128GB/256GB.</p>\r\n\r\n<p><a href=\"http://gadget.jagatreview.com/wp-content/uploads/2019/10/mi-note-10-camera-setup.jpg\"><img alt=\"\" src=\"http://gadget.jagatreview.com/wp-content/uploads/2019/10/mi-note-10-camera-setup-500x500.jpg\" style=\"height:500px; width:500px\" /></a></p>\r\n\r\n<p>Sementara untuk setup lima kameranya, selain mengusung sensor 108MP, empat sensor lainnya dikabarkan akan terdiri dari 12MP ultrawide angle, 12MP dedikasi untuk portrait/bokeh, dedikasi untuk makro, serta sensor tele. Dan terakhir, perangkat ini juga akan memiliki kapasitas baterai cukup masif di 5170mAh.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>source :<a href=\"http://gadget.jagatreview.com/2019/10/xiaomi-mi-cc9-pro-akan-hadir-di-luar-tiongkok-sebagai-mi-note-10/\"> Jagat review</a></p>\r\n', 'mi10.jpg', '2019-10-30 07:24:57'),
(26, 2, 'ASUS TUF Gaming VG249Q, Keluarga Baru dari Lini Monitor TUF Gaming', 'ASUS-TUF-Gaming-VG249Q-Keluarga-Baru-dari-Lini-Monitor-TUF-Gaming', '<p>TUF Gaming merupakan salah satu sub-brand dari ASUS yang menawarkan beragam produk dengan durabilitas tinggi, namun juga diposisikan sebagai lini perangkat gaming dengan harga terjangkau. Setelah beberapa waktu lalu meluncurkan tiga varian monitor TUF Gaming, kini sang produsen kembali menambah &ldquo;keluarga baru&rdquo; dengan nama ASUS TUF Gaming VG249Q.</p>\r\n\r\n<p>Sesuai dengan penamaannya, ASUS TUF Gaming VG249Q mengusung layar berukuran 23.8 inci menggunakan panel IPS (In-Plane Switching). Resolusi layar yang ditawarkan adalah Full HD 1920 x 1080 piksel dan memiliki sudut pandang yang luas hingga 178&deg; (Vertikal dan Horizontal). Tingkat kecerahan maximum yang ditawarkan TUF Gaming VG249Q mencapai 250 nits serta color gamut NTSC 72%.</p>\r\n\r\n<p>Sebagai monitor gaming, ASUS tentunya menyematkan beragam fitur gaming yang lengkap untuk memenuhi kebutuhan penggunanya seperti dukungan AMD FreeSync dan refresh rate mencapai 144Hz. Meski panel yang digunakan adalah IPS, tingkat response time yang dimiliki monitor ini bisa mencapai 1ms MPRT. Hal ini tampaknya berkat dukungan fitur ASUS ELMB (Extreme Low Motion Blur).</p>\r\n\r\n<p>Dukungan fitur gaming lainnya pun turut dihadirkan pada monitor ini seperti GameVisual yang menyediakan 7 preset dengan beberapa genre game, lalu GamePlus yang dapat membantu gamer dengan kehadiran on-screen crosshair, timer, FPS counter dan display alignment. Ada pula fitur Shadow Boost yang dapat membantu mencerahkan area yang gelap pada sebuah game, sehingga musuh yang bersembunyi dapat terlihat.</p>\r\n\r\n<p>Soal desain, ASUS TUF Gaming VG249Q memiliki desain sangat ergonomi, seperti pengaturan ketinggian, diputar ke kiri-kanan, Tilt dan Pivot. Monitor ini juga bisa diletakan di dinding dengan menggunakan VESA mount 100 x 100 mm.</p>\r\n\r\n<p>Beralih ke bagian konektivitasnya, ASUS TUF Gaming VG249Q memiliki beberapa port esensial antara lain 1x HDMI 1.4, 1x VGA port dan 1x DisplayPort 1.2. Tidak ketinggalan, ASUS memberikan port audiojack 3.5mm. Sayangnya hingga kabar ini beredar, ASUS belum menyebutkan ketersediaan monitor di pasaran dan harga yang akan ditawarkan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>source : <a href=\"http://www.jagatreview.com/2019/10/asus-tuf-gaming-vg249q-keluarga-baru-dari-lini-monitor-tuf-gaming/\">Jagat review</a></p>\r\n', 'tuf.jpg', '2019-10-30 07:27:02'),
(27, 2, 'Samsung Kenalkan Dua Laptop “Project Athena” dengan Panel QLED', 'Samsung-Kenalkan-Dua-Laptop-Project-Athena-dengan-Panel-QLED', '<p>Saat pertama kali diperkenalkan di ajang CES 2019 Januari lalu, standarisasi Intel untuk Laptop canggih generasi terbaru dengan codename &ldquo;Project Athena&rdquo; telah menunjukkan wujudnya. Beberapa di antaranya merupakan produsen pemain PC ternama dunia seperti Lenovo, Dell dan ASUS.</p>\r\n\r\n<p>Kali ini, giliran raksasa elektornik ternama dunia asal Korea Selatan, Samsung, yang menunjukkan koleksi Laptop terbaru yang sudah diverifikasi oleh Project Athena. Kedua Laptop Samsung tersebut diberi nama Galaxy Book Flex dan Galaxy Book Ion. Meski keduanya memiliki rancangan yang berbeda, menariknya, Samsung merancang kedua Laptop barunya ini sebagai yang pertama mengusung panel QLED.</p>\r\n\r\n<p>Untuk Galaxy Book Flex dirancang sebagai perangkat 2-in-1 dan ditenagai oleh prosesor 10th Gen Intel Core (Ice Lake) yang tentunya sudah terintegrasi dengan Intel Iris Plus. Sayangnya, Samsung tidak menyebutkan spesifikasi lainnya seperti kapasitas memory dan storage yang menjadi pendampingnya.</p>\r\n\r\n<p>Namun untuk ukuran layarnya, Samsung Galaxy Book Flex tersedia dalam dua pilihan ukuran layar, 13 inci dan 15 inci, dan layarnya dapat dilipat ke belakang hingga 360&deg;. Samsung juga turut menyertakan sebuah S-Pen stylus pada laptop barunya ini.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.jagatreview.com/wp-content/uploads/2019/10/Galaxy-Book-Ion.jpg\" style=\"height:400px; width:600px\" /></p>\r\n\r\n<p>Galaxy Book Ion</p>\r\n\r\n<p>Beralih ke Galaxy Book Ion, spesifikasi dari Laptop ini juga belum terungkap dengan rinci. Namun sebagai salah satu bagian dari Project Athena, Samsung Galaxy Book Ion ini tentunya ditenagai oleh Prosesor 10th Gen Intel Core (Comet Lake). Laptop ini memiliki rancangan konvensional (clamshell) namun material body Laptop ini menggunakan magnesium. Untuk varian ini juga dikabarkan tersedia dalam dua pilihan ukuran layar, 13 inci dan 15 inci.</p>\r\n\r\n<p>Hingga saat ini, Samsung belum mengumumkan harga yang dimiliki kedua Laptop barunya ini. Rencananya, Samsung akan meluncurkan Galaxy Book Flex dan Galaxy Book Ion ini pada bulan Desember 2019 mendatang.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>source : <a href=\"http://www.jagatreview.com/2019/10/samsung-kenalkan-dua-laptop-project-athena-dengan-panel-qled/\">Jagat review</a></p>\r\n', 'galayxbook.jpg', '2019-10-30 07:28:25'),
(30, 1, 'Resmi, EA Kembali ke Steam!', 'Resmi-EA-Kembali-ke-Steam', '<p>Keinginan untuk mendapatkan keuntungan penuh 100% alih-alih hanya 70% dari menempatkan produk-produk mereka di Steam memang berakhir membuat beberapa publisher raksasa, mengembangkan storefront digital mereka sendiri. Strategi ini membuat PC kebanjiran begitu banyak platform digital yang memang merepotkan, namun tidak terhindarkan jika Anda ingin mencicipi semua game eksklusif yang hanya tersedia di masing-masing platform ini. Strategi ini sudah lama digalakkan oleh EA sejak Origin lahir, yang kini menjadi &ldquo;rumah&rdquo; untuk game mereka. Berita baiknya? Mengamini rumor yang sempat beredar sebelumnya, seperti halnya di masa lalu, EA akhirnya resmi kembali ke Steam!</p>\r\n\r\n<p>EA secara resmi kembali ke Steam, pengumuman ini mereka lemparkan via sebuah blog resmi. Kerjasama antara EA dan Valve ini akan &ldquo;dirayakan&rdquo; dengan rilis game Star Wars terbaru &ndash; Star Wars Jedi: Fallen Order yang juga akan dilepas di Steam di hari yang sama dengan rilisnya di Origin.</p>\r\n\r\n<p><img alt=\"\" src=\"http://jagatplay.com/wp-content/uploads/2019/10/star-wars-jedi-fallen-order-1-600x487.jpg\" style=\"height:487px; width:600px\" /></p>\r\n\r\n<p>EA resmi kembali ke Steam. Tidak hanya game terbaru dan konfirmasi game lawas berbasis multiplayer yang akan tiba, ia juga akan menawarkan fitur EA Access via platform digital milik Valve ini.</p>\r\n\r\n<p>Tidak sampai di sana saja, EA juga memastikan bahwa layanan langganan menggoda mereka &ndash; EA Access juga akan tersedia via Steam nantinya. Berita lebih keren lagi? Game-game berbasis multiplayer mereka seperti Apex Legends, FIFA 20, dan Battlefield V juga akan dilepas di tahun 2020 mendatang, dimana gamer Steam dan gamer Origin akan bisa bermain bersama-sama. Produk lawas seperti The Sims 4 dan Unravel Two juga akan dilepas dalam beberapa bulan ke depan.</p>\r\n\r\n<p>Gamer yang tertarik kini bisa menuju ke halaman Steam Star Wars Jedi: Fallen Order dan melakukan proses pre-order sejak Anda membaca berita yang satu ini. Bagaimana menurut Anda? Apakah ini langkah positif bagi EA atau justru berpotensi blunder?</p>\r\n\r\n<p><em>Source:&nbsp;<a href=\"https://www.ea.com/news/ea-and-valve-partnership\" target=\"_blank\">EA</a></em></p>\r\n', 'star.jpg', '2019-10-30 07:58:48'),
(33, 1, 'Preview Atelier Ryza – Ever Darkness & the Secret Hideout: JRPG yang THICC!', 'Preview-Atelier-Ryza-Ever-Darkness-the-Secret-Hideout-JRPG-yang-THICC', '<p>Puluhan seri yang lahir di bawah bendera franchise yang sama, dimana kesemuanya juga berbagi mekanik gameplay serupa &ndash; sebuah JRPG yang tidak hanya menjadikan crafting sebagai fitur gameplay saja tetapi inti dari sisi cerita. Benar sekali, hampir sebagian besar gamer sepertinya tidak akan asing lagi dengan apa yang ditawarkan oleh seri Atelier dari Koei Tecmo sebagai publisher dan Gust sebagai developer ini. Namun ada beberapa gamer di luar sana, seperti kami, yang tidak pernah menaruh perhatian lebih kepada seri ini. Hingga seperti pada kasus yang sempat terjadi pada 2B dan NieR: Automata, desain karakter utama lah yang akhirnya menarik kami menjajalnya. Sebuah keputusan yang ternyata berakhir lebih memuaskan dari apa yang kami bayangkan. Atelier Ryza ternyata berbuah menjadi sebuah JRPG yang menarik.</p>\r\n\r\n<p><strong>Kesan Pertama</strong></p>\r\n\r\n<p>&nbsp; Harus jujur, salah satu alasan utama kami tertarik untuk melirik Atelier Ryza memang berpusat pada desain sang karakter utamanya &ndash; Ryza yang lewat bahasa meme-nya sangat tepat untuk didefinisikan sebagai &ldquo;THICC&rdquo; atau yang dalam bahasa Indonesia yang normal, disebut sebagai sintal. Terlepas dari klaim sang developer bahwa mereka tidak berusaha menyuntikkan desain yang menjadikan sensualitas sebagai daya tarik utama, reaksi gamer sepertinya mengarah ke arah yang jelas. Ryza bahkan cukup populer untuk jadi karakter yang berakhir jadi cosplay, jauh sebelum gamenya dirilis ke pasaran. Konsep desain yang sama juga sepertinya diaplikasikan untuk karakter wanita yang lain.</p>\r\n\r\n<p>&nbsp; Cita rasa visual anime yang kental juga diikuti dengan kisah fantasi yang sepertinya tidak akan asing lagi. Ryza &ndash; seorang anak petani yang mendambakan petualangan yang besar mendapatkan apa yang ia inginkan setelah kejadian demi kejadian membawanya ke sebuah takdir yang jauh lebih penting.</p>\r\n\r\n<p><img alt=\"\" src=\"http://jagatplay.com/wp-content/uploads/2019/11/Atelier-Ryza-jagatplay-part-1-14.jpg\" style=\"height:394px; width:700px\" /></p>\r\n\r\n<p>&nbsp; Tentu saja, seperti semua seri Atelier selama ini, ia akan berkutat pada Alchemy sebagai fokus cerita dan juga mekanik gameplay utama yang memungkinkan Anda untuk meracik hampir semua hal yang Anda butuhkan, dari item hingga senjata. Sayangnya, mengingat kami tidak memiliki bahan pembanding dengan seri Atelier sebelumnya, kami tidak mengetahui seberapa signifikan perbedaan sisi JRPG-nya untuk seri terbaru ini. Setidaknya sejauh ini, sisi JRPG yang ia usung terhitung unik dan solid. Ada lapisan strategi yang membuat Anda tidak bisa sekedar datang, menekan tombol Attack, dan berharap menang.</p>\r\n\r\n<p>&nbsp; Satu yang menarik adalah mekanik crafting yang ia usung. Dengan menjadikannya pondasi untuk mendapatkan ragam item yang ada, proses mencari material menjadi aktivitas ekstra yang harus Anda lakukan agar Anda bisa selamat melawan musuh-musuh yang harus diakui, terkadang melewati lompatan tingkat kesulitan yang cukup tinggi. Crafting juga menjadi solusi dari ragam misi sampingan yang tidak sekedar menawarkan reward saja, tetapi juga jalan cerita dinamis yang bisa membuka lebih banyak informasi terkait latar belakang cerita yang ada. Kombinasi sistem seperti ini membuat Anda akan mudah melupakan waktu dengan Atelier Ryza ini, apalagi jika ada item spesifik yang hendak Anda kejar. Kerennya lagi? Ada sistem &ldquo;multiplayer&rdquo; dimana Anda bisa menciptakan dungeon Anda sendiri dan membaginya kepada dunia. Anda juga bisa mengunjungi dungeon gamer lain untuk mengincari material spesifik yang ia tawarkan.</p>\r\n\r\n<p>&nbsp; Sembari menunggu waktu yang lebih proporsional untuk melakukan review, yang sepertinya masih akan butuh waktu panjang untuk menyelesaikan sisi cerita yang ada, izinkan kami melemparkan segudang <em>screenshot fresh from oven</em> di bawah ini untuk membantu Anda mendapatkan gambaran apa itu Atelier Ryza.</p>\r\n\r\n<p><em>It is indeed,THICC!.</em></p>\r\n', 'altelier.jpg', '2019-11-08 10:35:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(130) NOT NULL,
  `email` varchar(130) NOT NULL,
  `image` varchar(130) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'fahreal bernov', 'fahrealbernov@gmail.com', 'default.jpg', '$2y$10$TnwA4PPh2xTa29lNo48v9epsNyl6F4HSYwfNlS7xpvCtKVuMRGHUG', 1, 1, 1568107305),
(2, 'sinyo', 'sinyobernov@gmail.com', 'default.jpg', '$2y$10$Bca.gJAZAosRcpB3K0B9xO8ENHglbMUGaluEY3O2JwFDzPONolMDO', 2, 1, 1568108065),
(5, 'desmond', 'bernovfahreal@yahoo.com', 'default.jpg', '$2y$10$PYk8rFIzuXoOTG4JL3ljMudnVt2mmmP1PdWd9E./efXSxLZkUof9u', 2, 1, 1571118461),
(6, 'tayo', 'tayo123@gmail.com', 'default.jpg', '$2y$10$BM6DWar36QqoSQk9X6vRfu2z1Lmu/YFvdkE4egNJyyQcoPQoG2V8m', 1, 1, 1571303964);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'manager'),
(2, 'admin'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(3, 'Manager'),
(4, 'Administration');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dasboard', 'manager', 'fas fa-fw fa-tachometer-alt', 1),
(3, 2, 'Main Menu', 'administration', 'fas fa-fw fa-file-alt', 1),
(6, 3, 'Menu Management', 'menu', 'fas fa-fw fa-home', 1),
(7, 2, 'Tambah Berita', 'administration/tambah', 'fas fa-fw fa-pencil-ruler', 1),
(8, 2, 'My Profile', 'administration/profile', 'fas fa-fw fa-user', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
