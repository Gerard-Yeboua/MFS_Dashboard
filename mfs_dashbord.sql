-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 12 juil. 2024 à 18:30
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mfs_dashbord`
--

-- --------------------------------------------------------

--
-- Structure de la table `transactions`
--

CREATE TABLE `transactions` (
  `id_trx` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `sender_MSISDN` varchar(20) NOT NULL,
  `receiver_MSISDN` varchar(20) NOT NULL,
  `reference` varchar(100) NOT NULL,
  `motif_trx` varchar(255) DEFAULT NULL,
  `statut` enum('success','pending','failed') NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `transactions`
--

INSERT INTO `transactions` (`id_trx`, `amount`, `sender_MSISDN`, `receiver_MSISDN`, `reference`, `motif_trx`, `statut`, `id_user`, `created_at`) VALUES
(1, 100.00, '1234567890', '0987654321', 'REF001', 'Payment for services', 'success', 1, '2024-07-11 23:03:08'),
(2, 50.00, '1234567890', '0987654321', 'REF002', 'Payment for goods', 'pending', 1, '2024-07-11 23:03:08'),
(3, 75.00, '1234567890', '0987654321', 'REF003', 'Refund', 'failed', 2, '2024-07-11 23:03:08'),
(6, 75000.00, '0578568562', '0778568567', 'REF004', 'Test', 'success', 1, '2024-07-11 23:45:01'),
(7, 25000.00, '0578568565', '0778568568', 'REF005', 'Test', 'failed', 2, '2024-07-11 23:49:27'),
(8, 1000.00, '0558568562', '0778568545', 'REF006', 'Test', 'pending', 3, '2024-07-11 23:50:41'),
(9, 7000.00, '0545689523', '0543654892', 'REF007', 'Transaction école', 'success', 5, '2024-07-12 09:37:49'),
(10, 100000.00, '0546452554', '0523564654', 'REF008', 'Paiement service', 'success', 6, '2024-07-12 09:40:42'),
(11, 200.00, '0546452554', '0523564658', 'REF009', 'Maladie', 'success', 8, '2024-07-12 09:41:29'),
(12, 7000.00, '0545689523', '0523564659', 'REF010', 'Paiement service banal', 'success', 9, '2024-07-12 09:52:42'),
(13, 500.00, '0545689524', '0523564653', 'REF011', 'Test', 'success', 10, '2024-07-12 09:53:15'),
(14, 5600.00, '0545689526', '0523564645', 'REF012', 'Fête', 'failed', 10, '2024-07-12 09:54:45'),
(15, 2000.00, '0546234547', '0565698652', 'REF013', 'Fête', 'success', 2, '2024-07-12 09:57:56'),
(16, 3000.00, '0545689525', '0523564674', 'REF014', 'Vaccances', 'failed', 5, '2024-07-12 09:59:36'),
(17, 7500.00, '0558568552', '0523564632', 'REF015', 'Travail', 'failed', 6, '2024-07-12 10:33:28'),
(18, 25640.00, '0546452565', '0543654850', 'REF016', 'Travail', 'success', 3, '2024-07-12 10:35:26'),
(20, 400000.00, '0545689475', '0546578953', 'REF018', 'Fête', 'success', 5, '2024-07-12 10:38:36');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenoms` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom`, `prenoms`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'Doe', 'John', 'john_doe', 'john@example.com', 'hashed_password_1', '2024-07-11 22:59:30'),
(2, 'Doe', 'Jane', 'jane_doe', 'jane@example.com', 'hashed_password_2', '2024-07-11 22:59:30'),
(3, 'YEBOUA', 'KOFFI KRA GERARD', '', 'kragerard2@gmail.com', '$2y$10$AxcxmXhOzj2G.ahK7hSZBOEJoUlfzzlyFK/jrkoWaaj5xkrIwpJw6', '2024-07-11 23:37:24'),
(5, 'YEBOUE', 'KOFFI KRA GERARO', '', 'kra3@gmail.com', '$2y$10$qGF1vPSYp5LuX14NI2EhXuuMlaEgIJhlSFUAl3d8oZ5PxPy6aQITm', '2024-07-11 23:39:46'),
(6, 'Yao', 'Konan', '', 'konan@gmail.com', '$2y$10$dfM2b4si..Yy3HkEr5DPT.2vGJ8NDGwt.F6fSiH2AuB20ZSRojx/G', '2024-07-12 09:27:35'),
(7, 'Kouassi', 'Yawa Anne', '', 'yawa@gmail.com', '$2y$10$vNxZltcL0I3TxJT8hw9rL.8SswMng6GBr6HymBW3gPKzf5iz5f/vi', '2024-07-12 09:28:20'),
(8, 'Kouakou', 'Julien', '', 'kouakou@gmail.com', '$2y$10$cOBcpoz.wAOcgR2fFZAD.O.3tk8MjZR9BKmkzZ2WY6Vy9UAE1AUTe', '2024-07-12 09:29:45'),
(9, 'Nanan', 'Lucien', '', 'nana@gmail.com', '$2y$10$K7kGU2IT7GyugSRkxj1Co.XGyv24t5BUSViY8UcZ9nvsOx.jYIyiu', '2024-07-12 09:31:03'),
(10, 'Dehouse', 'Franck', '', 'dehouse@gmail.com', '$2y$10$u3Jlkcf3.8/nGRD9tL69jOkH8H32O2Wds6deQdNUAqy6h4puIzADu', '2024-07-12 09:31:58');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id_trx`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id_trx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
