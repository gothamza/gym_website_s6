-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 juin 2022 à 17:49
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gss`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`login`, `password`, `nom`) VALUES
('admin12345@gmail.com', 'admin12345', 'bk_gh_admin');

-- --------------------------------------------------------

--
-- Structure de la table `entreneur`
--

CREATE TABLE `entreneur` (
  `id_ent` int(11) NOT NULL,
  `nom_e` varchar(40) NOT NULL,
  `prenom_e` varchar(40) NOT NULL,
  `adresse_e` varchar(50) NOT NULL,
  `email_e` varchar(50) NOT NULL,
  `telephone_e` int(10) NOT NULL,
  `slair` varchar(20) NOT NULL,
  `img_e` varchar(50) NOT NULL,
  `experence` varchar(50) NOT NULL,
  `face` varchar(50) NOT NULL,
  `insta` varchar(50) NOT NULL,
  `twit` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `entreneur`
--

INSERT INTO `entreneur` (`id_ent`, `nom_e`, `prenom_e`, `adresse_e`, `email_e`, `telephone_e`, `slair`, `img_e`, `experence`, `face`, `insta`, `twit`, `link`) VALUES
(13, 'bouktitia', 'hamza', 'kenitra', 'bouktitia.hamza@gmail.com', 770223793, '100dh', 'team-1.jpg', '2ans', 'web.facebook.com/profile.php?id=100006883278007', '', '', ''),
(14, 'elghiwane', 'mohamed', 'kenitra', 'elghiwane1234@gmail.com', 770223793, '999dh', 'team-2.jpg', '2ans', 'www.facebook.com/profile.php?id=100006883278007', '', '', ''),
(17, 'okhadire', 'khalide', 'kenitra', 'khalid123@gmail.com', 770349079, '600dh', 'team-3.jpg', '2ans', '', '', '', ''),
(20, 'okhadire', 'khalide', 'kenitra', 'khalid123@gmail.com', 770349079, '600dh', 'team-4.jpg', '2ans', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `exp_personne`
--

CREATE TABLE `exp_personne` (
  `id_personne` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` int(10) NOT NULL,
  `prix` varchar(20) NOT NULL,
  `img_m` varchar(50) NOT NULL,
  `days` int(11) NOT NULL,
  `now` date DEFAULT NULL,
  `date_insc` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `exp_personne`
--

INSERT INTO `exp_personne` (`id_personne`, `nom`, `prenom`, `adresse`, `email`, `telephone`, `prix`, `img_m`, `days`, `now`, `date_insc`, `date_fin`) VALUES
(52, 'shaba', 'mohamed', 'kenitra', 'shaba123@gmail.com', 770223793, '100dh', 'unknown.png', 0, '2022-06-24', '2022-06-23', '2022-04-28'),
(61, 'out_date', 'youssef', 'souk el arbaa', 'youssef123@gmail.com', 770223793, '999dh', 'unknown.png', 0, '2022-06-24', '2022-06-23', '2022-04-29'),
(75, 'lyounsi', 'abdelah', 'kenitra', 'lyounsi@gmail.com', 770245364, '100dh', 'unknown.png', 0, '2022-06-24', '2022-06-23', '2022-04-28'),
(96, 'eddarif', 'adil', 'kenitra', 'adil123@gmail.com', 770223793, '100dh', 'unknown.png', 0, '2022-06-24', '2022-06-23', '2022-04-28');

-- --------------------------------------------------------

--
-- Structure de la table `insc_person`
--

