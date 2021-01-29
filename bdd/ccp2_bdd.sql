-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 28 jan. 2021 à 07:32
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ccp2`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `options_id` int(11) DEFAULT NULL,
  `genres_id` int(11) DEFAULT NULL,
  `categories_id` int(11) DEFAULT NULL,
  `forme_id` int(11) DEFAULT NULL,
  `couleurs_id` int(11) DEFAULT NULL,
  `marques_id` int(11) DEFAULT NULL,
  `matieres_id` int(11) DEFAULT NULL,
  `denomination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `disponibilite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `options_id`, `genres_id`, `categories_id`, `forme_id`, `couleurs_id`, `marques_id`, `matieres_id`, `denomination`, `description`, `prix`, `disponibilite`, `image`, `updated_at`) VALUES
(1, 3, 3, 1, 3, 3, 3, 4, 'Blue Ocean', 'Lunettes de soleil', 9, 'oui', '02-6007e545dca4c284612410.jpg', '2021-01-20 08:09:41'),
(2, 1, 2, 1, 1, 1, 3, 1, 'Ruby Lava', 'Paire de lunettes Rouge', 19, 'oui', 'background3-600e86a5da8ff806222540.jpg', '2021-01-25 08:51:49'),
(3, 1, 2, 1, 1, 4, 3, 1, 'White Fly', 'Paire de lunettes Blanche', 29, 'oui', 'lunettes-femme-1-600e8c4b0d4af453548872.jpg', '2021-01-25 09:15:55'),
(4, 1, 1, 1, 1, 5, 1, 3, 'Sapé Comme Jamais', 'Loulou et Boutin, Coco na Chanel', 99, 'oui', 'lunettes-homme-3-600e90251d557081016795.jpg', '2021-01-25 09:32:21'),
(5, 1, 1, 1, 3, 5, 4, 1, 'Gargoyles ANSI Classics', '\"Je veux tes vêtements, tes bottes et ta moto.\"\r\nRésistent aux voyages temporels', 99, 'oui', 'lunettes-homme-4-60111c19b4909923693499.jpg', '2021-01-27 07:54:01');

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sous_titre` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `texte` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id`, `titre`, `sous_titre`, `texte`, `image`, `updated_at`) VALUES
(1, 'Ceci est un titre', 'et ici un sous-titre', '<p>eo arcu<strong> quis arcu. Ve</strong>stibulum <span style=\"background-color:#2980b9\">gravida nec sem eu fe</span>ugiat. Integer vitae lacinia <span style=\"color:#27ae60\">magna. Curabitur v</span>iverra, arcu nec suscipit consectetur, metus leo feugiat sem, eu consequat mauris est sed ligula. Suspendisse pellentesque varius lorem, in placerat arcu aliquam quis. Nullam eros mi, tempor sed pulvinar mollis, porttitor in odio. <em>Quisque sce</em>lerisque mi nec ex consequat tempor ac sed lor<u>em. Duis vestibulu</u>m accumsan ex, vitae tempor est consectetur quis. Sed tincidunt, eros in iaculis laoreet, augue tellus tincidunt lacus, non commodo ante nibh nec ex. Maecenas facilisis facilisis quam, at porttitor mi tempor eget.</p>', 'background150-600e7c2d275ef285640838.jpg', '2021-01-25 08:07:09');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `categorie`) VALUES
(1, 'Lunettes'),
(2, 'Ceintures'),
(3, 'Accessoires');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_postal` int(11) NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `livraison_id` int(11) DEFAULT NULL,
  `date_commande` date NOT NULL,
  `frais_livraison` int(11) NOT NULL,
  `prix_total` int(11) NOT NULL,
  `type_paiement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contact_front`
--

CREATE TABLE `contact_front` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `couleurs`
--

