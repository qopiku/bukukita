CREATE TABLE `admin` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(64) NOT NULL,
    `password` char(32) NOT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

CREATE TABLE `mahasiswa` (
    `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT,
    `nim` bigint(20) NOT NULL,
    `nama_lengkap` varchar(255) NOT NULL,
    `alamat` text NOT NULL,
    PRIMARY KEY (`id_mahasiswa`)
);

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim`, `nama_lengkap`, `alamat`) VALUES
(1, 220214609918, 'Devi Fitriani', 'Asemdoyong, Taman, Pemalang');

CREATE TABLE `buku` (
    `id_buku` int(11) NOT NULL AUTO_INCREMENT,
    `judul` varchar(255) NOT NULL,
    `pengarang` varchar(255) NOT NULL,
    `penerbit` varchar(255) NOT NULL,
    `tahun_terbit` year(4) NOT NULL,
    PRIMARY KEY (`id_buku`)
);

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`) VALUES
(1, 'Riyadhush Shalihin', 'Imam An-Nawawi', 'Darul Haq', 1995),
(2, 'Bulughul Maram', 'Al-Hafidz Ibnu Hajar al-Asqalani', 'Darul Haq', 2004);