CREATE TABLE `insc_person` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `prenom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `insc_person`
--

INSERT INTO `insc_person` (`id`, `name`, `birthdate`, `gender`, `email`, `phone`, `password`, `adress`, `prenom`) VALUES
(1, 'ejjebbari', '2022-12-31', 'Male', 'mohamedejjebbarri@gmail.com', '0770349079', '123456789', 'kenitra', 'bouktitia'),
(6, 'ana', '2022-12-31', 'Male', 'khalid123@gmail.com', '0770349079', '111111', 'kenitra', 'howa'),
(7, 'bouktitia hamza', '2022-12-31', 'Male', 'bouktitia.hamza@gmail.com', '0770223793', '000000', 'kenitra', 'bouktitia'),
(8, 'makoma', '2009-12-31', 'Male', 'makoka123@gmail.com', '0668537463', '00000', 'kenitra', 'mohamed'),
(9, 'tritahe', '2002-12-31', 'Male', 'KHALIDE@gmail.com', '0770040079', '123456', 'kenitra', 'khalide'),
(10, '', '0000-00-00', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `line_produit`
--

CREATE TABLE `line_produit` (
  `id_com` int(20) NOT NULL,
  `id_p` int(20) NOT NULL,
  `id_perssone` int(10) NOT NULL,
  `QTE_dmn` int(11) NOT NULL,
  `now_line` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `line_produit`
--

INSERT INTO `line_produit` (`id_com`, `id_p`, `id_perssone`, `QTE_dmn`, `now_line`) VALUES
(16, 87, 6, 2, '2022-06-24'),
(17, 88, 6, 1, '2022-06-24'),
(18, 91, 6, 1, '2022-06-24'),
(19, 94, 6, 5, '2022-06-24'),
(20, 87, 1, 1, '2022-06-24'),
(21, 92, 1, 1, '2022-06-24'),
(22, 99, 1, 5, '2022-06-24'),
(23, 91, 1, 2, '2022-06-24'),
(24, 92, 1, 1, '2022-06-24'),
(25, 99, 1, 1, '2022-06-24'),
(26, 99, 1, 2, '2022-06-24');

-- --------------------------------------------------------

--
-- Structure de la table `now`
--

CREATE TABLE `now` (
  `now` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `number_visit`
--

CREATE TABLE `number_visit` (
  `number` int(11) DEFAULT NULL,
  `msg` varchar(500) NOT NULL,
  `idsearch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `number_visit`
--

INSERT INTO `number_visit` (`number`, `msg`, `idsearch`) VALUES
(10, '', '$idsearch');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id_personne` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(11) NOT NULL,
  `date_fin` date NOT NULL,
  `prix` varchar(20) NOT NULL,
  `img_m` varchar(50) NOT NULL,
  `date_insc` date NOT NULL DEFAULT current_timestamp(),
  `now` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id_personne`, `nom`, `prenom`, `adresse`, `email`, `telephone`, `date_fin`, `prix`, `img_m`, `date_insc`, `now`) VALUES
