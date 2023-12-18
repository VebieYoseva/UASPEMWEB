SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `tabeldaftar` (
  `Nama` varchar(100) NOT NULL,
  `nim` int(255) NOT NULL,
  `Prodi` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Jenis_Kelamin` varchar(200) NOT NULL,
  `Alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tabeldaftar` (`Nama`, `nim`, `Prodi`, `Email`, `Jenis_Kelamin`, `Alamat`) VALUES
('Vebie Yoseva', 121140016, 'Teknik Informatika', 'vebie.121140016@gmail.com', 'Perempuan', 'Lampung Selatan');

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'pebie', '11bie11'),
(2, 'seva', '22seva22');

ALTER TABLE `tabeldaftar`
  ADD PRIMARY KEY (`nim`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tabeldaftar`
  MODIFY `nim` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121140017;


ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