CREATE TABLE `couleurs` (
  `id` int(11) NOT NULL,
  `couleur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `couleurs`
--

INSERT INTO `couleurs` (`id`, `couleur`) VALUES
(1, 'Rouge'),
(2, 'Vert'),
(3, 'Bleu'),
(4, 'Blanc'),
(5, 'Noir'),
(6, 'Marron');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210120074738', '2021-01-20 07:47:45', 1516),
('DoctrineMigrations\\Version20210120092752', '2021-01-20 09:28:04', 42),
('DoctrineMigrations\\Version20210120093519', '2021-01-20 09:35:34', 34),
('DoctrineMigrations\\Version20210120135907', '2021-01-20 13:59:19', 52),
('DoctrineMigrations\\Version20210120140123', '2021-01-20 14:01:28', 26),
('DoctrineMigrations\\Version20210120141913', '2021-01-20 14:19:24', 88),
('DoctrineMigrations\\Version20210121131905', '2021-01-25 07:41:12', 42),
('DoctrineMigrations\\Version20210121135845', '2021-01-25 07:41:12', 9),
('DoctrineMigrations\\Version20210125074052', '2021-01-25 07:42:18', 38),
('DoctrineMigrations\\Version20210127082052', '2021-01-27 08:21:08', 60),
('DoctrineMigrations\\Version20210127083318', '2021-01-27 08:33:34', 26),
('DoctrineMigrations\\Version20210127092723', '2021-01-27 09:27:37', 53),
('DoctrineMigrations\\Version20210127093707', '2021-01-27 09:37:20', 25),
('DoctrineMigrations\\Version20210127102543', '2021-01-27 10:25:53', 24),
('DoctrineMigrations\\Version20210127104122', '2021-01-27 10:42:40', 25),
('DoctrineMigrations\\Version20210127123730', '2021-01-27 12:37:37', 39);

-- --------------------------------------------------------

--
-- Structure de la table `forme`
--

CREATE TABLE `forme` (
  `id` int(11) NOT NULL,
  `formes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `forme`
--

INSERT INTO `forme` (`id`, `formes`) VALUES
(1, 'Ovale'),
(2, 'Ronde'),
(3, 'Rectangulaire');

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `genres`
--

INSERT INTO `genres` (`id`, `genre`) VALUES
(1, 'Homme'),
(2, 'Femme'),
(3, 'Mixte');

-- --------------------------------------------------------

--
-- Structure de la table `help_front`
--

CREATE TABLE `help_front` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sous_titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE `ligne_commande` (
  `id` int(11) NOT NULL,
  `relation_id` int(11) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `quantite` int(11) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE `livraison` (
  `id` int(11) NOT NULL,
  `adresse_livraison` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_postal` int(11) NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `main`
--

CREATE TABLE `main` (
  `id` int(11) NOT NULL,
  `explore` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visuel_intro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `women_visuel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `men_visuel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `main_admin`
--

CREATE TABLE `main_admin` (
  `id` int(11) NOT NULL,
  `title_shop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle_shop` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle_ex` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `main_admin`
--

INSERT INTO `main_admin` (`id`, `title_shop`, `subtitle_shop`, `title_ex`, `subtitle_ex`, `image`, `updated_at`) VALUES
(2, 'Notre boutique', 'Découvrez notre sélection de paires de lunettes', 'Des lunettes pour tout le monde', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum viverra commodo. Pellentesque vehicula turpis et tincidunt convallis. Praesent risus libero', '01-601144020a4ac126594981.jpg', '2021-01-27 10:44:17');

-- --------------------------------------------------------

--
-- Structure de la table `main_features`
--

CREATE TABLE `main_features` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_feature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `main_features`
--

INSERT INTO `main_features` (`id`, `image`, `title_feature`, `updated_at`) VALUES
(1, 'background150-60116d64b878d147324871.jpg', 'Nouveau Feature', '2021-01-27 13:40:52'),
(2, 'background2-60116ef54cb2c290984594.jpg', 'Un autre Feature', '2021-01-27 13:47:33');

-- --------------------------------------------------------

--
-- Structure de la table `marques`
--

CREATE TABLE `marques` (
  `id` int(11) NOT NULL,
  `marque` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `marques`
--

INSERT INTO `marques` (`id`, `marque`) VALUES
(1, 'Gucci'),
(2, 'RayBan'),
(3, 'Dior'),
(4, 'Gargoyles');

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE `matieres` (
  `id` int(11) NOT NULL,
  `matiere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `matieres`
--

INSERT INTO `matieres` (`id`, `matiere`) VALUES
(1, 'Plastique'),
(2, 'Bois'),
(3, 'Metal'),
(4, 'Titane');

-- --------------------------------------------------------

--
-- Structure de la table `men`
--

CREATE TABLE `men` (
  `id` int(11) NOT NULL,
  `title_shop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle_shop` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ex` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ex` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `men`
--

INSERT INTO `men` (`id`, `title_shop`, `subtitle_shop`, `title_ex`, `text_ex`, `image`, `updated_at`) VALUES
(1, 'Boutique Homme', 'Découvrez notre sélection de paires de lunettes Homme', 'Des lunettes pour tous les hommes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum viverra commodo. Pellentesque vehicula turpis et tincidunt convallis. Praesent risus libero', 'lunettes-homme-resize-6011350e6a604564909941.jpg', '2021-01-27 09:40:30');

-- --------------------------------------------------------

--
-- Structure de la table `men_front`
--

CREATE TABLE `men_front` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `option`
--

CREATE TABLE `option` (
  `id` int(11) NOT NULL,
  `options` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `option`
--

INSERT INTO `option` (`id`, `options`) VALUES
(1, 'Verres polarisant'),
(2, 'Verres avec correction'),
(3, 'Traitement anti-reflet');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`) VALUES
(1, 'havez.maxime@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$dd8OBzIpXXjTWvx86vqrnOpW94arO2Np6dJrFnwDcLY6Ph6.MFa0u');

-- --------------------------------------------------------

--
-- Structure de la table `women`
--

CREATE TABLE `women` (
  `id` int(11) NOT NULL,
  `title_shop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle_shop` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ex` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `women`
--

INSERT INTO `women` (`id`, `title_shop`, `subtitle_shop`, `title_ex`, `text_ex`, `image`, `updated_at`) VALUES
(1, 'Boutique Femme', 'Un large choix de paires de lunettes femme pour tous les goûts', 'Des lunettes pour toutes les femmes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum viverra commodo. Pellentesque vehicula turpis et tincidunt convallis. Praesent risus libero', 'lunettes-femme-3-resize-60112ebae6381498670467.jpg', '2021-01-27 09:13:30');

-- --------------------------------------------------------

--
-- Structure de la table `women_front`
--

CREATE TABLE `women_front` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_23A0E663ADB05F1` (`options_id`),
  ADD KEY `IDX_23A0E666A3B2603` (`genres_id`),
  ADD KEY `IDX_23A0E66A21214B7` (`categories_id`),
  ADD KEY `IDX_23A0E66BCE84E7C` (`forme_id`),
  ADD KEY `IDX_23A0E665ED47289` (`couleurs_id`),
  ADD KEY `IDX_23A0E66C256483C` (`marques_id`),
  ADD KEY `IDX_23A0E6682350831` (`matieres_id`);

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6EEAA67D19EB6921` (`client_id`),
  ADD KEY `IDX_6EEAA67D8E54FB25` (`livraison_id`);

--
-- Index pour la table `contact_front`
--
ALTER TABLE `contact_front`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `couleurs`
--
ALTER TABLE `couleurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `forme`
--
ALTER TABLE `forme`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `help_front`
--
ALTER TABLE `help_front`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3170B74B3256915B` (`relation_id`),
  ADD KEY `IDX_3170B74B7294869C` (`article_id`);

--
-- Index pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `main_admin`
--
ALTER TABLE `main_admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `main_features`
--
ALTER TABLE `main_features`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `marques`
--
ALTER TABLE `marques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `men`
--
ALTER TABLE `men`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `men_front`
--
ALTER TABLE `men_front`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `option`
--
ALTER TABLE `option`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- Index pour la table `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `women_front`
--
ALTER TABLE `women_front`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contact_front`
--
ALTER TABLE `contact_front`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `couleurs`
--
ALTER TABLE `couleurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `forme`
--
ALTER TABLE `forme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `help_front`
--
ALTER TABLE `help_front`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `livraison`
--
ALTER TABLE `livraison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `main`
--
ALTER TABLE `main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `main_admin`
--
ALTER TABLE `main_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `main_features`
--
ALTER TABLE `main_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `marques`
--
ALTER TABLE `marques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `matieres`
--
ALTER TABLE `matieres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `men`
--
ALTER TABLE `men`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `men_front`
--
ALTER TABLE `men_front`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `option`
--
ALTER TABLE `option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `women`
--
ALTER TABLE `women`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `women_front`
--
ALTER TABLE `women_front`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E663ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `option` (`id`),
  ADD CONSTRAINT `FK_23A0E665ED47289` FOREIGN KEY (`couleurs_id`) REFERENCES `couleurs` (`id`),
  ADD CONSTRAINT `FK_23A0E666A3B2603` FOREIGN KEY (`genres_id`) REFERENCES `genres` (`id`),
  ADD CONSTRAINT `FK_23A0E6682350831` FOREIGN KEY (`matieres_id`) REFERENCES `matieres` (`id`),
  ADD CONSTRAINT `FK_23A0E66A21214B7` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `FK_23A0E66BCE84E7C` FOREIGN KEY (`forme_id`) REFERENCES `forme` (`id`),
  ADD CONSTRAINT `FK_23A0E66C256483C` FOREIGN KEY (`marques_id`) REFERENCES `marques` (`id`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_6EEAA67D19EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_6EEAA67D8E54FB25` FOREIGN KEY (`livraison_id`) REFERENCES `livraison` (`id`);

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `FK_3170B74B3256915B` FOREIGN KEY (`relation_id`) REFERENCES `commande` (`id`),
  ADD CONSTRAINT `FK_3170B74B7294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
