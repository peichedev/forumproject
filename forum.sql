

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `catg_art` (
  `id_catg_art` int(11) NOT NULL,
  `id_discution` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `discutions` (
  `id_discutions` int(11) NOT NULL,
  `catégories` varchar(30) NOT NULL,
  `contenu` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_user` int(11) NOT NULL,
  `id_cat_art` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `discutions` (`id_discutions`, `catégories`, `contenu`, `date`, `id_user`, `id_cat_art`) VALUES
(0, 'a', 'aa', '2021-01-15 14:49:13', 10, 0),
(0, 'zezr', 'aerfg', '2021-01-15 15:20:53', 12, 0),
(1, 'zert', 'zertyu', '2021-01-15 15:22:17', 12, 2),
(2, 'zerty', 'zerty', '2021-01-15 15:27:36', 12, 3);


CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_discution` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `message` (`id_message`, `message`, `date`, `id_discution`) VALUES
(0, 'fvg fezfe', '2021-01-15 14:53:40', 0);


CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `email` char(255) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `users` (`id_users`, `nom`, `Prenom`, `email`, `pseudo`, `mdp`) VALUES
(12, 'ezr', 'a', 'ez', 'azerte', 'azer');

ALTER TABLE `catg_art`
  ADD KEY `id_catg_art` (`id_catg_art`,`id_discution`);

ALTER TABLE `discutions`
  ADD KEY `id_discutions` (`id_discutions`,`id_user`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_cat_art` (`id_cat_art`);

ALTER TABLE `message`
  ADD KEY `id_message` (`id_message`,`id_discution`),
  ADD KEY `id_discution` (`id_discution`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `id_users` (`id_users`);

ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;


ALTER TABLE `discutions`
  ADD CONSTRAINT `discutions_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`id_discution`) REFERENCES `discutions` (`id_discutions`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
