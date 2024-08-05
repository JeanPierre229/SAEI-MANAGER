-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 10 juil. 2024 à 20:10
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `saei-manager`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `nomContact` varchar(500) NOT NULL,
  `sujetContact` varchar(500) NOT NULL,
  `mailContact` varchar(500) NOT NULL,
  `messageContact` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact_us`
--

INSERT INTO `contact_us` (`id`, `nomContact`, `sujetContact`, `mailContact`, `messageContact`) VALUES
(1, 'Jean', 'Prise de Contact', 'akpovobarachie@gmail.com', 'Ceci est un test'),
(2, 'John', 'Salutation', 'jeanpierrehoundealo03@gmail.com', 'CC cc'),
(3, 'John12', 'Salutation g&eacute;n&eacute;rale', 'jeanpierrehoundealo03@gmail.com', 'Cc, c\'est un test❤️🙌'),
(4, 'Jean235', 'Jugo229', 'jeanpierrehoundealo03@gmail.com', 'CC, Je veux supprimer des bugs dans les &eacute;l&eacute;ments ❤️🙌'),
(5, 'Salomon', 'Questions', 'salomonagounmalo@gmail.com', 'Comment se fait l\'incubation avec SAEI-MANAGER ?'),
(6, 'Jean', 'Prise de Contact', 'john@gmail.com', 'test, JKkj');

-- --------------------------------------------------------

--
-- Structure de la table `dossier_financier`
--

CREATE TABLE `dossier_financier` (
  `id` int(11) NOT NULL,
  `nomDossier` varchar(500) NOT NULL,
  `categorieDossier` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `dateDossier` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `dossier_financier`
--

INSERT INTO `dossier_financier` (`id`, `nomDossier`, `categorieDossier`, `description`, `dateDossier`) VALUES
(1, 'Demande de financement', 'Sport', '<ul><li><h2>Test de Montage de dossier</h2></li></ul><p>&nbsp;</p><p><i><strong>C\'est toujours un test Bro</strong></i></p>', '30 juin 2024'),
(2, 'Dossier de financement', 'Sport', '<h2>C\'est un dossier</h2>', ' 5 juillet 2024');

-- --------------------------------------------------------

--
-- Structure de la table `equipier`
--

CREATE TABLE `equipier` (
  `id` int(11) NOT NULL,
  `nomEquipier` varchar(500) NOT NULL,
  `prenomEquipier` varchar(500) NOT NULL,
  `adresseEquipier` varchar(500) NOT NULL,
  `domaine` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `equipier`
--

INSERT INTO `equipier` (`id`, `nomEquipier`, `prenomEquipier`, `adresseEquipier`, `domaine`) VALUES
(25, 'AGOUNMALO', 'Salomon', 'Parakou, Baka', 'Numérique'),
(26, 'HOUNDEALO', 'Jean Pierre', 'Parakou, Banikanni', 'Sport'),
(27, 'NKOUNOU', 'Fortune', 'Parakou, Arafat', 'Audio-Visuel'),
(28, 'AKPOVO', 'Nicanor', 'Parakou, Tibona', 'Culture'),
(36, 'NOUGBODE', 'Onice', 'Parakou, Arafat', 'Numérique'),
(37, 'HOUESSOU', 'Maurice', 'Parakou, Arafat', 'Numérique'),
(38, 'HOUNTON', 'Amos', 'Parakou, Arafat', 'Numérique');

-- --------------------------------------------------------

--
-- Structure de la table `planification`
--

CREATE TABLE `planification` (
  `id` int(11) NOT NULL,
  `nomProgram` varchar(500) NOT NULL,
  `dossier` varchar(500) NOT NULL,
  `dateMOeuvre` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `planification`
--

INSERT INTO `planification` (`id`, `nomProgram`, `dossier`, `dateMOeuvre`) VALUES
(7, 'Enabel Projects', 'Demande de financement', '25 juillet 2024');

-- --------------------------------------------------------

--
-- Structure de la table `program_elaborer`
--

CREATE TABLE `program_elaborer` (
  `id` int(11) NOT NULL,
  `titre` varchar(500) NOT NULL,
  `categorie` varchar(500) NOT NULL,
  `program` text NOT NULL,
  `nom_doc` varchar(500) NOT NULL,
  `dateProgram` varchar(200) NOT NULL,
  `type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `program_elaborer`
--

