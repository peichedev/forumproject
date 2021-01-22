-- Base de données : `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `cat_discution`
--

CREATE TABLE `cat_discution` (
  `categorie` varchar(11) NOT NULL,
  `id_discution` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `discutions`
--

CREATE TABLE `discutions` (
  `id` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_discution` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `message`, `date`, `id_discution`) VALUES
(1, 'fvg fezfe', '2021-01-15 13:53:40', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `pseudo`, `mdp`) VALUES
(12, 'ez', 'azerte', 'azer'),
(13, '', 'alan', 'alan');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `discutions`
--
ALTER TABLE `discutions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_discutions` (`id`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_message` (`id`,`id_discution`),
  ADD KEY `id_discution` (`id_discution`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `discutions`
--
ALTER TABLE `discutions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `discutions`
--
ALTER TABLE `discutions`
  ADD CONSTRAINT `discutions_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `discutions_ibfk_2` FOREIGN KEY (`id`) REFERENCES `cat_discution` (`id_discution`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;