(31, 'bouktitia', 'bouktitia', 'souk el arbaa', 'bouktitia', '770223793', '2022-06-30', '999dh', 'unknown.png', '2022-06-21', '2022-06-24'),
(66, 'ata', 'abdelah', 'kenitra', 'abdelah1234@gmail.com', '770223793', '2022-09-29', '100dh', 'unknown.png', '2022-06-24', '2022-06-24'),
(68, 'bouktitia', 'hamza', 'kenitra', 'bouktitia.hamza@gmail.com', '0770223793', '2022-06-30', '10000dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(69, 'okhadire', 'hamza', 'kenitra', 'okhadire.hamza@gmail.com', '0737890745', '2022-07-09', '100dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(71, 'bnitir', 'mohamed', 'kenitra', 'bnitir.mohamed@gmail.com', '0777777666', '2022-06-30', '100dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(72, 'elghiwane', 'mohamed', 'kenitra', 'moahmed234@gmail.com', '0770245364', '2022-08-25', '999dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(73, 'bouktitia', 'hamza', 'kenitra', 'bouktitia.hamza@gmail.com', '0663452903', '2022-07-09', '100dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(74, 'bouktitia', 'hamza', 'kenitra', 'bouktitia.hamza@gmail.com', '0663452903', '2022-07-09', '100dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(78, 'bouktitia', 'hamza', 'kenitra', 'bouktitia.hamza@gmail.com', '0770336798', '2022-10-10', '100dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(79, 'bouktitia', 'hamza', 'kenitra', 'bouktitia.hamza@gmail.com', '0770336798', '2022-10-10', '100dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(80, 'bouktitia', 'hamza', 'kenitra', 'bouktitia.hamza@gmail.com', '0770336798', '2022-10-10', '100dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(82, 'bouktitia', 'hamza', 'kenitra', 'bouktitia.hamza@gmail.com', '0770336798', '2022-10-10', '100dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(83, 'bouktitia', 'hamza', 'kenitra', 'bouktitia.hamza@gmail.com', '0770336798', '2022-10-10', '100dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(84, 'bouktitia', 'hamza', 'kenitra', 'bouktitia.hamza@gmail.com', '0770336798', '2022-10-10', '100dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(85, 'bouktitia', 'hamza', 'kenitra', 'bouktitia.hamza@gmail.com', '0770336798', '2022-10-10', '100dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(86, 'bouktitia', 'hamza', 'kenitra', 'bouktitia.hamza@gmail.com', '0770336798', '2022-10-10', '100dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(87, 'bouktitia', 'hamza', 'kenitra', 'bouktitia.hamza@gmail.com', '0770336798', '2022-10-10', '100dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(88, 'bouktitia', 'hamza', 'kenitra', 'bouktitia.hamza@gmail.com', '0770336798', '2022-10-10', '100dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(89, 'bouktitia', 'hamza', 'kenitra', 'bouktitia.hamza@gmail.com', '0770336798', '2022-10-10', '100dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(90, 'bouktitia', 'hamza', 'kenitra', 'bouktitia.hamza@gmail.com', '0770336798', '2022-10-10', '100dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(91, 'bouktitia', 'hamza', 'kenitra', 'bouktitia.hamza@gmail.com', '0770336798', '2022-10-10', '100dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(92, 'bouktitia', 'hamza', 'kenitra', 'bouktitia.hamza@gmail.com', '0770336798', '2022-10-10', '100dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(93, 'bouktitia', 'hamza', 'kenitra', 'bouktitia.hamza@gmail.com', '0770336798', '2022-10-10', '100dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(94, 'bouktitia', 'hamza', 'kenitra', 'bouktitia.hamza@gmail.com', '0770336798', '2022-10-10', '100dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(95, 'bouktitia', 'hamza', 'kenitra', 'bouktitia.hamza@gmail.com', '0770336798', '2022-10-10', '100dh', 'unknown.png', '2022-06-20', '2022-06-24'),
(97, 'bantahire', 'ismail', 'kenitra', 'ismail123@gmail.com', '0770223793', '2022-12-31', '100dh', 'mon.jpg', '2022-06-23', '2022-06-24');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `nom_p` varchar(40) NOT NULL,
  `prix_p` varchar(40) NOT NULL,
  `Qte` int(11) NOT NULL,
  `QTE_VEND` int(11) NOT NULL,
  `img_produit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom_p`, `prix_p`, `Qte`, `QTE_VEND`, `img_produit`) VALUES
(87, 'MASS', '9999dh', 8, 2, 'WHEY.jpeg'),
(88, 'MASS', '100dh', 10, 1, 'WhatsApp Image 2022-06-02 at 1.39.09 PM.jpeg'),
(89, 'MASS', '199DH', 11, 1, 'WhatsApp Image 2022-06-02 at 1.39.21 PM.jpeg'),
(90, 'KARBE', '130DH', 0, 11, 'WhatsApp Image 2022-06-02 at 1.39.33 PM.jpeg'),
(91, 'hight mass', '120DH', 10, 1, 'WhatsApp Image 2022-06-02 at 1.39.47 PM.jpeg'),
(92, 'ENERGY', '99dh', 1, 0, 'WhatsApp Image 2022-06-02 at 1.40.09 PM.jpeg'),
(93, 'MASS', '8888dh', 10, 1, 'WhatsApp Image 2022-06-02 at 1.40.21 PM.jpeg'),
(94, 'MASS 5KG', '999dh', 11, 10, 'WHEY.jpeg'),
(96, 'MASS', '1000000dh', 10, 1, 'WhatsApp Image 2022-06-02 at 1.40.21 PM.jpeg'),
(97, 'MASS', '100dh', 10, 1, 'WhatsApp Image 2022-06-02 at 1.39.09 PM.jpeg'),
(99, 'MASS', '1000000dh', 10, 1, 'WHEY.jpeg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `entreneur`
--
ALTER TABLE `entreneur`
  ADD PRIMARY KEY (`id_ent`);

--
-- Index pour la table `exp_personne`
--
ALTER TABLE `exp_personne`
  ADD PRIMARY KEY (`id_personne`);

--
-- Index pour la table `insc_person`
--
ALTER TABLE `insc_person`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `line_produit`
--
ALTER TABLE `line_produit`
  ADD PRIMARY KEY (`id_com`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id_personne`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `entreneur`
--
ALTER TABLE `entreneur`
  MODIFY `id_ent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `exp_personne`
--
ALTER TABLE `exp_personne`
  MODIFY `id_personne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT pour la table `insc_person`
--
ALTER TABLE `insc_person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `line_produit`
--
ALTER TABLE `line_produit`
  MODIFY `id_com` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id_personne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
