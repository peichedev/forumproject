-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 15 jan. 2021 à 16:32
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `catg_art`
--

CREATE TABLE `catg_art` (
  `id_catg_art` int(11) NOT NULL,
  `id_discution` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `discutions`
--

CREATE TABLE `discutions` (
  `id_discutions` int(11) NOT NULL,
  `catégories` varchar(30) NOT NULL,
  `contenu` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_user` int(11) NOT NULL,
  `id_cat_art` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `discutions`
--

INSERT INTO `discutions` (`id_discutions`, `catégories`, `contenu`, `date`, `id_user`, `id_cat_art`) VALUES
(0, 'a', 'aa', '2021-01-15 14:49:13', 10, 0),
(0, 'zezr', 'aerfg', '2021-01-15 15:20:53', 12, 0),
(1, 'zert', 'zertyu', '2021-01-15 15:22:17', 12, 2),
(2, 'zerty', 'zerty', '2021-01-15 15:27:36', 12, 3);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_discution` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id_message`, `message`, `date`, `id_discution`) VALUES
(0, 'fvg fezfe', '2021-01-15 14:53:40', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `email` char(255) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `nom`, `Prenom`, `email`, `pseudo`, `mdp`) VALUES
(12, 'ezr', 'a', 'ez', 'azerte', 'azer');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `catg_art`
--
ALTER TABLE `catg_art`
  ADD KEY `id_catg_art` (`id_catg_art`,`id_discution`);

--
-- Index pour la table `discutions`
--
ALTER TABLE `discutions`
  ADD KEY `id_discutions` (`id_discutions`,`id_user`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_cat_art` (`id_cat_art`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD KEY `id_message` (`id_message`,`id_discution`),
  ADD KEY `id_discution` (`id_discution`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `id_users` (`id_users`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `discutions`
--
ALTER TABLE `discutions`
  ADD CONSTRAINT `discutions_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`id_discution`) REFERENCES `discutions` (`id_discutions`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