INSERT INTO `program_elaborer` (`id`, `titre`, `categorie`, `program`, `nom_doc`, `dateProgram`, `type`) VALUES
(11, 'Enabel Projects', 'Numérique', '<h2>ENABEL PROJECTS</h2><p>&nbsp;</p><p>Salut et bienvenu dans cette description…&nbsp;</p><p>&nbsp;</p><p>Ceci n\'est qu\'un <i>test </i><strong>bla bla bla bla bla…</strong></p>', 'Enabel Projects.pdf', '27 juin 2024', 'vierge'),
(12, 'Sport Projects', 'Sport', '<h2>ENABEL PROJECTS</h2><p>&nbsp;</p><p>Salut et bienvenu dans cette description…&nbsp;</p><p>&nbsp;</p><p>Ceci n\'est qu\'un <i>test </i><strong>bla bla bla bla bla…</strong></p>', 'Sport Projects.pdf', '27 juin 2024', 'vierge'),
(13, 'Art Projects', 'Art', '<h2>ENABEL PROJECTS</h2><p>&nbsp;</p><p>Salut et bienvenu dans cette description…&nbsp;</p><p>&nbsp;</p><p>Ceci n\'est qu\'un <i>test </i><strong>bla bla bla bla bla…</strong></p>', 'Art Projects.pdf', '27 juin 2024', 'vierge'),
(16, 'JPlearn', 'Numérique', '<h2>BIENVENU SUR JPlearn, 💕</h2><p>La plateforme qui vous offre les meilleurs formations et &nbsp;un&nbsp;</p><p>chemin tout tracé sur les démarches <strong>à suivre</strong>.</p><p><i>Rejoignez-nous dès maintenant</i></p>', 'JPlearn.pdf', '27 juin 2024', 'modele'),
(17, 'Football Programme', 'Sport', '<h3>Bonjour le <i>Football</i></h3><p>&nbsp;</p><p><strong>Je suis juste un éssai</strong></p>', 'Football Programme.pdf', '27 juin 2024', 'vierge'),
(18, 'Les stéréotypes béninois', 'Culture', '<h3>STEREOTYPE AU BENIN🙅⛔❌</h3><blockquote><p>Les stéréotypes sont un sujets assez intéressant au bénin.</p></blockquote><p>Commençons par celui concernant les <strong>femmes</strong>. Selon certains <strong>leur place est à la maison.</strong></p><p>&nbsp;</p><p>Un programme serait essentiel pour sensibliser blabla blabla…</p>', 'Les stéréotypes béninois.pdf', '27 juin 2024', 'vierge'),
(19, 'Test d\'importation', 'Sport', '', 'document.pdf', '30 juin 2024', 'import'),
(20, 'Un autre test', 'Audio-Visuel', '<h2>LE TEST CONTINUE&nbsp;</h2><p>&nbsp;</p><p><strong>Bla bla bla bla bla bla&nbsp;</strong></p><p>&nbsp;</p><p>&nbsp;</p><p><i>C\'est du test🤣</i></p>', 'Un autre test.pdf', '30 juin 2024', 'vierge'),
(21, 'Test Modèle', 'Art', '<h2>Test🥳❤️🙌</h2>', 'Test Modèle.pdf', '30 juin 2024', 'modele'),
(22, 'Test_Program', 'Audio-Visuel', '<p>Test !!!!</p>', 'Test_Program.pdf', ' 5 juillet 2024', 'vierge'),
(23, 'Test_Program122', 'Culture', '<p>TEST EFFECTUE</p>', 'Test_Program122.pdf', ' 5 juillet 2024', 'vierge');

-- --------------------------------------------------------

--
-- Structure de la table `users_saei`
--

CREATE TABLE `users_saei` (
  `id` int(11) NOT NULL,
  `nomStructure` varchar(500) NOT NULL,
  `typeStructure` varchar(500) NOT NULL,
  `pays` varchar(500) NOT NULL,
  `ville` varchar(500) NOT NULL,
  `adresse` varchar(500) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `site` varchar(500) NOT NULL,
  `phaseAccompagnement` varchar(500) NOT NULL,
  `anneeActivite` varchar(500) NOT NULL,
  `program` varchar(500) NOT NULL,
  `cohortes` varchar(500) NOT NULL,
  `coach` varchar(500) NOT NULL,
  `learn` varchar(500) NOT NULL,
  `cle` int(11) NOT NULL,
  `mail` varchar(500) NOT NULL,
  `motDePasse` varchar(500) NOT NULL,
  `nombreEquipier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users_saei`
--

INSERT INTO `users_saei` (`id`, `nomStructure`, `typeStructure`, `pays`, `ville`, `adresse`, `contact`, `site`, `phaseAccompagnement`, `anneeActivite`, `program`, `cohortes`, `coach`, `learn`, `cle`, `mail`, `motDePasse`, `nombreEquipier`) VALUES
(26, 'Etri Labs', 'Fab Labs', 'Benin', 'Cotonou', 'Cotonou, Rue 256 2&egrave;me Avenue', '+229 55792288', 'waxangarilabs.org', 'Phase de pr&eacute;-incubation', 'moins de 5 ans', 'program', 'cohortes', 'coach', 'learn', 836109, 'agounmalosenousalomon@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 10),
(27, 'Waxangari L@bs', 'Hub d\'Innovation', 'Benin', 'Parakou', 'Banikanni, Parakou Rue 231', '+229 55792288', 'waxangarilabs.org', 'Phase de pr&eacute;-incubation', 'entre 10 et 15 ans', 'program', 'cohortes', 'coach', 'learn', 713179, 'jeanpierrehoundealo03@gmail.com', '77a99ae8096a7c293ae5e7fcb8d9ab23e4710923', 7),
(32, 'Waxangari L@bs', 'Hub d\'Innovation', 'Benin', 'Parakou', 'Banikanni, Parakou Rue 231', '+229 55792288', 'waxangarilabs.org', 'Phase de pr&eacute;-incubation', 'moins de 5 ans', '', 'cohortes', '', 'learn', 851093, 'dodohoundealo@gmail.com', 'ac1ab23d6288711be64a25bf13432baf1e60b2bd', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dossier_financier`
--
ALTER TABLE `dossier_financier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `equipier`
--
ALTER TABLE `equipier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `planification`
--
ALTER TABLE `planification`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `program_elaborer`
--
ALTER TABLE `program_elaborer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users_saei`
--
ALTER TABLE `users_saei`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `dossier_financier`
--
ALTER TABLE `dossier_financier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `equipier`
--
ALTER TABLE `equipier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `planification`
--
ALTER TABLE `planification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `program_elaborer`
--
ALTER TABLE `program_elaborer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `users_saei`
--
ALTER TABLE `users_saei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
